@extends('layouts.template')

@section('container')
  <div class="border grid gap-2 mb-8">
    <h2>{{ $post->title }}</h2>
    <h6 class="text-h6">By : {{ $post->author }}</h6>
    {!! $post->body !!} 
  </div>

  <a href="/posts">Back to Post</a>
@endsection