<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\FeedBackRequest;
use App\Mail\ContactMail;
use App\Mail\FeedBackMail;
use App\Mail\FeedBackMailAdmin;
use App\Mail\HomeContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        try {
            $data = $request->all();
            Contact::create($request->all());
            Log::channel('mattermost')->error('New contact created by ' . $request->name);
            Mail::to('contact@hachinet.com')->send(new ContactMail($data)); //contact@hachinet.com
            return redirect()->back()
                ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
        } catch (\Throwable $th) {
            return redirect()->back()
                ->with(['error' => 'The system is having problems, please resend email.']);
        }
    }

    public function submitEmail(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Contact::create($data);
        Log::channel('mattermost')->error('new subcribe by email: ' . $request->email);
        // Mail::to('trandoantrong0805@gmail.com')->send(new ContactMail($data));
        return response()->json(['message' => 'Sign up to receive information successfully!']);
    }

    public function feedbackEmail(FeedBackRequest $request)
    {
        try {
            $data = $request->all();
            Contact::create($data);
            Mail::to($data['email'])->send(new FeedBackMail($data));
            Mail::to('hello@hachinet.com')->send(new FeedBackMailAdmin($data));
            return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
        } catch (\Throwable $th) {
            return redirect()->back()
                ->with(['error' => 'The system is having problems, please resend email.']);
        }
    }

    // public function homeMail(Request $request)
    // {
    //     dd($request->all());
    //     $data = $request->all();
    //     Contact::create($request->all());
    //     Mail::to($request->email)->send(new HomeContactEmail($data));
    //     // Mail::to('trandoantrong0805@gmail.com')->send(new HomeContactEmail($data));
    //     return response()->json(['message' => 'Thank you for contact us.']);
    //     // return redirect()->back()
    //     //     ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    // }
}
