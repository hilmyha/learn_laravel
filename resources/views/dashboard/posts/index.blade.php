@extends('dashboard.layouts.template')

@section('container')
  {{-- dont delete --}}
  <div class="w-full grid gap-12 bg-white border border-gray-200 p-4 sm:p-6 xl:p-8 ">
    <h1>My Post</h1>

    <div class="flex">
      <a href="/dashboard/posts/create" class="bg-blue-500 p-4 text-white rounded-lg">Create post</a>
    </div>
    
    @if (session()->has('success'))
      <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-medium">{{ session('success') }}</span>
      </div>
    @endif
    
    <div class="overflow-x-auto relative">
      <table class="w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="py-3 px-6">
                      #
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Title
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Category
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr class="bg-white border-b">
                  <td class="py-4 px-6">
                    {{ $loop->iteration }}
                  </td>
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    {{ $post->title }}
                  </th>
                  <td class="py-4 px-6">
                    {{ $post->category->name }}
                  </td>
                  <td class="py-4 px-6">
                      <a href="/dashboard/posts/{{ $post->slug }}" class="bg-cyan-500 p-3 text-white rounded-lg hover:bg-primary-500"><i class="fa-solid fa-eye"></i></a>
                      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-secondary-500 p-3 text-white rounded-lg hover:bg-primary-500"><i class="fa-solid fa-pencil"></i></a>
                      <form class="inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="bg-red-500 p-3 text-white rounded-lg hover:bg-primary-500" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                      </form>
                  </td>
              </tr>
            @endforeach
              
          </tbody>
      </table>
    </div>

  </div>
  {{-- dont delete --}}
@endsection