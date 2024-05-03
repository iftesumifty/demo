<?php

namespace App\Http\Controllers;

use App\Mail\mymail;
use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\returnSelf;

class FrontenedController extends Controller
{
    public function user(){
        
        $users = User::all();
        return view('user',compact('users'));
    }

    public function userform()
    {
        return view('user.userform');
    }
    public function  logout1(Request $request)
    {
        Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

    public function messagepass(Request $request)
   {
        message::create([

            'name' => $request->name,
            'email' => $request->email,
           
            'subject' => $request->subject,
            'select' => $request->select,
            'datemax' => $request->datemax,
           
            'datemin' => $request->datemin,
            'quantity' => $request->quantity,
        ]);

        $email = $request->input('email');
        $message = $request->input('message');

         $data=$request->all();
// $data=new message($name,$email,$message);
        Mail::to($email )->send(new mymail($data));

        return redirect()->route('userform')->with('message'," request send successfully Successfully");
        

    }

   public function index11()
   {
    $messages = message::all();
    return view('frontend.index',compact('messages'));
   }
   public function view1()
   {
    $messages = message::all();
    return view('user.view1',compact('messages'));
   }
}
