@extends('layouts.main')

@section('container')
    <h1 class="row justify-content-center mb-3">{{ $title }}</h1>

    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <form action="/blog">
                <div class="input-group mb-3">
                    @if (request('category'))
                        <input type="hidden" class="form-control" placeholder="Search..." name="category"
                            value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" class="form-control" placeholder="Search..." name="author"
                            value="{{ request('author') }}">
                    @endif
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-5">
            @if ($posts[0]->image)
                <div style="max-height:500px; overflow:hidden;" class="mb-3">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid mb-5"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?nature" class="card-img-top img-fluid mb-5"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>By : <a href="/blog?author={{ $posts[0]->author->username }}"
                        class="text-decoration-none">{{ $posts[0]->author->name }}</a> in : <a class="text-decoration-none"
                        href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                    <small>{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary mb-3" href="/blog/{{ $posts[0]->slug }}">Read More</a>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="/blog?category={{ $post->category->slug }}">
                                <div class="position-absolute bg-dark px-3 py-2 text-white">{{ $post->category->name }}
                                </div>
                            </a>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mb-5"
                                    alt="{{ $post->category->name }}">
                            @else
                                <img src="https://source.unsplash.com/1200x400/?nature" class="card-img-top img-fluid mb-5"
                                    alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a href="/blog/{{ $post->slug }}"
                                        class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                <p>By : <a href="/blog?author={{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a> in : <a
                                        class="text-decoration-none"
                                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    <small>{{ $post->created_at->diffForHumans() }}</small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/categories/{{ $post->category->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
