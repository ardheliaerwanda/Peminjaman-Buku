<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(Request $request, $lang)
    {
        app()->setLocale($lang);
        $loggedIn = Auth::user();

        return view('profile.index', compact('loggedIn'));
    }

    public function edit(Request $request, $account_id, $lang)
    {
        //    
        app()->setLocale($lang);
        $loggedIn = Auth::user();
        $user = \App\Models\User::find($account_id);
        
        return view('profile.index', compact('loggedIn', 'user'))->with("user", $user);
    }

    public function update(Request $request, $account_id)
    {
        $this->validate($request,[
                    'first_name' => 'required|alpha|max:25',
                    'middle_name' => 'alpha|max:25',
                    'last_name' => 'required|alpha|max:25',
                    'gender_id' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'display_picture_link' => 'image|mimes:jpeg,png,jpg',
        ]);
        $user = \App\Models\User::find($account_id);
        $data = $request->all();
        $data['display_picture_link'] = $user->display_picture_link;

        if (!empty($request->display_picture_link)) {
            $rules = [
                'display_picture_link' => ['mimes:jpeg,png,jpg', 'required'],
            ];
            $request->validate($rules);

            if (!empty($user->display_picture_link)) {
                $user->removeFile($user->display_picture_link);
            }

            $data['display_picture_link'] = $user->setFile($request->display_picture_link);
        }
        $user->update($data);
        return redirect('/saved/{lang}')->with('sukses', 'Data berhasil di update.');
    }
}
