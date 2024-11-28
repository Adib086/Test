<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloFixer</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="header">
    <div class="container">
        <div class="navbar">
        <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo01.png') }}" alt="logo" width="125px">
    </a>
    <span class="site-name">HelloFixer</span>
            <nav>
                <ul id="MenuItems">
                <li><a href="{{ url('/products') }}">Services</a></li>
                <li><a href="{{ url('/about-us') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/') }}">Go Back</a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>

    <!-- Account Page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/image01.png')}}" width="70%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="register()">Register</span>
                            <span onclick="login()">Login</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" method="GET" action="/users">
    @csrf
    <input type="text" name="uname" placeholder="username" value="{{ old('uname') }}"> <!-- Preserve username -->
    <input type="password" name="pass" placeholder="Password" value=""> <!-- Clear password -->
    <button type="submit" class="btn">Login</button>
    <a href="">Forget Password</a>

    @if ($errors->has('login_error'))
        <div class="alert alert-danger">
            {{ $errors->first('login_error') }}
        </div>
    @endif
</form>



                        <form id="RegForm" method="POST" action="/users" >
                            @csrf
                            <input type="text" name="uname" placeholder="Username" required>
                            <input type="email" name="email" placeholder="Email">
                            <input type="text" name="mobile" placeholder="Mobile">
                            <input type="password" name="pass" placeholder="Password" required>
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="{{ asset('images/play-store.png')}}">
                    <img src="{{ asset('images/app-store.png')}}">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{ asset('images/footerlogo.png')}}">
                <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.
                </p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2024 - NorthSouth University</p>
    </div>
</div>
    <!-- javascript -->

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

    <!-- Toggle Form -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        function register() {
            RegForm.style.transform = "translatex(300px)";
            LoginForm.style.transform = "translatex(300px)";
            Indicator.style.transform = "translateX(0px)";

        }
        function login() {
            RegForm.style.transform = "translatex(0px)";
            LoginForm.style.transform = "translatex(0px)";
            Indicator.style.transform = "translate(100px)";

        }
    </script>
<style>/* General body styles */
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Ensure the footer stays at the bottom */
    margin: 0;
}
#MenuItems a {
    text-decoration: none; /* Remove underline from links */
    color: #050505; /* Text color */
    font-weight: bold; /* Make text bold */
    font-size: 18px; /* Increase text size */
}

/* Container styles for the main content */
.container {
    flex: 1; /* Allow the container to grow and fill space */
}

/* Account page adjustments */
.account-page {
    padding: 150px; /* Adjust padding around the account page */
}

/* Form container styles */
.form-container {
    border: 1px solid #ccc; /* Add border to the form container */
    padding: 40px; /* Increase padding inside the form container */
    border-radius: 10px; /* Rounded corners */
    max-width: 900px; /* Increased maximum width of the form */
    min-height: 500px; /* Increased minimum height of the form */
    margin: 0 auto; /* Center the form */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

/* Input fields styling */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="password"] {
    width: 100%; /* Full width of the input fields */
    padding: 15px; /* Increased padding for input fields */
    margin: 15px 0; /* Space between input fields */
    border: 1px solid #ccc; /* Border for input fields */
    border-radius: 5px; /* Rounded corners for input fields */
    font-size: 18px; /* Increased text size in input fields */
}

/* Placeholder styling */
.form-container input::placeholder {
    font-size: 16px; /* Increased placeholder text size */
    color: #aaa; /* Color for placeholder text */
}

/* Button styling */
.form-container button {
    padding: 15px; /* Increased padding for buttons */
    font-size: 18px; /* Increased button text size */
}

/* Footer styling */
.footer {
    background-color: #333; /* Dark background for the footer */
    color: #fff; /* White text color */
    padding: 20px 0; /* Padding above and below the footer content */
    text-align: center; /* Center the footer text */
}

/* Responsive adjustments */
.footer-col-1,
.footer-col-2,
.footer-col-3,
.footer-col-4 {
    margin: 10px 0; /* Space between footer columns */
}

/* Responsive design */
@media (max-width: 768px) {
    .form-container {
        width: 90%; /* Full width on smaller screens */
    }
}
.logo {
    display: flex; /* Aligns the logo and site name horizontally */
    align-items: center; /* Center the items vertically */
}

.site-name {
    font-size: 24px; /* Adjust the font size as needed */
    font-weight: 600; /* Bold font for the name */
    color: #333; /* Color for the text */
    margin-left: 15px; /* Space between the logo and the name */
    animation: fadeIn 1s ease-in-out; /* Apply the animation */
}

/* Animation keyframes */
@keyframes fadeIn {
    0% {
        opacity: 0; /* Start completely transparent */
        transform: translateY(-20px); /* Start slightly above */
    }
    100% {
        opacity: 1; /* End fully visible */
        transform: translateY(0); /* End at the original position */
    }
}
 </style>
</body>

</html>
