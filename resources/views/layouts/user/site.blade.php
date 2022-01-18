<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Guide</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ asset('template/user/site/css/style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('template/user/site/css/coin-slider.css')}}" />
<script type="text/javascript" src="{{ asset('template/user/site/js/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{ asset('template/user/site/js/cufon-quicksand.js')}}"></script>
<script type="text/javascript" src="{{ asset('template/user/site/js/jquery-1.4.2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('template/user/site/js/script.js')}}"></script>
<script type="text/javascript" src="{{ asset('template/user/site/js/coin-slider.min.js')}}"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><span>Tourist Guide</span></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li>
              
           <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
          </li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
      <div class="img"><img src="{{ asset($site->image) }}" width="935" height="293" alt="" /> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>{{ $site->name_site }}</span></h2>
          <p class="infopost">Cameroon</span>, <span class="infopost">{{ $site->category }},</span><span class="infopost">{{ $site->type }}</span> &nbsp;&nbsp;|&nbsp;&nbsp; <span class="infopost">{{ $site->region }},</span> <span>{{ $site->city }}</span>, <span> Description</span></p>
          <div class="clr"></div>
          <div class="img"><img src="{{ asset($site->image) }}" width="179" height="215" alt="" class="fl" /><a href="#" class="com"><span>11</span> Com</a></div>
          <div class="post_content">
            <p><strong> {{ $site->description }}</strong></p>
            <p class="spec"><a href="{{$site->google_map}}" class="rm">google_map &raquo;</a></p>
          </div>
          <div class="clr"></div>
          <div class="gadget">
          <ul class="sb_menu">
            <li><span> Cameroon</span></li>
            <li><span> {{ $site->category }}</span></li>
            <li><span> {{ $site->type }}</span></li>
            <li><span> {{ $site->region }}</span></li>
            <li><span> {{ $site->city }}</span></li>
            <li><a href="{{$site->google_map}}"> google_map</a></li>
          </ul>
        </div>
        </div>
       </div>
    </div>
  </div>
  
</div>

</html>
