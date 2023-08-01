<!doctype html>
<html lang="ar" dir="ltr">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Bootstrap RTL CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Magnific Popup CSS --> 
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Nice Select CSS --> 
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="assets/css/theme-dark.css">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="assets/css/rtl.css">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon.png">

        <title>Fusionjon</title>
    </head>
    <body>
        <!-- Pre Loader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Pre Loader -->

        <!-- Top Header Start -->
        <header class="top-header top-header-bg">
            <div class="container">
                <div class="row align-items-center">
                    

                    <div class="col-lg-5 col-md-6">
                        <div class="top-header-right">
                            <div class="top-header-social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/FusionJon7/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/?lang=en" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class='bx bxl-linkedin-square'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/fusionjon/" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="top-head-left">
                            <div class="top-contact">
                                <h3>Support By : <a href="tel:+1(212)-255-5511">+1 (212) 255-5511</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <img src="assets/images/logos/image.png" class="logo-one" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light " style="width: 104%">
                       <a class="navbar-brand" style="margin-left: -11rem" href="">
                            <img src="assets/images/logos/image.png" class="logo-one" alt="Logo">
                            
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{route('home')}}">
                                        Home 
                                       
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link active">
                                        Pages 
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('team')}}" class="nav-link">
                                                Team
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('testinomial')}}" class="nav-link">
                                                Testimonials
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('faq')}}" class="nav-link">
                                                FAQ
                                            </a>
                                        </li>

                                       

                                       

                                        <li class="nav-item">
                                            <a href="{{route('terms')}}" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('privacy')}}" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>

                                        
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        Services 
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('service')}}" class="nav-link">
                                                Services Style One 
                                            </a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a href="{{route('servicedetails')}}" class="nav-link">
                                                Service Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    
                                    <a href="{{route('blog')}}" class="nav-link">
                                        Blog
                                       
                                    </a>
                                   
                                </li>
        

                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="nav-side d-display">
                                <div class="nav-side-item">
                                    <div class="search-box">
                                        <i class='bx bx-search'></i>
                                    </div>
                                </div>

                                <div class="nav-side-item">
                                    <div class="get-btn">
                                        <a href="{{route('contact')}}" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

           <div class="side-nav-responsive">
                <div class="container-max">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="in-circle circle-one"></div>
                            <div class="in-circle circle-two"></div>
                            <div class="in-circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-nav-item nav-side">
                                    <div class="search-box">
                                        <i class='bx bx-search'></i>
                                    </div>
                                    <div class="get-btn">
                                        <a href="{{route('contact')}}" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    
                    <div class="search-close">
                        <span class="search-close-line"></span>
                        <span class="search-close-line"></span>
                    </div>

                    <div class="search-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Case Study</h3>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Case Study</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Case Study Area -->
        <div class="case-study-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Case Study</span>
                    <h2>Introduce Our Projects and Check Recent Work </h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study1.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Business Solution</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Business</a></li>
                                    <li><a href="case-details.html">Planing</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study2.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Web Development</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Design</a></li>
                                    <li><a href="case-details.html">Development</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study3.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Social Media App</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Design</a></li>
                                    <li><a href="case-details.html">Social</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study4.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">UI/UX Research</a></h3>
                                <ul>
                                    <li><a href="case-details.html">UI/UX Design</a></li>
                                    <li><a href="case-details.html">Research</a></li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study5.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Business Growth</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Business</a></li>
                                    <li><a href="case-details.html">Growth</a></li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study6.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Consulting</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Consulting</a></li>
                                    <li><a href="case-details.html">Planing</a></li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study7.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">IT Management</a></h3>
                                <ul>
                                    <li><a href="case-details.html">IT</a></li>
                                    <li><a href="case-details.html">Management</a></li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study8.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Data Analysis</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Data</a></li>
                                    <li><a href="case-details.html">Analysis</a></li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study9.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Business Reform</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Business</a></li>
                                    <li><a href="case-details.html">Reform</a></li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="pagination-area">
                            <a href="{{route('case')}}" class="prev page-numbers">
                                <i class='bx bx-left-arrow-alt'></i>
                            </a>

                            
                            <a href="{{route('case')}}" class="page-numbers">3</a>
                            <a href="{{route('case')}}" class="page-numbers">2</a>
                            <span class="page-numbers current" aria-current="page">1</span>

                            <a href="{{route('case')}}" class="next page-numbers">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Case Study Area End -->

        <!-- Footer Area End -->
        <footer class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <span style="font-size: 40px; color: white"><b>FusionJon Tech</b></span>
                                </div>
                                <p>
                                    Fusionjon is  IOT/IIOT and IT solution providing company known for strong company ethics and professionalism. It has all the bases covered when it comes to providing IIoT and IT solutions of any industry. We also continuously upgrade our approach to keep your industry in an advanced state to be ready for the future.
                                </p>
                                <div class="footer-call-content">
                                    <h3>Talk to Our Support</h3>
                                    <span><a href="tel:+1002-123-4567">011-45696408</a></span>
                                    <i class='bx bx-headphone'></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6" style="position: relative;
                        left: 150px; margin-top: 4px">
                            <div class="footer-widget pl-2">
                                <h3 style="text-align: center">Services</h3>
                                <ul class="footer-list" style="text-align: center">
                                    <li>
                                        <a href="{{route('servicedetails')}}" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            IT Consultancy
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailstwo')}}" target="_blank" style="    position: relative;
                                        left: 7px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Business Solution 
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailsthree')}}" target="_blank" style="    position: relative;
                                        left: 0px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Digital Services  
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailsfour')}}" target="_blank" style="    position: relative;
                                        left: 3px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Business Reform   
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailsfive')}}" target="_blank" style="    position: relative;
                                        left: 7px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Web Development      
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailssix')}}" target="_blank" style="    position: relative;
                                        left: 4px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Cloud Computing      
                                        </a>
                                    </li> 
                                   
                                </ul>
                            </div>
                        </div>

                      

                        <div class="col-lg-3 col-sm-6" style="margin-left: 280px; margin-top: 4px">
                            <div class="footer-widget" style="text-align: center">
                                <h2 style="text-align: center; color: white; font-size: 40px;     position: relative;
                                left: 19px;">Contact Us</h2>
                                <ul style="padding-right: 0rem ">
                                    <li>

                                        <div class="content" style="margin-top: 30px">
                                            <i class='bx bxs-map'  style="position: relative;
                                           top: 2px;
                                           right: 20px;
                                            color: cyan"></i>
                                           
                                            <span style="color: white">E- 31 A, Fourth Floor, Jawahar Park, Near Hira Sweets, Laxmi Nagar, Delhi - 110092</span>
                                        </div>
                                    </li>

                                    <li>

                                        <div class="content" style="margin-top: -9px">
                                            <i class='bx bx-phone-call'   style="position: relative;
                                            right: 16px;
                                            top: 1px;
                                            color: cyan; "></i>
                                            
                                            <a href="tel:+1(212)-255-5511" style="color: white; margin-top: 42px;">011-45696408 / 9810358257 </a>
                                        </div>
                                    </li>
    
                                    
    
                                    <li>

                                        <div class="content">
                                            <i class='bx bx-message'  style="position: relative;
                                            right: 20px;
                                            top: 5px;
                                            color: cyan;"></i>
                                           
                                            <a href="mailto:hello@techex.com" style="color: white; margin-top: 42px;">support@fusionjon.com</a>
                                        </div>
                                    </li>
                                </ul>
                                
                                <div class="newsletter-area">
                                    <form class="newsletter-form" data-toggle="validator" method="POST" style="margin-top: 20px">
                                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                                        <button class="subscribe-btn" type="submit">
                                            <i class='bx bx-paper-plane'></i>
                                        </button>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="copy-right-area">
                    <div class="copy-right-text">
                        <p>
                            Copyright © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved by 
                            <a href="{{route('home')}}" target="_blank">FJ Tech</a> 
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Color Switch Button -->
        <div class="switch-box">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- Color Switch Button End -->

        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
        
    </body>
</html>