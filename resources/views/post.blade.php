@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back To All My Posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>
            
            @if ($post->image)
            <div style="max-height: 350px; overfloww:hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif            
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            

            <a href="/blog" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>



@endsection
