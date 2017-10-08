<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth ;
use Illuminate\Support\Facades\Session;
use Validator;
use Hash;


class userController extends Controller
{
    public function getSignUp(){
        return view('user.SignUp');
    }


    public function postSignUp(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:6|max:8'
        ]);

        $user = new User([
            'username'=>$request->input('username'),
            'email' => $request->input('email'),
            'password' =>Hash::make($request->input('password'))
        ]);
         $user->save();
         Auth::login($user);
        if(Session::has('oldUrl')){
            $oldUrl= Session::get('oldUrl');
            Session::forgot($oldUrl);
            return redirect()->to($oldUrl);
        }
         return redirect()->route('user.profile');
    }
    public function getSignIn(){
        return view('user.SignIn');
    }
    public function postSignIn(Request $request){
        
        /*$this->validate($request,[
           // 'username'=>'required|string|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            
        ]);*/
        $username= $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
         $v = array('email' =>$request['email'] ,'password'=>$request['password'] );
        if (Auth::attempt($v)) {
         return redirect()->route('user.profile');
        }else{
            return view('user.SignIn')->with("Invalid Username Or Password.");
        }

    }

    public function getprofile()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function ($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
       return view('user.profile',['orders'=>$orders]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('user.SignIn');
    }
}

