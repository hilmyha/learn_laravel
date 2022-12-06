@extends('dashboard.layouts.template')

@section('container')
  {{-- dont delete --}}
  <div class="w-full grid gap-12 bg-white border border-gray-200 p-4 sm:p-6 xl:p-8 ">
    <h1>Create New Post</h1>

    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="#" method="POST">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
            
            <div>
              <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <input type="text" name="title" id="title" class="block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>

            <div>
              <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <input type="text" name="slug" id="slug" class="block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
            <div>
              <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Select your country</label>
              <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label for="about" class="block text-sm font-medium text-gray-700">About</label>
              <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
              </div>
            </div>

            
          <div class="px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
          </div>
      </form>
    </div>
  </div>
  {{-- dont delete --}}

  <script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
  </script>
@endsection