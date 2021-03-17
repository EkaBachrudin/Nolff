<header>
    <div class="header-area ">
    <div id="sticky-header" class="main-header-area">
    <div class="container-fluid">
    <div class="header_bottom_border">
    <div class="row align-items-center">
    <div class="col-xl-3 col-lg-2">
    <div class="logo">
    <a href="#">
    <img src="{{asset('nolff/images/logo_s.png')}}" alt="" width="100px">
    </a>
    </div>
    </div>
    <div class="col-xl-6 col-lg-7">
    <div class="main-menu  d-none d-lg-block">
    <nav>
    <ul id="navigation">
    <li><a class="active" href="/">HOME</a></li>
    <li><a href="#">COMPANY <i class="ti-angle-down"></i></a>
        <ul class="submenu">
            <li><a href="{{route('company.history')}}">HISTORY</a></li>
            <li><a href="{{route('company.manufacture')}}">MANUFACTURE</a></li>
            <li><a href="{{route('company.v&m')}}">VISION&MISSION</a></li>
        </ul>
    </li>
    <li><a href="#">PRODUCT <i class="ti-angle-down"></i></a>
        <ul class="submenu">
            <li><a href="{{route('product.office')}}">Office</a></li>
            <li><a href="{{route('product.bedroom')}}">Bed Room</a></li>
            <li><a href="{{route('product.livingroom')}}">Living Room</a></li>
            <li><a href="{{route('product.walkincloset')}}">Walk In Closet</a></li>
            <li><a href="{{route('product.wardrobe')}}">Wardrobe</a></li>
            <li><a href="{{route('product.kitchen')}}">Kitchen Set</a></li>
        </ul>
    </li>
    <li><a href="{{route('gallery')}}">GALLERY</a></li>
    <li><a href="{{route('contact')}}">CONTACT</a></li>
    </ul>
    </nav>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
    <div class="say_hello">
    <a href="#">Say Hello</a>
    </div>
    </div>
    <div class="col-12">
    <div class="mobile_menu d-block d-lg-none"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </header>