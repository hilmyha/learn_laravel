<nav>
  <div class="navbar">
    <h3 class="text-h3 text-primary-500 border "><a href="/">Yuh<span class="text-secondary-500">Belajar</span></a></h3>

    <div class="nav-container">
      <ul id="navbar-nav" class="hidden md:flex">
        <li class="nav-li {{ ($title === 'Home' ? 'text-primary-500 font-bold' : '') }}"><a href="/">Home</a></li>
        <li class="nav-li {{ ($title === 'About' ? 'text-primary-500 font-bold' : '') }}"><a href="/about">About</a></li>
        <li class="nav-li {{ ($title === 'Posts' ? 'text-primary-500 font-bold' : '') }}"><a href="/blog">Blog</a></li>
      </ul>
    </div>
    <div class="toggler">
      <a href="/" class="toggler-btn ">Get Started</a>
      <span id="nav-toggler" class="toggler-btn block md:hidden"><i class="fa-solid fa-bars"></i></span>
    </div>
  </div>
</nav>