<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    //
    private $user;
    public function __construct()
    {
        $this->user = new Users();
    }
    public function indexLog()
    {
        return view('clients.log.log-in');
    }

    public function register()
    {
        return view('clients.log.register');
    }

    public function registerUser(Request $request)
    {
        $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';

        $request->validate([
            'name' => 'required|min:5',
            'numberphone'=>'required|min:10',
            'email' => 'required|email',
            'pass' => 'required|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
        ], [
            'name.required' => 'Họ và Tên bắt buộc phải nhập',
            'name.min' => 'Họ và tên phải trên :min ký tự',
            'numberphone.required' => 'Trường này không được để trống',
            'numberphone.min' => 'Số điện thoại phải :min ký tự',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email chưa đúng định dạng',
            'pass.required' => 'Trường này không được để trống',
            'pass.min' => 'Mật khẩu phải trên :min ký tự',
            'pass.regex' => 'Mật khẩu có chứa chữ cái, chữ số và ký tự đặc biệt',

        ]);

        $dataInsert = [
            $request->name,
            $request->email,
            $request->numberphone,
            Hash::make($request->pass),
           
        ];

        $this->user->addUser($dataInsert);

        return redirect()->route('log.logIn')->with('msg', 'Đăng ký tài khoản thành công');
    }

    public function signUser(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email chưa đúng định dạng',
            'password.required' => 'Trường này không được để trống',
        ]);

       
        $credentials = $request->only('email', 'password');

       

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Lấy thông tin của người dùng
            $userId = $user->id;
            $userName = $user->fullname;
            $request->session()->put('userID', $userId);

            // dd($user->id);
         
            return redirect()->route('home');
        } else {
            return redirect()->route('log.logIn')->with('msg', 'Đăng nhập thất bại.');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    
}
