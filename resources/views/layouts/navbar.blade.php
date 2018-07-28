
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

<div id="app">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/posts">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbSJSr8MHpi4PwxaNkUlPwtiHJC3vNeX-VWDReBFFPmPak0Cxo" width="30" height="30" class="d-inline-block align-top" alt="">
                Demo
              </a>
  {{--  <div class="container">  --}}

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


      <div class="collapse navbar-collapse" id="navbarResponsive">
       {{--  <div class="navbar">  --}}
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              
              <li class="nav-item">
                      <a class="nav-link" href="{{ url('posts') }}">{{ __('Home') }}</a>
                  </li>
                  
                  <li>    
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     Hi ,  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

             
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    
                    

                      <a class="dropdown-item" href="posts/create"><i class="far fa-file-alt"></i>
                          new code
                      </a>

                      <a class="dropdown-item" href="home"><i class="fas fa-cogs"></i>
                        admin
                      </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                      
                  </div>



              </li>
            
          @endguest
      </ul>
  </div>
  
</nav>

