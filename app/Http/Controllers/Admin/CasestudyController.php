<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Http\Requests\CaseStudyRequest;
use App\Models\Blog;
use App\Models\Casestudy;
use App\Models\Category;
use App\Models\Thumbnail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.case-study.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->category->where('type', $this->category::TYPE['INDUSTRIES'])->get();
        $type = $this->caseStudies::TYPE;
        $responsibilities = $this->caseStudies::RESPONSIBILITIES;
        return view('admin.case-study.create', compact('data', 'responsibilities', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaseStudyRequest $request)
    {
        try {
            $data = $request->all();
            $data['responsibilities'] = implode(',',$request->responsibilities);
            $case = $this->caseStudies->create($data);
            if ($request->hasFile('thumb')) {
                $images = $request->file('thumb');
                foreach ($images as $file) {
                    if (isset($file)) {
                        $path = Storage::disk('public')->put('imageblogs', $file);
                        Thumbnail::create([
                            'thumb' => $path,
                            'case_id' => $case->id
                        ]);
                    }
                }
            }
            return redirect()->route('admin.case-study')->with('success', 'Thêm bài viết thành công!');
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
            $data = $this->category->where('type', $this->category::TYPE['INDUSTRIES'])->get();
            $case = $this->caseStudies->findOrFail($id);
            $case->responsibilities = explode(',', $case->responsibilities);
            $img = Thumbnail::where('case_id', $id)->get();
            foreach ($img as $el) {
                $el->thumb = 'storage/' . $el->thumb;
            }
            $type = $this->caseStudies::TYPE;
            $responsibilities = $this->caseStudies::RESPONSIBILITIES;
            return view('admin.case-study.edit', compact('case', 'data', 'img', 'responsibilities', 'type'));
        } catch (\Throwable $th) {
            return redirect()->route('admin.case-study');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CaseRequest $request, $id)
    {
        try {
            $data = $request->all();
            $case = $this->caseStudies->findOrFail($id);
            $data['responsibilities'] = implode(',',$request->responsibilities);

            if ($request->hasFile('thumb')) {
                $images = $request->file('thumb');
                Thumbnail::where('case_id',$id)->delete();
                foreach ($images as $file) {
                    if (isset($file)) {
                        $path = Storage::disk('public')->put('imageblogs', $file);
                        Thumbnail::create([
                            'thumb' => $path,
                            'case_id' => $id
                        ]);
                    }
                }
            }
            $case->update($data);
            return redirect()->route('admin.case-study')->with('success', 'Sửa bài viết thành công!');
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
            $case = $this->caseStudies->find($id);
            $case->delete();
            return response()->json(['mess' => 'Xóa bài viết thành công!']);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }

    public function list_case(Request $request)
    {
        // return response()->json($this->blog::latest()->where('status', $this->blog::STATUS['ACTIVE'])->get());
        if ($request->ajax()) {
            $data = $this->caseStudies::with('categories', 'thumbnails')->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $img = '';
                    foreach ($row->thumbnails as $i) {
                        $img = $i->thumb;
                    }
                    $actionBtn = '<div class="d-flex">
                        <img src="' . asset('storage/' . $img) . '" width="100px"><div class="ml-3">' . $row->name . '</div></div>';
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
                ->addColumn('category', function ($row) {
                    return $row->categories->name;
                })
                ->addColumn('action', function ($row) {
                    $url = route('admin.case-study.destroy', $row->id);
                    $actionBtn = '<div class="form-button-action">
                    <a href="' . route('admin.case-study.edit', $row->id) . '" class="btn btn-link btn-primary btn-lg"
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
                ->rawColumns(['image', 'category', 'status', 'action'])
                ->make(true);
        }
    }
}
