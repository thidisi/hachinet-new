<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Image;

class BlogController extends Controller
{
    protected $blog;
    protected $category;
    public function __construct(Blog $blog, Category $category)
    {
        $this->category = $category;
        $this->blog = $blog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->category->where('type', $this->category::TYPE['BLOG'])->get();
        return view('admin.blogs.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('thumbnail')) {
                $images = $request->file('thumbnail');
                $interventionImage = Image::make($images)->stream("webp", 100);
                $filename = uniqid(rand()) . '.webp';
                $updateImg = Storage::disk('public')->put('imageblogs/' . $filename, $interventionImage);
                if ($updateImg) {
                    $data['thumbnail'] = 'imageblogs/'  . $filename;
                }
                $blogs = $this->blog->create($data);
                return redirect()->route('admin.blogs.index')->with('success', 'Thêm bài viết thành công!');
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $blog = $this->blog->with('categories')->findOrFail($id);
            return response()->json($blog);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $data = $this->category->where('type', $this->category::TYPE['BLOG'])->get();
            $blog = $this->blog->findOrFail($id);
            return view('admin.blogs.edit', compact('blog', 'data'));
        } catch (\Throwable $th) {
            return redirect()->route('admin.blogs.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $blog = $this->blog->findOrFail($id);

            if ($request->hasFile('thumbnail')) {
                $images = $data['thumbnail'];
                if ($blog->thumbnail != null) {
                    // dd(Storage::disk('public')->exists($blog->thumbnail));
                    if (Storage::disk('public')->exists($blog->thumbnail)) {
                        Storage::disk('public')->delete($blog->thumbnail);
                    }
                }
                $interventionImage = Image::make($images)->stream("webp", 100);
                $filename = uniqid(rand()) . '.webp';
                $updateImg = Storage::disk('public')->put('imageblogs/' . $filename, $interventionImage);
                if ($updateImg) {
                    $path = 'imageblogs/'  . $filename;
                }
                // $path = Storage::disk('public')->put('imageblogs', $images);
            } else {
                $path = $blog->thumbnail;
            }
            $data['thumbnail'] = $path;
            // $blog->slug = null;
            $blog->update($data);
            return redirect()->route('admin.blogs.index')->with('success', 'Sửa bài viết thành công!');
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $blog = $this->blog->findOrFail($id);
            $blog->delete();
            return response()->json(['mess' => 'Xóa bài viết thành công!']);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }

    public function list_blog(Request $request)
    {
        // return response()->json($this->blog::latest()->where('status', $this->blog::STATUS['ACTIVE'])->get());
        if ($request->ajax()) {
            $data = $this->blog::with('categories')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    // $actionBtn = '<img src="'.asset('storage/'.$row->thumbnail).'" width="100px">  -  '.$row->title.'';
                    $actionBtn = '<div class="d-flex">
                        <img src="' . asset('storage/' . $row->thumbnail) . '" width="100px"><div class="ml-3">' . $row->title . '</div></div>';
                    return $actionBtn;
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == $this->blog::STATUS['ACTIVE']) {
                        $actionBtn = '
                        <i class="fa fa-circle" style="color: green;"></i> Hiển thị';
                    } else {
                        $actionBtn = '<i class="fa fa-circle" style="color: red;"></i> Ẩn';
                    }
                    return $actionBtn;
                })
                ->addColumn('user', function ($row) {
                    $actionBtn = $row->users->name;
                    return $actionBtn;
                })
                ->addColumn('action', function ($row) {
                    $url = route('admin.blogs.destroy', $row->id);
                    $actionBtn = '<div class="form-button-action">
                    <a href="' . route('admin.blogs.edit', $row->id) . '" class="btn btn-link btn-primary btn-lg"
                        title="Edit Task">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button type="button" title="Remove" data-route="' . $url . '"
                        class="btn btn-link btn-danger delete-category">
                        <i class="fa fa-times"></i>
                    </button>
                </div>';
                    return $actionBtn;
                })
                ->rawColumns(['image', 'user', 'status', 'action'])
                ->make(true);
        }
    }
}
