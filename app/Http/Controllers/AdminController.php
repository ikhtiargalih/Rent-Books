<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboardAdmin()
    {
        return view('dashboard.admin');
    }

    public function indexUsers()
    {
        $data = User::get();

        return view('content.user', compact('data'));
    }

    public function books()
    {
        return view('content.books');
    }

    public function dataBooks()
    {
        $books = Book::get();
        return view('content.data-books', compact('books'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function createBooks(Request $request)
    {
        $credentials = $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'cover' => 'required'
        ]);

        Book::create($credentials);
        return redirect('/books/data')->with('success', 'Berhasil membuat buku');
    }

    public function editBooks($id)
    {
        $books = Book::where('id', $id)->first();
        return view('content.books');
    }

    public function updateBooks(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'cover' => 'required',
        ]);

        Book::findOrfail($id)->update($request->all());
        return redirect('/books/edit');
    }

    public function destroyBooks($id)
    {
        Book::where('id', '=', $id)->delete();
        return redirect('/books/edit'); 
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        return view('content.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        User::findOrfail($id)->update($request->all());
        return redirect('/user');
    }

    public function destroy($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect('/user');    
    
    }
}
