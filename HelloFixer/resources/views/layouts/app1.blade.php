<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact US')</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}"> <!-- Link to your CSS -->
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
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/products') }}">Services</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/account') }}">Account</a></li>
                        </ul>
                    </nav>
                </div> <!-- Close navbar -->
            </div> <!-- Close container -->
        </div> <!-- Close header -->
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

    <script src="{{ asset('js/app1.js') }}"></script>
</body>

</html>