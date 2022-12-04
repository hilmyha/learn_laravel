@extends('layouts.template')

@section('container')
  <h1>Post Category</h1>

  

  <div class="blog-divider my-6">
  @foreach ($categories as $category)
    {{-- <div class="border grid gap-2 my-8">
      <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </div> --}}
      <div class="card-image">
        <img src="http://source.unsplash.com/1920x1080?{{ $category->name }}" alt="">
        
        <div class="image-child">
          <div class="image-textarea">
            
            <h5><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h5>
          
          </div>
        </div>
      
      </div>
  @endforeach
  </div>
@endsection