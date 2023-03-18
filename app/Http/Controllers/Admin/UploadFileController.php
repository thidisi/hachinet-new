<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Thumbnail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
    public function __construct(Thumbnail $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
    public function uploadImageDel($id, Request $request)
    {
        try {
            if ($request->ajax()) {
                $thumbnail = $this->thumbnail->findOrFail($id);
                if (Storage::disk('public')->exists($thumbnail->thumb)) {
                    Storage::disk('public')->delete($thumbnail->thumb);
                }
                $thumbnail->delete();
            }
            return response()->json(['mess' => "Xóa ảnh thành công!"]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Không thể xử lý'], 403);
        }
    }
}
