<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BlogController extends Controller
{
    protected $blog, $category;
    public function __construct(Blog $blog, Category $category)
    {
        $this->blog = $blog;
        $this->category = $category;
    }
    public function index(Request $request)
    {
        $category = $request->category ? $request->category : null;
        $categories = $this->category->latest()->get();
        $checkCategory = $this->category->where('slug', $category)->first();
        $data = [];

        if (!empty($checkCategory)) {
            $blogs = $this->blog->with('users')->withWhereHas(
                'categories',
                fn ($query) =>
                $query->where('type', Category::TYPE['BLOG'])->where('slug', $category)
            )->orderBy('blogs.created_at', 'DESC')->paginate(9)->setPath(route('blog', [
                'category' => $category
            ]));

            foreach ($blogs as $key => $value) {
                if (file_exists(storage_path('app/public/' . $value->thumbnail))) {
                    $value->thumbnail = 'storage/' . $value->thumbnail;
                } else {
                    $value->thumbnail = 'https://hachinet.com/assets/img/service/rectangle39-java.png';
                }
            }
            $data = $blogs;
        } else {
            $blogs = $this->blog->with('users', 'categories')->get()->sortByDesc('categories.name')->groupBy('category_id');
            foreach ($blogs as $key) {
                foreach ($key as $value) {
                    if (file_exists(storage_path('app/public/' . $value->thumbnail))) {
                        $value->thumbnail = 'storage/' . $value->thumbnail;
                    } else {
                        $value->thumbnail = 'https://hachinet.com/assets/img/service/rectangle39-java.png';
                    }
                }
            }
            if (count($blogs) > 0) {
                foreach ($blogs as $each) {
                    $data[] = $each->sortByDesc('created_at')->slice(0, 9)->values()->all();
                }
            }
            // dd($data);
        }


        return view('blog', [
            'categories' => $categories,
            'blogs' => $data,
            'checkCategory' => $checkCategory
        ]);
    }
    public function show($slug)
    {
        try {
            $categories = $this->category->where('type', Category::TYPE['BLOG'])->latest()->get();
            $blog = $this->blog->with('users')->where('slug', $slug)->firstOrFail();
            //đếm lượt xem blog
            if (Cookie::has('blog' . $blog->id) == false) {
                $blog->viewer += 1;
                $blog->save();
                Cookie::queue(Cookie::make('blog' . $blog->id, $blog->id, 0.5));
            }
            if (file_exists(storage_path('app/public/' . $blog->thumbnail))) {
                $blog->thumbnail = 'storage/' . $blog->thumbnail;
            } else {
                $blog->thumbnail = 'https://hachinet.com/assets/img/service/rectangle39-java.png';
            }
            $blog->tag = explode(',', $blog->tag);

            $blogRelated = $this->blog->where('category_id', $blog->category_id)->latest()->limit(4)->get();
            return view('blog-details', [
                'categories' => $categories,
                'blog' => $blog,
                'blogRelated' => $blogRelated
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('home');
        }
    }
}
