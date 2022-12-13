@extends('frontend.frontend-master')
@section('title')
    {{ $page }}
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 mx-auto">
                <div class="product-big-title-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-bit-title text-center">
                                    <h2>{{ $page }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-product-area">
                    <div class="zigzag-bottom"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                @foreach ($posts as $post)
                                    <div class="card">
                                        <img src="{{ asset('/') }}{{ $post->post_image }}" width="200px" height="200px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">{{ $post->post_title }}</h5>
                                        <p class="card-text">{{ Str::limit($post->post_description, 200, ' ...') }}</p>
                                        <a href="{{ route('post.read', ['id' => $post->id]) }}" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-pagination text-center">
                                    <nav>
                                      <ul class="pagination">
                                        <li>
                                          <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                          </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                          <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </nav>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection