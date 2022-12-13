<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.pages.index');
    }

    public function blog() {
        $posts = Post::where('status', 1)->get();
        $page = 'Blog Page';
        return view('frontend.blog.post', compact('posts', 'page'));
    }

    public function  readMore($id) {
        $post = Post::find($id);
        return view('frontend.blog.read-more', compact('post'));
    }

}
