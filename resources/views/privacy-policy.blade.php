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
                                    <a href="{{ route('home')}}">
                                        Home 
                                       
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about')}}" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
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
                                            <a href="{{ route('privacy')}}" class="nav-link active">
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
                                            <a href="s{{route('servicedetails')}}" class="nav-link">
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
                    <h3>Privacy Policy</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home')}}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Privacy-Policy Area -->
        <div class="privacy-policy-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                   
                    <h2>PRIVACY POLICY</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-12">
                        <div class="single-content">
                            
                            <p style="text-align: left;">
                                <b>FUSIONJON TECH PRIVATE LIMITED</b> recognizes the
                                importance of maintaining your privacy. We value your privacy
                                and appreciate your trust in us. This Privacy Policy sets out how
                                <b>FUSIONJON TECH PRIVATE LIMITED</b> uses and protects any
                                information that you give <b>FUSIONJON TECH PRIVATE LIMITED </b>
                                when you use this <b>www.fusionjon.com</b> or the <b>FUSIONJON
                                TECH PRIVATE LIMITED </b>mobile application or any other digital
                                medium and other offline sources of our Company. <b>FUSIONJON
                                TECH PRIVATE LIMITED</b> is committed to ensure that your
                                privacy is protected. Should we ask you to provide certain
                                information by which you can be identified when using this
                                website, then you can be assured that it will only be used in
                                accordance with this Privacy Policy as it describes how we treat
                                user information we collect from you, the policies and procedures
                                on the collection, use, disclosure and protection of your
                                information when you use our <b>FUSIONJON TECH PRIVATE
                                LIMITED </b>Platform.
                            </p>
                            <p style="text-align: left">
                                This Privacy Policy applies to current and former visitors to
                                our <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform and to our
                                online customers. By visiting and/or using our website, you agree
                                to this Privacy Policy. <b>FUSIONJON TECH PRIVATE LIMITED </b>
                                may change this policy from time to time by updating this page.
                                You should check this page from time to time to ensure that you
                                are happy with any changes.
                            </p>
                            <p style="text-align: left"><b>www.fusionjon.com</b> is a property of <b>FUSIONJON TECH PRIVATE
                                LIMITED </b>, established under laws of India, having its
                                registered office at <b>E- 31 A, TOP FLOOR, JAWAHAR PARK,
                                NEAR HEERA SWEETS, LAXMI NAGAR, Delhi -110092. </b></p>
                        </div>

                        <div class="single-content">
                            <h3 style="text-align: left">DEFINITIONS</h3>
                            <p style="text-align: left">
                                The terms "<b>FJ TECH</b>", "Company", "we", "us" and "our" refer
                                to the <b>FUSIONJON TECH PRIVATE LIMITED.</b>
                                
                            </p>
                            <p style="text-align: left">
                                The term "<b>FUSIONJON TECH PRIVATE LIMITED</b> Platform"
                                refers to <b>www.fusionjon.com </b>or the <b>FUSIONJON TECH
                                PRIVATE LIMITED</b> mobile application or any other digital
                                medium and other offline sources.
                                
                            </p>
                            <p style="text-align: left">The terms "you" and "your" refer to the user of the
                                <b>www.fusionjon.com</b></p>
                                <p style="text-align: left">
                                    The term "Group" means, with respect to any person, any
entity that is controlled by such person, or any entity that controls
such person, or any entity that is under common control with
such person, whether directly or indirectly, or, in the case of a
natural person, any Relative (as such term is defined in the
Companies Act, 1956 and Companies Act, 2013 to the extent
applicable) of such person.
                                </p>
                                <p style="text-align: left">The term "Services" refers to any services offered by
                                    <b>FUSIONJON TECH PRIVATE LIMITED </b> whether on the Swiggy
                                    Platform or otherwise.
                                    </p>
                                    <p style="text-align: left">
                                        The term "Policy" refers to this Privacy Policy.
Please read this Policy before using the<b>FUSIONJON TECH PRIVATE LIMITED </b>Platform or submitting any personal
information to <b>FUSIONJON TECH PRIVATE LIMITED </b>. This
Policy is a part of and incorporated within, and is to be read
along with, the Terms of Use.
                                    </p>
                        </div>

                        <div class="single-content">
                            <h3 style="text-align: left">INFORMATION WE COLLECT FROM YOU</h3>
                            <p style="text-align: left"><b>Contact information</b></p>
                            <p style="text-align: left">
                                We might collect your <b>Name, Email, IP Address.</b>
                            </p>
                            <p style="text-align: left"><b>Payment and billing information</b></p>
                            <p style="text-align: left">
                                We might collect your billing name, billing address and payment
method when you buy a product/service. We NEVER collect your
credit card number or credit card expiry date or other details
pertaining to your credit card on our website. Credit card
information will be obtained and processed by our online
payment partner.
                            </p>
                            <p style="text-align: left"><b>Information you post </b></p>
                            <p style="text-align: left">
                                We collect information you post in a public space on our
                                <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform or on a thirdparty social media site belonging to <b>FUSIONJON TECH PRIVATE LIMITED. </b>

                            </p>
                            <p style="text-align: left"><b>Usage and Preference Information</b></p>
                            <p style="text-align: left">Usage and Preference Information:
                                We collect information as to how you interact with our Services,
                                preferences expressed and settings chosen. <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform includes the <b>FUSIONJON TECH PRIVATE LIMITED </b> advertising services ("Ad Services"), which
                                may collect user activity and browsing history within the
                                <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform and across
                                third-party sites and online services, including those sites and
                                services that include our ad pixels ("Pixels"), widgets, plug-ins,
                                buttons, or related services or through the use of cookies. Our Ad
                                Services collect browsing information including, without limitation,
                                your Internet protocol (IP) address and location, your login
                                information, browser type and version, date and time stamp, user
                                agent,<b>FUSIONJON TECH PRIVATE LIMITED </b> cookie ID (if
                                applicable), time zone setting, browser plug-in types and
                                versions, operating system and platform, and other information
                                about user activities on the <b>FUSIONJON TECH PRIVATE LIMITED </b>, as well as on third party sites and services
                                that have embedded our Pixels, widgets, plug-ins, buttons, or
                                related services.</p>
                                <p style="text-align: left"><b>Transaction Information</b></p>
                                <p style="text-align: left">We collect transaction details related to your use of our Services,
                                    and information about your activity on the Services, including the
                                    full Uniform Resource Locators (URL), the type of Services you
                                    requested or provided, comments, domain names, search results
                                    selected, number of clicks, information and pages viewed and
                                    searched for, the order of those pages, length of your visit to our
                                    Services, the date and time you used the Services, amount
                                    charged, details regarding application of promotional code,
                                    methods used to browse away from the page and any phone
                                    number used to call our customer service number and other
                                    related transaction details.
                                    </p>
                                    <p style="text-align: left"><b>Stored information and files</b></p>
                                    <p style="text-align: left"><b>FUSIONJON TECH PRIVATE LIMITED </b> mobile application
                                        (<b>FUSIONJON TECH PRIVATE LIMITED </b> app) may also access
                                        metadata and other information associated with other files stored
                                        on your mobile device. This may include, for example,
                                        photographs, audio and video clips, personal contacts and
                                        address book information. If you permit the <b>FUSIONJON TECH PRIVATE LIMITED </b> app to access the address book on your
                                        device, we may collect names and contact information from your
                                        address book to facilitate social interactions through our services
                                        and for other purposes described in this Policy or at the time of
                                        consent or collection. If you permit the <b>FUSIONJON TECH PRIVATE LIMITED </b> app to access the calendar on your device,
                                        we collect calendar information such as event title and
                                        description, your response (Yes, No, Maybe), date and time,
                                        location and number of attendees. If you are a partner company,
                                        we will, additionally, record your calls with us made from the
                                        device used to provide Services, related call details, SMS details
                                        location and address details.</p>
                                        <p style="text-align: left"><b>Demographic information</b></p>
                                        <p style="text-align: left">We may collect demographic information about you, events you
                                            like, events you intend to participate in, tickets you buy, or any
                                            other information provided by you during the use of <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform. We might collect this as a
                                            part of a survey also.</p>
                                            <p style="text-align: left"><b>Other information</b></p>
                                            <p style="text-align: left">If you use <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform, we
                                                may collect information about your IP address and the browser
                                                you're using. We might look at what site you came from, duration
                                                of time spent on our website, pages accessed or what site you
                                                visit when you leave us. We might also collect the type of mobile
                                                device you are using, or the version of the operating system your
                                                computer or device is running.
                                                </p>
                        </div>

                        <div class="single-content">
                            <h3 style="text-align: left">WAYS OF COLLECTING INFORMATION</h3>
                            <p style="text-align: left">
                               <b>We collect information directly from you</b>
                            </p>
                            <p style="text-align: left">
                                We collect information directly from you when you register on
                                <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform. We also collect
information if you post a comment on <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform or ask us a question through phone
or email or any other source of communication.

                            </p>
                            <p style="text-align: left"><b>We collect information from you passively</b></p>
                            <p style="text-align: left">We use tracking tools like <b>Google Cookies</b> for collecting
                                information about your usage of our website.</p>
                                <p style="text-align: left"><b>We get information about you from third parties</b></p>
                                <p style="text-align: left">We may receive information about you from third parties, such as
                                    other users, partners (including ad partners, analytics providers,
                                    search information providers), or our affiliated companies or if
                                    you use any of the other websites/apps we operate or the other
                                    Services we provide. Users of our Ad Services and other thirdparties may share information with us such as the cookie ID,
                                    device ID, or demographic or interest data, and information about
                                    content viewed or actions taken on a third-party website, online
                                    services or apps. For example, users of our Ad Services may
                                    also be able to share customer list information (e.g., email or
                                    phone number) with us to create customized audience segments
                                    for their ad campaigns.</p>
                                    <p style="text-align: left">When you sign in to <b>FUSIONJON TECH PRIVATE LIMITED </b>
                                        Platform with your SNS account, or otherwise connect to your
                                        SNS account with the Services, you consent to our collection,
                                        storage, and use, in accordance with this Policy, of the
                                        information that you make available to us through the social
                                        media interface. This could include, without limitation, any
                                        information that you have made public through your social media
                                        account, information that the social media service shares with us,
                                        or information that is disclosed during the sign-in process. Please
                                        see your social media provider’s privacy policy and help center
                                        for more information about how they share information when you
                                        choose to connect your account.
                                        </p>
                                        <p style="text-align: left">If you are partner company, we may, additionally, receive
                                            feedback and rating from other users.
                                            </p>
                                            
                        </div>

                        <div class="single-content">
                            <h3 style="text-align: left"> USE OF YOUR PERSONAL INFORMATION</h3>
                            <p style="text-align: left">
                                <b>We use information to contact you.</b>
                            </p>
                            <p style="text-align: left">We might use the information you provide to contact you for
                                confirmation of a purchase on <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform or for other promotional purposes.</p>
                                <p style="text-align: left"><b>We use information to abide by the contracts</b></p>
                            <p style="text-align: left">
                                We might use the information you provide to carry out our
                                obligations arising from any contracts entered into between you
                                and us and to provide you with the relevant information and
                                services.
                            </p>
                            <p style="text-align: left"><b>We use information to respond to your requests or
                                questions</b></p>
                                <p style="text-align: left">We might use your information to confirm your registration for
                                    rendering services we offer.
                                    </p>
                                    <p style="text-align: left"><b>We use information to improve our products and services</b></p>
                                    <p style="text-align: left">We might use your information to customize your experience with
                                        us. This could include displaying content based upon your
                                        preferences. We might also use your information to understand
                                        our users (what they do on our Services, what features they like,
                                        how they use them, etc.), improve the content and features of our
                                        Services (such as by personalizing content to your interests),
                                        process and complete your transactions, make special offers,
                                        provide customer support, process and respond to your queries
                                        and to generate and review reports and data about, and to
                                        conduct research on, our user base and Service usage patterns.
                                        If you are a partner company, we may use the information to
                                        track the progress of your service to our customers.
                                        </p>
                                        <p style="text-align: left"><b>We use information to look at site trends and customer
                                            interests
                                            </b></p>
                                            <p style="text-align: left">We may use your information to make our website and products
                                                better. We may combine information we get from you with
                                                information about you we get from third parties. We may use
                                                your information to provide you with information about services
                                                we consider similar to those that you are already using, or have
                                                enquired about, or may interest you. If you are a registered user,
                                                we will contact you by electronic means (e-mail or SMS or
                                                telephone) with information about these services.
                                                </p>
                                                <p style="text-align: left"><b>We use information for security purposes
                                                </b></p>
                                                <p style="text-align: left">We may use information to protect our company, our customers,
                                                    or our <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform.</p>
                                                    <p style="text-align: left"><b>We use information for marketing purposes</b></p>
                                                    <p style="text-align: left">We might send you information about special promotions or
                                                        offers. We might also tell you about new features or products or
                                                        enroll you in our newsletter. These might be our own offers or
                                                        products, or third-party offers or products we think you might find
                                                        interesting. We may use the information to measure or
                                                        understand the effectiveness of advertising we serve to you and
                                                        others, and to deliver relevant advertising to you.</p>
                                                        <p style="text-align: left"><b>We use information to send you transactional
                                                            communications.</b></p>
                                                            <p style="text-align: left">We might send you emails or SMS about your account or
                                                                purchase of our product.</p>
                                                                <p style="text-align: left"><b>We use information as otherwise permitted by law</b></p>
                                                                <p style="text-align: left">We may combine the information that we receive from third
                                                                    parties with the information you give to us and information we
                                                                    collect about you for the purposes set out above. Further, we
                                                                    may anonymize and/or de-identify information collected from you
                                                                    through the Services or via other means, including via the use of
                                                                    third-party web analytic tools. As a result, our use and disclosure
                                                                    of aggregated and/or de-identified information is not restricted by
                                                                    this Policy, and it may be used and disclosed to others without
                                                                    limitation.
                                                                    </p>
                                                                    <p style="text-align: left">We analyse the log files of our <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform that may contain Internet Protocol (IP)
                                                                        addresses, browser type and language, Internet service provider
                                                                        (ISP), referring, app crashes, page viewed and exit websites and
                                                                        applications, operating system, date/time stamp, and clickstream
                                                                        data. This helps us to administer the website, to learn about user
                                                                        behavior on the site, to improve our product and services, and to
                                                                        gather demographic information about our user base as a whole.
                                                                        </p>
                        </div>

                        <div class="single-content">
                            <h3 style="text-align: left">SHARING/DISCLOSURE/DISTRIBUTION OF YOUR
                                INFORMATION WITH THIRD-PARTIES</h3>
                                <p style="text-align: left"><b>We will share information with third parties who perform
                                    services on our behalf.</b></p>
                            <p style="text-align: left">
                                We may share your information with our vendors, consultants,
                                marketing partners, research firms and other service providers or
                                business partners, such as payment processing companies, to
                                support our business. For example, your information may be
                                shared with outside vendors to send you emails and messages
                                or push notifications to your devices in relation to our Services, to
                                help us analyze and improve the use of our Services, to process
                                and collect payments
                                We may also use vendors for other projects, such as conducting
                                surveys or organizing sweepstakes for us. Some vendors may be
                                located outside of India.
                            </p>
                            <p style="text-align: left"><b>We will share information with Advertisers and advertising
                                networks.</b>
                                <p style="text-align: left">We may work with third parties such as network advertisers to
                                    serve advertisements on the <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform and on third-party websites or other media
                                    (e.g., social networking platforms). These third parties may use
                                    cookies, JavaScript, web beacons (including clear GIFs), Flash
                                    LSOs and other tracking technologies to measure the
                                    effectiveness of their ads and to personalize advertising content
                                    to you.</p>
                                </p>
                            <p style="text-align: left">
                                While you cannot opt out of advertising on the <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform, you may opt out of much
interest-based advertising on third party sites and through third
party ad networks (including DoubleClick Ad Exchange,
Facebook Audience Network and Google AdSense). Opting out
means that you will no longer receive personalized ads by third
parties ad networks from which you have opted out, which is
based on your browsing information across multiple sites and
online services. If you delete cookies or change devices, your
‘opt out’ may no longer be effective to fulfill the purpose for which
you provide it.
                            </p>
                            <p style="text-align: left"><b>We will share information with our business partners.</b></p>
                            <p style="text-align: left">This includes a third party who provide us various services. Our
                                partners use the information we give them as described in their
                                privacy policies.</p>
                                <p style="text-align: left">While you place a request to order through the <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform, your information is provided
                                    to us and to the vendors with whom you may choose to order. In
                                    order to facilitate your online order processing, we provide your
                                    information to that vendors in a similar manner as if you had
                                    made a goods/products/food order directly with the vendors. If
                                    you provide a mobile phone number, <b>FUSIONJON TECH PRIVATE LIMITED </b> may send you text messages regarding the
                                    orders delivery status.</p>
                                    <p style="text-align: left"><b>We will share information with Other Users</b></p>
                                    <p style="text-align: left">If you are a delivery partner, we may share your name, phone
                                        number and/or profile picture (if applicable), tracking details with
                                        other users to provide them the Services.</p>
                                        <p style="text-align: left"><b>We may share information if we think we have to in order to
                                            comply with the law or to protect ourselves.</b></p>
                                            <p style="text-align: left">We may also share it if a government agency or investigatory
                                                body or other companies assisting us, requests when we are:</p>
                                                <p style="text-align: left">Obligated under the applicable laws or in good faith to respond to
                                                    court orders and processes; or</p>
                                                    <p style="text-align: left">Detecting and preventing against actual or potential occurrence
                                                        of identity theft, fraud, abuse of Services and other illegal acts;
                                                        Responding to claims that an advertisement, posting or other
                                                        content violates the intellectual property rights of a third party;
                                                        Under a duty to disclose or share your personal data in order to
                                                        enforce our Terms of Use and other agreements, policies or to
                                                        protect the rights, property, or safety of the Company, our
                                                        customers, or others, or in the event of a claim or dispute relating
                                                        to your use of our Services. This includes exchanging information
                                                        with other companies and organisations for the purposes of fraud
                                                        detection and credit risk reduction.</p>
                                                        <p style="text-align: left"><b>We may share information for Internal Use or may share it
                                                            with any successor to all or part of our business.</b></p>
                                                            <p style="text-align: left">For example, if part of our business is sold we may give our
                                                                customer list as part of that transaction. We may also share your
                                                                information with any present or future member of our "Group" (as
                                                                defined above) or affiliates for our internal business purposes.</p>
                                                                <p style="text-align: left"><b>We may share your information for reasons not described in
                                                                    this policy.
                                                                    </b></p>
                                                                    <p style="text-align: left">We may share your information other than as described in this
                                                                        Policy if we notify you and you consent to the sharing. We will tell
                                                                        you before we do this.</p>
                        </div>

                        <div class="single-content">
                            <h3 style="text-align: left"> YOUR CONSENT</h3>
                            <p style="text-align: left">By using the <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform
                                and the Services provided therein, you agree and consent to the
                                collection, transfer, use, storage, disclosure and sharing of your
                                information as described and collected by us in accordance with
                                this Policy. If you do not agree with the Policy, please do not use
                                or access the <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform.
                                </p>
                           
                        </div>
                        <div class="single-content">
                            <h3 style="text-align: left">COOKIES</h3>
                            <p style="text-align: left">Our <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform and
                                third parties with whom we partner, may use cookies, pixel tags,
                                web beacons, mobile device IDs, "flash cookies" and similar files
                                or technologies to collect and store information with respect to
                                your use of the Services and third-party websites.</p>
                                <p style="text-align: left">Cookies are small files that are stored on your browser or
                                    device by websites, apps, online media and advertisements. We
                                    use cookies and similar technologies for purposes such as.
                                    </p>
                                    <p style="text-align: left">Authenticating users;
                                    </p>
                                    <p style="text-align: left">Remembering user preferences and settings;</p>
                                    <p style="text-align: left">Determining the popularity of content;</p>
                                    <p style="text-align: left">Delivering and measuring the effectiveness of advertising
                                        campaigns;</p>
                                        <p style="text-align: left">Analysing site traffic and trends, and generally understanding the
                                            online behaviours and interests of people who interact with our
                                            services.
                                            </p>
                                            <p style="text-align: left">A pixel tag (also called a web beacon or clear GIF) is a tiny
                                                graphic with a unique identifier, embedded invisibly on a
                                                webpage (or an online ad or email), and is used to count or track
                                                things like activity on a webpage or ad impressions or clicks, as
                                                well as to access cookies stored on users’ computers. We use
                                                pixel tags to measure the popularity of our various pages,
                                                features and services. We also may include web beacons in email messages or newsletters to determine whether the message
                                                has been opened and for other analytics.</p>
                                                <p style="text-align: left">To modify your cookie settings, please visit your browser’s
                                                    settings. By using our Services with your browser settings to
                                                    accept cookies, you are consenting to our use of cookies in the
                                                    manner described in this section.
                                                    </p>
                                                    <p style="text-align: left">We may also allow third parties to provide audience
                                                        measurement and analytics services for us, to serve
                                                        advertisements on our behalf across the Internet, and to track
                                                        and report on the performance of those advertisements. These
                                                        entities may use cookies, web beacons, SDKs and other
                                                        technologies to identify your device when you visit the
                                                        <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform and use our
                                                        Services, as well as when you visit other online sites and
                                                        services.
                                                    </p>
                                                        <p style="text-align: left">Please see our Cookie Policy here for more information
                                                            regarding the use of cookies and other technologies described in
                                                            this section, including regarding your choices relating to such
                                                            technologies.</p>

                        </div>
                        <div class="single-content">
                            <h3 style="text-align: left">DATA SECURITY PRECAUTIONS</h3>
                            <p style="text-align: left">We have in place appropriate technical and security
                                measures to secure the information collected by us. We use vault
                                and tokenization services from third party service providers to
                                protect the sensitive personal information provided by you. The
                                third-party service providers with respect to our vault and
                                tokenization services and our payment gateway and payment
                                processing are compliant with the payment card industry
                                standard (generally referred to as PCI compliant service
                                providers). You are advised not to send your full credit/debit card
                                details through unencrypted electronic platforms. Where we have
                                given you (or where you have chosen) a username and
                                password which enables you to access certain parts of the
                                <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform, you are
                                responsible for keeping these details confidential. We ask you
                                not to share your password with anyone.</p>
                                <p style="text-align: left">Please be aware that the transmission of information via the
                                    internet is not completely secure. Although we will do our best to
                                    protect your personal data, we cannot guarantee the security of
                                    your data transmitted through the <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform. Once we have received your information, we
                                    will use strict physical, electronic, and procedural safeguards to
                                    try to prevent unauthorised access.</p>

                        </div>
                        <div class="single-content">
                            <h3 style="text-align: left">Email OPT-OUT</h3>
                            <p style="text-align: left">You can opt out of receiving our marketing emails. To stop
                                receiving our promotional emails, please email
                                (<b>rahul@fusionjon.com</b>). It may take about 2 days to
                                process your request. Even if you opt out of getting marketing
                                messages, we will still be sending you transactional messages
                                through email and SMS about your purchases.</p>
                        </div>
                        <div class="single content">
                            <h3 style="text-align: left">THIRD PARTY SITES</h3>
                            <p style="text-align: left">The <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform may
                                contain links to other websites. If you click on one of the links to
                                third party websites, you may be taken to websites we do not
                                control. Any personal information about you collected whilst
                                visiting such websites is not governed by this Policy.
                                <b>FUSIONJON TECH PRIVATE LIMITED </b>shall not be responsible
                                for and has no control over the practices and content of any
                                website accessed using the links contained on the <b>FUSIONJON TECH PRIVATE LIMITED </b> Platform. Read the privacy policy of
                                other websites carefully as this policy does not apply to the
                                privacy practices of those websites. We are not responsible for
                                these third party sites.
                                </p>
                                <p style="text-align: left">This Policy shall also not apply to any information you may
                                    disclose to any of our service providers/service personnel which
                                    we do not require you to disclose to us or any of our service
                                    providers under this Policy.</p>

                        </div>
                        <div class="single-content">
                            <h3 style="text-align: left">JURISDICTION</h3>
                            <p style="text-align: left">If you choose to visit the website, your visit and any dispute
                                over privacy is subject to this Policy and the website's terms of
                                use. In addition to the foregoing, any disputes arising under this
                                Policy shall be governed by the laws of India</p>
                                <p style="text-align: left">If you have any queries relating to the processing or usage of
                                    information provided by you in connection with this Policy or
                                    other privacy concerns, you can email us at
                                    <b>info@fusionjon.com.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Privacy-Policy Area End -->

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
                                            <h3><a href="{{route('blogdetails3')}}">How to improve your website SEO?</a></h3>
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