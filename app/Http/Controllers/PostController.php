<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post; // 追加

class PostController extends Controller
{
    // 一覧ページ
    public function index() {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    // Contactページ
    public function contact() {
        $posts = Post::latest()->get();

        return view('posts.contact', compact('posts'));
    }

    // 一覧ページ
    public function documents() {
        $posts = Post::latest()->get();

        return view('posts.documents', compact('posts'));
    }
}
