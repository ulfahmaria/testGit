<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use Session;



class ContactController extends Controller
{
    public function contact(){
        return view('contact.contact');
    }
    public function mail(Request $request){
        $rules = [
            'email' => 'required',
            'message' => 'required',
            'subject' => 'required'
        ];
        $message = [
            'email.required' => 'Email field is require',
            'email.messaged' => 'Message field is require',
        ];
        $this->validate($request,$rules,$message);
        $data = [
            'email'=>$request->email,
            'text'=>$request->message,
            'subject'=>$request->subject,
        ];
        $email = $data['email'];
        $sub = $data['subject'];
        try{
            Mail::send('mail.mail', $data, function ($message) use ($data, $email, $sub) {
                $message->to($email);
                $message->from('ulfahcse22@gmail.com');
                $message->subject($sub);
            });
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
//        Session::flash('success', 'Mail was sent successfully');
        return redirect()->back();
    }
}
