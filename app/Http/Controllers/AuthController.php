<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login.login');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function postLogin(Request $request)
    {
        // dd($request->all());
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
            // 'status' => User::STATUS['active']
        ];
        if (Auth::attempt($login)) {
            if (Auth::user()->status == User::STATUS['ACTIVE']) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('status', 'Tài khoản của bạn đã bị vô hiệu');
            }
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
