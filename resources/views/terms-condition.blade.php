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
                                        <a href="{{ route('terms')}}" class="nav-link active">
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
                                        <a href="{{route('blogdetails')}}" class="nav-link">
                                            Blog Style One 
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">
                                            Blog Details 
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact')}}" class="nav-link">
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
                                    <a href="{{route('contact')}}" class="default-btn btn-bg-two border-radius-50">Get A Quote
                                        <i class='bx bx-chevron-right'></i></a>
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
                                    <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote
                                        <i class='bx bx-chevron-right'></i></a>
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
                <h3>Terms & Conditions</h3>
                <ul>
                    <li>
                        <a href="{{ route('home')}}">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Terms Conditions Area -->
    <div class="terms-conditions-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>TERMS & CONDITIONS</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-12">
                    <div class="terms-conditions-img">
                        <img src="assets/images/terms-condition-img.jpg" alt="Images">
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Last Revision: 01July, 2023</h3>
                        <p style="text-align: left; color:black">
                            Welcome to <b>www.fusionjon.com</b>. This website is owned and
                            operated by <b>FUSIONJON TECH PRIVATE LIMITED & E - 31A,
                            TOP FLOOR, JAWAHAR PARK, NEAR HIRA SWEETS,
                            LAXMI NAGAR, Delhi- 110092.</b> By visiting our website and
                            accessing the information, resources, services, products, and
                            tools we provide, you understand and agree to accept and
                            adhere to the following terms and conditions as stated in this
                            policy (hereinafter referred to as the ‘Agreement’), along with
                            the terms and conditions as stated in our Privacy Policy
                            (please refer to the Privacy Policy section below for more
                            information)
                        </p>
                        <p style="text-align: left">
                            We reserve the right to change this Agreement from time to time
                            with/without notice. You acknowledge and agree that it is your
                            responsibility to review this Agreement periodically to familiarize
                            yourself with any modifications. Your continued use of this site
                            after such modifications will constitute acknowledgment and
                            agreement of the modified terms and conditions
                        </p>
                        <p style="text-align: left">
                            PLEASE READ THIS TERMS OF SERVICE AGREEMENT
                            CAREFULLY. BY USING THIS WEBSITE OR ORDERING
                            PRODUCTS FROM THIS WEBSITE YOU AGREE TO BE
                            BOUND BY ALL OF THE TERMS AND CONDITIONS OF THIS
                            AGREEMENT
                        </p>
                        <p style="text-align: left">
                            This Agreement governs your use of this website
                           <b> www.fusionjon.com </b>(hereinafter referred to as the ‘Website’),
                            This Agreement includes and incorporates by this reference, the
                            policies and guidelines referred below. <b> FUSIONJON TECH
                            PRIVATE LIMITED </b>reserves the right to change or revise the
                            terms and conditions of this Agreement at any time by posting
                            any changes or a revised Agreement on this Website.
                            <b>FUSIONJON TECH PRIVATE LIMITED</b> will/will not alert you that
                            changes or revisions have been made by indicating on the top of
                            this Agreement the date it was last revised. The changed or
                            revised Agreement will be effective immediately after it is posted
                            on this Website. Your use of the Website following the posting of
                            any such changes or of a revised Agreement will constitute your
                            acceptance of any such changes or revisions. <b>FUSIONJON
                            TECH PRIVATE LIMITED </b> encourages you to review this
                            Agreement whenever you visit the Website to make sure that you
                            understand the terms and conditions governing use of the
                            Website. This Agreement does not alter in any way the terms or
                            conditions of any other written agreement you may have with
                           <b>FUSIONJON TECH PRIVATE LIMITED </b>for other products or
                            services. If you do not agree to this Agreement (including any
                            referenced policies or guidelines), please immediately terminate
                            your use of the Website
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Responsible Use And Conduct</h3>
                        <p style="text-align: left">
                            In order to access our Resources, you may be required to
                            provide certain information about yourself (such as identification,
                            email, phone number, contact details, etc.) as part of the
                            registration process, or as part of your ability to use the
                            Resources. You agree that any information you provide will
                            always be accurate, correct, and up to date.
                            You are responsible for maintaining the confidentiality of any
                            login information associated with any account you use to access
                            our Resources. Accordingly, you are responsible for all activities
                            that occur under your accounts.
                            Accessing (or attempting to access) any of our Resources/ by
                            any means other than through the means we provide, is strictly
                            prohibited. You specifically agree not to access (or attempt to
                            access) any of our Resources/ through any automated, unethical
                            or unconventional means

                        </p>
                        <p style="text-align: left">
                            Engaging in any activity that disrupts or interferes with our
                            Resources, including the servers and/or networks to which our
                            Resources / are located or connected, is strictly prohibited.
                            Attempting to copy, duplicate, reproduce, sell, trade, or resell our
                            Resources / is strictly prohibited.
                            You are solely responsible for any consequences, losses, or
                            damages that we may directly or indirectly incur or suffer due to
                            any unauthorized activities conducted by you, as explained
                            above, and may incur criminal or civil liability

                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Privacy</h3>
                        <p style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> believes strongly in
                            protecting user privacy, which is why a separate Privacy Policy
                            have been created in order to explain in detail how we collect,
                            manage, process, secure, and store your private information.
                            Please refer to <b>FUSIONJON TECH PRIVATE LIMITED </b> privacy
                            policy, incorporated by reference herein, that is posted on the
                            Website

                        </p>

                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Customer Solicitation</h3>
                        <p style="text-align: left">
                            Unless you notify our third party call center representatives or
                            direct <b>FUSIONJON TECH PRIVATE LIMITED </b> sales
                            representatives, while they are calling you, of your desire to opt
                            out from further direct company communications and
                            solicitations, you are agreeing to continue to receive further
                            emails and call solicitations from <b>FUSIONJON TECH PRIVATE LIMITED </b> and its designated in house or third party call team(s)

                        </p>

                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Opt Out Procedure</h3>
                        <p style="text-align: left">
                            We provide 3 easy ways to opt out of from future solicitations -
                            You may use the opt out link found in any email solicitation
                            that you may receive.
                            You may also choose to opt out, via sending your email
                            address to: [<b>rahul@fusionjon.com</b>].
                            You may send a written remove request to<b>FUSIONJON TECH PRIVATE LIMITED </b>sales representatives, while they
                            are calling you, of your desire to opt out from further direct
                            company communications and solicitations, you are agreeing
                            to continue to receive further emails and call solicitations
                            from <b>FUSIONJON TECH PRIVATE LIMITED </b> & ADDRESS <b>E
                            - 31A, JAWAHAR PARK, NEAR HEERA SWEETS, LAXMI
                            NAGAR, Delhi - 110092</b>
                        </p>

                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Proprietary Rights</h3>
                        <p style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> has proprietary rights.
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> also has rights to all
                            trademarks and trade dress and specific layouts of this webpage,
                            including calls to action, text placement, images and other
                            information
                        </p>

                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left">Content, Intellectual Property, Third Party Links</h3>
                        <p style="text-align: left">
                            This Website also offers information, both directly and through
                            indirect links to third-party websites, about (kind of information).
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> does not always create
                            the information offered on this Website; instead the information is
                            often gathered from other sources. To the extent that
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> does create the content
                            on this Website, such content is protected by intellectual property
                            laws of the India, foreign nations, and international bodies.
                            Unauthorized use of the material may violate copyright,
                            trademark, and/or other laws. You acknowledge that your use of
                            the content on this Website is for personal, non-commercial use.
                            Any links to third-party websites are provided solely as a
                            convenience to you.  <b>FUSIONJON TECH PRIVATE LIMITED </b>
                            does not endorse the contents on any such third-party websites.
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> is not responsible for
                            the content of or any damage that may result from your access to
                            or reliance on these third-party websites. If you link to third-party
                            websites, you do so at your own risk

                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left">Use of Website</h3>
                        <p style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> is not responsible for
                            any damages resulting from use of this website by anyone. You
                            will not use the Website for illegal purposes. You will - abide by
                            all applicable local, state, national, and internationallaws and
                            regulations in your use of the Website (including laws regarding
                            intellectual property), not interfere with or disrupt the use and
                            enjoyment of the Website by other users, not resell material on
                            the Website, not engage, directly or indirectly, in transmission of
                            "spam", chain letters, junk mail or any other type of unsolicited
                            communication,and
                            not defame, harass, abuse, or disrupt other users of the Website
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">License</h3>
                        <p style="text-align: left">
                            By using this Website, you are granted a limited, non-exclusive,
                            non-transferable right to use the content and materials on the
                            Website in connection with your normal, non-commercial use of
                            the Website. You may not copy, reproduce, transmit, distribute, or
                            create derivative works of such content or information without
                            express written authorization from  <b>FUSIONJON TECH PRIVATE LIMITED </b> or the applicable third party (if third party content is at
                            issue)
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Blogs</h3>
                        <p style="text-align: left">
                            We may provide various open communication tools on our
                            website, such as blog comments, blog posts, public chat, forums,
                            message boards, newsgroups, product ratings and reviews,
                            various social media services, etc. You understand that generally
                            we do not pre-screen or monitor the content posted by users of
                            these various communication tools, which means that if you
                            choose to use these tools to submit any type of content to our
                            website, then it is your personal responsibility to use these tools
                            in a responsible and ethical manner. By posting information or
                            otherwise using any open communication tools as mentioned,
                            you agree that you will not upload, post, share, or otherwise
                            distribute any content that:
                            is illegal, threatening, defamatory, abusive, harassing, degrading,
                            intimidating, fraudulent, deceptive, invasive, racist, or contains
                            any type of suggestive, inappropriate, or explicit language;
                            infringes on any trademark, patent, trade secret, copyright, or
                            other proprietary right of any party;
                            contains any type of unauthorized or unsolicited advertising;
                            impersonates any person or entity, including any
                            <b>www.fusionjon.com/FUSIONJON TECH PRIVATE LIMITED </b>
                            employees or representatives
                        </p>
                        <p style="text-align: left">
                            We have the right at our sole discretion to remove any content
                            that, we feel in our judgment does not comply with this User
                            Agreement, along with any content that we feel is otherwise
                            offensive, harmful, objectionable, inaccurate, or violates any 3rd
                            party copyrights or trademarks. We are not responsible for any
                            delay or failure in removing such content. If you post content that
                            we choose to remove, you hereby consent to such removal, and
                            consent to waive any claim against us.
                            We do not assume any liability for any content posted by you or
                            any other 3rd party users of our website. However, any content
                            posted by you using any open communication tools on our
                            website, provided that it doesn't violate or infringe on any 3rd
                            party copyrights or trademarks, becomes the property of
                            <b>FUSIONJON TECH PRIVATE LIMITED </b>, and as such, gives us a
                            perpetual, irrevocable, worldwide, royalty-free, exclusive license
                            to reproduce, modify, adapt, translate, publish, publicly display
                            and/or distribute as we see fit. This only refers and applies to
                            content posted via open communication tools as described, and
                            does not refer to information that is provided as part of the
                            registration process, necessary in order to use our Resources.
                            All information provided as part of our registration process is
                            covered by our Privacy Policy

                        </p>
                        <p style="text-align: left">
                            You agree to indemnify and hold harmless
                            <b> www.fusionjon.com </b>
                            a digital property of  <b>FUSIONJON TECH PRIVATE LIMITED </b> and
                            its parent company and affiliates, and their directors, officers,
                            managers, employees, donors, agents, and licensors, from and
                            against all losses, expenses, damages and costs, including
                            reasonable attorneys' fees, resulting from any violation of this
                            User Agreement or the failure to fulfill any obligations relating to
                            your account incurred by you or any other person using your
                            account. We reserve the right to take over the exclusive defense
                            of any claim for which we are entitled to indemnification under
                            this User Agreement. In such event, you shall provide us with
                            such cooperation as is reasonably requested by us
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Posting</h3>
                        <p style="text-align: left">By posting, storing, or transmitting any content on the Website,
                            you hereby grant <b>FUSIONJON TECH PRIVATE LIMITED </b> a
                            perpetual, worldwide, non-exclusive, royalty-free, assignable,
                            right and license to use, copy, display, perform, create derivative
                            works from, distribute, have distributed, transmit and assign such
                            content in any form, in all media now known or hereinafter
                            created, anywhere in the world.  <b>FUSIONJON TECH PRIVATE LIMITED </b> does not have the ability to control the nature of the
                            user-generated content offered through the Website. You are
                            solely responsible for your interactions with other users of the
                            Website and any content you post.  <b>FUSIONJON TECH PRIVATE LIMITED </b> is not liable for any damage or harm resulting
                            from any posts by or interactions between users. FUSIONJON
                            TECH PRIVATE LIMITED reserves the right, but has no
                            obligation, to monitor interactions between and among users of
                            the Website and to remove any content <b>FUSIONJON TECH PRIVATE LIMITED </b> deems objectionable, in  <b>FUSIONJON TECH PRIVATE LIMITED </b>'s sole discretion
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Disclaimer of Warranties</h3>
                        <p style="text-align: left">
                            Your use of this website and/or are at your sole risk. The website
                            and are offered on an "as is" and "as available" basis.
                            <b>FUSIONJON TECH PRIVATE LIMITED </b>expressly disclaims all
                            warranties of any kind, whether express or implied, including, but
                            not limited to, implied warranties of merchantability, fitness for a
                            particular purpose and non-infringement with respect to the or
                            website content, or any reliance upon or use of the website
                            content or
                            Without limiting the generality of the foregoing,  <b>FUSIONJON TECH PRIVATE LIMITED </b> makes no warranty:
                            that the information provided on this website is accurate, reliable,
                            complete, or timely.
                            that the links to third-party websites are to information that is
                            accurate, reliable, complete, or timely.
                            no advice or information, whether oral or written, obtained by you
                            from this website will create any warranty not expressly stated
                            herein
                            Some jurisdictions do not allow the exclusion of certain
                            warranties, so some of the above exclusions may not apply to
                            you
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Limitation Of Liability</h3>
                        <p style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED </b>’s entire liability, and
                            your exclusive remedy, in law, in equity, or otherwise, with
                            respect to the website content / and/or for any breach of this
                            agreement is solely limited to the amount you paid
                        </p>
                        <p style="text-align: left" style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> will not be liable for any
                            direct, indirect, incidental, special or consequential damages in
                            connection with this agreement &/or in any manner, including
                            liabilities resulting from:
                            the use or the inability to use the website content / ;
                            the cost of procuring substitute content / ;
                            any information obtained / purchased or transactions entered into
                            through the website; or
                            any lost profits you allege.
                            Some jurisdictions do not allow the limitation or exclusion of
                            liability for incidental or consequential damages so some of the
                            above limitations may not apply to you.conjunction with the Limitation of Liability as
                            explained above,
                            you expressly understand and agree that any claim against us
                            shall be limited to the amount you paid, if any, for use of .
                            <b>www.fusionjon.com/FUSIONJON TECH PRIVATE LIMITED </b>
                            will not be liable for any direct, indirect, incidental, consequential
                            or exemplary loss or damages which may be incurred by you as
                            a result of using our Resources / , or as a result of any changes,
                            data loss or corruption, cancellation, loss of access, or downtime
                            to the full extent that applicable limitation of liability laws apply

                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">Indemnification</h3>
                        <p style="text-align: left" style="text-align: left">You will release, indemnify, defend and hold harmless
                            <b>FUSIONJON TECH PRIVATE LIMITED </b>, and any of its
                            contractors, agents, employees, officers, directors, shareholders,
                            affiliates and assigns from all liabilities, claims, damages, costs
                            and expenses, including reasonable attorneys' fees and
                            expenses, of third parties relating to or arising out of
                            this Agreement or the breach of your warranties, representations
                            and obligations under this Agreement;
                            the Website content or your use of the Website content;
                            any intellectual property or other proprietary right of any person
                            or entity;
                            your violation of any provision of this Agreement; or
                            any information or data you supplied to <b>FUSIONJON TECH PRIVATE LIMITED </b></p>
                        <p style="text-align: left" style="text-align: left">
                            When  <b>FUSIONJON TECH PRIVATE LIMITED </b> is threatened with
                            suit or sued by a third party, <b>FUSIONJON TECH PRIVATE LIMITED </b> may seek written assurances from you concerning your
                            promise to indemnify  <b>FUSIONJON TECH PRIVATE LIMITED </b>;
                            your failure to provide such assurances may be considered by
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> to be a material breach
                            of this Agreement.  <b>FUSIONJON TECH PRIVATE LIMITED </b> will
                            have the right to participate in any defense by you of a third-party
                            claim related to your use of any of the Website content / , with
                            the counsel of  <b>FUSIONJON TECH PRIVATE LIMITED </b>’s choice
                            at its expense. <b>FUSIONJON TECH PRIVATE LIMITED </b> will
                            reasonably cooperate in any defense by you of a third-party
                            claim at your request and expense. You will have sole
                            responsibility to defend  <b>FUSIONJON TECH PRIVATE LIMITED </b>
                            against any claim, but you must receive  <b>FUSIONJON TECH PRIVATE LIMITED </b>’s prior written consent regarding any related
                            settlement. The terms of this provision will survive any
                            termination or cancellation of this Agreement or your use of the
                            Website 
                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">Copyrights / Trademarks</h3>
                        <p style="text-align: left" style="text-align: left">
                            All content and materials available on <b>www.fusionjon.com </b>,
                            including but not limited to text, graphics, website name, code,
                            images and logos are the intellectual property of  <b>FUSIONJON TECH PRIVATE LIMITED </b> and are protected by applicable
                            copyright and trademark law. Any inappropriate use, including
                            but not limited to the reproduction, distribution, display or
                            transmission of any content on this site is strictly prohibited,
                            unless specifically authorized by <b>FUSIONJON TECH PRIVATE LIMITED </b>
                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">Agreement To Be Bound</h3>
                        <p style="text-align: left" style="text-align: left">
                            BY USING THIS WEBSITE OR ORDERING, YOU
ACKNOWLEDGE THAT YOU HAVE READ AND AGREE TO BE
BOUND BY THIS AGREEMENT AND ALL TERMS AND
CONDITIONS ON THIS WEBSITE
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">General Clause</h3>
                        <p style="text-align: left" style="text-align: left">
                           <b> Force Majeure: FUSIONJON TECH PRIVATE LIMITED </b> will not
be deemed in default hereunder or held responsible for any
cessation, interruption or delay in the performance of its
obligations hereunder due to earthquake, flood, fire, storm,
natural disaster, act of God, war, terrorism, armed conflict, labor
strike, lockout, or boycott.
<b>Cessation of Operation: FUSIONJON TECH PRIVATE
LIMITED</b> may at any time, in its sole discretion and without
advance notice to you, cease operation of the Website
<b>Entire Agreement:</b> This Agreement comprises the entire
agreement between you and  <b>FUSIONJON TECH PRIVATE LIMITED </b> and supersedes any prior agreements pertaining to the
subject matter contained herein.

                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">Governing Law</h3>
                        <p style="text-align: left" style="text-align: left">
                            This website is controlled by  <b>FUSIONJON TECH PRIVATE LIMITED </b> from our offices located in the state of <b>Delhi</b>, India. It
can be accessed by most countries around the world. As each
country has laws that may differ from those of <b>Delhi</b>, India, by
accessing our website, you agree that the statutes and laws of
<b>Delhi</b>, India, without regard to its conflict of law principles to the
contrary and the United Nations Convention on the International
Sales of Goods, will apply to all matters relating to the use of this
website
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">Effect of Waiver</h3>
                        <p style="text-align: left" style="text-align: left">
                            The failure of  <b>FUSIONJON TECH PRIVATE LIMITED </b> to
exercise or enforce any right or provision of this Agreement will
not constitute a waiver of such right or provision. If any provision
of this Agreement is found by a court of competent jurisdiction to
be invalid, the parties nevertheless agree that the court should
endeavor to give effect to the parties' intentions as reflected in
the provision and the other provisions of this Agreement remain
in full force and effect

                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">Governing Law/Jurisdiction</h3>
                        <p style="text-align: left" style="text-align: left">
                            This Website originates from the <b>New Delhi, Delhi</b>, India. This
Agreement will be governed by the laws of the State of <b>Delhi</b>,
India. It can be accessed by most countries around the world. As
each country has laws that may differ from those of <b>Delhi</b>, India
without regard to its conflict of law principles to the contrary.
Neither you nor  <b>FUSIONJON TECH PRIVATE LIMITED </b> will
commence <b>Delhi</b>, India. This Agreement will be governed by the
laws of the State of <b>Delhi</b>, India. It can be accessed by most
countries around the world. As each country has laws that may
differ from those of <b>Delhi</b>, India without regard to its conflict of
law principles to the contrary. Neither you nor or prosecute any
suit, proceeding or claim to enforce the provisions of this
Agreement, to recover damages for breach of or default of this
Agreement, or otherwise arising under or by reason of this
Agreement, other than in courts located in State of <b>Delhi</b>, India.
It can be accessed by most countries around the world. As each
country has laws that may differ from those of <b>Delhi</b>, India. By
using this Website or ordering, you consent to the jurisdiction
and venue of such courts in connection with any action, suit,
proceeding or claim arising under or by reason of this
Agreement. You hereby waive any right to trial by jury arising out
of this Agreement and any related documents
                        </p>
                        <p style="text-align: left" style="text-align: left">
                            This website is controlled by  <b>FUSIONJON TECH PRIVATE LIMITED </b> from our offices located in the state of <b>Delhi</b>, India. It
can be accessed by most countries around the world. As each
country has laws that may differ from those of <b>Delhi</b>, India, by
accessing our website, you agree that the statutes and laws of
<b>Delhi</b>, India without regard to the conflict of laws and the United
Nations Convention on the International Sales of Goods, will
apply to all matters relating to the use of this website
Furthermore, any action to enforce this User Agreement shall be
brought in the courts having jurisdiction over such issue, located
in <b>Delhi</b>, India. You hereby agree to judgement passed by such
courts and waive any right to jurisdictional, venue, or
inconvenient forum objections to such courts

                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left" style="text-align: left">Statute of Limitation</h3>
                        <p style="text-align: left" style="text-align: left">You agree that regardless of any statute or law to the contrary,
                            any claim or cause of action arising out of or related to use of the
                            Website or or this Agreement must be filed within one (1) year
                            after such claim or cause of action arose else be forever barred
                        </p>
                    </div>
                    <div class="single-content">
                        <h style="text-align: left"3>Waiver of Class Action Rights</h3>
                        <p style="text-align: left">BY ENTERING INTO THIS AGREEMENT, YOU HEREBY
                            IRREVOCABLY WAIVE ANY RIGHT YOU MAY HAVE TO JOIN
                            CLAIM WITH THOSE OF OTHERS IN THE FORM OF A CLASS
                            ACTION OR SIMILAR PROCEDURAL DEVICE. ANY CLAIMS
                            ARISING OUT OF OR RELATING TO OR IN CONNECTION
                            WITH THIS AGREEMENT MUST BE ASSERTED
                            INDIVIDUALLY
                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left">Termination</h3>
                        <p style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> reserves the right to
terminate your access to the Website if it reasonably believes, in
its sole discretion, that you have breached any of the terms and
conditions of this Agreement. Following termination, you will not
be permitted to use the Website If your access to the Website is
terminated,  <b>FUSIONJON TECH PRIVATE LIMITED </b> reserves the
right to exercise whatever means it deems necessary to prevent
unauthorized access of the Website. This Agreement will survive
indefinitely unless and until  <b>FUSIONJON TECH PRIVATE LIMITED </b> chooses, in its sole discretion and without advance
notice to you, to terminate it
                        </p>
                    </div>

                    <div class="single-content">
                        <h3 style="text-align: left">Domestic Use</h3>
                        <p style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED </b> makes no
representation that the Website or are appropriate or available
for use in locations outside India. Users who access the Website
from outside India do so at their own risk and initiative and must
bear all responsibility for compliance with any applicable local
laws
                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left">Guarantee</h3>
                        <p style="text-align: left">
                            Unless otherwise expressed, <b>FUSIONJON TECH PRIVATE LIMITED </b> & <b>www.fusionjon.com</b> expressly disclaims all
warranties and conditions of any kind, whether express or
implied, including, but not limited to the implied warranties and
conditions of merchantability, fitness of content / for a particular
purpose and non-infringement
                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left">Assignment</h3>
                        <p style="text-align: left">
                            You may not assign your rights and obligations under this
Agreement to anyone. <b>FUSIONJON TECH PRIVATE LIMITED </b>
may assign its rights and obligations under this Agreement in its
sole discretion and without advance notice to you
                        </p>
                        <p style="text-align: left">
                            BY USING THIS WEBSITE OR ORDERING FROM THIS
WEBSITE YOU AGREE TO BE BOUND BY ALL OF THE
TERMS AND CONDITIONS OF THIS AGREEMENT
                        </p>
                    </div>
                    <div class="single-content">
                        <h3 style="text-align: left">Contact Information</h3>
                        <p style="text-align: left">
                            If you have any questions or comments about these our Terms of
Service as outlined above, you can contact us at
                        </p>
                        <p style="text-align: left">
                            <b>FUSIONJON TECH PRIVATE LIMITED
                            </b>
                        </p>
                        <p style="text-align: left"><b>E - 31A, JAWAHAR PARK, NEAR HEERA SWEETS, LAXMI
                            NAGAR, Delhi – 110092</b></p>
                              <p style="text-align: left"><b> info@fusionjon.com</b></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Terms Conditions Area End -->

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
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auct.Aenean, lorem quis bibendum auct. Aenean sollicitudin lorem
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
                                        <h3><a href="blog-details.html">Product Idea Solution For New Generation</a>
                                        </h3>
                                        <span>04 Dec 2020</span>
                                    </div>
                                </li>

                                <li>
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img-footer2.jpg" alt="Images">
                                    </a>
                                    <div class="content">
                                        <h3><a href="blog-details.html">New Device Invention for Digital Platform</a>
                                        </h3>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus molestie
                                molestie. Phasellus ac rutrum massa, et volutpat nisl. Fusce ultrices suscipit nisl.</p>
                            <div class="newsletter-area">
                                <form class="newsletter-form" data-toggle="validator" method="POST">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                                        required autocomplete="off">
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
                        Copyright ©
                        <script>document.write(new Date().getFullYear())</script> Techex. All Rights Reserved by
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