<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home| Kasthamandap Education</title>
    <link rel="stylesheet" href="././css/style.css">
    <link rel="stylesheet" href="././css/about us.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <header>


        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid nav-bar container d-flex justify-content-between">
                    <a class="navbar-brand media-wrapper" href="/"><img
                            src="https://kasthamandap.edu.np/storage/setting/main_logo-20230402104155.png"
                            alt=""></a>
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                        type="button" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mx-auto gap-md-3">
                            <li class="nav-item ">
                                <a class="nav-link fw-bold text-primary" href="http://localhost/kasthamandap/index.php#"
                                    target="_self">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-bold text-primary dropdown-toggle" href="#" target="_self"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Company</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="nav-item ">
                                        <a class="dropdown-item fw-bold text-primary " href=""
                                            target="_self">About Us</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="dropdown-item fw-bold text-primary " href=""
                                            target="_self">Reviews</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="dropdown-item fw-bold text-primary " href=""
                                            target="_self">Teams</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="dropdown-item fw-bold text-primary " href=""
                                            target="_self">Gallery</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="dropdown-item fw-bold text-primary " href="" target="_self">Our
                                            Visions</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="dropdown-item fw-bold text-primary " href=""
                                            target="_self">Videos</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="dropdown-item fw-bold text-primary " href=""
                                            target="_self">Faqs</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold text-primary" href="" target="_self">Services</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold text-primary" href="" target="_self">Country</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold text-primary" href="" target="_self">Courses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold text-primary" href="" target="_self">Blogs</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link fw-bold text-primary" href="" target="_self">Contact Us</a>
                            </li>
                        </ul>
                        <a class="btn btn-danger text-white px-3 py-2"
                            href="https://kasthamandap.edu.np/student-register">Apply Now</a>
                    </div>
                </div>


            </nav>
        </div>
    </header>
    <div>
        @yield('content')
    </div>

    <footer>
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <img class="footer-logo" src="./images/footer logo.png" alt="">
                        <p>Kasthamandap Education is a consumer, goal-driven education company that offers a wide range
                            of services to all of its clients and students. All of our people have access to our
                            standard and professional education support services.</p>
                    </div>

                    <div class="col-md-2 col-6">
                        <h4 class="text-white   paragraph">Quick Links</h4>
                        <ul>
                            <li>
                                <a href="http://localhost/kasthamandap/about_us.php">About Us</a>
                                <a href="http://localhost/kasthamandap/our-vision.php">Our Visions</a>
                                <a href="http://localhost/kasthamandap/our-team.php">Teams</a>
                                <a href="http://localhost/kasthamandap/services.php">Services</a>
                                <a href="http://localhost/kasthamandap/review.php">Reviews</a>
                            </li>
                        </ul>

                    </div>
                    <div class=" col-md-2 col-6">
                        <h4 class=" text-white paragraph ">Countries</h4>
                        <ul>
                            <li>
                                <a href="http://localhost/kasthamandap/country.php">Country</a>
                                <a href="http://localhost/kasthamandap/courses.php">Courses</a>
                                <a href="http://localhost/kasthamandap/FAQ.php"> Faqs</a>
                                <a href="http://localhost/kasthamandap/blog.php">Blogs</a>
                                <a href=""> Terms and Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-6">
                        <h4 class=" text-white paragraph">Company</h4>
                        <ul>
                            <li>
                                <a href="http://localhost/kasthamandap/our-vision.php">Our Visions </a>
                                <a href="http://localhost/kasthamandap/FAQ.php"> Faqs</a>
                                <a href="http://localhost/kasthamandap/blog.php">Blogs</a>
                                <a href="">Terms and Conditions</a>
                                <a href="">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class=" col-lg-3 col-sm-12">
                        <div><iframe class="ggl-map"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14129.557591831353!2d85.32053500000002!3d27.705261000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c4d40341ff%3A0x9d710c1dfad9fae5!2sKasthamandap%20Education%20Services%20Pvt.Ltd!5e0!3m2!1sen!2snp!4v1739177031043!5m2!1sen!2snp"
                                width="250" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        <div class="social-media">
                            <a href="https://www.facebook.com/kasthamandapeducation" target="_blank"><i
                                    class="fab fa-facebook-f me-3"></i></a>
                            <a href="https://kasthamandap.edu.np/"target="_blank"><i
                                    class="fab fa-youtube me-3"></i></a>
                            <a href="https://kasthamandap.edu.np/"target="_blank"><i
                                    class="fab fa-linkedin me-3"></i></a>
                            <a href="https://kasthamandap.edu.np/"target="_blank"><i
                                    class="fab fa-instagram me-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>Copyright © 2025 <a href="https://kasthamandap.edu.np/">Kasthamandap Education.</a> All Rights
                        Reserved | Made with <i class="fa fa-heart"></i> by <a
                            href="https://paradiseit.com.np/">Paradise Infotech</a></p>
                </div>
            </div>

        </footer>

    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
