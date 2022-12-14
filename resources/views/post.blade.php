@extends('layouts.template')

@section('container')
  <div class="border grid gap-6 mb-8">
    <div class="h-[500px] object-cover overflow-hidden">
      @if ($post->image)
        <img class="object-cover overflow-hidden" src="{{ asset('storage/' . $post->image) }}" alt="">
          
      @else
        <img class="object-cover overflow-hidden" src="http://source.unsplash.com/1920x1080?{{ $post->category->name }}" alt="">
      @endif
    </div>
    <h2>{{ $post->title }}</h2>
    <h6 class="text-h6">By : <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
    {!! $post->body !!} 
  </div>

  <a href="/posts">Back to Post</a>
@endsection