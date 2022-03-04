<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request, $lang)
    {
        app()->setLocale($lang);
        $loggedIn = Auth::user();
        $cart = Session::get('cart');
        $ebook = null;
        $listEbookId = [];

        if ($cart) {
            $ebook = Book::whereIn('ebook_id', $cart)->get();
            $listEbookId = $ebook->pluck('ebook_id');
        }

        return view('cart.index', compact('loggedIn', 'ebook', 'listEbookId'));
    }

    public function rent(Request $request, $ebookId)
    {
        $ebook = Book::findOrFail($ebookId);
        $cart = Session::get('cart');

        if (!isset($cart[$ebook->ebookId])) {
            $cart[$ebookId] = $ebookId;
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index', 'lang')->with('success', 'Ebook rented successfully');
    }

    public function remove($ebookId)
    {
        $cart = Session::get('cart');
        unset($cart[$ebookId]);
        Session::put('cart', $cart);

        return redirect()->route('cart.index', 'lang')->with('success', 'Ebook removed successfully');
    }
}
