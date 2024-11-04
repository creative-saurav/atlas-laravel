<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas - Login</title>
    <link rel="shortcut icon" href="{{ asset('public/assets/frontend/images/favicon-2.svg') }}" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/vendors/bootstrap/bootstrap.min.css') }}">
    <!-- Flat UI Icon -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/icons/uicons-regular-rounded/css/uicons-regular-rounded.css') }}">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/vendors/swiper/swiper-bundle.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/responsive.css') }}">
</head>
<body>
    <!-- Start Header -->
    <header class="ca-panel-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="at-home-menu-wrap">
                        <div>
                            <a href="#" class="d-block">
                                <img src="{{ asset('public/assets/frontend/images/at-home-logo.svg') }}" alt="logo">
                            </a>
                        </div>
                        <div class="at-home-menu-button">
                            <!-- offcanvas menu start -->
                            <div class="offcanvas-xl offcanvas-end at-home-offcanvas" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                                <div class="offcanvas-header">
                                    <div>
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('public/assets/frontend/images/at-home-logo.svg') }}" alt="logo">
                                        </a>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <nav>
                                        <ul class="at-home-navbar-nav">
                                            <li><a href="#" class="at-home-nav-link">Home</a></li>
                                            <li><a href="#" class="at-home-nav-link active">Listing</a></li>
                                            <li><a href="#" class="at-home-nav-link">Category</a></li>
                                            <li><a href="#" class="at-home-nav-link">Pricing</a></li>
                                            <li><a href="#" class="at-home-nav-link">Blog</a></li>
                                            <li><a href="#" class="at-home-nav-link">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- offcanvas menu end -->
                            <div class="at-home-search-login-button">
                                <div class="at-home-nav-search d-none d-md-block">
                                    <form role="search" method="get" class="at-home-search-form" action="">
                                    <div class="at-home-nav-label">
                                        <input type="search" class="at-home-search-input ca-home-search-input" placeholder="Search …"  title="Search for:">
                                        <button type="submit" class="at-home-search-btn cap-home-search-btn">
                                            <img src="{{ asset('public/assets/frontend/images/icons/search-white-16.svg') }}" alt="search">
                                        </button>
                                    </div>
                                    </form>
                                </div>
                                <a href="#" class="at-home-login">Login</a>
                                <a href="#" class="btn ua-btn-dark at-home-listing-btn">
                                    <img src="{{ asset('public/assets/frontend/images/icons/plus-white-8.svg') }}" alt="icon">
                                    <span>Add Listing</span>
                                </a>
                                <button class="btn at-home-menu-btn cap-home-menu-btn d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                                    <svg xmlns="http://www.w3.org/2000/svg') }}" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 20 20" xml:space="preserve" class=""><g><path d="M21 7H8a1 1 0 0 1 0-2h13a1 1 0 0 1 0 2zm1 5a1 1 0 0 0-1-1H3a1 1 0 0 0 0 2h18a1 1 0 0 0 1-1zm0 6a1 1 0 0 0-1-1h-9a1 1 0 0 0 0 2h9a1 1 0 0 0 1-1z" fill="#6c1cff" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer Area -->
    <footer class="main-footer-section cap-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Footer Top Area -->
                    <div class="footer-top-area at-footer-top-area d-flex justify-content-between flex-wrap">
                        <div class="footer-top-details at-footer-top-details cap-footer-top-details">
                            <h3 class="title">Sign up to our newsletter</h3>
                            <p class="info">Stay up to date with the latest news, announcements, and articles.</p>
                        </div>
                        <div class="footer-search">
                            <form action="">
                                <div class="footer-input-wrap at-footer-input-wrap cap-footer-input-wrap">
                                    <input class="form-control" type="search" placeholder="Enter your email Address">
                                    <button type="submit" class="">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Footer Middle Area -->
                    <div class="footer-middle-area d-flex justify-content-between flex-wrap">
                        <div class="footer-middle-logo">
                            <a href="#"><img src="{{ asset('public/assets/frontend/images/at-home-logo2.svg') }}" alt="logo"></a>
                            <p class="info">All of our services are backed by our 100% satisfaction guarantee. Our electricians can install anything from new security lighting</p>
                        </div>
                        <div class="footer-middle-nav at-footer-middle-nav cap-footer-middle-nav">
                            <h3 class="title">Company</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Testimonial</a></li>
                            </ul>
                        </div>
                        <div class="footer-middle-nav at-footer-middle-nav cap-footer-middle-nav">
                            <h3 class="title">Support</h3>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Tweet @ Us</a></li>
                                <li><a href="#">Webians</a></li>
                                <li><a href="#">Feedback</a></li>
                            </ul>
                        </div>
                        <div class="footer-middle-nav at-footer-middle-nav cap-footer-middle-nav">
                            <h3 class="title">Links</h3>
                            <ul>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Become Teacher</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">All in One</a></li>
                            </ul>
                        </div>
                        <div class="footer-middle-contact footer-middle-nav at-footer-middle-nav cap-footer-middle-nav">
                            <h3 class="title">Contact Us</h3>
                            <ul>
                                <li><a href="tel:">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg') }}">
                                        <path d="M17.3585 14.7602C16.7204 14.623 16.2156 14.9193 15.7686 15.178C15.3108 15.4446 14.4404 16.1507 13.9414 15.9701C11.387 14.9183 8.98453 12.6825 7.94451 10.1178C7.76122 9.60819 8.46403 8.73223 8.72869 8.26907C8.98551 7.82072 9.27565 7.31114 9.14332 6.66824C9.02373 6.09052 7.47695 4.12232 6.93 3.58411C6.56928 3.22859 6.19974 3.03305 5.8204 3.00144C4.39418 2.94022 2.80134 4.84324 2.52198 5.2985C1.82211 6.26927 1.82603 7.561 2.53374 9.12725C4.23931 13.3343 10.6901 19.6832 14.9128 21.4529C15.6921 21.8173 16.4047 22 17.0448 22C17.6711 22 18.2289 21.8252 18.7083 21.4786C19.0699 21.2702 21.051 19.5983 20.999 18.1338C20.9676 17.7604 20.7726 17.3872 20.4217 17.0257C19.8874 16.4737 17.9319 14.8808 17.3585 14.7602Z" fill="white"/>
                                    </svg>
                                    <span>(91) 98765  4321 54</span>                                     
                                </a></li>
                                <li><a href="mailto:">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg') }}">
                                        <path d="M17 3.5H7C4 3.5 2 5 2 8.5V15.5C2 19 4 20.5 7 20.5H17C20 20.5 22 19 22 15.5V8.5C22 5 20 3.5 17 3.5ZM17.47 9.59L14.34 12.09C13.68 12.62 12.84 12.88 12 12.88C11.16 12.88 10.31 12.62 9.66 12.09L6.53 9.59C6.21 9.33 6.16 8.85 6.41 8.53C6.67 8.21 7.14 8.15 7.46 8.41L10.59 10.91C11.35 11.52 12.64 11.52 13.4 10.91L16.53 8.41C16.85 8.15 17.33 8.2 17.58 8.53C17.84 8.85 17.79 9.33 17.47 9.59Z" fill="white"/>
                                    </svg>
                                    <span>support@mail.com</span>                                     
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area at-footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-wrap at-footer-bottom-wrap cap-footer-bottom-wrap d-flex align-items-center justify-content-between flex-wrap">
                            <p class="info">© Copyright by CodedUI. All rights reserved.</p>
                            <div class="footer-bottom-social at-footer-bottom-social cap-footer-bottom-social">
                                <ul class="d-flex align-items-center">
                                    <li><a href="#">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg') }}">
                                            <g clip-path="url(#clip0_36_1375)">
                                              <path d="M19.402 9.00006C19.402 4.02953 15.1706 0.00012207 9.95099 0.00012207C4.73135 0.00012207 0.5 4.02953 0.5 9.00006C0.5 13.4921 3.95607 17.2155 8.47427 17.8907V11.6016H6.07461V9.00006H8.47427V7.01726C8.47427 4.76165 9.88528 3.51572 12.0441 3.51572C13.0778 3.51572 14.1596 3.6915 14.1596 3.6915V5.90633H12.9679C11.7939 5.90633 11.4277 6.60014 11.4277 7.31257V9.00006H14.0489L13.6299 11.6016H11.4277V17.8907C15.9459 17.2155 19.402 13.4921 19.402 9.00006Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_36_1375">
                                                <rect width="18.902" height="17.9999" fill="white" transform="translate(0.5 0.00012207)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>                        
                                    </a></li>
                                    <li><a href="#">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg') }}">
                                            <g clip-path="url(#clip0_36_1377)">
                                              <path d="M12.0244 7.63308L18.9558 0.0529785H17.3133L11.2947 6.63467L6.48769 0.0529785H0.943359L8.21252 10.0057L0.943359 17.9546H2.58599L8.94176 11.0041L14.0183 17.9546H19.5627L12.024 7.63308H12.0244ZM9.77457 10.0934L9.03806 9.10229L3.17785 1.21629H5.70082L10.4301 7.58054L11.1666 8.57161L17.3141 16.8442H14.7911L9.77457 10.0937V10.0934Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_36_1377">
                                                <rect width="19.0285" height="17.9016" fill="white" transform="translate(0.739258 0.0529785)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>                             
                                    </a></li>
                                    <li><a href="#">
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg') }}">
                                            <g clip-path="url(#clip0_36_1374)">
                                              <path d="M9.73197 1.62069C12.1474 1.62069 12.4334 1.63124 13.3833 1.67343C14.2661 1.7121 14.7429 1.85975 15.0607 1.9828C15.4809 2.14452 15.7846 2.34139 16.0989 2.65428C16.4167 2.97068 16.6109 3.26951 16.7733 3.68787C16.8969 4.00427 17.0453 4.48239 17.0841 5.35778C17.1265 6.30699 17.1371 6.59175 17.1371 8.99291C17.1371 11.3976 17.1265 11.6823 17.0841 12.628C17.0453 13.5069 16.8969 13.9815 16.7733 14.298C16.6109 14.7163 16.4132 15.0186 16.0989 15.3315C15.7811 15.6479 15.4809 15.8413 15.0607 16.003C14.7429 16.1261 14.2626 16.2737 13.3833 16.3124C12.4299 16.3546 12.1438 16.3651 9.73197 16.3651C7.31658 16.3651 7.03054 16.3546 6.08063 16.3124C5.19781 16.2737 4.72109 16.1261 4.40327 16.003C3.98305 15.8413 3.67936 15.6444 3.36507 15.3315C3.04726 15.0151 2.85304 14.7163 2.6906 14.298C2.567 13.9815 2.41869 13.5034 2.37985 12.628C2.33747 11.6788 2.32688 11.3941 2.32688 8.99291C2.32688 6.58824 2.33747 6.30347 2.37985 5.35778C2.41869 4.47888 2.567 4.00427 2.6906 3.68787C2.85304 3.26951 3.05079 2.96717 3.36507 2.65428C3.68289 2.33787 3.98305 2.14452 4.40327 1.9828C4.72109 1.85975 5.20134 1.7121 6.08063 1.67343C7.03054 1.63124 7.31658 1.62069 9.73197 1.62069ZM9.73197 0C7.27773 0 6.97051 0.0105468 6.00647 0.052734C5.04596 0.0949212 4.38561 0.249608 3.81355 0.471091C3.21676 0.70312 2.71179 1.00898 2.21035 1.51171C1.70537 2.01092 1.39815 2.51366 1.16509 3.10428C0.942615 3.67732 0.787239 4.33122 0.744864 5.28746C0.702488 6.25074 0.691895 6.5566 0.691895 8.99994C0.691895 11.4433 0.702488 11.7491 0.744864 12.7089C0.787239 13.6651 0.942615 14.3226 1.16509 14.8921C1.39815 15.4862 1.70537 15.989 2.21035 16.4882C2.71179 16.9874 3.21676 17.2968 3.81002 17.5253C4.38561 17.7468 5.04243 17.9014 6.00294 17.9436C6.96698 17.9858 7.2742 17.9964 9.72844 17.9964C12.1827 17.9964 12.4899 17.9858 13.4539 17.9436C14.4145 17.9014 15.0748 17.7468 15.6469 17.5253C16.2401 17.2968 16.7451 16.9874 17.2465 16.4882C17.748 15.989 18.0587 15.4862 18.2883 14.8956C18.5107 14.3226 18.6661 13.6687 18.7085 12.7124C18.7509 11.7527 18.7615 11.4468 18.7615 9.00346C18.7615 6.56011 18.7509 6.25425 18.7085 5.2945C18.6661 4.33825 18.5107 3.68083 18.2883 3.11131C18.0658 2.51365 17.7586 2.01092 17.2536 1.51171C16.7522 1.01249 16.2472 0.70312 15.6539 0.474606C15.0783 0.253123 14.4215 0.0984368 13.461 0.0562496C12.4934 0.0105468 12.1862 0 9.73197 0Z" fill="white"/>
                                              <path d="M9.73226 4.37683C7.16855 4.37683 5.08862 6.44752 5.08862 8.99985C5.08862 11.5522 7.16855 13.6229 9.73226 13.6229C12.296 13.6229 14.3759 11.5522 14.3759 8.99985C14.3759 6.44752 12.296 4.37683 9.73226 4.37683ZM9.73226 11.9987C8.06902 11.9987 6.72007 10.6557 6.72007 8.99985C6.72007 7.344 8.06902 6.00104 9.73226 6.00104C11.3955 6.00104 12.7444 7.344 12.7444 8.99985C12.7444 10.6557 11.3955 11.9987 9.73226 11.9987Z" fill="white"/>
                                              <path d="M15.6438 4.19404C15.6438 4.79169 15.1565 5.27333 14.5597 5.27333C13.9594 5.27333 13.4756 4.78817 13.4756 4.19404C13.4756 3.59638 13.9629 3.11475 14.5597 3.11475C15.1565 3.11475 15.6438 3.5999 15.6438 4.19404Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_36_1374">
                                                <rect width="18.0802" height="17.9999" fill="white" transform="translate(0.691895)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>                       
                                    </a></li>
                                    <li><a href="#">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg') }}">
                                            <g clip-path="url(#clip0_36_1373)">
                                              <path d="M18.1483 0H2.04101C1.26942 0 0.645508 0.580074 0.645508 1.29726V16.6991C0.645508 17.4163 1.26942 17.9999 2.04101 17.9999H18.1483C18.9199 17.9999 19.5475 17.4163 19.5475 16.7026V1.29726C19.5475 0.580074 18.9199 0 18.1483 0ZM6.25334 15.3386H3.44758V6.74644H6.25334V15.3386ZM4.85046 5.57574C3.94966 5.57574 3.22238 4.88317 3.22238 4.02888C3.22238 3.17459 3.94966 2.48201 4.85046 2.48201C5.74757 2.48201 6.47485 3.17459 6.47485 4.02888C6.47485 4.87965 5.74757 5.57574 4.85046 5.57574ZM16.7528 15.3386H13.9507V11.162C13.9507 10.1671 13.9323 8.88392 12.4925 8.88392C11.0342 8.88392 10.8127 9.97025 10.8127 11.0917V15.3386H8.01433V6.74644H10.702V7.92065H10.7389C11.1117 7.24565 12.0273 6.53199 13.3896 6.53199C16.2286 6.53199 16.7528 8.31088 16.7528 10.6241V15.3386Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_36_1373">
                                                <rect width="18.902" height="17.9999" fill="white" transform="translate(0.645508)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>                        
                                    </a></li>
                                    <li><a href="#">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg') }}">
                                            <g clip-path="url(#clip0_36_1372)">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8636 4.91086C12.8878 4.02459 11.5855 3.54177 10.2381 3.56161C7.77247 3.56161 5.67843 5.14564 4.93179 7.27863C4.5359 8.39638 4.5359 9.60678 4.93179 10.7245H4.93526C5.68536 12.8542 7.77594 14.4383 10.2416 14.4383C11.5143 14.4383 12.607 14.1283 13.4538 13.5807V13.5785C14.4505 12.9502 15.1312 11.9614 15.343 10.8436H10.2381V7.37789H19.1526C19.2637 7.97976 19.3158 8.59486 19.3158 9.20665C19.3158 11.944 18.2885 14.2583 16.501 15.8258L16.5029 15.8272C14.9367 17.2029 12.7871 17.9999 10.2381 17.9999C6.66467 17.9999 3.39684 16.0818 1.79245 13.0427C0.451993 10.4997 0.451996 7.50354 1.79246 4.96048C3.39685 1.91807 6.66467 -3.85614e-06 10.2381 -3.85614e-06C12.5856 -0.0264597 14.8533 0.813513 16.5619 2.34134L13.8636 4.91086Z" fill="white"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_36_1372">
                                                <rect width="18.902" height="17.9999" fill="white" transform="translate(0.5979 0.00012207)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>                        
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <script src="{{ asset('public/assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/frontend/js/script.js') }}"></script>
</body>
</html>
