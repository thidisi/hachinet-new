<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected $account;
    public function __construct(User $account)
    {
        $this->account = $account;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkRoleAdmin = false;
        if (auth()->user()->role == null) {
            $checkRoleAdmin = true;
        }
        return view('admin.accounts.index', compact('checkRoleAdmin'));
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
    public function store(UserRequest $request)
    {
        try {
            $checkIsExist = $this->account->where('email', $request->email)->first();
            if ($checkIsExist) {
                return response()->json(['mess' => "Email đã được sử dụng!"], 405);
            }
            $data = $request->all();
            unset($data['_token']);
            if ($request->hasFile('avatar')) {
                $images = $request->file('avatar');
                $path = Storage::disk('public')->put('imageSkill', $images);
                $data['avatar'] = 'storage/' . $path;
            }
            $data['password'] = Hash::make($request->password);
            $account = $this->account->create($data);
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
            $account = $this->account->findOrFail($id);
            return response()->json($account);
        } catch (\Throwable $th) {
            return response()->json(['mess' => 'Không thể xử lý'], 403);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            $checkIsExist = $this->account->where('id', '!=', $id)->where('email', $request->email)->first();
            if ($checkIsExist) {
                return response()->json(['mess' => "Email đã được sử dụng!"], 405);
            }
            $data = $request->all();
            unset($data['_token']);
            if ($request->hasFile('avatar')) {
                $images = $request->file('avatar');
                $path = Storage::disk('public')->put('imageSkill', $images);
                $data['avatar'] = 'storage/' . $path;
            }
            $account = $this->account->findOrFail($id);
            if ($request->password) {
                $data['password'] = Hash::make($request->password);
            } else {
                $data['password'] = $account->password;
            }
            $account->update($data);
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
            $account = $this->account->findOrFail($id);
            $account->delete();
            return response()->json(['mess' => "Xóa danh mục thành công!"]);
        } catch (\Throwable $th) {
            return response()->json(['mess' => 'Không thể xử lý'], 403);
        }
    }
    public function showAccount($id)
    {
        try {
            $account = $this->account->select(['id', 'name', 'email', 'password', 'avatar', 'phone', 'role', 'status'])->findOrFail($id);
            $account->avatar = asset($account->avatar);
            return response()->json($account);
        } catch (\Throwable $th) {
            return response()->json(['mess' => 'Không thể xử lý'], 403);
        }
    }
    public function list_account(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->account->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $actionBtn = '<img src="' . asset($row->avatar) . '" width="60px">';
                    return $actionBtn;
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == $this->account::STATUS['ACTIVE']) {
                        $actionBtn = '
                        <i class="fa fa-circle" style="color: green;"></i> Kích hoạt';
                    } else {
                        $actionBtn = '<i class="fa fa-circle" style="color: red;"></i> Vô hiệu';
                    }
                    return $actionBtn;
                })
                ->addColumn('action', function ($row) {
                    $url = route('accounts.destroy', $row->id);
                    $actionEdit = '<button type="button" data-toggle="modal" data-target="#addRowModal"
                        data-id="' . $row->id . '" title=""
                        class="btn btn-link btn-primary btn-lg edit-account"
                        title="Edit Task">
                        <i class="fa fa-edit"></i>
                    </button>';
                    $accountDel = '';
                    if ($row->role != null) {
                        $accountDel = '<button type="button"data-route="' . $url . '"
                            data-toggle="tooltip" title=""
                            class="btn btn-link btn-danger delete-account"
                            title="Remove">
                            <i class="fa fa-times"></i>
                        </button>';
                    }
                    return '<div class="form-button-action">' . $actionEdit . '' . $accountDel . '</div>';
                })
                ->rawColumns(['image', 'status', 'action'])
                ->make(true);
        } else {
            return response()->json(['mess' => 'Không thể xử lý'], 403);
        }
    }

    // profilel admin
    public function profile($id)
    {
        $account = $this->account->find($id);
        return view('admin.profile', compact('account'));
        // return response()->json($account);
    }

    public function updateProfile(Request $request, $id)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            if ($request->hasFile('avatar')) {
                $images = $request->file('avatar');
                $path = Storage::disk('public')->put('imageSkill', $images);
                $data['avatar'] = 'storage/' . $path;
            }
            $account = $this->account->findOrFail($id);
            $account->update($data);
            return redirect()->route('admin.profile', $account->id)->with('success', 'Cập nhật hồ sơ thành công!');
        } catch (\Throwable $th) {
            return response()->json(['mess' => 'Không thể xử lý'], 403);
        }
    }
}
