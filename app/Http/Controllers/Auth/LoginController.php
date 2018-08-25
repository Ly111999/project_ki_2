<?php

namespace App\Http\Controllers\Auth;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Hàm này show bảng login, mình sẽ làm việc với nó để hướng người dùng đến view login với list categories được truyền vào
     */
    public function showLoginForm()
    {
        $categories = Category::all();
        return view('auth.login')->with('categories', $categories);
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect(route('home'));
    }
    /**
     *  Không cần làm việc với hàm login ở đây vì trong LoginController đã điều hướng người dùng
     *  về view home (được truyền thêm list categories)
     *
     *  Terminal a chuyển qua git bash đấy, dùng cho dễ
     */
//
}
