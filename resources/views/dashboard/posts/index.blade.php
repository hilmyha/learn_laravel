@extends('dashboard.layouts.template')

@section('container')
  {{-- dont delete --}}
  <div class="w-full grid gap-12 bg-white border border-gray-200 p-4 sm:p-6 xl:p-8 ">
    <h1>My Post</h1>

    
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
                      <a href="/dashboard/posts/{{ $post->id }}" class="bg-cyan-500 p-3 text-white rounded-lg hover:bg-primary-500"><i class="fa-solid fa-eye"></i></a>
                      <a href="/dashboard/posts/{{ $post->id }}" class="bg-secondary-500 p-3 text-white rounded-lg hover:bg-primary-500"><i class="fa-solid fa-pencil"></i></a>
                      <a href="/dashboard/posts/{{ $post->id }}" class="bg-red-500 p-3 text-white rounded-lg hover:bg-primary-500"><i class="fa-solid fa-trash"></i></i></a>
                  </td>
              </tr>
            @endforeach
              
          </tbody>
      </table>
    </div>

  </div>
  {{-- dont delete --}}
@endsection