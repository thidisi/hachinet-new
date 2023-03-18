<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalendarRequest;
use App\Mail\CalendarMail;
use App\Mail\ContactMail;
use App\Mail\HomeContactEmail;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    protected $blog, $contact;
    public function __construct(Blog $blog, Contact $contact)
    {
        $this->blog = $blog;
        $this->contact = $contact;
    }
    public function index()
    {
        $blogs = $this->blog->with('users')->latest()->limit(4)->get();

        foreach ($blogs as $key => $value) {
            if (file_exists(storage_path('app/public/' . $value->thumbnail))) {
                $value->thumbnail = 'storage/' . $value->thumbnail;
            } else {
                $value->thumbnail = 'https://hachinet.com/assets/img/service/rectangle39-java.png';
            }
        }
        return view('index', [
            'blogs' => $blogs
        ]);
    }
    public function confirm_calendar(CalendarRequest $request)
    {
        $data = $request->all();
        $this->contact->create($data);
        Mail::to('contact@hachinet.com')->send(new CalendarMail($data));
        Mail::to($request->email)->send(new HomeContactEmail($data));
        return response()->json(['success' => 'Successfully scheduled meeting!']);
    }
}
