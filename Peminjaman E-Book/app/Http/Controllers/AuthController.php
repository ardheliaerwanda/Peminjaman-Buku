<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index($lang)
    {
        app()->setLocale($lang);
        return view('index');
    }

    public function signup(Request $request, $lang)
    {
        app()->setLocale($lang);
        $loggedIn = Auth::user();
        $user = User::all();

        return view('auths.signup', compact('loggedIn', 'user'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|alpha|max:25',
            'middle_name' => 'alpha|max:25',
            'last_name' => 'required|alpha|max:25',
            'gender_id' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
            'password' => 'required|alpha_num|max:8',
            'display_picture_link' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $user = new \App\Models\User;
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender_id = $request->gender_id;
        $user->role_id = $request->role_id;
        $user->password = bcrypt($request->password);
        $user->display_picture_link = $user->setFile($request->display_picture_link);
        $user->remember_token = Str::random(60);
        $user->save();

        return redirect('/login/{lang}')->with('sukses', 'Data berhasil di input');
    }

    public function login(Request $request, $lang)
    {
        app()->setLocale($lang);
        $user = User::all();

        return view('auths.login', compact('user'));
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home/{lang}');
        }

        return redirect('/login/{lang}');
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('cart');
        return redirect('/log-out/{lang}');
    }
}
