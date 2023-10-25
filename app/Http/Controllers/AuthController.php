<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Alert::success('ลงชื่อเข้าใช้แล้ว', 'การยืนยันตัวตนสำเร็จ');
            return redirect()->route('home');
        }

        Alert::error('เกิดข้อผิดพลาดบางอย่าง', 'อีเมลหรือรหัสผ่านไม่ถูกต้อง');
        return back();
    }

    public function register(Request $request)
    {
//        $request->validate([
//            'name' => ['required'],
//            'email' => ['required', 'email', 'unique:' . User::class],
//            'password' => ['required', 'min:8', 'confirmed']
//        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        event(new Registered($user));

        Alert::success('สร้างบัญชีแล้ว', 'การสร้างบัญชีสำเร็จ');
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        Alert::success('ลงชื่อออกแล้ว', 'การลงชื่อออกสำเร็จ');
        return redirect()->route('home');
    }
}
