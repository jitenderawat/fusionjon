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
                                <img src="assets/images/blog/blog2.jpg" alt="Images">
                                <div class="blog-article-tag">
                                    <h3>04</h3>
                                    <span>Nov</span>
                                </div>
                            </div>

                            <div class="blog-article-title">
                                <ul>
                                    <li><i class='bx bxs-user'></i> By Admin</li>
                                    <li><i class='bx bx-show-alt'></i>322 View</li>
                                    <li><i class='bx bxs-conversation'></i>2 Comments</li>
                                </ul>
                                <h2>Innovation in the digital platform</h2>
                            </div>

                            <div class="article-content">
                                <p>
                                    <b>I. Current Challenges in the Digital Platform</b> 
                                </p>

                                  <p>- Lack of user-friendly devices </p>
                                    
                                  <p>- Limited compatibility across platforms</p>
                                    
                                  <p>- Inefficient data transfer and storage</p>
                                    
                               

                                <p>
                                   <b>II. Innovative Features of the New Device</b>
                                </p>
                                <p>- Enhanced user interface for seamless navigation</p>
                                 <p>- Cross-platform compatibility for convenience</p>
                                 <p>- High-speed data transfer and sufficient storage capacity</p>

                                 <p><b>III. Benefits of the New Device</b></p>
                                 <p>- Improved user experience and satisfaction</p>
                                 <p>- Increased productivity and efficiency</p>
                                 <p>- Enhanced data security and privacy</p>

                                 <p><b>IV. Potential Applications of the New Device</b></p>
                                 <p>- Gaming and entertainment industry</p>
                                 <p>- Business and productivity tools</p>
                                 <p>- Education and e-learning platforms</p>

                                 <p><b>V. Market Potential and Future Outlook</b></p>
                                 <p>- Growing demand for digital platform devices</p>
                                 <p>- Future advancements and possibilities in the digital platform industry</p>
                                 <p>- Education and e-learning platforms</p>
            
                                 <p><b>VI. Conclusion</b></p>
                                 <p>- Recap of the new device's features and benefits</p>
                                 <p>- Importance of continued innovation in the digital platform</p>
                                 <p>- Final thoughts on the potential impact of the new device.</p>

                                <blockquote class="blockquote"> 
                                    <p>"The digital revolution is far more significant than the invention of writing or even of printing."
                                    </p>
                                    <span> -  Douglas Engelbart</span>
                                    <i class='bx bxs-quote-alt-left'></i>
                                </blockquote>

                              
                            </div>

                            <div class="blog-article-share">
								<div class="row align-items-center">
									<div class="col-lg-7 col-sm-7 col-md-7">
										<div class="blog-tag">
											<ul>
                                                <li><i class='bx bx-purchase-tag-alt'></i> Tags:</li>
												<li><a href="">Android</a></li>
                                                <li><a href="">Creative</a></li>
                                                <li><a href="">App</a></li>
											</ul>
										</div>
                                    </div>
                                    
									<div class="col-lg-5 col-sm-5 col-md-5">
										<ul class="social-icon">
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
								</div>
                            </div>

                            <div class="comments-wrap">
                                <div class="comment-title">
                                    <h3 class="title">Comments</h3>
                                </div>
								
								<ul class="comment-list">
									
                                    
                                    <li>
										<img src="assets/images/blog/blog-profile1.png" alt="Image">
										<h3>Medison Decros</h3>
                                        <span>On September 18,2020 at 4.30 pm</span>
										<p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                            Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                                            us mus. Donec quam felis, ultricies ne, pellentesque. 
                                        </p>
                                        <a href=""> Reply</a>
                                    </li>

                                    <li>
										<img src="assets/images/blog/blog-profile2.png" alt="Image">
										<h3>Jekson Albin</h3>
                                        <span>On September 18,2020 at 4.30 pm</span>
										<p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                            Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                                            us mus. Donec quam felis, ultricies ne, pellentesque. 
                                        </p>
                                        <a href=""> Reply</a>
                                    </li>

                                    <li>
										<img src="assets/images/blog/blog-profile3.png" alt="Image">
										<h3>Bentham Debid</h3>
                                        <span>On September 18,2020 at 4.30 pm</span>
										<p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                            Aenean massa. cu sociis natoque penatibus et magnis dis parturient montes, nascetur ridicule
                                            us mus. Donec quam felis, ultricies ne, pellentesque.
                                        </p>
										<a href="">Reply</a>
                                    </li>
								</ul>
                            </div>

                            <div class="comments-form">
                                <h3 class="title">Leave A Comment</h3>
                                <div class="contact-form">
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Name <span>*</span></label>
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Email <span>*</span></label>
                                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Your website <span>*</span></label>
                                                    <input type="text" name="websit" class="form-control" required data-error="Your website" placeholder="Your website">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Your website <span>*</span></label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write Your Review" placeholder="Your Review"></textarea>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group checkbox-option">
                                                    <input type="checkbox" id="chb2">
                                                    <p>
                                                        Save my name, email, and website in this browser for the next time I comment.
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

                            <div class="side-bar-widget">
                                <h3 class="title">Blog Categories</h3>
                                <div class="side-bar-categories">
                                    <ul>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">IT Services</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Business</a>  
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Creative Invention</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Technology</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">IT Consulting </a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Marketing Growth</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Latest Blog</h3>
                                <div class="widget-popular-post">
                                    <article class="item">
                                        <a href="{{route('blogdetails')}}" target="_blank" class="thumb">
                                            <span class="full-image cover bg1" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{route('blogdetails')}}" target="_blank">
                                                    Importance of information technology in today's business landscape
                                                </a>
                                            </h4>
                                            <p>Nov 05, 2020</p>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="{{route('blogdetails2')}}" target="_blank" class="thumb">
                                            <span class="full-image cover bg2" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{route('blogdetails2')}}" target="_blank">
                                                    Innovation in the digital platform
                                                </a>
                                            </h4>
                                            <p>13 October, 2020</p>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="{{route('blogdetails3')}}" target="_blank" class="thumb">
                                            <span class="full-image cover bg3" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{route('blogdetails3')}}" target="_blank">
                                                    How to improve your website SEO?
                                                </a> 
                                            </h4>
                                            <p>17 October, 2020</p>
                                        </div>
                                    </article>

                                   
                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Tag Cloud</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="" target="_blank">Android</a></li>
                                    <li><a href="" target="_blank">Creative</a></li>
                                    <li><a href="" target="_blank">App</a></li>
                                    <li><a href="" target="_blank">IOS</a></li>
                                    <li><a href="" target="_blank">Business</a></li>
                                    <li><a href="" target="_blank">Consulting</a></li>
                                </ul>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Gallery</h3>
                                <ul class="blog-gallery">
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="assets/images/blog/blog-small-img1.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="assets/images/blog/blog-small-img2.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="assets/images/blog/blog-small-img3.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="assets/images/blog/blog-small-img4.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="assets/images/blog/blog-small-img5.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="assets/images/blog/blog-small-img6.jpg" alt="image">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Archive</h3>
                                <div class="side-bar-categories">
                                    <ul>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Design</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Business</a>  
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Developmen</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Technology</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Startup</a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="" target="_blank">Marketing Growth</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Area End -->

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
                                        
                                        <div class="content">
                                            <h3><a href="{{route('blogdetails')}}">Importance of information technology in today's business landscape</a></h3>
                                            <span>04 Dec 2020</span>
                                        </div>
                                    </li>

                                    <li>
                                       
                                        <div class="content">
                                            <h3><a href="{{route('blogdetails2')}}">Innovation in the digital platform</a></h3>
                                            <span>07 Dec 2020</span>
                                        </div>
                                    </li>

                                    <li>
                                        
                                        <div class="content">
                                            <h3><a href="{{route('blogdetails3')}}">How to improve your website SEO? </a></h3>
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