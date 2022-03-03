<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{url('about')}}" class="nav-item nav-link">About Us</a>
                <a href="{{url('services')}}" class="nav-item nav-link">Our Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Students</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{url('products')}}" class="dropdown-item">myACE Store</a>
                        <a href="{{url('price')}}" class="dropdown-item">Pricing Plan</a>
                        <a href="{{url('team')}}" class="dropdown-item">Our Dentist</a>
                        <a href="{{url('testimonials')}}" class="dropdown-item">Testimonials</a>
                        <a href="{{url('appointment')}}" class="dropdown-item">Appointment</a>
                    </div>
                </div>
                <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->
            <a href="{{url('appointment')}}" class="btn btn-primary py-2 px-4 ms-1">Appointment</a>
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-info py-2 px-4 ms-1">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li> -->
                @endif
            @else
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu m-0">
                    <a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
            @if(session('cart'))
            <a href="{{url('cart')}}" class="ms-3">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span style="border: 1px solid #32a4da;color: #32a4da;border-radius: 100%;" class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </a>
            @endif
        </div>
    </nav>