<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\HTTP\Request;
use App\User;
use DB;
use Auth;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $user = User::where(DB::raw('BINARY username'), $req->username)->first();
        if ($user == null) {
            return redirect(url('/login'));
        } else {
            if ($user->username == $req->username && $user->password == sha1(md5('لا إله إلاّ الله') . $req->password)) {
                Auth::login($user);
                return redirect(url('/home'));
            } elseif ($user->username != $req->username || $user->password != sha1(md5('لا إله إلاّ الله') . $req->password)) {
                return Redirect::back()->withErrors(['Password atau Username Anda Salah !']);
            }
        }

    }
}
