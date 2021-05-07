<?php
if (isset($_POST['register'])) {
    header('location: insert.php');
}
if (isset($_POST['login'])) {
    header('location: login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fcd88ec6a8.js" crossorigin="anonymous"></script>

    <!--     <link href='style.css' rel='stylesheet' type='text/css' />   -->
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.1.min.js'></script>
    <!--  <script type='text/javascript' src='jquery.flexisel.js'></script> -->

    <!--     <link rel="stylesheet" href="ggs.css">     -->
    <style>
        body {
            font-family: "Roboto Condensed", Tahoma, Geneva, sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 26px;
            color: #666d81;
        }

        #nav_btn {
            background-color: #131d3b;
            margin: 10px;
            font-weight: 600;
            padding: 4px;
        }

        #nav_btn:hover {
            color: #ae1010;
            background-color: #f0f0f0;
        }

        #nav_btnn {
            background-color: #131d3b;
            margin: 10px;
            font-weight: 600;
            padding: 4px;
        }

        #nav_btnn:hover {
            color: #ae1010;
            background-color: #f0f0f0;
        }

        #nav_butn {
            background-color: #131d3b;
            margin: 10px;
            font-weight: 600;
            padding: 4px;
        }

        #nav_butn:hover {
            color: #ae1010;
            background-color: #f0f0f0;
        }

        #nav_bt {
            background-color: #131d3b;
            font-weight: 600;
            margin: 10px;
            padding: 4px;
        }

        #nav_bt:hover {
            color: #ae1010;
            background-color: #f0f0f0;
        }

        .icons {
            padding: 8px !important;
        }

        #top_nav {
            background-color: transparent !important;
            height: 60px;
            z-index: 10;
        }

        #second_nav {
            height: 100px;
            background-color: rgba(219, 219, 219, 0.56) !important;
            z-index: 10;
        }

        #home {
            color: #ae1010;
        }

        @media only screen and (max-width: 1000px) {
            #top_nav {
                display: none;
            }
        }

        a {
            width: max-content;
        }

        .collapse navbar-collapse li:hover {
            color: #ae1010;
        }

        #navbarSupportedContent li :hover {
            color: #ae1010;
        }

        .navbar-light .navbar-nav .nav-link {
            color: white;
        }

        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .show>.nav-link {
            color: white;
        }

        #red {
            position: absolute;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        #second_pic_slider {
            display: block !important;
            position: absolute;
            right: 50%;
            bottom: 1.25rem;
            left: 4%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
            top: 30%;
            width: 46%;
        }

        #first_pic_slider {
            display: block !important;
            position: absolute;
            bottom: 1.25rem;
            left: 50%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
            top: 24%;
            width: 46%;
        }

        @media screen and (max-width: 1300px) {
            #first_pic_slider {
                display: none !important;
                position: absolute;
                bottom: 1.25rem;
                left: 50%;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
                color: #fff;
                text-align: center;
                top: 24%;
                width: 46%;
            }

            #second_pic_slider {
                display: none !important;
                position: absolute;
                right: 50%;
                bottom: 1.25rem;
                left: 4%;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
                color: #fff;
                text-align: center;
                top: 30%;
                width: 46%;
            }
        }


        #first_slider_div {
            position: absolute;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
            bottom: 20%;
        }

        #second_slider_div {
            position: absolute;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
            bottom: 20%;
        }

        #first_slider_txt {
            display: none;
            font-size: 23px;
            position: absolute;
            top: 46%;
            color: white;
            left: 50%;
        }

        #second_slider_txt {
            display: none;
            font-size: 23px;
            position: absolute;
            top: 46%;
            color: white;
            left: 14%;
        }

        @media screen and (max-width: 1300px) {
            #first_slider_txt {
                display: block;
                font-size: 23px;
            }

            #second_slider_txt {
                display: block;
                font-size: 23px;
            }
        }

        .fab,
        .far {
            font-weight: 400;
            margin: 2px;
        }

        #apply_now_btn {
            width: 20%;
            height: 50px;
            background-color: #131d3b;
            position: absolute;
            top: 55%;
            font-weight: 600;
            left: 10%;
        }

        #apply_now_btn:hover {
            background-color: #f0f0f0;
            color: #ae1010;
        }

        #brochure_btn {
            width: 20%;
            font-weight: 600;
            height: 50px;
            background-color: #131d3b;
            position: absolute;
            top: 70%;
            left: 10%;
        }

        #brochure_btn:hover {
            background-color: #f0f0f0;
            color: #ae1010;
        }

        #covid_img {
            width: 12%;
            float: right;
            position: fixed;
            bottom: 12%;
            right: 0%;
            z-index: 10;
        }

        .banner a {
            text-decoration: none;
            color: #ae1010;
        }

        .banner {
            border: 1px solid lightgrey;
        }

        ul {
            list-style-type: none;
        }

        .nbs-flexisel-item img {
            max-width: 93% !important;
        }

        .nbs-flexisel-inner {
            border: none !important;
        }

        #slideshow {
            position: absolute;
            top: 10%;
            right: 0%;
            padding: 80px;
            background-image: url(https://cmt.ggssachdeva.com/wp-content/uploads/2019/09/tm-img-bgseven.jpg?id=3745) !important;
            left: -8%;
        }

        @media screen and (max-width: 570px) {
            #slideshow {
                position: absolute;
                margin-top: 0px;
                background-image: url(https://cmt.ggssachdeva.com/wp-content/uploads/2019/09/tm-img-bgseven.jpg?id=3745) !important;
                left: 2%;
                right: 2%;
                padding: 80px;
            }
        }

        #margin_separation {
            margin-bottom: opx;
        }

        @media screen and (max-width: 800px) {
            #margin_separation {
                margin-bottom: 600px;
            }
        }

        #stdnt_img {
            width: 60%;
        }

        @media screen and (max-width: 1300px) {
            #stdnt_img {
                width: 100%;
            }
        }

        @media screen and (min-width: 900px) {
            #stdnt_img {
                width: 70%;
            }
        }

        @media screen and (min-width: 770px) {
            #stdnt_img {
                width: 60%;
            }
        }

        @media screen and (max-width: 1300px) {
            #top_nav {
                display: none;
            }

            #first_slider_div {
                display: none !important;
                position: absolute;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
                color: #fff;
                text-align: center;
                bottom: 20%;
            }

            #second_slider_div {
                display: none !important;
                position: absolute;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
                color: #fff;
                text-align: center;
                bottom: 20%;
            }
        }

        @media screen and (max-width: 1200px) {
            .navbar {
                position: relative;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }
        }

        @media screen and (max-width: 990px) {
            #menu_btn:focus {
                outline: none;
                box-shadow: none;
            }

            .navbar-collapse {
                flex-basis: 100%;
                flex-grow: 1;
                align-items: center;
                background-color: #131d3b;
            }
        }

        @media screen and (max-width: 1300px) {
            .slider_img {
                width: 100%;
                height: 400px;
            }
        }

        .border_images:hover {
            border: 3px solid #ae1010 !important;
            color: #ae1010;
        }

        .num_border_img {
            margin-right: 5px;
            font-size: 20px;
            font-weight: 400;
            background-color: #ae1010;
            color: #fff;
            width: 44px;
            height: 44px;
            line-height: 44px;
            border-radius: 50%;
            border: none;
            display: block;
            text-align: center;
            position: absolute;
            bottom: -18px;
            z-index: 10;
            left: 44%;
        }

        @media screen and (max-width: 1000px) {
            .num_border_img {
                margin-right: 5px;
                font-size: 20px;
                font-weight: 400;
                background-color: #ae1010;
                color: #fff;
                width: 44px;
                height: 44px;
                line-height: 44px;
                border-radius: 50%;
                border: none;
                display: block;
                text-align: center;
                position: absolute;
                bottom: -18px;
                z-index: 10;
                left: 46%;
            }
        }

        #sumbit_btn:focus {
            box-shadow: none !important;
        }

        input,
        textarea {
            border-radius: 0 !important;
            border: none !important;
            background-color: transparent !important;
            border-bottom: 1px solid white !important;
            color: white !important;
        }

        input,
        textarea:focus {
            box-shadow: none !important;
        }

        ::placeholder {
            color: white !important;
        }

        #form {
            top: 20%;
            width: 100%;
            color: white;
            background-color: #ae1010;
            padding: 50px;
            position: absolute;
            right: 10%;
        }

        @media screen and (max-width: 1300px) {
            #form {
                top: 20%;
                width: 100%;
                color: white;
                background-color: #ae1010;
                padding: 50px;
                position: absolute;
                right: 0%;
            }
        }

        .menu a {
            text-decoration: none !important;
            color: white !important;
        }

        .menu li {
            font-size: 16px;
            line-height: 23px;
            list-style: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            padding: 10px 0;
        }

        body {
            background: #fff;
            font-family: Arial, sans-serif;
        }

        p {
            margin-bottom: 20px;
        }

        .clearout {
            height: 20px;
            clear: both;
        }

        #flexiselDemo1,
        #flexiselDemo2,
        #flexiselDemo3 {
            display: none;
        }

        .nbs-flexisel-container {
            position: relative;
            max-width: 100%;
        }

        .nbs-flexisel-ul {
            position: relative;
            width: 99999px;
            margin: 0px;
            padding: 0px;
            list-style-type: none;
            text-align: center;
            overflow: auto;
        }

        .nbs-flexisel-inner {
            position: relative;
            overflow: hidden;
            float: left;
            width: 100%;
            background: #fcfcfc;
            background: #fcfcfc -moz-linear-gradient(top, #fcfcfc 0%, #eee 100%);
            /* FF3.6+ */
            background: #fcfcfc -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fcfcfc), color-stop(100%, #eee));
            /* Chrome,Safari4+ */
            background: #fcfcfc -webkit-linear-gradient(top, #fcfcfc 0%, #eee 100%);
            /* Chrome10+,Safari5.1+ */
            background: #fcfcfc -o-linear-gradient(top, #fcfcfc 0%, #eee 100%);
            /* Opera11.10+ */
            background: #fcfcfc -ms-linear-gradient(top, #fcfcfc 0%, #eee 100%);
            /* IE10+ */
            background: #fcfcfc linear-gradient(top, #fcfcfc 0%, #eee 100%);
            /* W3C */
            border: 1px solid #ccc;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
        }

        .nbs-flexisel-item {
            float: left;
            margin: 0px;
            padding: 0px;
            cursor: pointer;
            position: relative;
            line-height: 0px;
        }

        .nbs-flexisel-item img {
            max-width: 100%;
            cursor: pointer;
            position: relative;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /*** Navigation ***/

        .nbs-flexisel-nav-left,
        .nbs-flexisel-nav-right {
            padding: 5px 10px;
            border-radius: 15px;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            position: absolute;
            cursor: pointer;
            z-index: 4;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .nbs-flexisel-nav-left {
            left: 10px;
        }

        .nbs-flexisel-nav-left:before {
            content: "<"
        }

        .nbs-flexisel-nav-left.disabled {
            opacity: 0.4;
        }

        .nbs-flexisel-nav-right {
            right: 5px;
        }

        .nbs-flexisel-nav-right:before {
            content: ">"
        }

        .nbs-flexisel-nav-right.disabled {
            opacity: 0.4;
        }
    </style>
    <title>Website</title>
</head>

<body>
    <div style="position:absolute;" class="container-fluid">
        <div class="col-sm-12">
            <nav id="top_nav" class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-4">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a id="gmail_link" class="nav-link" href="#">
                                            <i class="fas fa-envelope-square"></i>
                                            prabh@gmail.com</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a id="contact" class="nav-link" href="#">
                                            <i class="fas fa-phone"></i> 0181 9877632145</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div style="color: white;" class="col-sm-6">
                            <form action="" method="post">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-youtube"></i>
                                <button id="nav_btn" type="button" class="btn btn-secondary">Fee Payment</button>
                                <button id="nav_butn" type="button" class="btn btn-secondary">Admissions</button>
                                <button type="submit" name="login" id="nav_bt" type="button" class="btn btn-secondary">Login</button>
                                <button type="submit" name="register" id="nav_btnn" type="button" class="btn btn-secondary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <nav id="second_nav" class="navbar navbar-expand-lg navbar-light bg-dark">
                <img style="float: left;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/GGS-College-of-Modern-Technology-CDR-LOGO-4.png" alt="logo" width="300px">
                <button style="float: right;" id="menu_btn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a id="home" class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">About GGS</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Vision & Mission</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Core Committee Members</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Message</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">AICTE LOA, EOA & Mandatory
                                        Disclosure</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">INTERNAL COMPLAINTS COMMITTEE(ICC)</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Brochure</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Business Park</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Career</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Post Graduation</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Under Graduation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Academics
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Academic Overview</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Departments</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Projects</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Admission</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Regulations</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Library</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Academic Calender</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Faculty</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Examination</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Expert Lectures</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Beyond Academics</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Placements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Life at GGS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Alumini
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Our Gems</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Alumini Success Stories</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Students speak</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/04/Untitled-design.jpg" class="d-block w-100 slider_img" alt="..." width="1600px" height="700px">

                <div id="first_slider_div" class="carousel-caption d-none d-md-block">
                    <div style="width: 18%;vertical-align: -webkit-baseline-middle;height: 65px;background-color: white;color: black;">
                        <div style="background-color: #ae1010;width: fit-content;float: left;padding: 21px;">
                            <i class="fas fa-play"></i>
                        </div>
                        <div style="font-size: larger;font-weight: 500;">
                            <label>
                                2000
                            </label>
                            <br>
                            <label>
                                since
                            </label>
                        </div>
                    </div>
                </div>

                <div id="first_slider_txt">
                    GGS College of Modern Technology
                    <br>
                    APPROVED BY A.I.C.T.E New Delhi & Affiliated to PTU
                </div>

                <div id="first_pic_slider" class="carousel-caption d-none d-md-block">
                    <h1 style="font-size: 46px;">GGS College of Modern Technology</h1>
                    <h4 style="font-size: 22px;">APPROVED BY A.I.C.T.E New Delhi & Affiliated to PTU</h4>
                    <button id="apply_now_btn" type="button" class="btn btn-danger">Apply Now!</button>
                    <button id="brochure_btn" type="button" class="btn btn-success">Brochure</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/04/Untitled-design-1.png" class="d-block w-100 slider_img" alt="..." width="1600px" height="700px">

                <div id="second_slider_div" class="carousel-caption d-none d-md-block">
                    <div style="float: right;width: 18%;vertical-align: -webkit-baseline-middle;height: 65px;background-color: white;color: black;">
                        <div style="background-color: #ae1010;width: fit-content;float: left;padding: 21px;">
                            <i class="fas fa-play"></i>
                        </div>
                        <div style="font-size: larger;font-weight: 500;">
                            <label>
                                15000+
                            </label>
                            <br>
                            <label>
                                Students
                            </label>
                        </div>
                    </div>
                </div>

                <div align="center" id="second_slider_txt">
                    The Science of Technology
                    <br>
                    & The Art of Leadership.
                    <br>
                    We invite you to learn with us!
                </div>

                <div id="second_pic_slider" class="carousel-caption d-none d-md-block">
                    <h1 style="font-size: 46px;">The Science of Technology</h1>
                    <h1 style="font-size: 46px;">& The Art of Leadership.</h1>
                    <br><br>
                    <h1 style="font-size: 40px;">We invite you to learn with us!</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div style="margin-top: -40px;z-index: 10;" class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1"></div>
                <div style="z-index: 10;background-color: white;" class="col-sm-10">
                    <div class="col-sm-12">
                        <div class="row">
                            <div style="text-align: center;padding: 40px;" class="col-md-4 col-sm-12 col-12 banner">
                                <span style="font-size: 24px;line-height: 32px;margin-bottom: 10px;color: #131d3b;font-weight: 400;">Our
                                    Courses</span>
                                <br><br>
                                <span style="font-size: 20px;line-height: 32px;margin-bottom: 10px;color: #131d3b;font-weight: 400;">Explore
                                    our courses!</span>
                                <br><br>
                                <span style="color: #ae1010;">
                                    <a href="#">Read More</a>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                    </a> </span>
                            </div>
                            <div style="text-align: center;padding: 40px;" class="col-md-4 col-sm-12 col-12 banner">
                                <span style="font-size: 24px;line-height: 32px;margin-bottom: 10px;color: #131d3b;font-weight: 400;">Our
                                    Departments</span>
                                <br><br>
                                <span style="font-size: 20px;line-height: 32px;margin-bottom: 10px;color: #131d3b;font-weight: 400;">Explore
                                    our Departments!</span>
                                <br><br>
                                <span style="color: #ae1010;">
                                    <a href="#">Read More</a>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </span>
                                <br><br>
                            </div>
                            <div style="text-align: center;padding: 40px;" class="col-md-4 col-sm-12 col-12 banner">
                                <span style="font-size: 24px;line-height: 32px;margin-bottom: 10px;color: #131d3b;font-weight: 400;">Placements</span>
                                <br><br>
                                <span style="font-size: 20px;line-height: 32px;margin-bottom: 10px;color: #131d3b;font-weight: 400;">Explore
                                    our Placements!</span>
                                <br><br>
                                <span style="color: #ae1010;">
                                    <a href="#">Read More</a>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                    </a> </span>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>

    <div style="margin-top: 70px;" class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <center>
                        <img style="width: 100%;border: 1px solid lightgrey;padding: 20px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/03/ggs-college.jpg" alt="">
                    </center>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <h5 style="color: #ae1010;">ABOUT GGS</h5>
                    <h2 style="font-weight: 700;text-transform: capitalize;font-size: 45px;line-height: 60px;color: #131d3b;">
                        WELCOME TO GGS COLLEGE OF MODERN TECHNOLOGY
                    </h2>
                    <div>GGS Sachdeva Group of Educational Institutions is the product of a vision and a dream of
                        excellence in education. Our
                        Colleges have the best of the infrastructure and are the most integrated multidisciplinary
                        institutions providing a wide
                        and varied arena for the staff and student communities to showcase their academic and
                        extracurricular talents.
                    </div>
                    <div style="float: left;">
                        <ul class="tm-list tm-list-style-icon tm-list-icon-color-skincolor tm- tm-icon-skincolor tm-list-textsize-medium tm-list-icon-library-fontawesome vc_custom_1567591038413">
                            <li><i class="tm-skincolor fa fa-arrow-circle-right"></i> <span class="tm-list-li-content">Popular online
                                    courses
                                    training</span></li>
                            <li><i class="tm-skincolor fa fa-arrow-circle-right"></i> <span class="tm-list-li-content">Guaranted career grow
                                    security</span></li>
                            <li><i class="tm-skincolor fa fa-arrow-circle-right"></i> <span class="tm-list-li-content">Experienced faculty
                                    and
                                    teachers</span></li>
                        </ul>
                    </div>
                    <div style="float: left;">
                        <ul class="tm-list tm-list-style-icon tm-list-icon-color-skincolor tm- tm-icon-skincolor tm-list-textsize-medium tm-list-icon-library-fontawesome vc_custom_1567591385700">
                            <li><i class="tm-skincolor fa fa-arrow-circle-right"></i> <span class="tm-list-li-content">Books and Library
                                    available</span></li>
                            <li><i class="tm-skincolor fa fa-arrow-circle-right"></i> <span class="tm-list-li-content">Easy to learn every
                                    time
                                    wherever</span></li>
                            <li><i class="tm-skincolor fa fa-arrow-circle-right"></i> <span class="tm-list-li-content">Flexible fee and
                                    payment
                                    methods</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 80px;background-image: url(https://cmt.ggssachdeva.com/wp-content/uploads/2019/09/tm-img-bgseven.jpg?id=3745) !important;" class="container-fluid">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div style="padding: 100px;color: white;" class="col-md-6 col-sm-12 col-12">
                    <div>
                        <p style="color: #ae1010;">WHAT WE DO</p>
                        <h1>
                            Our Skill
                        </h1>
                        <h1>
                            What We Achieved
                        </h1>
                    </div>
                    <div style="height: 20px;"></div>
                    <div>
                        <p style="color: lightgray;">GGS Sachdeva Group of Educational Institutions is the product of a
                            vision and a dream of
                            excellence in education.
                        </p>
                    </div>
                    <div style="height: 50px;"></div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div style="border-bottom:1px solid #d3d3d317;"></div>
                            <div style="height: 30px"></div>
                            <div style="border-right: 1px solid #d3d3d317;" align="center" class="col-sm-4">
                                <i style="font-size:60px" class="fas fa-user-graduate"></i>
                                <h1 style="color: #ae1010;">15000+</h1>
                                <h5 style="font-size: 18px;color: lightgray;">Satisfied Students</h5>
                            </div>
                            <div style="border-right: 1px solid #d3d3d317;" align="center" class="col-sm-4">
                                <i style="font-size:60px" class="fas fa-chalkboard-teacher"></i>
                                <h1 style="color: #ae1010;">800+</h1>
                                <h5 style="font-size: 18px;color: lightgray;">Qualified Teachers</h5>
                            </div>
                            <div align="center" class="col-sm-4">
                                <i style="font-size:60px" class="fas fa-trophy"></i>
                                <h1 style="color: #ae1010;">200+</h1>
                                <h5 style="font-size: 18px;color: lightgray;">Honor & Awards Win</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div style="width: 100%;height: 100px;"></div>
                    <img id="stdnt_img" src="https://cmt.ggssachdeva.com/wp-content/uploads/2019/09/single-img-one.jpg?id=3743" alt="" height="610px">
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 100px;" class="container-fluid">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1"></div>
                <div align="center" class="col-sm-10">
                    <div style="margin-bottom:40px">
                        <h1 style="font-weight: 700;text-transform: capitalize;font-size: 50px;line-height: 60px;color: #131d3b;">
                            News & Events</h1>
                        <center>
                            <div style="width: 30%;border-bottom: 3px solid #ae1010;"></div>
                        </center>
                    </div>
                    <div>
                        <ul id='flexiselDemo3'>
                            <li><img style="width: 480px;height: 350px;" id="catcrew_IMAGE" src="https://cmt.ggssachdeva.com/wp-content/uploads/2021/04/Online_quiz-2-1-1020x680.jpg">
                            </li>
                            <li><img style="width: 480px;height: 350px;" id="castcrew_IMAGE" src="https://cmt.ggssachdeva.com/wp-content/uploads/2019/08/post-img-one-1020x680.jpg">
                            </li>
                            <li><img style="width: 480px;height: 350px;" id="castcrew_IMAGE" src="https://cmt.ggssachdeva.com/wp-content/uploads/2019/08/post-img-three-1020x680.jpg">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>

    <div style="margin-top: 100px;" class="container-fluid">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div style="position: relative;" class="col-md-6 col-sm-12 col-12">
                    <div align="center" style="padding: 80px;color:white; background-color: #ae1010;">
                        <p>WHY GGS</p>
                        <h1 style="font-weight: 700;text-transform: capitalize;font-size: 50px;line-height: 60px;">What
                            Our</h1>
                        <h1 style="font-weight: 700;text-transform: capitalize;font-size: 45px;line-height: 60px;">
                            Happy
                            Student Say
                        </h1>
                        <p style="color: lightgray;">GGS is professionally driven college, renowned academicians and
                            senior functionaries of Top
                            MNC’s
                            guide our systems and
                            lay the roadmap for future endeavors.</p>
                    </div>
                </div>
                <div style="position: relative;" class="col-md-6 col-sm-12 col-12">
                    <div id="slideshow">
                        <div>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div align="center" style="color: white;" class="carousel-item active">
                                        <img style="border-radius: 50px;border: 3px solid white;width: 100px !important; height: 100px !important;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/03/ggs-Sukhvir.jpg" class="d-block w-100" alt="...">
                                        <div style="height:20px"></div>
                                        <p style="color: lightgray;">I am drawing a package of 5 Lac p.a. at RedHat Inc.
                                            I am proud of being an
                                            alumnus of GGSCMT. Faculties at GGSCMT are
                                            well versed in their respective fields. GGS is certainly a platform for
                                            global learning and advancement.</p>
                                        <p style="color: #ae1010;">Sukhvir Kaur</p>
                                        <p style="color: lightgray;">RedHat Inc. - Bangalore</p>
                                    </div>
                                    <div align="center" style="color: white;" class="carousel-item">
                                        <img style="border-radius: 50px;border: 3px solid white;width: 100px !important; height: 100px !important;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/03/ggs-tinku.jpg" class="d-block w-100" alt="...">
                                        <div style="height:20px"></div>
                                        <p style="color: lightgray;">I am a part of Virtuoso NetSoft Pvt. The faculty
                                            and cutting edge infrastructure with industry exposure make GGSCMT a
                                            renowned name in the field of Professional and Technical education. Thanks
                                            to GGGSCMT for the skills, needed to become a
                                            successful person.</p>
                                        <p style="color: #ae1010;">Tinku kumar</p>
                                        <p style="color: lightgray;">Virtuoso NetSoft Pvt</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="margin_separation"></div>

    <div style="margin-top: 150px;" class="container">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <center>
                    <h1 style="font-weight: 700;text-transform:
                    capitalize;font-size: 50px;line-height: 60px;color: #131d3b;">What Makes GGS Unique?</h1>
                </center>
                <div style="height: 60px;"></div>
                <div align="center" class="col-md-3 col-sm-12 col-12">
                    <div style="position: relative;">
                        <img class="border_images" style="border-radius: 100px;border:3px solid lightgray;padding: 10px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/07/unique-academic-model-162x162.jpg" alt="">
                        <div class="num_border_img">1</div>
                    </div>
                    <div style="height: 30px;"></div>
                    <p style="font-size: 24px;line-height: 30px;margin-bottom: 11px;font-weight: 400;">Unique
                        Academic
                        Model</p>
                    <p>The GGS ensures excellence through flexible academic model matching the international
                        standards.
                    </p>
                </div>
                <div align="center" class="col-md-3 col-sm-12 col-12">
                    <div style="position: relative;">
                        <img class="border_images" style="border-radius: 100px;border: 3px solid lightgray;padding: 10px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/07/student-centric-162x162.jpg" alt="">
                        <div class="num_border_img">
                            2</div>
                    </div>
                    <div style="height: 30px;"></div>
                    <p style="font-size: 24px;line-height: 30px;margin-bottom: 11px;font-weight: 400;">Student
                        Centric
                    </p>
                    <p>GGS is professionally driven college, renowned academicians and senior functionaries of
                        Top MNC’s
                        guide our systems and
                        lay the roadmap for future endeavors.
                    </p>
                </div>
                <div align="center" class="col-md-3 col-sm-12 col-12">
                    <div style="position: relative;">
                        <img class="border_images" style="border-radius: 100px;border: 3px solid lightgray;padding: 10px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/07/global-exposure-162x162.jpg" alt="">
                        <div class="num_border_img">3</div>
                    </div>
                    <div style="height: 30px;"></div>
                    <p style="font-size: 24px;line-height: 30px;margin-bottom: 11px;font-weight: 400;">
                        Global
                        Exposure
                    </p>
                    <p>You will have an opportunity to enrich and diversify your degree with an overseas
                        study
                        experience through exchange and
                        higher studies programs.
                    </p>
                </div>
                <div align="center" class="col-md-3 col-sm-12 col-12">
                    <div style="position: relative;">
                        <img class="border_images" style="border-radius: 100px;border: 3px solid lightgray;padding: 10px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/07/quality-placements-162x162.jpg" alt="">
                        <div class="num_border_img">4</div>
                    </div>
                    <div style="height: 30px;"></div>
                    <p style="font-size: 24px;line-height: 30px;margin-bottom: 11px;font-weight: 400;">
                        Quality
                        Placements
                    </p>
                    <p>GGS has emerged as undisputed leader in providing students with highly lucrative job
                        opportunities and premium pay
                        packages.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 100px;"></div>

    <div class="container">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div style="float:left;padding: 60px;background-color: #131d3b !important;" class="col-md-4 col-sm-12 col-12">
                    <h1 style="font-weight: 700;text-transform: capitalize;font-size: 40px;line-height: 60px;color: white;">
                        Queries?</h1>
                    <h5 style="font-weight: 400;text-transform: uppercase;font-size: 16px;line-height: 20px;letter-spacing: 1px;color: white;">
                        WE ARE HAPPY TO HELP YOU!</h5>
                </div>
                <div style="position: relative;" class="col-md-8 col-sm-12 col-12">
                    <div id="form">
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <input type="email" placeholder="Name" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <input type="email" placeholder="Email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button id="sumbit_btn" style="border-radius: 0px !important;background-color: transparent;border: 1px solid white;" type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 300px;"></div>

    <div style="margin-top: 100px;" class="container-fluid">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1"></div>
                <div align="center" class="col-sm-10">
                    <div style="margin-bottom:40px">
                        <h1 style="font-weight: 700;text-transform: capitalize;font-size: 50px;line-height: 60px;color: #131d3b;">
                            Our Top Recruiters</h1>
                        <center>
                            <div style="width: 30%;border-bottom: 3px solid #ae1010;"></div>
                        </center>
                    </div>
                    <div>
                        <ul id='flexiselDemo1'>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/6-1.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/4.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/5.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/2.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/1.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/10.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/2-1.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/5-1.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/3-1.png">
                            </li>
                            <li><img style="width: 400px;height: 220px;" src="https://cmt.ggssachdeva.com/wp-content/uploads/2020/06/1-1.png">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>

    <div style="height: 100px;"></div>

    <div style="color: white; background-color: #131d3b;" class="container">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div style="padding: 10px;" class="col-md-3 col-sm-6 col-12">
                    <ul class="menu">
                        <h3 style="font-weight: 400;font-size: 24px;line-height: 32px;">Quick Links</h3>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li><a href="">Academics</a></li>
                        <li><a target="_blank" href="">GGS Group</a>
                        </li>
                        <li><a href="">Courses</a></li>
                        <li><a href="">Career</a></li>
                        <li><a href="">VIBRANT Life At GGS</a></li>
                    </ul>
                </div>
                <div style="padding: 10px;" class="col-md-3 col-sm-6 col-12">
                    <ul class="menu">
                        <h3 style="font-weight: 400;font-size: 24px;line-height: 32px;">Important Links
                        </h3>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li><a href="">Admission</a></li>
                        <li><a target="_blank" href="">Brochure</a>
                        </li>
                        <li><a href="">Departments</a></li>
                        <li><a href="">Placements</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">News & Events</a></li>
                    </ul>
                </div>
                <div style="color: lightgray !important;padding: 10px;" class="col-md-3 col-sm-6 col-12">
                    <ul class="menu">
                        <h3 style="color:white; font-weight: 400;font-size: 24px;line-height: 32px;">Opening Hours</h3>
                        <li><span style="float: left;"></span>
                            Mon - Sat <span style="float: right;">09 am -05pm</span>
                        </li>
                        <li>
                            <span style="float: left;"></span>Sunday<span style="float: right; color: red;">Closed
                            </span>
                        </li>
                    </ul>
                </div>
                <div style="color: lightgray;padding: 10px;" class="col-md-3 col-sm-6 col-12">
                    <ul class="menu">
                        <h3 style="color:white;font-weight: 400;font-size: 24px;line-height: 32px;">Reach Us:</h3>
                        <li>Chandigarh-Ludhiana Highway, Kharar, SAS Nagar,
                            Sahibzada Ajit Singh Nagar, Punjab 140301</li>
                        <li>9914864000, 9914865000
                        </li>
                        <li>01605001010
                        </li>
                        <li>www.ggssachdeva.com
                        </li>
                        <li>info.ggscmt@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div align="center" style="color: lightgray;">Copyright © 2020. All rights reserved.</div>
    </div>

    <img id="covid_img" src="StaySafe-covid.png" alt="">
    <img id="covid_img" src="StaySafe-covid.png" alt="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#flexiselDemo1").flexisel();

            $("#flexiselDemo2").flexisel({
                visibleItems: 4,
                itemsToScroll: 3,
                animationSpeed: 200,
                infinite: true,
                navigationTargetSelector: null,
                autoPlay: {
                    enable: false,
                    interval: 5000,
                    pauseOnHover: true
                },
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1,
                        itemsToScroll: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2,
                        itemsToScroll: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3,
                        itemsToScroll: 3
                    }
                },
                loaded: function(object) {
                    console.log('Slider loaded...');
                },
                before: function(object) {
                    console.log('Before transition...');
                },
                after: function(object) {
                    console.log('After transition...');
                },
                resize: function(object) {
                    console.log('After resize...');
                }
            });

            $("#flexiselDemo3").flexisel({
                visibleItems: 3,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });

            $("#flexiselDemo4").flexisel({
                infinite: false
            });

        });

        (function($) {

            $.fn.flexisel = function(options) {

                var defaults = $.extend({
                    visibleItems: 4,
                    itemsToScroll: 3,
                    animationSpeed: 400,
                    infinite: true,
                    navigationTargetSelector: null,
                    autoPlay: {
                        enable: false,
                        interval: 5000,
                        pauseOnHover: true
                    },
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1,
                            itemsToScroll: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2,
                            itemsToScroll: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3,
                            itemsToScroll: 3
                        }
                    },
                    loaded: function() {},
                    before: function() {},
                    after: function() {},
                    resize: function() {}
                }, options);

                /******************************
                Private Variables
                *******************************/

                var object = $(this);
                var settings = $.extend(defaults, options);
                var itemsWidth;
                var canNavigate = true;
                var itemCount;
                var itemsVisible = settings.visibleItems;
                var itemsToScroll = settings.itemsToScroll;
                var responsivePoints = [];
                var resizeTimeout;
                var autoPlayInterval;

                /******************************
                Public Methods
                *******************************/

                var methods = {

                    init: function() {
                        return this.each(function() {
                            methods.appendHTML();
                            methods.setEventHandlers();
                            methods.initializeItems();
                        });
                    },

                    /******************************
                    Initialize Items
                    *******************************/

                    initializeItems: function() {

                        var obj = settings.responsiveBreakpoints;
                        for (var i in obj) {
                            responsivePoints.push(obj[i]);
                        }
                        responsivePoints.sort(function(a, b) {
                            return a.changePoint - b.changePoint;
                        });
                        var childSet = object.children();
                        childSet.first().addClass("index");
                        itemsWidth = methods.getCurrentItemWidth();
                        itemCount = childSet.length;
                        childSet.width(itemsWidth);
                        if (settings.infinite) {
                            methods.offsetItemsToBeginning(Math.floor(childSet.length / 2));
                            object.css({
                                'left': -itemsWidth * Math.floor(childSet.length / 2)
                            });
                        }
                        $(window).trigger('resize');
                        object.fadeIn();
                        settings.loaded.call(this, object);

                    },

                    /******************************
                    Append HTML
                    *******************************/

                    appendHTML: function() {

                        object.addClass("nbs-flexisel-ul");
                        object.wrap("<div class='nbs-flexisel-container'><div class='nbs-flexisel-inner'></div></div>");
                        object.find("li").addClass("nbs-flexisel-item");

                        if (settings.navigationTargetSelector && $(settings.navigationTargetSelector).length > 0) {
                            $("<div class='nbs-flexisel-nav-left'></div><div class='nbs-flexisel-nav-right'></div>").appendTo(settings.navigationTargetSelector);
                        } else {
                            settings.navigationTargetSelector = object.parent();
                            $("<div class='nbs-flexisel-nav-left'></div><div class='nbs-flexisel-nav-right'></div>").insertAfter(object);
                        }

                        if (settings.infinite) {
                            var childSet = object.children();
                            var cloneContentBefore = childSet.clone();
                            var cloneContentAfter = childSet.clone();
                            object.prepend(cloneContentBefore);
                            object.append(cloneContentAfter);
                        }

                    },


                    /******************************
                    Set Event Handlers
                    *******************************/
                    setEventHandlers: function() {
                        var self = this;
                        var childSet = object.children();

                        $(window).on("resize", function(event) {
                            canNavigate = false;
                            clearTimeout(resizeTimeout);
                            resizeTimeout = setTimeout(function() {
                                canNavigate = true;
                                methods.calculateDisplay();
                                itemsWidth = methods.getCurrentItemWidth();
                                childSet.width(itemsWidth);

                                if (settings.infinite) {
                                    object.css({
                                        'left': -itemsWidth * Math.floor(childSet.length / 2)
                                    });
                                } else {
                                    methods.clearDisabled();
                                    $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-left").addClass('disabled');
                                    object.css({
                                        'left': 0
                                    });
                                }

                                settings.resize.call(self, object);

                            }, 100);

                        });

                        $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-left").on("click", function(event) {
                            methods.scroll(true);
                        });

                        $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-right").on("click", function(event) {
                            methods.scroll(false);
                        });

                        if (settings.autoPlay.enable) {

                            methods.setAutoplayInterval();

                            if (settings.autoPlay.pauseOnHover === true) {
                                object.on({
                                    mouseenter: function() {
                                        canNavigate = false;
                                    },
                                    mouseleave: function() {
                                        canNavigate = true;
                                    }
                                });
                            }

                        }

                        object[0].addEventListener('touchstart', methods.touchHandler.handleTouchStart, false);
                        object[0].addEventListener('touchmove', methods.touchHandler.handleTouchMove, false);

                    },

                    /******************************
                    Calculate Display
                    *******************************/

                    calculateDisplay: function() {
                        var contentWidth = $('html').width();
                        var largestCustom = responsivePoints[responsivePoints.length - 1].changePoint; // sorted array 

                        for (var i in responsivePoints) {

                            if (contentWidth >= largestCustom) { // set to default if width greater than largest custom responsiveBreakpoint 
                                itemsVisible = settings.visibleItems;
                                itemsToScroll = settings.itemsToScroll;
                                break;
                            } else { // determine custom responsiveBreakpoint to use

                                if (contentWidth < responsivePoints[i].changePoint) {
                                    itemsVisible = responsivePoints[i].visibleItems;
                                    itemsToScroll = responsivePoints[i].itemsToScroll;
                                    break;
                                } else {
                                    continue;
                                }
                            }
                        }

                    },

                    /******************************
                    Scroll
                    *******************************/

                    scroll: function(reverse) {

                        if (typeof reverse === 'undefined') {
                            reverse = true
                        }

                        if (canNavigate == true) {
                            canNavigate = false;
                            settings.before.call(this, object);
                            itemsWidth = methods.getCurrentItemWidth();

                            if (settings.autoPlay.enable) {
                                clearInterval(autoPlayInterval);
                            }

                            if (!settings.infinite) {

                                var scrollDistance = itemsWidth * itemsToScroll;

                                if (reverse) {
                                    object.animate({
                                        'left': methods.calculateNonInfiniteLeftScroll(scrollDistance)
                                    }, settings.animationSpeed, function() {
                                        settings.after.call(this, object);
                                        canNavigate = true;
                                    });

                                } else {
                                    object.animate({
                                        'left': methods.calculateNonInfiniteRightScroll(scrollDistance)
                                    }, settings.animationSpeed, function() {
                                        settings.after.call(this, object);
                                        canNavigate = true;
                                    });
                                }



                            } else {
                                object.animate({
                                    'left': reverse ? "+=" + itemsWidth * itemsToScroll : "-=" + itemsWidth * itemsToScroll
                                }, settings.animationSpeed, function() {
                                    settings.after.call(this, object);
                                    canNavigate = true;

                                    if (reverse) {
                                        methods.offsetItemsToBeginning(itemsToScroll);
                                    } else {
                                        methods.offsetItemsToEnd(itemsToScroll);
                                    }
                                    methods.offsetSliderPosition(reverse);

                                });
                            }

                            if (settings.autoPlay.enable) {
                                methods.setAutoplayInterval();
                            }

                        }
                    },

                    touchHandler: {

                        xDown: null,
                        yDown: null,
                        handleTouchStart: function(evt) {
                            this.xDown = evt.touches[0].clientX;
                            this.yDown = evt.touches[0].clientY;
                        },
                        handleTouchMove: function(evt) {
                            if (!this.xDown || !this.yDown) {
                                return;
                            }

                            var xUp = evt.touches[0].clientX;
                            var yUp = evt.touches[0].clientY;

                            var xDiff = this.xDown - xUp;
                            var yDiff = this.yDown - yUp;

                            // only comparing xDiff
                            // compare which is greater against yDiff to determine whether left/right or up/down  e.g. if (Math.abs( xDiff ) > Math.abs( yDiff ))
                            if (Math.abs(xDiff) > 0) {
                                if (xDiff > 0) {
                                    // swipe left
                                    methods.scroll(false);
                                } else {
                                    //swipe right
                                    methods.scroll(true);
                                }
                            }

                            /* reset values */
                            this.xDown = null;
                            this.yDown = null;
                            canNavigate = true;
                        }
                    },

                    /******************************
                    Utility Functions
                    *******************************/

                    getCurrentItemWidth: function() {
                        return (object.parent().width()) / itemsVisible;
                    },

                    offsetItemsToBeginning: function(number) {
                        if (typeof number === 'undefined') {
                            number = 1
                        }
                        for (var i = 0; i < number; i++) {
                            object.children().last().insertBefore(object.children().first());
                        }
                    },

                    offsetItemsToEnd: function(number) {
                        if (typeof number === 'undefined') {
                            number = 1
                        }
                        for (var i = 0; i < number; i++) {
                            object.children().first().insertAfter(object.children().last());
                        }
                    },

                    offsetSliderPosition: function(reverse) {
                        var left = parseInt(object.css('left').replace('px', ''));
                        if (reverse) {
                            left = left - itemsWidth * itemsToScroll;
                        } else {
                            left = left + itemsWidth * itemsToScroll;
                        }
                        object.css({
                            'left': left
                        });
                    },

                    getOffsetPosition: function() {
                        return parseInt(object.css('left').replace('px', ''));
                    },

                    calculateNonInfiniteLeftScroll: function(toScroll) {

                        methods.clearDisabled();
                        if (methods.getOffsetPosition() + toScroll >= 0) {
                            $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-left").addClass('disabled');
                            return 0;
                        } else {
                            return methods.getOffsetPosition() + toScroll;
                        }
                    },

                    calculateNonInfiniteRightScroll: function(toScroll) {

                        methods.clearDisabled();
                        var negativeOffsetLimit = (itemCount * itemsWidth) - (itemsVisible * itemsWidth);

                        if (methods.getOffsetPosition() - toScroll <= -negativeOffsetLimit) {
                            $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-right").addClass('disabled');
                            return -negativeOffsetLimit;
                        } else {
                            return methods.getOffsetPosition() - toScroll;
                        }
                    },

                    setAutoplayInterval: function() {
                        autoPlayInterval = setInterval(function() {
                            if (canNavigate) {
                                methods.scroll(false);
                            }
                        }, settings.autoPlay.interval);
                    },

                    clearDisabled: function() {
                        var parent = $(settings.navigationTargetSelector);
                        parent.find(".nbs-flexisel-nav-left").removeClass('disabled');
                        parent.find(".nbs-flexisel-nav-right").removeClass('disabled');
                    }

                };

                if (methods[options]) { // $("#element").pluginName('methodName', 'arg1', 'arg2');
                    return methods[options].apply(this, Array.prototype.slice.call(arguments, 1));
                } else if (typeof options === 'object' || !options) { // $("#element").pluginName({ option: 1, option:2 });
                    return methods.init.apply(this);
                } else {
                    $.error('Method "' + method + '" does not exist in flexisel plugin!');
                }
            };

        })(jQuery);
    </script>

</body>

</html>