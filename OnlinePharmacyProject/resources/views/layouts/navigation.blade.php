<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Online Pharmacy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <form class="navbar-form navbar-right" action="">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search medicines">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
      @csrf
      <ul class="nav navbar-nav navbar-right">
        @auth
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hello {{ Auth::user()->firstName }}</a></li>
        @endauth
        <li class="dropdown"><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a>
          <div class="dropdown-content" aria-label="submenu">
            @auth
            <a href="{{ url('/logout') }}"> {{ __('Logout') }}</a>
            @endauth
            @guest
            <a href="{{ url('/registration-page') }}">Register</a>
            <a href="{{ url('/login-page') }}">Login</a>
            @endguest
          </div>
        </li>
        <li><a href="#" onclick="return false";><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
