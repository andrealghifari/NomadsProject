<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="{{route('Home')}}">
        <img src="frontend/images/logo_NOMADS.png" alt="" /> 
      </a>
      <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <!-- navbar collapse memungkinkan untuk responsive di Mobile -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Packages</a>
          </li>

         <li class="nav-item dropdown">
           <a href="#" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">Services</a>
           <div class="dropdown-menu">
             <a href="#" class="dropdown-item">Link 1</a>
             <a href="#" class="dropdown-item">Link 2</a>
             <a href="#" class="dropdown-item">Link 3</a>
           </div>
         </li>

          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Testimonial</a>
          </li>
        </ul>

        @guest
            <!-- Mobile Button -->
        <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login  my-2 my-sm-0 " type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
            Masuk
          </button>
        </form>

        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
            Masuk
          </button>
        </form>
        @endguest

        @auth
                <!-- Mobile Button -->
        <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
          @csrf
          <button class="btn btn-login  my-2 my-sm-0 " type="submit">
            Keluar
          </button>
        </form>

        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
          @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
            Keluar
          </button>
        </form>
        @endauth
      </div>
    </nav>
  </div>