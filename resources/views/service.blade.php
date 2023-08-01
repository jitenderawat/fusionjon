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
                                <h3>Support By : <a href="tel:+1(212)-255-5511">011-45696408</a></h3>
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
                    <nav class="navbar navbar-expand-md navbar-light ">
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
                                    <a href="{{ route('about')}}" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
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
                                            <a href="{{ route('terms')}}" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('privacy')}}" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>

                                       
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('service')}}" class="nav-link">
                                        Services 
                                       
                                    </a>
                                   
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
                    <h3>Services </h3>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Services </li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Services widget Area -->
        <section class="services-area-three ptb-100">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Our Services</span>
                    <h2>We Provide a Wide Variety of IT Services</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                        <a href="{{route('servicedetails')}}">
                                <img src="assets/images/services/it.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-consultant"></i>
                                <span><a href="{{route('servicedetails')}}">IT Solution</a></span>
                                <h3><a href="{{route('servicedetails')}}">IT Consulting</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="{{route('servicedatailstwo')}}">
                                <img src="assets/images/services/web.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-web-development"></i>
                                <span><a href="{{route('servicedatailstwo')}}">Web Services</a></span>
                                <h3><a href="{{route('servicedatailstwo')}}">Web Development</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="{{route('servicedatailsthree')}}">
                                <img src="assets/images/services/app.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-consulting"></i>
                                <span><a href="{{route('servicedatailsthree')}}">App Services</a></span>
                                <h3><a href="{{route('servicedatailsthree')}}">Application Development</a></h3>
                            </div>
                        </div>
                    </div>

                   

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="{{route('servicedatailsfour')}}">
                                <img src="assets/images/services/digital.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-stats"></i>
                                <span><a href="{{route('servicedatailsfour')}}">Digital Services</a></span>
                                <h3><a href="{{route('servicedatailsfour')}}">Digital Marketing</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="{{route('servicedatailsfive')}}">
                                <img src="assets/images/services/software.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-structure"></i>
                                <span><a href="{{route('servicedatailsfive')}}">Software Services</a></span>
                                <h3><a href="{{route('servicedatailsfive')}}">Software Development</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="{{route('servicedatailssix')}}">
                                <img src="assets/images/services/iot.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-data-analytics"></i>
                                <span><a href="{{route('servicedatailssix')}}">Smart Devices</a></span>
                                <h3><a href="{{route('servicedatailssix')}}">IOT Devices</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Services widget Area End -->

        <!-- Clients Area -->
        <section class="clients-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Our Clients</span>
                    <h2>We are Trusted by 45+ Countries Worldwide</h2>
                </div>

                <div class="clients-slider owl-carousel owl-theme pt-45">
                    <div class="clients-content">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img1.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Jonthon Martin</h3>
                            <span>Manager of Company</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>

                    <div class="clients-content">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img2.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Alin Decros</h3>
                            <span>CEO of HTM Company</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>

                    <div class="clients-content">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img3.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Elen Musk</h3>
                            <span>CEO, MT Corporation</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>
                </div>
            </div>

            <div class="client-circle">
                <div class="client-circle-1">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-2">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-3">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-4">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-5">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-6">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-7">
                    <div class="circle"></div>
                </div>
            </div>
        </section>
        <!-- Clients Area End -->

        <!-- Brand Area -->
        <div class="brand-area ptb-100">
            <div class="container">
                <div class="brand-slider owl-carousel owl-theme">
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo1.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style1.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo2.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style2.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo3.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo4.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style4.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo5.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style5.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo3.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->

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