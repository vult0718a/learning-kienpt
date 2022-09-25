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
            return redirect()->route('home');
        }   
        $alert='Email hoặc mật khẩu không chính xác! Xin vui lòng thử lại!';
        return redirect()->route('show-form-login')->with('alert',$alert);
    }

    public function showListAccounts(Request $request){
            $users=User::all();
            return view('accounts',compact("users"));
    }

    public function createAccount(){
        return view('add-account');
    }
    public function storeAccount(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->sdt = $request->sdt;
        $user->password = bcrypt($request->password);
        $user->is_admin = $request->is_admin;

        $user->save();
        $alert='Bạn đã thêm account thành công!';
        return redirect()->route('show-list-accounts')->with('alert',$alert);
    }

    public function editAccount(){
        return view('edit-account');
    }
    public function updateAccount(Request $request)
    {   
        
        $user = User::find(\auth()->id());
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->change_password == 'on'){
            $user->password = bcrypt($request->password);
        }
        $user->is_admin = $request->is_admin;
        $user->sdt = $request->sdt;

        $user->save();
        $alert='Bạn đã cập nhật account thành công!';
        return redirect()->route('show-list-accounts')->with('alert',$alert);
    }
    public function deleteAccount($id){
        $user = User::find($id);
        $user->delete();
        $alert='Bạn đã xóa account thành công!';
        return redirect()->route('show-list-accounts')->with('alert',$alert);
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

    public function deleteProfile(){
        $user = User::find(\auth()->id());
        $user->delete();
        $alert='Bạn đã hủy tài khoản! Vui lòng đăng ký lại';
        return redirect()->route('home')->with('alert',$alert);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('show-form-login');
    }

    
}

