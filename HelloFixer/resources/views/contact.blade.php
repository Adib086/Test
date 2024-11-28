<!-- resources/views/contact.blade.php -->

@extends('layouts.app')
<!-- Assuming you have a layout file -->

@section('content')
<section class="contact_section layout_padding">
    <div class="container px-0">
        <div class="heading_container ">
            <h2 class="contact-heading">Contact Us</h2>
        </div>
    </div>
    <div class="container container-bg">
        <div class="row">
            <div class="col-lg-7 col-md-6 px-0">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Bashundhara+North+South+University,+Dhaka,+Bangladesh"
                            width="800" height="400" frameborder="0" style="border:0; width: 100%; height:100%"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <<form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <style>
                    #message {
                        width: 100%;
                        height: 200px;
                    }
                    </style>
                </div>
                <button type="submit">Submit</button>
                </form>


        </div>
    </div>
    </div>
</section>

<!-- end contact section -->

<!-- info section -->

<section class="info_section layout_padding2-top">
    <div class="social_container">
        <div class="social_box">
            <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>

<style>
/* Global Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Contact Section */
/* Contact Section */
.contact_section {
    padding: 50px 0;
    background-color: #f9f9f9;
    text-align: center;
    /* Center text in the section */
    display: flex;
    /* Use flexbox for alignment */
    flex-direction: column;
    /* Align children in a column */
    justify-content: center;
    /* Center content vertically */
    align-items: center;
    /* Center content horizontally */
    min-height: 100vh;
    /* Ensure section takes full viewport height */
}

.contact-heading {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 30px;
    color: #333;
}

/* Map Container */
.map_container {
    margin-bottom: 30px;
}

.map-responsive {
    overflow: hidden;
    padding-top: 56.25%;
    /* 16:9 */
    position: relative;
}

.map-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

/* Form Styles */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="email"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.message-box {
    height: 100px;
}

/* Button Styles */
button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

/* Info Section */
.info_section {
    padding: 20px 0;
    background-color: #f1f1f1;
    text-align: center;
}

.social_container {
    margin-top: 15px;
}

.social_box a {
    margin: 0 10px;
    font-size: 1.5rem;
    color: #333;
    transition: color 0.3s ease;
}

.social_box a:hover {
    color: #007bff;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .contact_section {
        padding: 30px 0;
    }

    .contact-heading {
        font-size: 2rem;
    }

    input[type="text"],
    input[type="email"] {
        font-size: 0.9rem;
    }

    button {
        width: 100%;
    }
}
</style>
<style>
/* General styles for header and footer */
.container {
    width: 100%;
    /* Full width for the container */
    margin: 0;
    /* Remove auto margins */
}

.header,
.footer {
    background-color: #f0f0f0;
    /* Light background color */
    padding: 20px 0;
    /* Padding for top and bottom */
    text-align: center;
    /* Centered text */
}

.header {
    position: relative;
    /* This allows absolute positioning within */
    padding: 10px;
    /* Adjust padding as needed */
}

.navbar {
    display: flex;
    /* Use flexbox for layout */
    justify-content: space-between;
    /* Align items on the left and right */
    align-items: center;
    /* Vertically center items */
}

.logo {
    display: flex;
    /* Align logo and text in a row */
    align-items: center;
    /* Vertically center the logo and site name */
    margin-left: 430px;
    /* Move logo and site name to the right */
}

.logo img {
    margin-right: 10px;
    /* Space between logo and name */
}

.site-name {
    font-size: 24px;
    /* Adjust font size as needed */
    font-weight: bold;
    /* Make the site name bold */
}


/* Navigation menu styles */
nav {
    margin-top: 10px;
    /* Space between logo and nav */
}

#MenuItems a {
    text-decoration: none;
    /* Remove underline from links */
    color: #050505;
    /* Text color */
    font-weight: bold;
    /* Make text bold */
}

#MenuButton {
    background-color: transparent;
    /* Set background to transparent */
    border: none;
    /* Remove border if desired */
    color: #f0f0f0;
    /* Text color */
    padding: 10px 15px;
    /* Adjust padding as needed */
    cursor: pointer;
    /* Change cursor to pointer */
    font-weight: bold;
    /* Make the button text bold */
}

/* Change the hover color to transparent */
#MenuButton:hover {
    background-color: transparent;
    /* Example of a semi-transparent white */
}

/* To align logo, name, and button on the right */
.navbar-right {
    display: flex;
    align-items: center;
    /* Vertically center the items */
}

#MenuItems {
    list-style: none;
    /* Remove bullet points */
    padding: 0;
    /* Remove default padding */
    margin-left: 10px;
    /* Space between the menu and the logo/text */
    font-size: 18px;
    /* Increase text size */
}

#MenuItems li {
    display: inline;
    /* Display items inline */
    margin-right: 15px;
    /* Space between menu items */
}

#MenuItems a {
    text-decoration: none;
    /* Remove underline from links */
    color: #f0f0f0;
    /* Text color */
}



.header {
    background: radial-gradient(#fff, #ffd6d6);
}

/* Footer styles */
.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0;
    display: flex;
    flex-direction: column;
    /* Arrange content in a column */
    justify-content: center;
    /* Center content vertically */
    align-items: center;
    /* Center content horizontally */
    height: 150px;
}

.footer .container {
    display: flex;
    flex-direction: column;
    /* Set content in column layout */
    align-items: center;
    /* Center content horizontally */
    justify-content: center;
}

.footer p {
    margin: 10px 0;
    /* Add margin for spacing */
}

.footer-links {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    /* Arrange links in a column */
    align-items: center;
    /* Center align the links */
}

.footer-links li {
    margin-bottom: 10px;
    /* Space between list items */
}

.footer-links li a {
    color: white;
    text-decoration: none;
}

.footer-links li a:hover {
    text-decoration: underline;
}


/* Responsive styles */
@media (max-width: 768px) {

    .header,
    .footer {
        padding: 15px 0;
        /* Adjust padding for smaller screens */
    }

    #MenuItems li {
        display: block;
        /* Stack menu items on small screens */
        margin: 10px 0;
        /* Space between stacked items */
    }
}

#MenuItems {
    list-style: none;
    /* Remove bullet points */
    padding: 0;
    /* Remove default padding */
    display: inline-block;
    /* Make the list items inline-block */
    font-size: 18px;
    /* Increase text size */
}

#MenuItems li {
    display: inline;
    /* Display items inline */
    margin: 0 15px;
    /* Space between menu items */
}

#MenuItems a {
    text-decoration: none;
    /* Remove underline from links */
    color: #333;
    /* Text color */
    font-size: 1.2rem;
    /* Increase font size for the buttons */
    padding: 10px 15px;
    /* Add padding for better button appearance */
    border-radius: 5px;
    /* Rounded corners for the buttons */
    transition: background-color 0.3s;
    /* Smooth background transition */
}

/* Optional: Change background color on hover */
#MenuItems a:hover {
    background-color: transparent;
    /* Light grey background on hover */
}
</style>
@endsection