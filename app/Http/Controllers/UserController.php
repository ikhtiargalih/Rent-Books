<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function dashboardUser(){
        $book = Book::get();
        return view('dashboard.user', compact('book'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'logout successfully');
    }
}
