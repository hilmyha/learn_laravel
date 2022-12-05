<nav>
  <div class="navbar">
    <h3 class="text-h3 text-primary-500 border "><a href="/">Yuh<span class="text-secondary-500">Belajar</span></a></h3>

    <div class="nav-container">
      <ul id="navbar-nav" class="hidden md:flex">
        <li class="nav-li {{ ($active === 'home' ? 'text-primary-500 font-bold' : '') }}"><a href="/">Home</a></li>
        <li class="nav-li {{ ($active === 'about' ? 'text-primary-500 font-bold' : '') }}"><a href="/about">About</a></li>
        <li class="nav-li {{ ($active === 'posts' ? 'text-primary-500 font-bold' : '') }}"><a href="/posts">Blog</a></li>
        <li class="nav-li {{ ($active === 'categories' ? 'text-primary-500 font-bold' : '') }}"><a href="/categories">Categories</a></li>
      </ul>
    </div>
    
    <div class="toggler">
      @auth
        
        <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white bg-primary-500 hover:bg-primary-400 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Welcome back, {{ auth()->user()->name }} <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

        <!-- Dropdown menu -->
        <div id="dropdownDivider" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDividerButton">
              <li>
                <a href="/dashboard" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
              </li>
            </ul>
            <div class="py-1">
              <form class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600" action="/logout" method="post">
                @csrf
                <button type="submit">Sign Out</button>
              </form>
              {{-- <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">Sign Out</a> --}}
            </div>
        </div>

      @else
        <a href="/login" class="toggler-btn {{ ($active === 'login' ? 'bg-primary-500 text-white' : '') }}">Get Started</a>
      @endauth
      <span id="nav-toggler" class="toggler-btn block md:hidden"><i class="fa-solid fa-bars"></i></span>
    </div>
  </div>
</nav>