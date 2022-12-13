<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller {

    public function index() {
        $posts = Post::latest()->get();
        return view('backend.post.manage', compact('posts'));
    }

    public function create() {
        return view('backend.post.create');
    }

    public function store(Request $request) {
        $request->validate([
            'post_title' => 'required',
            'post_image' => 'required|image|mimes:png,jpg,webp,jpeg,svg',
            'post_description' => 'required',
        ]);
        $post = new Post();
        $post->post_title = $request->post_title;
        $image = $request->post_image;
        if($image) {
            $folder = 'db-images/post-images/';
            $imageName = 'post' . time() . '.' . $image->getClientOriginalExtension();
            $image->move($folder, $imageName);
            $post->post_image = $folder . $imageName;
        } else {
            $post->post_image = 'demo.jpg';
        }
        $post->post_description = $request->post_description;
        $post->save();
        return redirect()->route('post.manage')->with('message', 'Post Added Successfully');
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('backend.post.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
        ]);
        $post = Post::find($id);
        $post->post_title = $request->post_title;
        $image = $request->post_image;
        if($image) {
            $deleteImage = $post->post_image;
            $folder = 'db-images/post-images/';
            $imageName = 'post' . time() . '.' . $image->getClientOriginalExtension();
            $image->move($folder, $imageName);
            $post->post_image = $folder . $imageName;
            if(File::exists($deleteImage)) {
                unlink($deleteImage);
            }
        }
        $post->post_description = $request->post_description;
        $post->save();
        return redirect()->route('post.manage')->with('message', 'Post Updated Successfully');
    }

    public function delete($id) {
        $post = Post::find($id);
        $deleteImage = $post->post_image;
        $post->delete();
        if(File::exists($deleteImage)) {
            unlink($deleteImage);
        }
        return redirect()->route('post.manage')->with('message', 'Post Delete Successfully');
    }

    public function status($id) {
        $post = Post::find($id);
        $status = $post->status;
        if(1 == $status) {
            $status = 0;
        } else {
            $status = 1;
        }
        $post->status = $status;
        $post->save();
        return redirect()->back();
    }

}
