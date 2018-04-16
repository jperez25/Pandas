<div class="logo">
    
    <h1>{{ config('app.name', 'Lucky Panda') }}</h1>
</div>
<div class="container">

<!-- Static navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('index')}}">{{ config('app.name', 'Lucky Panda') }}</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li ><a href="{{route('index')}}">Home</a></li>
        <li><a href="{{route('menu')}}">Menu</a></li>
        <li><a href="{{route('about')}}">About</a></li>      
        <li><a href="{{route('contact')}}">Contact</a></li>
        <li><a href="#">Order</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
          @guest
            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
          @else
          
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" >

                    <ul>
                            <li>
                                <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('My orders') }}
                                </a>
                            </li>

                            @if(Auth::user()->isAdmin())
                            <li>
                                <a class="dropdown-item" href="{{route('admin')}}">
                                        {{ __('Admin') }}
                                </a>
                            </li>
                            @endif

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                            </li>

                    </ul>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>

</div> <!-- /container -->
