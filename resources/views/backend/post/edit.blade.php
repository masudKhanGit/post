@extends('backend.backend-master')
@section('title', 'Edit Post Page')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Add Post</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="post_title" class="form-label">Post Title</label>
                                <input type="text" class="form-control" name="post_title" id="post_title" value="{{ $post->post_title }}">
                                @error('post_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="post_image" class="form-label">Post Image</label>
                                <img src="{{ asset('/') }}{{ $post->post_image }}" width="100px" height="100px" class="my-2" alt="">
                                <input type="file" name="post_image" id="post_image" class="form-control">
                                @error('post_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="post_description" class="form-label">Post Description</label>
                                <textarea class="form-control" name="post_description" id="post_description" cols="30" rows="10">{{ $post->post_description }}</textarea>
                                @error('post_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" value="Update Post">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection