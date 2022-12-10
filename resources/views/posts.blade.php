@extends('layouts.template')

@section('container')
  <h1>{{ $title }}</h1>

  <form class="my-6" action="/posts">
    @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
    @endif
    <div class="grid grid-flow-row md:grid-flow-col px-0 w-full">
      <input type="text" name="search" value="{{ request('search') }}" class="focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-500 border border-slate-300 col-span-1 md:col-span-2 p-5" placeholder="Search">
      <button type="submit" class="border p-5 bg-primary-500 hover:bg-secondary-500 transition text-white">Search</button>
    </div>
  </form>

  @if ($posts->count())
    
    <div class="card group my-8">
      <div class="img-area">
        @if ($posts[0]->image)
          <img class="object-cover overflow-hidden" src="{{ asset('storage/' . $posts[0]->image) }}" alt="">
            
        @else
          <img class="object-cover overflow-hidden" src="http://source.unsplash.com/1920x1080?{{ $posts[0]->category->name }}" alt="">
        @endif
      </div>

      <h6 class="text-title-300 group-hover:text-white">By <a class="group-hover:text-secondary-500" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="group-hover:text-secondary-500" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} </h6>

      <h3 class="text-title-500 group-hover:text-white">{{ $posts[0]->title }}</h3>
      <p class="text-title-300 group-hover:text-white">{{ $posts[0]->excerpt }} <a class="group-hover:text-secondary-500" href="/posts/{{ $posts[0]->slug }}">See more</a> </p>
    </div>
      
  


  <div class="top-destination-divider">
  @foreach ($posts->skip(1) as $post)
  
    <div class="card group">
      <div class="img-area">
        @if ($post->image)
          <img class="object-cover overflow-hidden" src="{{ asset('storage/' . $post->image) }}" alt="">
            
        @else
          <img class="object-cover overflow-hidden" src="http://source.unsplash.com/1920x1080?{{ $post->category->name }}" alt="">
        @endif
      </div>
      <h6 class="text-title-300 group-hover:text-white">By <a class="group-hover:text-secondary-500" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="group-hover:text-secondary-500" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </h6>
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
  
  @else
    <p class="text-center">Post not Found</p>
  @endif
  {{ $posts->links() }}
@endsection