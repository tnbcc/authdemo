<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Traits\AuthenticatesLogout;

class LoginController extends Controller
{
    use AuthenticatesUsers,AuthenticatesLogout {
        AuthenticatesLogout::logout insteadof AuthenticatesUsers;
    }

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest.admin', ['except' => 'logout']);
    }

    /**
     * 显示后台登录模板
     */
   public function showLoginForm()
   {
        return view('admin.login');
    }

    /**
     * 使用 admin guard
     */
     protected function guard()
    {
             return auth()->guard('admin');
    }

    /**
     * 重写验证时使用的用户名字段
     */
    public function username()
    {
            return 'name';
    }


}
