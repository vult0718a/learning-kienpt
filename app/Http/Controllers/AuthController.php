<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormRegister(){
        return view('register');
    }
    public function register(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->sdt = $request->sdt;
        $user->password = bcrypt($request->password);

        $user->save();
        $alert='Bạn đã đăng ký thành công!';
        return redirect()->route('show-form-login')->with('alert',$alert);
    }

    public function showFormLogin(){
        return view('login');
    }
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('profile');
        }   
        $alert='Email hoặc mật khẩu không chính xác! Xin vui lòng thử lại!';
        return redirect()->route('show-form-login')->with('alert',$alert);
    }

    public function showListAccounts(){
            $users=User::all();
            return view('accounts',compact("users"));
    }

    public function editAccount(){
        return view('edit-account');
    }

    public function profile(){
        if (Auth::check()){
            return view('profile');
        }
        return redirect()->route('show-form-login');
    }

    public function editProfile(Request $request)
    {   
        
        $user = User::find(\auth()->id());
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->change_password == 'on'){
            $user->password = bcrypt($request->password);
        }
        $user->sdt = $request->sdt;
        $user->save();
        $alert='Bạn đã cập nhật thành công!';
        return redirect()->route('profile')->with('alert',$alert);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('show-form-login');
    }

    
}

