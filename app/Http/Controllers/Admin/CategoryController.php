<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = $this->category::TYPE;
        return view('admin.categories.index', compact('type'));
        // return response()->json(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $checkIsExist = $this->category->where('name', $request->name)->first();
            if ($checkIsExist) {
                return response()->json(['mess' => "Tên danh mục bị trùng!"], 405);
            }
            $data = $request->all();
            if ($request->hasFile('image')) {
                $images = $request->file('image');
                $path = Storage::disk('public')->put('imageCategory', $images);
                $data['image'] = $path;
            }
            $category = $this->category->create($data);
            return response()->json(['mess' => "Thêm danh mục thành công!"]);
        } catch (\Throwable $th) {
            return response()->json(['mess' => 'Không thể xử lý'], 403);
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
            $category = $this->category->findOrFail($id);
            return response()->json($category);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $checkIsExist = $this->category->where('id', '!=', $id)->where('name', $request->name)->first();
            if ($checkIsExist) {
                return response()->json(['mess' => "Tên danh mục bị trùng!"], 405);
            }
            $data = $request->all();
            if ($request->hasFile('image')) {
                $images = $request->file('image');
                $path = Storage::disk('public')->put('imageCategory', $images);
                $data['image'] = $path;
            }
            $category = $this->category->findOrFail($id);
            $category->slug = null;
            $category->update($data);
            return response()->json(['mess' => "Sửa danh mục thành công!"]);
        } catch (\Throwable $th) {
            return response()->json(['mess' => 'Không thể xử lý'], 403);
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
            $category = $this->category->findOrFail($id);
            $category->delete();
            return response()->json(['mess' => "Xóa danh mục thành công!"]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }
    public function showCate($id)
    {
        try {
            $category = $this->category->findOrFail($id);
            $category->image = asset('storage/' . $category->image);
            return response()->json($category);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }
    public function list_category(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == Category::STATUS['ACTIVE']) {
                        $actionBtn = '
                        <i class="fa fa-circle" style="color: green;"></i> Hiển thị';
                    } else {
                        $actionBtn = '<i class="fa fa-circle" style="color: red;"></i> Ẩn';
                    }
                    return $actionBtn;
                })
                ->addColumn('action', function ($row) {
                    $url = route('categories.destroy', $row->id);
                    $actionBtn = '<div class="form-button-action">
                    <button type="button" data-toggle="modal" data-target="#addRowModal"
                        data-id="' . $row->id . '" title=""
                        class="btn btn-link btn-primary btn-lg edit-category"
                        title="Edit Task">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button"data-route="' . $url . '"
                        data-toggle="tooltip" title=""
                        class="btn btn-link btn-danger delete-category"
                        title="Remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>';
                    return $actionBtn;
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }
    }
}
