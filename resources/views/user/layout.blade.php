<!DOCTYPE html>
<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" id="mobile-simulator">
        window.hasMobileFirstExtension = true;</script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

   
    <link rel="shortcut icon" href="https://thetork.com/demos/html/uevent/assets/images/favicon.png"
        type="image/x-icon">
    @yield('linksStyle')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style type="text/css" id="operaUserStyle"></style>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    <div class="preloader" style="display: none;">
        <img src="{{asset('./assets/index_files/preloader.gif')}}" alt="Uevent">
    </div>
    <header class="header-section">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('./assets/index_files/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="/">Home</a>

                            </li>

                            <li>
                                <a href="#">Schedule</a>

                            </li>
                            
                            @if(Auth::check() && Auth::user()->roles[0]->id == '3')
                                <li class="menu-item-has-children">
                                    <a href="#team">Events</a>
                                    <ul class="submenu">
                                        <li><a href="/Events">All Event</a></li>
                                        <li><a href="/AddEvent">Add Event</a></li>
                                        <li><a href="/MyEventReservation/{{ Auth::user()->id }}">Accepte Reservation</a></li>
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="/Events">Events</a>
                                </li>
                            @endif
                            
                            <li>
                                <a href="#">Pricing</a>

                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        <div class="header-btn">
                            @if(Auth::check())
                                <a href="/logout" class="default-btn move-right">
                                    <span>Logout<svg class="svg-inline--fa fa-arrow-right" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            @else
                                <a href="/login" class="default-btn move-right">
                                    <span>Join Now <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            @endif
                        </div>
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    @yield('liknsJs')
    <footer class="footer" style="background-image:url(assets/images/footer/bg.png) ;">
        <div class="footer__copyright">
            <div class="container">
                <div class="text-center py-4">
                    <p class=" mb-0">© 2023 | All Rights Reserved </p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
@yield('style')