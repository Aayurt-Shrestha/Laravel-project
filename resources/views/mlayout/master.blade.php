<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/jquery-1.11.0.min.js') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset('js/clock.js') }}">
</head>
<body style='background: #161616;font: normal 16px "Tahoma" , Arial, Helvetica, sans-serif;color: #fefefe'>

<div class="navbar">
  <div class="container">
  <div>
  
  <a href="{{url('/')}}">Home</a>
  @if(Gate::check('isAuthor')||Gate::check('isAdmin')||Gate::check('isUser'))
  <a href="create" style="color: green;">Create Post</a>
  @endif
  @if(Gate::check('isAdmin'))
    <a href="/listofuser" style="color: white;">LIST of Users</a>
  @endif
  </div>
  <div class="nav navbar-right" style="padding-right: 15px">
  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                      
                        <a href="/user/{{Auth::user()->id}}">My Posts</a>
                        <span style="color: silver; border: 1px solid grey;">Hi,{{ Auth::user()->name }}({{Auth::user()->user_type}})
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </span>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
  @endif
  </div>
  </div>
</div>

<div class="container">
    @yield('body')
</div>

</body>
</html>
