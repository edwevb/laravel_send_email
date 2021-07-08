<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\UserMail;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function sendEmail(ContactRequest $request)
    {
        $validated = $request->validated();

        if ($validated)
        {
            $data = $request->all();
            $this->sendEmailToMe($data);
            $this->sendEmailtoUser($data);
            return response()->json([
                'data' => $data,
                'message' => 'Thank you for your feedback!'
            ],200);
        }
    }


    public function sendEmailToMe($data){
        $myEmail = "meredythackerman@gmail.com";
        Mail::to($myEmail)->send(new ContactMail($data));
    }

    public function sendEmailtoUser($data){
        Mail::to($data['email'])->send(new UserMail($data));
    }
}
