<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request){
        $data = [
            'Recipient'=> 'analopika9@gmail.com',
            'Name' => $request['Name'],
            'Email'=>$request['Email'],
            'Body'=>$request['Body']
        ];

        try
        {
            // Mail::To('analopika9@gmail.com')->send(new MailNotify($data));

            Mail::send('emails.index', $data, function($message) use ($data){
                $message->to($data['Recipient'])
                        ->from($data['Email'])
                        ->subject('Lets Have a chat');
            });

            return redirect()->back()->with('success', 'Thank you!, I will get back to you as soon as possible.');
        } catch(Exception $e)
        {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
