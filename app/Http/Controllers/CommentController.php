<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    // Menampilkan halaman home dengan komentar
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        return view('home', compact('comments'));
    }

    // Menyimpan komentar ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'comment' => 'required|max:500',
        ]);

        Comment::create([
            'name' => $request->input('name'),
            'comment' => $request->input('comment'),
        ]);

        return redirect()->back()->with('success', 'Komentar Anda berhasil dikirim!');
    }
}
