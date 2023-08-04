<!doctype html>
<html lang="ar" dir="ltr">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
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
                    <h3>Blog Details </h3>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Details Area -->
        <div class="blog-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-article">
                            <div class="blog-article-img">
                                <img src="assets/images/blog/blogs.jpg" alt="Images">
                                <div class="blog-article-tag">
                                    <h3>01</h3>
                                    <span>Aug</span>
                                </div>
                            </div>

                            <div class="blog-article-title">
                                <ul>
                                    <li><i class='bx bxs-user'></i> By Admin</li>
                                    <li><i class='bx bx-show-alt'></i>322 View</li>
                                    <li><i class='bx bxs-conversation'></i>2 Comments</li>
                                </ul>
                                <h2>Importance of information technology in today's business landscape</h2>
                            </div>

                            <div class="article-content">
                                <p>
                                    <b>I. Enhancing Efficiency and Productivity</b> 
                                </p>

                                  <p>   - Streamlining business processes through automation and digital tools </p>
                                    
                                  <p>  - Implementing software solutions to manage and track inventory, sales, and customer data</p>
                                    
                                  <p>   - Utilising project management software to improve collaboration and task management</p>
                                    
                               

                                <p>
                                   <b>II. Improving Communication and Collaboration</b>
                                </p>
                                <p>- Facilitating communication through email, instant messaging, and video conferencing</p>
                                 <p>- Utilising collaborative platforms for remote teams to work together effectively</p>
                                 <p>- Implementing customer relationship management (CRM) systems to enhance communication with clients</p>

                                 <p><b>III. Enhancing Decision Making and Strategic Planning</b></p>
                                 <p>- Utilizing data analytics to gain insights and make informed business decisions</p>
                                 <p>- Implementing business intelligence tools to monitor key performance indicators (KPIs)</p>
                                 <p>- Utilizing cloud computing to store and access data for strategic planning purposes</p>

                                 <p><b>IV. Enhancing Customer Experience</b></p>
                                 <p>- Developing user-friendly websites and mobile applications to facilitate customer interaction</p>
                                 <p>- Implementing customer support systems with chatbots and self-service options</p>
            
                                <blockquote class="blockquote"> 
                                    <p>
                                        “The advance of technology is based on making it fit in so that you don't really even notice it, so it's part of everyday life.” 
                                    </p>
                                    <span>- Bill Gates, Co-founder of Microsoft</span>
                                    <i class='bx bxs-quote-alt-left'></i>
                                </blockquote>

                              
                            </div>


                            


                            <div class="comments-form">
                                <h3 class="title">Leave A Comment</h3>
                                <div class="contact-form">
                                    <form action="{{route('comments')}}" id="contactForm" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Name <span>*</span></label>
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name" style="text-align: left">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
            
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Email <span>*</span></label>
                                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email" style="text-align: left">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
    
                                          

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Your Comment <span>*</span></label>
                                                    <textarea name="comment" class="form-control" id="message" cols="30" rows="8" required data-error="Please Write your Comment" placeholder="Your Comment" style="text-align: left"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group checkbox-option">
                                                    <input type="checkbox" id="chb2">
                                                    <p>
                                                        Save my name and email in this browser for the next time I comment.
                                                    </p>
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                                    Post A Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                                          
        @if (Session::has('success'))
        <script>
            swal("Thank you !", "{{Session::get('message')}}",'success',{
                button:true,
                button: "OK",
               
            })
        </script>
        @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="side-bar-area">
                            <div class="search-widget">
                                <form class="search-form">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <button type="submit">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="side-bar-widget" style="margin-top: 127px">
                                <h3 class="title">Blog Categories</h3>
                                <div class="side-bar-categories">
                                    <ul>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="{{route('blogdetails')}}" target="_blank">IT Services</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="{{route('blogdetails2')}}" target="_blank">Digital Services</a>  
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="{{route('blogdetails3')}}" target="_blank">Website Services</a>
                                        </li>
                                     
                                    </ul>
                                </div>
                            </div>

                            <div class="side-bar-widget" style="margin-top: 127px">
                                <h3 class="title">Latest Blog</h3>
                                <div class="widget-popular-post">
                                    <article class="item">
                                        <a href="{{route('blogdetails')}}" target="_blank" class="thumb">
                                            <img src="assets/images/blog/blogsm1.png" alt="Images">
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{route('blogdetails')}}" target="_blank">
                                                    Importance of information technology in today's business landscape
                                                </a>
                                            </h4>
                                            <p>01 August, 2023</p>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="{{route('blogdetails2')}}" target="_blank" class="thumb">
                                            <img src="assets/images/blog/blogsm2.png" alt="Images">
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{route('blogdetails2')}}" target="_blank">
                                                    Innovation in the digital platform
                                                </a>
                                            </h4>
                                            <p>01 July, 2023</p>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="{{route('blogdetails3')}}" target="_blank" class="thumb">
                                            <img src="assets/images/blog/blogsm3.png" alt="Images">
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{route('blogdetails3')}}" target="_blank">
                                                    How to improve your website SEO?
                                                </a> 
                                            </h4>
                                            <p>01 June, 2023</p>
                                        </div>
                                    </article>

                                   
                                </div>
                            </div>


                            <div class="side-bar-widget" style="margin-top: 120px;">
                                <h3 class="title">Tag Cloud</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="{{route('blogdetails')}}">Consultancy</a></li>
                                    <li><a href="{{route('blogdetails2')}}">Digital</a></li>
                                    <li><a href="{{route('blogdetails3')}}">SEO</a></li>
                                  
                                </ul>
                            </div>

                            <div class="side-bar-widget" style="margin-top: 100px">
                                <h3 class="title">Gallery</h3>
                                <ul class="blog-gallery">
                                    <li>
                                        <a href="https://www.instagram.com/fusionjon/" target="_blank">
                                            <img src="assets/images/blog/instaa.png" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/FusionJon7/" target="_blank">
                                            <img src="assets/images/blog/facebook.png" alt="image">
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Area End -->

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

        <script>
            $(document).ready(function () {
                // If the success message exists, hide it after 3 seconds
                if ($("#success-message").length) {
                    setTimeout(function () {
                        $("#success-message").fadeOut('slow', function () {
                            $(this).remove();
                        });
                    }, 3000);
                }
            });
        </script>

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