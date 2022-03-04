<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(Request $request, $lang)
    {
        app()->setLocale($lang);
        $loggedIn = Auth::user();
        $ebook = Book::all();

        return view('home.index', compact('loggedIn', 'ebook'));
    }

    public function detail(Request $request, $ebook_id, $lang)
    {
        app()->setLocale($lang);
        $loggedIn = Auth::user();
        $ebook = Book::find($ebook_id);

        return view('home.detail', compact('loggedIn', 'ebook'))->with("ebook", $ebook);
    }
}
