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

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Blog Style One </h3>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Blog Style One</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Style Area -->
        <div class="blog-style-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-style-card">
                                   <div class="blog-style-img">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-style-img1.jpg" alt="Images">
                                        </a>
                                        <div class="blog-style-tag">
                                            <h3>04</h3>
                                            <span>Nov</span>
                                        </div>
                                   </div>

                                    <div class="content">
                                        <ul>
                                            <li><i class='bx bxs-user'></i> By Admin</li>
                                            <li><i class='bx bx-show-alt'></i>322 View</li>
                                            <li><i class='bx bx-purchase-tag-alt'></i>Business</li>
                                        </ul>
                                        <h3><a href="blog-details.html">10 Ways To Get Efficient Result and Benefits</a></h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel vewwlit  nisi elit consequat ipsum.</p>
                                        <a href="blog-details.html" class="default-btn btn-bg-two border-radius-50">Learn More <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="blog-style-card">
                                   <div class="blog-style-img">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-style-img2.jpg" alt="Images">
                                        </a>
                                        <div class="blog-style-tag">
                                            <h3>06</h3>
                                            <span>Nov</span>
                                        </div>
                                   </div>

                                    <div class="content">
                                        <ul>
                                            <li><i class='bx bxs-user'></i> By Admin</li>
                                            <li><i class='bx bx-show-alt'></i>322 View</li>
                                            <li><i class='bx bx-purchase-tag-alt'></i>Digital</li>
                                        </ul>
                                        <h3><a href="blog-details.html">New Device Invention for Digital Platform</a></h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel vewwlit  nisi elit consequat ipsum.</p>
                                        <a href="blog-details.html" class="default-btn btn-bg-two border-radius-50">Learn More <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="blog-style-card">
                                   <div class="blog-style-img">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-style-img3.jpg" alt="Images">
                                        </a>
                                        <div class="blog-style-tag">
                                            <h3>07</h3>
                                            <span>Nov</span>
                                        </div>
                                   </div>

                                    <div class="content">
                                        <ul>
                                            <li><i class='bx bxs-user'></i> By Admin</li>
                                            <li><i class='bx bx-show-alt'></i>122 View</li>
                                            <li><i class='bx bx-purchase-tag-alt'></i>App</li>
                                        </ul>
                                        <h3><a href="blog-details.html">5 App that Really Hack and Help you to Make Your Phone More Easy</a></h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel vewwlit  nisi elit consequat ipsum.</p>
                                        <a href="blog-details.html" class="default-btn btn-bg-two border-radius-50">Learn More <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="blog-style-card">
                                   <div class="blog-style-img">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-style-img4.jpg" alt="Images">
                                        </a>
                                        <div class="blog-style-tag">
                                            <h3>14</h3>
                                            <span>Nov</span>
                                        </div>
                                   </div>

                                    <div class="content">
                                        <ul>
                                            <li><i class='bx bxs-user'></i> By Admin</li>
                                            <li><i class='bx bx-show-alt'></i>222 View</li>
                                            <li><i class='bx bx-purchase-tag-alt'></i>Product</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Product Idea Solution for new Generation</a></h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel vewwlit  nisi elit consequat ipsum.</p>
                                        <a href="blog-details.html" class="default-btn btn-bg-two border-radius-50">Learn More <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <div class="pagination-area">
                                    <a href="{{route('blog')}}" class="prev page-numbers">
                                        <i class='bx bx-left-arrow-alt'></i>
                                    </a>
        
                                    <a href="{{route('blog')}}" class="page-numbers">3</a>
                                    <a href="{{route('blog')}}" class="page-numbers">2</a>
                                    <span class="page-numbers current" aria-current="page">1</span>
                                    
                                    <a href="{{route('blog')}}" class="next page-numbers">
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
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
                                            <a href="blog-details.html">IT Services<span>[70]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Business<span>[24]</span></a>  
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Creative Invention<span>[08]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Technology <span>[17]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">IT Consulting <span>[20]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Marketing Growth <span>[13]</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Latest Blog</h3>
                                <div class="widget-popular-post">
                                    <article class="item">
                                        <a href="news-details.html" class="thumb">
                                            <span class="full-image cover bg1" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="news-details.html">
                                                    10 Ways to Get Efficient Result & Benefits
                                                </a>
                                            </h4>
                                            <p>Nov 05, 2020</p>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="news-details.html" class="thumb">
                                            <span class="full-image cover bg2" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="news-details.html">
                                                    New Device Invention for Digital Platform
                                                </a>
                                            </h4>
                                            <p>13 October, 2020</p>
                                        </div>
                                    </article>
    
                                    <article class="item">
                                        <a href="news-details.html" class="thumb">
                                            <span class="full-image cover bg3" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="news-details.html">
                                                    Idea For New 5 App Design
                                                </a> 
                                            </h4>
                                            <p>17 October, 2020</p>
                                        </div>
                                    </article>

                                    <article class="item">
                                        <a href="news-details.html" class="thumb">
                                            <span class="full-image cover bg4" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="news-details.html">
                                                    Product Idea Solution For New Generation
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
                                    <li><a href="blog-details.html">Android</a></li>
                                    <li><a href="blog-details.html">Creative</a></li>
                                    <li><a href="blog-details.html">App</a></li>
                                    <li><a href="blog-details.html">IOS</a></li>
                                    <li><a href="blog-details.html">Business</a></li>
                                    <li><a href="blog-details.html">Consulting</a></li>
                                </ul>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title">Gallery</h3>
                                <ul class="blog-gallery">
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-small-img1.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-small-img2.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-small-img3.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-small-img4.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-small-img5.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
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
                                            <a href="blog-details.html">Design<span>[70]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Business<span>[24]</span></a>  
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Development<span>[08]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Technology <span>[17]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Startup <span>[20]</span></a>
                                        </li>
                                        <li>
                                            <div class="line-circle"></div>
                                            <a href="blog-details.html">Marketing Growth <span>[13]</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Style Area End -->

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