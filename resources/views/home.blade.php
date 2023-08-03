<!doctype html>
<html lang="en" dir="ltr">
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
                <div class="row align-items-right">
                    

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
                    <nav class="navbar navbar-expand-md navbar-light " style="width: 104%">
                       <a class="navbar-brand" style="margin-left: -11rem" href="">
                            <img src="assets/images/logos/image.png" class="logo-one" alt="Logo"> 
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
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

        <!-- Banner Four Area -->
        <div class="banner-four-area" style="height: 660px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-four-content" style="margin-top: 90px; margin-left: 85px">
                            <span>TECHNOLOGY & IT SOLUTIONS</span>
                            <h1>Bringing the Latest Technology to Your Business</h1>
                            <p>
                                We bridge the gap between industrial companies and modern technology. Boost Productivity and Efficiency with Customized IT Services
                            </p>
                            <div class="banner-btn">
                                <a href="{{route('contact')}}" class="default-btn btn-bg-two border-radius-50 ">Get A Quote <i class='bx bx-chevron-right'></i></a>
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
                            <img src="assets/images/home-four/hp2.jpg" style="margin-top: 100px; margin-right: 60px" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Four Area End -->

        <!-- Choose Area End -->
        <div class="choose-area-tow pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
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
                                        <h3 style="text-align: center">Experience Matters</h3>
                                        <p style="margin-left: 123px">We've got the team to make your dreams come true! Our highly qualified employees have the expertise to bring your vision to life.</p>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-sm-6">
                                    <div class="choose-content-card">
                                        <i class="flaticon-help"></i>
                                        <h3 style="text-align: center">Quick Support Replay</h3>
                                        <p style="margin-left: 123px">Our incredible support team is here to tackle any issue you face. No problem is too big or too small for us to handle. Get ready for a solution that will leave you smiling!</p>
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
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">02</div>
                                    <h3>Execute</h3>
                                    <p>Selecting the right team members with appropriate skills and expertise. Developing the product.</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">01</div>
                                    <h3>Planning</h3>
                                    <p>Conducting a thorough analysis of the project requirements. Allocating resources and setting a timeline.</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">04</div>
                                    <h3>Innovation</h3>
                                    <p>Enhancing project efficiency and effectiveness. Improving customer satisfaction. Driving competitive advantage.</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-sm-6">
                                <div class="work-process-card-two">
                                    <div class="number-title">03</div>
                                    <h3>Deliver</h3>
                                    <p>Monitoring project progress and ensuring adherence to timelines. Conducting regular project meetings and status updates.</p>
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


<div style="height: 50px"></div>

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
                                    <i class="flaticon-website"></i>
                                    <h3>ERP</h3>
                                </div>
                            </div>
                            
        
                           
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-apple"></i>
                                    <h3>CRM</h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-television"></i>
                                    <h3>HRMS</h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-android"></i>
                                    <h3>Loyalty Program</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-smartwatch"></i>
                                    <h3>Product Selector</h3>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-6 col-md-4">
                                <div class="technology-card technology-card-color2">
                                    <i class="flaticon-cyber-security"></i>
                                    <h3>RFID Solution</h3>
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
                                    <img src="assets/images/blog/blog1.jpg" alt="Blog Images">
                                </a>
                                <a href="{{route('blogdetails')}}" class="blog-tag">
                                    IT Services
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        11 June
                                    </li>
                                    <li>
                                        <a href=""><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{route('blogdetails')}}">Importance of information technology in today's business landscape</a>
                                </h3>
                                <p>Implementing automation and digital tools for efficient business processes, tracking inventory, sales, and customer data.</p>
                                <a href="{{route('blogdetails')}}" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/digitals.jpg" alt="Blog Images">
                                </a>
                                <a href="{{route('blogdetails2')}}" class="blog-tag">
                                    Digital Service
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        15 June
                                    </li>
                                    <li>
                                        <a href=""><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{route('blogdetails2')}}">Innovation in the digital platform</a>
                                </h3>
                                <p>The new device addresses current challenges in digital platforms, such as lack of user-friendly devices, limited compatibility, and inefficient data transfer and storage.</p>
                                <a href="{{route('blogdetails2')}}" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="{{route('blogdetails3')}}">
                                    <img src="assets/images/blog/blognew.jpg" alt="Blog Images">
                                </a>
                                <a href="{{route('blogdetails3')}}" class="blog-tag">
                                    Website Services
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        17 June
                                    </li>
                                    <li>
                                        <a href=""><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{route('blogdetails3')}}">How to improve your website SEO?</a>
                                </h3>
                                <p>Keyword research is crucial for selecting the right keywords, while on-page SEO optimization involves optimizing meta tags, title tags, URLs, and content.</p>
                                <a href="{{route('blogdetails3')}}" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <!-- Footer Area  -->
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
                                        left: -7px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Web Services 
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailsthree')}}" target="_blank" style="    position: relative;
                                        left: -8px;">
                                            <i class='bx bx-chevron-right'></i>
                                           App Services  
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailsfour')}}" target="_blank" style="    position: relative;
                                        left: -1px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Digital Services   
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailsfive')}}" target="_blank" style="    position: relative;
                                        left: 7px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Software Services      
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{route('servicedatailssix')}}" target="_blank" style="    position: relative;
                                        left: -4px;">
                                            <i class='bx bx-chevron-right'></i>
                                            Smart Devices    
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
                                    <li class="none">

                                        <div class="content" style="margin-top: 30px">
                                            <i class='bx bxs-map'  style="position: relative;
                                           top: 2px;
                                           right: 20px;
                                            color: cyan"></i>
                                           
                                            <span style="color: white">E- 31 A, Fourth Floor, Jawahar Park, Near Hira Sweets, Laxmi Nagar, Delhi - 110092</span>
                                        </div>
                                    </li>

                                    <li class="none">

                                        <div class="content" style="margin-top: -9px">
                                            <i class='bx bx-phone-call'   style="position: relative;
                                            right: 16px;
                                            top: 1px;
                                            color: cyan; "></i>
                                            
                                            <a href="tel:+1(212)-255-5511" style="color: white; margin-top: 42px;">011-45696408 / 9810358257 </a>
                                        </div>
                                    </li>
    
                                    
    
                                    <li class="none">

                                        <div class="content">
                                            <i class='bx bx-message'  style="position: relative;
                                            right: 20px;
                                            top: 5px;
                                            color: cyan;"></i>
                                           
                                            <a href="mailto:hello@techex.com" style="color: white; margin-top: 42px;">support@fusionjon.com</a>
                                        </div>
                                    </li>
                                </ul>
                                
                                <div class="newsletter-area" style="margin-top: 52px">
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