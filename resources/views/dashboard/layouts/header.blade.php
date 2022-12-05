<nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
  <div class="px-3 py-5 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
            <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
            <span class="self-center whitespace-nowrap">Welcome back, {{ auth()->user()->name }}</span>
            </a>
            
        </div>
        <form class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600" action="/logout" method="post">
          @csrf
          <button type="submit">Sign Out</button>
        </form>
        
      </div>
  </div>
</nav>