<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TutorPad Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item" class={{ Request::is('/') ? "active" : "" }}><a class="nav-link" href="/">Home</a></li>
      <li class="nav-item" class={{ Request::is('blog') ? "active" : ""}}><a class="nav-link" href="/blog">Blog</a></li>
      <li class="nav-item" class={{ Request::is('about') ? "active" : ""}}><a class="nav-link" href="/about">About</a></li>
      <li class="nav-item" class={{ Request::is('contact') ? "active" : ""}}><a class="nav-link" href="/contact">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right my-2 my-lg-0">
      @if (Auth::check())
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              Logout</a>
            </li>
          </ul>
        </li>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
      @else
        <li><a href="{{route('login') }}" class="btn btn-outline-light">Login</a></li>
      @endif
    </ul>
  </div>
</nav>
<br><br>
