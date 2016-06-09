<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use Business\UserBusiness;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    protected $userBusiness;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(UserBusiness $userBusiness)
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'doLogout']);
        $this->userBusiness = $userBusiness;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showLogin() {
        return view('admin.login');
    }

    public function doLogin(LoginRequest $request) {
        // Get user by username and password
        $user = $this->userBusiness->getUserByUserNameAndPassWord($request->input('username'), $request->input('password'));
        if (!empty($user)) {
            // Login
            Auth::loginUsingId($user->id, $request->has('remember'));
            return redirect()->route('admin.top');
        }else {
            $errors = ['Your username or password is not correct !'];
            // If login fail, redirect back to login page with error message
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }

    public function doLogout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
