@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row align-items-center">
            <div class="col-md-8 mx-auto mt-3 mt-lg-5 text-center">
                Full stack web developer based in Louisville, KY, USA
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-8 mx-auto my-3 text-center">
                <a href="#top">
                    <button type="button" class="btn btn-outline-dark">
                        Projects
                    </button>
                </a>
                <a href="#top">
                    <button type="button" class="btn btn-outline-dark">
                        Contact
                    </button>
                </a>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1 class="my-4 text-center">Welcome to the Blog </h1>

                @foreach ($posts as $post)
                    <div class="card mb-4">
                        <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image : 'http://placehold.it/750x300' !!} " alt={{ $post->title }}}>
                        <div class="card-body">
                            <h2 class="card-title text-center">{{ $post->title }}</h2>
                            <p class="card-text"> {{ Str::limit($post->body, $limit = 100, ' . . .') }} </p>
                            <a href="/posts/{{ $post->id }}" class="btn btn-primary" role="button"
                                >Full post <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted {{ $post->created_at->diffForHumans() }} by
                            <a href="#">{{ $post->user->name }} </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection