<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::all();
        return view('komentar', ['IsiKomentar' => $comment]);
    }
}
