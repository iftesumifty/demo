<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Mockery\Matcher\HasKey;

use function PHPUnit\Framework\returnValue;

class BackendController extends Controller
{
    public function index()
    {
        
        $user=user::all();
        $user=User::all()->count();
        $message=message::all()->count();
        return view('file.index',compact('user','message'));
    }
public function home(){
    return view('frontend.home');
 }
public function login(){
    return view('loginreg.login');

}
public function login1(Request $request){

    $user = $request->validate(
        [
            'email' => ['required', 'email'],
            'password' => 'required|min:3','password',
        ],
        [
            'email.required' => 'the error',
            'email.email' => 'the email format!',
            
            
        ],
    );

    if(Auth::attempt($user)){
        if(Auth::user()->status==3){

            
            if( Auth::user()->roll_id==1){
                
                return view('file.index',compact('user'));
            
            
            }
            if( Auth::user()->roll_id==2){
                return view('user.index');
               
            } 
    
        }
        else {
            return redirect()->back();
        }
    }
       
    
}


public function another(Request $request)
    {
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

        ]);
        // return back();
        return redirect()->route('user')->with('message'," created Successful");
    }

    public function editt($id)
    {
$users=User::find($id);
       
        return view('user', compact('users'));
    }
    public function update(Request $res,$id )
    {

        user::find($id)->update([
            'name' => $res->name,
            'email' => $res->email,
            'phone' => $res->phone,
            'address' => $res->address,
            
        ]);

        return redirect()->route('user');
    }
    
    
public function userindex()
{
    return view('user.index');
}
//return redirect()->back();
   


//else {
   // return redirect()->back();
    //}


public function  up1($id)
    {
        $users=user::find($id);
       
        if($users){
            if($users->status){
                $users->status =0;
            }
            else {
                $users->status =3;
            }
            $users->save();}
        
        //dd($users);
        return back();
    }


public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}

public function registration(){
    return view('loginreg.registration');
}

public function  create_user(Request $request)
{
    $request->validate([
        'name' =>'required',
       // 'phone'=>'required',
        'password'=>'required|min:3',
        'email' =>'required',
    ]);


    //dd($request->all());
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'password' => Hash::make($request->password)
      

    ]);
   // return redirect()->back();
    return redirect()->route('registration')->with('message'," request send Successfully");
    
}

public function admin(){
    return view('admin');
}


}
