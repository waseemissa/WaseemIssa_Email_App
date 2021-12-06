<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use JWTAuth;

class MailController extends Controller
{

    public function __construct() {
        $this->middleware('auth:api', ['except' => ['']]);
        $this->guard = "api";
    }


    public function sendEmail(Request $request){

        $details = [
            'title' => "Laravel App Email Trial",
            'body' => $request->email_body
        ];

        Mail::to($request->email)->send(new TestMail($details));

        return "Email Sent!";
    }
}
