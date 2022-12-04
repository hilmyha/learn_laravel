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
      <a href="/" class="toggler-btn ">Get Started</a>
      <span id="nav-toggler" class="toggler-btn block md:hidden"><i class="fa-solid fa-bars"></i></span>
    </div>
  </div>
</nav>