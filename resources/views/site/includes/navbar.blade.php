<!-- Header Start -->
<header class="header">
    <!-- NavAccount Start-->
    <nav class="navbar navbar-light bg-light align-items-baseline ">
        <div class="container-xxl container-xl container-lg container-md container-sm">
            <span class="navbar-text">
                Free Shipping On All Orders Over $75!
            </span>

            <ul class="nav ms-lg-auto">
                @if (auth()->check())
                    <li class="nav-item dropdown ms-lg-3 ms-sm-1 ">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative;">
                            @foreach ($profiles as $profile)
                                @if($profile->image)
                                    <img class="img" src="{{asset('adminpanel\img\faces')}}\{{$profile->image}}" style="width:21%;height:3vh;border-radius:50%;position: absolute;top:13%;left:-12%">
                                @else
                                    <img class="img" src="{{asset('adminpanel\img\faces\profile.png')}}" style="width:21%;height:3vh;border-radius:50%;position: absolute;top:13%;left:-12%">
                                @endif
                            @endforeach
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('profile.create')}}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown ms-lg-3 ms-sm-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        </ul>
                    </li>
                @endif

                <li class="nav-item ms-lg-3 ms-sm-1">
                    <a class="nav-link" href="#">Whishlist</a>
                </li>

                <li class="nav-item dropdown ms-lg-3 ms-sm-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Currency:Usd
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Currency:Egp</a></li>
                        <li><a class="dropdown-item" href="#">Currency:Eur</a></li>
                        <li><a class="dropdown-item" href="#">Currency:Ars</a></li>
                    </ul>
                </li>


                <li class="nav-item ms-lg-3  ms-sm-1">
                <a class="nav-link active" href="#"><i class="flatbed-icon fas fa-dolly-flatbed me-2"></i> My Carft(2)</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- NavAccount End-->

    <!-- Search Start -->
    <div class="search-box  mt-5 mb-5">
        <div class="container-lg container-md container-sm container-xs">
            <form action="get"  class="d-flex  mx-auto  form-search">
                <input class="form-control p-2 flex-grow-1 bd-highlight" type="text" placeholder="Search Here What You Need...." >
                <button class="btn" type="submit" ><i class="search-icon fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Navbar Fashion Start -->
    <div class="navbarFashion">
        <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
            <div class="container-lg container-md container-sm container-xs">
                <a class="navbar-brand " href="#">fashion</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon button-menuIcon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item  ms-lg-3">
                            <a class="nav-link  active" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>

                        <li class="nav-item  ms-lg-3  ">
                            <a class="nav-link" href="#">Women</a>
                        </li>

                        <li class="nav-item  ms-lg-3 ">
                            <a class="nav-link" href="#">Men</a>
                        </li>

                        <li class="nav-item ms-lg-3 ">
                            <a class="nav-link" href="#">FootWear</a>
                        </li>

                        <li class="nav-item  ms-lg-3 ">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>

                        <li class="nav-item  ms-lg-3 ">
                            <a class="nav-link" href="#">Sales</a>
                        </li>

                        <li class="nav-item ms-lg-3 ">
                            <a class="nav-link" href="#">Blog</a>
                        </li>

                        <!-- Navbar Account -->
                        @if (auth()->check())
                            <li class="nav-item dropdown ms-lg-3 ms-sm-1 ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative;">
                                    @foreach ($profiles as $profile)
                                        @if($profile->image)
                                            <img class="img" src="{{asset('adminpanel\img\faces')}}\{{$profile->image}}" style="width:21%;height:3vh;border-radius:50%;position: absolute;top:13%;left:-12%">
                                        @else
                                            <img class="img" src="{{asset('adminpanel\img\faces\profile.png')}}" style="width:21%;height:3vh;border-radius:50%;position: absolute;top:13%;left:-12%">
                                        @endif
                                    @endforeach
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('profile.create')}}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item dropdown ms-lg-3 ms-sm-1">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                </ul>
                            </li>
                        @endif

                        <li class="nav-item ms-lg-3  nav-account">
                            <a class="nav-link" href="#">Whishlist</a>
                        </li>

                        <li class="nav-item dropdown ms-lg-3 ms-sm-1 nav-account">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Currency:Usd
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Currency:Egp</a></li>
                                <li><a class="dropdown-item" href="#">Currency:Eur</a></li>
                                <li><a class="dropdown-item" href="#">Currency:Ars</a></li>
                            </ul>
                        </li>

                        <li class="nav-item ms-lg-3  nav-account">
                            <a class="nav-link" href="#"><i class="flatbed-icon fas fa-dolly-flatbed me-2"></i> My Carft(2)</a>
                        </li>

                        {{-- <li class="nav-item ms-lg-3  ms-sm-1 nav-account">
                            <a class="nav-link" href="{{route('register')}}">Sign Up</a>
                        </li>

                        <li class="nav-item ms-lg-3  ms-sm-1 nav-account">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar Fashion End -->
</header>
