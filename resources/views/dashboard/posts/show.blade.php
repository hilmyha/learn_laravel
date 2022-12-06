@extends('dashboard.layouts.template')

@section('container')
  {{-- dont delete --}}
  <div class="w-full grid gap-12 bg-white border border-gray-200 p-4 sm:p-6 xl:p-8 ">
    <div class="border grid gap-6 mb-8">
      <div class="h-[500px]">
        <img class="object-cover overflow-hidden" src="http://source.unsplash.com/1920x1080?{{ $post->category->name }}" alt="">
      </div>
      <h2>{{ $post->title }}</h2>
      <div class="flex gap-2">
        <a href="/dashboard/posts" class="py-4 px-5 bg-cyan-500 text-white text-center rounded-lg"><i class="fa-solid fa-eye"></i></a>
        <a href="" class="py-4 px-5 bg-secondary-500 text-white text-center rounded-lg"><i class="fa-solid fa-pencil"></i></a>
        <a href="" class="py-4 px-5 bg-red-500 text-white text-center rounded-lg"><i class="fa-solid fa-trash"></i></a>
      </div>
      {!! $post->body !!} 
    </div>
  
    <a href="/posts">Back to Post</a>

  </div>
  {{-- dont delete --}}
@endsection