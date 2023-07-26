<!doctype html>
<html lang="ar" dir="rtl">
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
                    <div class="col-lg-7 col-md-6">
                        <div class="top-head-left">
                            <div class="top-contact">
                                <h3>Support By : <a href="tel:+1(212)-255-5511">+1 (212) 255-5511</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="top-header-right">
                            <div class="top-header-social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
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
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="language-list">
                                <select class="language-list-item">
                                    <option>English</option>
                                    <option>العربيّة</option>
                                    <option>Deutsch</option>
                                    <option>Português</option>
                                    <option>简体中文</option>
                                </select>	
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
                       <a class="navbar-brand" href="">
                            <img src="assets/images/logos/image.png" class="logo-one" alt="Logo"> 
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto flex-row-reverse">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link active">
                                        Home 
                                       
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about')}}" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
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
                                            <a href="#" class="nav-link">
                                                Case Study 
                                                <i class='bx bx-caret-down'></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="{{route('case')}}" class="nav-link">
                                                        Case Study  
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('casedetails')}}" class="nav-link">
                                                        Case Study Details 
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                User
                                                <i class='bx bx-caret-down'></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="log-in.html" class="nav-link">
                                                        Log In
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="register.html" class="nav-link">
                                                        Registration
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="forget-password.html" class="nav-link">
                                                        Forget Password
                                                    </a>
                                                </li>
                                            </ul>
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
                                    <a href="#" class="nav-link">
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
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('blog')}}" class="nav-link">
                                                Blog Style One 
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="{{route('blogdetails')}}" class="nav-link">
                                                Blog Details 
                                            </a>
                                        </li>
                                    </ul>
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

        <!-- Banner Four Area -->
        <div class="banner-four-area" style="height: 660px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-four-content" style="margin-top: 100px">
                            <span>TECHNOLOGY & IT SOLUTIONS</span>
                            <h1>Bringing the Latest Technology to Your Business</h1>
                            <p>
                                We bridge the gap between industrial companies and modern technology. Boost Productivity and Efficiency with Customized IT Services
                            </p>
                            <div class="banner-btn">
                                <a href="contact.html" class="default-btn btn-bg-two border-radius-50 ">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-btn popup-btn ml-20">
                                    <i class="bx bx-play"></i>
                                    <h3>Watch Video</h3>
                                    <span>2 Minutes</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 pe-0">
                        <div class="banner-four-img">
                            <img src="assets/images/home-four/hp2.jpg" style="margin-top: 60px;" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Four Area End -->

        <!-- Choose Area End -->
        <div class="choose-area-tow pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="choose-content-two">
                            <div class="section-title">
                                
                                <h2 style="color: rgb(8, 8, 157)">Let us help you take your business to new heights</h2>
                                <p>
                                    Fusionjon Tech is the go-to company for all your IoT/IIoT and IT needs! With our unbeatable solutions and strong ethics, we cover all industries to keep you future-ready. Trust us for a professional and advanced approach. Let's create a connected future together!
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="choose-content-card">
                                        <i class="flaticon-practice"></i>
                                        <h3>Experience Matters</h3>
                                        <p>We've got the team to make your dreams come true! Our highly qualified employees have the expertise to bring your vision to life.</p>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-sm-6">
                                    <div class="choose-content-card">
                                        <i class="flaticon-help"></i>
                                        <h3>Quick Support Replay</h3>
                                        <p>Our incredible support team is here to tackle any issue you face. No problem is too big or too small for us to handle. Get ready for a solution that will leave you smiling!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-6">
                        <div class="choose-img-two">
                            <img src="assets/images/choose-img/hp3.jpg" alt="About Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Area End -->

        <!-- Services Area Three -->
        <section class="services-area-three ptb-100">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Our Services</span>
                    <h2>We Provide a Wide Variety of IT Services</h2>
                </div>
                <div class="row pt-45 flex-row-reverse">
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details.html">
                                <img src="assets/images/services/it.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-consultant"></i>
                                <span><a href="service-details.html">IT Solution</a></span>
                                <h3><a href="service-details.html">IT Consulting</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details.html">
                                <img src="assets/images/services/web.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-web-development"></i>
                                <span><a href="service-details.html">Web Services</a></span>
                                <h3><a href="service-details.html">Web Development</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details.html">
                                <img src="assets/images/services/app.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-consulting"></i>
                                <span><a href="service-details.html">App Services</a></span>
                                <h3><a href="service-details.html">Application Development</a></h3>
                            </div>
                        </div>
                    </div>

                   

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details.html">
                                <img src="assets/images/services/digital.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-stats"></i>
                                <span><a href="service-details.html">Digital Services</a></span>
                                <h3><a href="service-details.html">Digital Marketing</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details.html">
                                <img src="assets/images/services/software.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-structure"></i>
                                <span><a href="service-details.html">Software Services</a></span>
                                <h3><a href="service-details.html">Software Development</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details.html">
                                <img src="assets/images/services/iot.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-data-analytics"></i>
                                <span><a href="service-details.html">Smart Devices</a></span>
                                <h3><a href="service-details.html">IOT Devices</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Services Area Three End -->

        <!-- Talk Area Two -->
        <div class="talk-area-two ptb-100">
            <div class="container">
                <div class="talk-content text-center">
                    <div class="section-title text-center">
                        <span class="sp-color1">Let's Talk</span>
                        <h2>We Are Adding Kinds of It Services That You Grow Success</h2>
                    </div>
                    <a href="{{route('contact')}}" class="default-btn btn-bg-one border-radius-5">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- Talk Area Two End -->

        <!-- Work Process Area Two -->
        <section class="work-process-area-two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center flex-row-reverse">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">02</div>
                                    <h3>Execute</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">01</div>
                                    <h3>Planning</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">04</div>
                                    <h3>Innovation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">03</div>
                                    <h3>Deliver</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="work-process-right">
                            <div class="section-title">
                                <span class="sp-color1">Our Working Process</span>
                                <h2>How Our Services Will Help You to Grow Your Business</h2>
                            </div>
                            <a href="{{route('contact')}}" class="default-btn btn-bg-two border-radius-50 text-center">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Process Area Two End -->

        <!-- Clients Area -->
        <section class="clients-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Our Clients</span>
                    <h2>Our Clients Feedback</h2>
                </div>

                <div class="clients-slider owl-carousel owl-theme pt-45">
                    <div class="clients-content clients-content-color">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img1.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Jonthon Martin</h3>
                            <span>App Developer</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>

                    <div class="clients-content clients-content-color">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img2.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Alin Decros</h3>
                            <span>Graphic Designer</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>

                    <div class="clients-content clients-content-color">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img3.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Elen Musk</h3>
                            <span>Web Developer</span>
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

         <!-- Build Area -->
         <div class="build-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Case Study</span>
                    <h2>! Let's Build Your Website</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="build-item">
                            <a href="case-details.html">
                                <img src="assets/images/build/build-img4.jpg" alt="Images">
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
                        <div class="build-item">
                            <a href="case-details.html">
                                <img src="assets/images/build/build-img5.jpg" alt="Images">
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

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="build-item">
                            <a href="case-details.html">
                                <img src="assets/images/build/build-img6.jpg" alt="Images">
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
                </div>
            </div>
        </div>
        <!-- Build Area End -->

        <!-- Technology Area -->
        <section class="technology-area-three pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="sp-color1">Technology Index</span>
                            <h2>We Deliver Our Best Solution With The Goal of Trusting</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae ante eget odio egestas pretium. Vestibulum sagittis dictum sem, imperdiet consectetur nunc vulputate non. Duis sit amet aliquet velit.
                                Ut malesuada urna et ultrices efficitur. Nulla turpis dui, rhoncus sed erat quis, pharetra scelerisque leo.
                            </p>
                            <a href="{{route('contact')}}" class="default-btn btn-bg-two border-radius-50 text-center">Get A Quote</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-android"></i>
                                    <h3>Android</h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-website"></i>
                                    <h3>Web</h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-apple"></i>
                                    <h3>ios</h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-television"></i>
                                    <h3>TV</h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-smartwatch"></i>
                                    <h3>Watch </h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-cyber-security"></i>
                                    <h3>IoT</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Technology Area End -->

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center flex-row-reverse">
                    <span class="sp-color2">Latest Blog</span>
                    <h2>Let’s Check Some Latest Blog</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-img7.jpg" alt="Blog Images">
                                </a>
                                <a href="{{route('servicedetails')}}" class="blog-tag">
                                    Digital Technology
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        11 June
                                    </li>
                                    <li>
                                        <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Product Idea Solution for New Generation</a>
                                </h3>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                <a href="blog-details.html" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-img8.jpg" alt="Blog Images">
                                </a>
                                <a href="service-details.html" class="blog-tag">
                                    Artifical Intelligence
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        15 June
                                    </li>
                                    <li>
                                        <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">New Device Invention for Digital Platform</a>
                                </h3>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                <a href="blog-details.html" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-img9.jpg" alt="Blog Images">
                                </a>
                                <a href="service-details.html" class="blog-tag">
                                    It Services
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        17 June
                                    </li>
                                    <li>
                                        <a href="index.html"><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Business Strategy Make His Goal Acheive </a>
                                </h3>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                <a href="blog-details.html" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <!-- Footer Area End -->
        <footer class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="assets/images/logos/footer-logo.png" alt="Images">
                                    </a>
                                </div>
                                <p>
                                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auct.Aenean, lorem quis bibendum auct. Aenean sollicitudin lorem.
                                </p>
                                <div class="footer-call-content">
                                    <h3>Talk to Our Support</h3>
                                    <span><a href="tel:+1002-123-4567">+1 002-123-4567</a></span>
                                    <i class='bx bx-headphone'></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="footer-widget pl-2">
                                <h3>Services</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            IT Consultancy
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Business Solution 
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Digital Services  
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="compare.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Business Reform   
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Web Development      
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Cloud Computing      
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Data Analysis      
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget pl-5">
                                <h3>Our Blog</h3>
                                <ul class="footer-blog">
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-img-footer.jpg" alt="Images">
                                        </a>
                                        <div class="content">
                                            <h3><a href="blog-details.html">Product Idea Solution For New Generation</a></h3>
                                            <span>04 Dec 2020</span>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-img-footer2.jpg" alt="Images">
                                        </a>
                                        <div class="content">
                                            <h3><a href="blog-details.html">New Device Invention for Digital Platform</a></h3>
                                            <span>07 Dec 2020</span>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-img-footer3.jpg" alt="Images">
                                        </a>
                                        <div class="content">
                                            <h3><a href="blog-details.html">Business Strategy Make His Goal Acheive</a></h3>
                                            <span>10 Dec 2020</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <h3>Newsletter</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus molestie molestie. Phasellus ac rutrum massa, et volutpat nisl. Fusce ultrices suscipit nisl.</p>
                                <div class="newsletter-area">
                                    <form class="newsletter-form" data-toggle="validator" method="POST">
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
                            Copyright © <script>document.write(new Date().getFullYear())</script> Techex. All Rights Reserved by 
                            <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a> 
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