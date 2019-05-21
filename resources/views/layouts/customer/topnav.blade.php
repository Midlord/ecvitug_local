<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center d-flex">
            <div id="logo">
                <a href="{{url('/')}}"><h4 style="font-size: 22px;">EC Vitug Constructions</h4></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class=""><a class="{{ Route::is('home') ? 'active' : '' }}" href="{{url('/')}}">Home</a></li>
                    <li><a class="{{ Route::is('about') ? 'active' : '' }}" href="{{route('about')}}">About</a></li>
                    <li><a class="{{ Route::is('projects') ? 'active' : '' }}" href="{{route('projects')}}">Projects</a></li>
                    {{-- <li><a class="{{ Route::is('galleries') ? 'active' : '' }}" href="{{route('galleries')}}">Galleries</a></li> --}}
                    <li><a class="{{ Route::is('shop.index') ? 'active' : '' }}" href="{{route('shop.index')}}">Equipments</a></li>
                    @auth
                        <li><a class="{{ Route::is('estimates') ? 'active' : '' }}" href="{{route('estimates')}}">Free Estimates</a></li>
                    @endauth
                    {{-- <li class="menu-has-children"><a href="#">Pages</a>
                        <ul>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a class="" href="">Blog</a>
                        <ul>
                            <li><a href="blog-home.html">Blog Home</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="{{ Route::is('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contact Us</a></li>
                    @guest
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endguest
                    @auth
                    <li class="menu-has-children" style="margin-top: -10px;"><img class="img-profile rounded-circle" style="height:50px; width:50px; object-fit:cover;" src="@if(Auth::user()->provider){{Auth::user()->photo}}@else{{Auth::user()->photo ? 'http://localhost/ecvitug_local/public/storage/uploads/avatars/'.auth()->user()->photo : 'images/dummy-img.jpg'}}@endif"></a>
                        <ul>
                            <li><a href="{{route('customer.profile')}}">Profile</a></li>
                            <li><a  href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
                        </ul>
                    </li>
                    @endauth
                    <li><a class="{{ Route::is('cart.index') ? 'active' : '' }}" href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"></i><span class="badge" style="position: absolute;border-radius: 50%;color: #5b97f7 !important;font-size: 12px;">{{\Cart::count()}}</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>