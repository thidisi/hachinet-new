<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Casestudy;
use App\Models\Category;
use App\Models\Thumbnail;
use Illuminate\Http\Request;

class CasestudyController extends Controller
{
    protected $blog;
    protected $category;
    protected $caseStudies;
    public function __construct(Blog $blog, Category $category, Casestudy $caseStudies)
    {
        $this->category = $category;
        $this->caseStudies = $caseStudies;
        $this->blog = $blog;
    }
    public function index(Request $request)
    {
        $skill = $request->skill ? $request->skill : Null;
        $slug = $request->slug ? $request->slug : Null;
        $all = $request->show ? $request->show : Null;
        if (!empty($slug)) {
            try {
                $ctg = $this->category::where('slug', $slug)->where('type', $this->category::TYPE['INDUSTRIES'])->firstOrFail();
                $case = $this->caseStudies->where('category_id', $ctg->id)->orderBy('created_at', 'DESC')->get();
                $cate = null;
                foreach ($case as $el) {
                    $el['image'] = Thumbnail::where('case_id', $el->id)->first()->thumb;
                    $el->skill = explode(',', $el->skill);
                    $el['category'] = $slug;
                }
            } catch (\Throwable $th) {
                return redirect()->route('home');
            }
        } elseif (!empty($skill) || !empty($all)) {
            try {
                $case = $this->caseStudies->where('skill', 'like', '%' . $request->skill . '%')->orderBy('created_at', 'DESC')->get();
                $cate = null;
                foreach ($case as $el) {
                    $el['image'] = Thumbnail::where('case_id', $el->id)->first()->thumb;
                    $el->skill = explode(',', $el->skill);
                    $el['category'] = $slug;
                }
            } catch (\Throwable $th) {
                return redirect()->route('home');
            }
        } else {
            $cate = $this->category::where('type', $this->category::TYPE['INDUSTRIES'])->get();
            foreach ($cate as $el) {
                $el['count'] = Casestudy::where('category_id', $el->id)->count();
            }
            $case = null;
        }
        return view('case-study', compact('cate', 'case', 'all'));
    }
    public function show($slug)
    {
        try {
            $case = $this->caseStudies->where('slug', $slug)->firstOrFail();
            $case->skill = explode(',', $case->skill);
            $case->responsibilities = explode(',', $case->responsibilities);
            $img = Thumbnail::where('case_id', $case->id)->get();
            $category = $this->category->select('name', 'slug')->find($case->category_id);
            return view('project-details-one', compact('case', 'img', 'category'));
        } catch (\Throwable $th) {
            return redirect()->route('home');
        }
    }
}
