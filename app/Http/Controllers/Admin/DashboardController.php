<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $blog, $category, $contact;
    public function __construct(Blog $blog, Category $category, Contact $contact)
    {
        $this->blog = $blog;
        $this->category = $category;
        $this->contact = $contact;
    }
    public function index()
    {
        $data = [];
        $blog = $this->blog->get();
        $data['countBlog'] = $blog->count();
        $data['countCategories'] = $this->category->count();
        $data['countContact'] = $this->contact->count();
        $data['countView'] = 0;
        foreach($blog as $e) {
            $data['countView'] += $e->viewer;
        }
        return view('admin.dashboard', compact('data'));
    }
}
