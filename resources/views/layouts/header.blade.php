<div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="{{route('home')}}">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home')}}">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li> -->

                        
                        
                        @if(Auth::check())
                            @if(auth()->user()->is_admin)
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('list-products')}}">
                            <i class="fas fa-shopping-cart"></i>
                            Products
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('show-list-accounts')}}">
                            <i class="far fa-file-alt"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile')}}">
                                <i class="far fa-user"></i>
                                Profile
                            </a>
                        </li>
                            @else
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('list-products')}}">
                            <i class="fas fa-shopping-cart"></i>
                            Products
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile')}}">
                                <i class="far fa-user"></i>
                                Profile
                            </a>
                        </li>
                            @endif
                        @endif
                        
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li> -->
                    </ul>
                    @if (Auth::check())
                    <ul class="navbar-nav">
                        <li class="nav-item" style="display:flex;">
                            <span class="nav-link d-block">{{auth()->user()->username}}
                            @if(Auth::user()->avatar)
                            <img src="{{'/storage/image/'.auth()->user()->avatar}}" alt="avatar" class="avatar">
                            @endif    
                            </span>
                            <a class="nav-link d-block" href="{{route('logout')}}">                   
                                 <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block log-out" href="{{route('show-form-login')}}">
                                <b>Login</b>
                            </a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>

        </nav>