<nav class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
        </a>
        <a href="{{ route('home') }}" class="w3-bar-item w3-button">HOME</a>
        @auth
        <a href="{{ route('portfolio') }}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
        @endauth
        <a href="{{ route('contact') }}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
        @auth
        <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red"><i></i> LOGOUT</a>
        @endauth
        @guest
        <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-green"><i class="fa fa-user"></i> SIGNUP</a>
        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-green"><i class="fa fa-user"></i> LOGIN</a>
        @endguest


    </div>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        @auth
        <a href="{{ route('portfolio') }}" class="w3-bar-item w3-button "><i class="fa fa-th"></i> PORTFOLIO</a>
        @endauth
        <a href="{{ route('contact') }}" class="w3-bar-item w3-button "><i class="fa fa-envelope"></i> CONTACT</a>
        @auth
        <a href="{{ route('logout') }}" class="w3-bar-item w3-button  "><i></i> LOGOUT</a>
        @endauth
        @guest
        <a href="{{ route('register') }}" class="w3-bar-item w3-button "><i class="fa fa-user"></i> SIGNUP</a>
        <a href="{{ route('login') }}" class="w3-bar-item w3-button "><i class="fa fa-user"></i> LOGIN</a>
        @endguest
    </div>
</nav>
