@extends('layouts.template')

@section('container')
  <h1>{{ $title }}</h1>

  @if ($posts->count())
    
    <div class="card group">
      <div class="img-area">
        <img src="http://source.unsplash.com/1920x1080?{{ $posts[0]->category->name }}" alt="">
      </div>

      <h6 class="text-title-300 group-hover:text-white">By <a class="group-hover:text-secondary-500" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="group-hover:text-secondary-500" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} </h6>

      <h3 class="text-title-500 group-hover:text-white">{{ $posts[0]->title }}</h3>
      <p class="text-title-300 group-hover:text-white">{{ $posts[0]->excerpt }} <a class="group-hover:text-secondary-500" href="/posts/{{ $posts[0]->slug }}">See more</a> </p>
    </div>
      
  @else
    <p class="text-center">Post not Found</p>
  @endif


  <div class="top-destination-divider">
  @foreach ($posts->skip(1) as $post)
  
    <div class="card group">
      <div class="img-area">
        <img src="http://source.unsplash.com/1920x1080?{{ $post->category->name }}" alt="">
      </div>
      <h6 class="text-title-300 group-hover:text-white">By <a class="group-hover:text-secondary-500" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="group-hover:text-secondary-500" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </h6>
      <h3 class="text-title-500 group-hover:text-white"><a class="group-hover:text-secondary-500" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
      <p class="text-title-300 group-hover:text-white">{{ $post->excerpt }}</p>
    </div>
  
    {{-- <div class="border grid gap-2 my-8">
      <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
      <h6 class="text-h6">By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
      
      
      <p>{{ $post->excerpt }}</p>
    </div> --}}
  
  @endforeach
  </div>
@endsection