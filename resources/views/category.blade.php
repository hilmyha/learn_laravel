@extends('layouts.template')

@section('container')
  <h1>Post Category : {{ $category }}</h1>

  @foreach ($posts as $post)
    <div class="border grid gap-2 my-8">
      <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
      <h6 class="text-h6">By : {{ $post['author'] }}</h6>
      <p>{{ $post->excerpt }}</p>
    </div>
  @endforeach
@endsection