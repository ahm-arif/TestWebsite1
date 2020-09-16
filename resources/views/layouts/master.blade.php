<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wellness Center</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./home"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <nav class="header__menu">
                        <ul>
                           
                              <li class="{{ Request::is('home') ? 'active' : '' }}">
                                  <a href="{{ url('./home') }}">Home</a>
                              </li>

                             <li><a href="#">Features</a>
                                <ul class="dropdown">
                                   
                                    <li><a href=".#price">Pricing</a></li>
                                    <li><a href="./faq">Faq</a></li>
                                </ul>
                            </li>

                              <li class="{{ Request::is('profile') ? 'active' : '' }}">
                                  <a href="{{ url('./profile') }}">Company Profile</a>
                              </li>
                           
                       
                              <li class="{{ Request::is('structure') ? 'active' : '' }}">
                                 <a href="{{ url('./structure') }}">Structure</a>
                              </li>
                           
                        
                    </nav>
                </div>
                <div class="col-lg-5">
                    <div class="header__right">
                        <div class="header__right__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                       
                        <div class="header__right__btn">
                            <a href="./contact" class="primary-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-6">
                    <div class="footer__widget">
                        <h5>COMPANY</h5>
                        <ul>
                            <li><a href="#info">About Us</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#form">Application Form</a></li>
                            <li><a href="#us">Why Us?</a></li>
                            <li><a href="./faq">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Features</h5>
                        <ul>
                           
                            <li><a href="#price">Pricing</a></li>
                            <li><a href="#">Details</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-telegram">&nbsp Telegram</i></a></li>
                            <li><a href="#"><i class="fa fa-youtube">&nbsp Youtube</i></a></li>
                            <li><a href="#"><i class="fa fa-facebook">&nbsp&nbsp Facebook</i></a></li>
                            <li><a href="#"><i class="fa fa-twitter">&nbsp Twitter</i></a></li>
                            <li><a href="#"><i class="fa fa-instagram">&nbsp  Instagram</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                             <a href="./home"><img src="img/logo.png" alt="" ></a>
                        </div>
                        <p>Alamat : Ketapang Business Centre, Jl. Kyai Haji Zainul Arifin, RT.8/RW.7, Krukut, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11140 </p>
                        <ul>
                            <li>Phone : (021) 5409111 </li>
                            <li>Email : wellnesscenter@gmail.com </li>
                            <li>Fax : </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                   
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Wellness Center</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here...">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>