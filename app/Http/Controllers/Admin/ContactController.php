<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use DataTables;
class ContactController extends Controller
{
    protected $contact;
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
    public function index()
    {
        return view('admin.contacts.index');
    }
    
    public function list_contact(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->contact::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    $actionBtn = $row->created_at->format('d-m-Y');
                    return $actionBtn;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div class="text-center">
                    <a title="Xem chi tiết" class="text-primary show-modal-contact" data-route="'.route('api.contacts.show_contact', $row->id).'">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>';
                    return $actionBtn;
                })
                ->rawColumns(['created_at', 'action'])
                ->make(true);
        }
    }

    public function show_contact($id)
    {
        $data = Contact::find($id);
        return response()->json($data);
    }
}
