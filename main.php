<?php require_once('googleauth.php') ?>
<?php require_once('vendor/autoload.php') ?>
<?php
$clientID = "129849669835-93nqsp5u16mhnkl20hv136tn8lsjc661.apps.googleusercontent.com";
$secret = "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";
// Google API Client
$gclient = new Google_Client();
$gclient->setClientId($clientID);
$gclient->setClientSecret($secret);
$gclient->setRedirectUri('http://localhost/Texel/main.php');


$gclient->addScope('email');
$gclient->addScope('profile');

if (isset($_GET['code'])) {
    // Get Token
    $token = $gclient->fetchAccessTokenWithAuthCode($_GET['code']);

    // Check if fetching token did not return any errors
    if (!isset($token['error'])) {
        // Setting Access token
        $gclient->setAccessToken($token['access_token']);

        // store access token
        $_SESSION['access_token'] = $token['access_token'];

        // Get Account Profile using Google Service
        $gservice = new Google_Service_Oauth2($gclient);

        // Get User Data
        $udata = $gservice->userinfo->get();
        // if (strpos($userData->email, 'rs') !== 0) {
        //     echo '<script>alert("Email does not start with rs!");</script>';
        //     header('location: ./'); // Redirect to the home page
        //     exit;
        // }
        foreach ($udata as $k => $v) {
            $_SESSION['login_' . $k] = $v;
        }
        $_SESSION['ucode'] = $_GET['code'];

        header('location: ./');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Texcel</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./main.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Texel</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);" onclick="topFunction()"><i
                            class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToSection()"><i
                            class="fas fa-book"></i>Branches</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="event.html" onclick="scrollToSection()"><i
                            class="far fa-calendar-alt"></i>Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="games.html" onclick="scrollToSection()"><i
                            class="fa fa-gamepad"></i>Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="scrollToSection()"><i
                            class="fas fa-user"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $gclient->createAuthUrl() ?>"><i
                            class="far fa-chart-bar"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mailto:samvedhan@rguktsklm.ac.in" onclick="scrollToSection()"><i
                            class="fas fa-phone"></i>Contact Us !!</a>
                </li>

            </ul>
        </div>
    </nav>
    <div id="main2">
        <div class="cont">
            <section class="head">
                    <section class="home">
                        <div class="home-content">
                            <h1 >
                                <span class="title-word title-word-1">This</span>
                                <span class="title-word title-word-2">is</span>
                                <span class="title-word title-word-3">Texel</span>
                                <span class="title-word title-word-4">!!!</span>
                            </h1>
                            <h3 style="text-decoration: none;">2k23</h3>
                            <p style="color: whitesmoke;">Unleashing The Power Of Technology</p>
                            <div class="btn-box">
                                <a href="#" class="but"> look once</a>
                                <a href="#" class="but"> About</a>
            
                            </div>
            
                        </div>
                    </section>
                </section>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.rings.min.js"></script>
    <script>
        VANTA.RINGS({
            el: "#main2",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00
        })


        document.getElementById('main2');
        const ctx = canvas.getContext('2d');
        ctx.fillStyle = 'red'; ctx.fillRect(0, 0, canvas.width, canvas.height);
    </script>

    <!-- Entering into the Events mode  -->
    <br>
    <section class="body" id="branches">
        <div class="card"
            style="background-image:url('https://clipground.com/images/cse-logo-clipart.gif');background-repeat: no-repeat;background-size:200px;">
            <div class="card-content">
                <br>
                <br>
                <br>
                <br>
                <a class="fancy" href="#">
                    <span class="top-key"></span>
                    <span class="text">About</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>
            </div>
        </div>

        <!-- card 2 -->
        <div class="card"
            style="background-image:url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgKxHqXxAkDFtmo0Z5IsVvfOm1riTd0pIqyQfiMJaMmUeLzCXw0LLzcpku-EFact-Q4Ap4peIxa8UyqZW6JgsZewj8oa_zz_XNiOudQXRJzMVOw-OsuiSBZecsUef1PtO6fekqamXOyLN7gg2c8UCHUJA-isAdz4minWxWr-qX8cBUh39bT_Yc3gjU5XpU/s252/dept_im2-removebg-preview.png');background-repeat: no-repeat;background-size:250px;">
            <div class="card-content">
                <br>
                <br>
                <br>
                <br>
                <a class="fancy" href="#">
                    <span class="top-key"></span>
                    <span class="text">About</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>
            </div>
        </div>

        <!-- card 3 -->
        <div class="card"
            style="background-image:url('https://i.pinimg.com/474x/4b/bc/2d/4bbc2da500071035914de88e1da69219.jpg');background-repeat: no-repeat;background-size:180px;">
            <div class="card-content">
                <br>
                <br>
                <br>
                <br>
                <a class="fancy" href="#">
                    <span class="top-key"></span>
                    <span class="text">About</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>
            </div>
        </div>
        <!-- card 4 -->
        <div class="card"
            style="background-image:url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiM8wIL3LxyHTYbig8Wd469XVQzifyQO69-rUse4q30Ns6g1MTOjwamsM6dbyigQdpBqi7VwOCRDYjn2I6jndvmApQKyLAlKhjtJbROROU_HbLsYLbnACQ1yV8nM-wV8w97q5Yi_HJb2j7CPx3hA0RQ4FVns94G-_-fjy3KqPnnf8xb8G4wAzXzwviYomY/s320/civil1.png');background-repeat: no-repeat;background-size:180px;">
            <div class="card-content">
                <br>
                <br>
                <br>
                <br>
                <a class="fancy" href="#">
                    <span class="top-key"></span>
                    <span class="text">About</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>
            </div>
        </div>

        <!-- card 5 -->
        <div class="card"
            style="background-image:url('https://webstockreview.net/images/engineer-clipart-engineer-symbol-14.png');background-repeat: no-repeat;background-size:180px;">
            <div class="card-content">
                <br>
                <br>
                <br>
                <br>
                <a class="fancy" href="#">
                    <span class="top-key"></span>
                    <span class="text">About</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>
            </div>
        </div>



    </section>
    <div class="empty" style="padding: 30px;  background: #f4f4f4;">
        <br>
        <br>
    </div>

    <section class="About">
        <h3> Tech Fest</h3>
        <br>
        <div class="container">

            <h5>
                Certainly, here are a few main lines that summarize the concept of engineering tech fests:

                "Engineering tech fests are annual events organized by various engineering branches where students and
                professionals showcase their innovations, compete in technical challenges, attend workshops, and engage
                in
                discussions on emerging technologies.<br> These festivals serve as platforms for knowledge exchange,
                collaboration, and the celebration of engineering achievements." </h5>
        </div>
        <br>

    </section>
    <br>
    <br>
    <section class="down1" background="#f4f4f4" id="event">
        <div id="faq">
            <h1>EVENTS</h1>
            <ul>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>Technical Event</h2>
                    <p>JavaScript Can Change HTML Attribute Values</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>Non-technical Events</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quasi, quia provident facere
                        recusandae
                        itaque assumenda fuga veniam dicta earum dolorem architecto facilis nisi pariatur.</p>
                </li>
                <li>
            </ul>
        </div>

    </section>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-item">
                <h3>Contact Us</h3>
                <p>Email: contact@example.com</p>
                <p>Phone: +123 456 789</p>
            </div>
            <div class="footer-item">
                <h3>Follow Us</h3>
                <div class="main1">
                    <div class="up">
                        <button class="card1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero" class="instagram">
                                <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8,8)">
                                        <path
                                            d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <button class="card2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30px" height="30px"
                                class="twitter">
                                <path
                                    d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="down">
                        <button class="card3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px"
                                class="github">
                                <path
                                    d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>
                        </button>
                        <button class="card4">
                            <svg height="30px" width="30px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"
                                class="discord">
                                <path
                                    d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
</body>

</html>