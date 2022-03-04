<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class MaintananceController extends Controller
{
    public function index(Request $request, $lang)
    {
        app()->setLocale($lang);
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 2) {
            $user = User::all();
            return view('account.index', compact('loggedIn', 'user'));
        } else {
            // kalo role nya selain 2 atau admin diarahkan ke home
            return redirect('/home/{lang}');
        }
    }

    public function edit($account_id, $lang)
    {
        app()->setLocale($lang);
        $loggedIn = Auth::user();
        $user = User::find($account_id);

        return view('account.edit', compact('loggedIn', 'user'))->with("user", $user);
    }

    public function update(Request $request, $account_id, $lang)
    {
        // dd($request->all());
        app()->setLocale($lang);
        $user = User::find($account_id);
        $user->update($request->all());

        return redirect('/account-maintenance/{lang}')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($account_id)
    {
        $user = User::find($account_id);
        $user->delete($user);

        return redirect('/account-maintenance/{lang}')->with('sukses', 'Data berhasil di delete.');
    }
}
