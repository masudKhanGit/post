@extends('backend.backend-master')
@section('title', 'Manage Post Page')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 mx-auto">
                <div class="card mb-4">
                    <div class="card-header">
                        <span class="text-success">{{ Session::get('message') }}</span>
                        <h1 class="text-center">Manage Post</h1>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Post Title</th>
                                    <th>Post Image</th>
                                    <th>Post Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Post Title</th>
                                    <th>Post Image</th>
                                    <th>Post Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->post_title }}</td>
                                        <td><img src="{{ asset('/') }}{{ $post->post_image }}" width="100px" height="100px" alt=""></td>
                                        <td>{{ Str::limit($post->post_description, 400, ' ......') }}</td>
                                        <td><a href="{{ route('post.status', ['id' => $post->id]) }}" class="nav-link text-white {{ $post->status == 1 ? 'btn btn-success' : 'btn btn-danger' }}">{{ $post->status == 1 ? 'Active' : 'Inactive' }}</a></td>
                                        <td class="d-flex gap-2">
                                            <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure delete this post')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection