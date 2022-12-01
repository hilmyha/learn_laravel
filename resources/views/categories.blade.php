@extends('layouts.template')

@section('container')
  <h1>Post Category</h1>

  @foreach ($categories as $category)
    <div class="border grid gap-2 my-8">
      <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </div>
  @endforeach
@endsection