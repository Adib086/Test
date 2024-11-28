<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Services')</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}"> <!-- Link to your CSS -->

</head>

<body>
<header>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo01.png') }}" alt="logo" width="110px">
                    </a>
                    <span class="site-name">HelloFixer</span>
                </div>

                <nav>
                    <ul id="MenuItems">
                        <li><a href="{{ url('/') }}" class="menu-item" data-key="home">Home</a></li>
                        <li><a href="{{ url('/about-us') }}" class="menu-item" data-key="about">About</a></li>
                        <li><a href="{{ url('/contact') }}" class="menu-item" data-key="contact">Contact</a></li>

                        <!-- Services Dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-key="services">
                                Services <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/service1') }}" data-key="service1">Air Conditioner <br>And Appliance</a></li>
                                <li><a href="{{ url('/service2') }}" data-key="service2">Television And LED</a></li>
                                <li><a href="{{ url('/service3') }}" data-key="service3">Water Purifier</a></li>
                                <li><a href="{{ url('/service4') }}" data-key="service4">Carpenter</a></li>
                                <li><a href="{{ url('/service5') }}" data-key="service5">Electrician</a></li>
                                <li><a href="{{ url('/service6') }}" data-key="service6">Plumber</a></li>
                                <li><a href="{{ url('/service7') }}" data-key="service7">Inverter And Battery</a></li>
                                <li><a href="{{ url('/service8') }}" data-key="service8">Car Repairing</a></li>
                                <li><a href="{{ url('/service9') }}" data-key="service9">CCTV Camera</a></li>
                                <li><a href="{{ url('/service10') }}" data-key="service10">Cleaning Services</a></li>
                                <li><a href="{{ url('/service11') }}" data-key="service11">Interior Design</a></li>
                                <li><a href="{{ url('/service12') }}" data-key="service12">Welding</a></li>
                            </ul>
                        </li>

                        <!-- Languages Dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-key="languages">
                                Languages <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" onclick="changeLanguage('en')">
                                        <img src="https://flagsapi.com/US/flat/32.png" alt="US Flag"
                                             style="width: 20px; margin-right: 5px;">
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="changeLanguage('bn')">
                                        <img src="https://flagsapi.com/BD/flat/32.png" alt="Bangladesh Flag"
                                             style="width: 20px; margin-right: 5px;">
                                        বাংলা
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/faq') }}" class="menu-item" data-key="faq">FAQ's</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>


    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer">
            <div class="container">
                <p>&copy; 2024 HelloFixer. All rights reserved.</p>
                <ul class="footer-links">
                    <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms') }}">Terms of Service</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
<script src="{{ asset('js/app.js') }}"></script>

</html>