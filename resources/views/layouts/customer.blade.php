<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <link rel="shortcut icon" href="{{ asset('public/assets/backend/images/favicon.svg') }}" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/vendors/bootstrap/bootstrap.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/vendors/nice-select/nice-select.css') }}">
    <!-- Flat UI Icon -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/icons/uicons-regular-rounded/css/uicons-regular-rounded.css') }}">
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
                                @if(isset(auth()->user()->id) && auth()->user()->id != "")
                                <!-- For Login -->
                                <div class="dropdown at-user-dropdown">
                                    <button class="btn user-dropdown-toggle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      <img src="{{ asset('public/assets/frontend/images/login/user-42.svg') }}" alt="profile">
                                    </button>
                                    <div class="dropdown-menu user-dropdown-menu">
                                        <ul class="user-dropdown-group">
                                            <li><a class="user-dropdown-item" href="#">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 10.5C6.62 10.5 5.5 9.38 5.5 8C5.5 6.62 6.62 5.5 8 5.5C9.38 5.5 10.5 6.62 10.5 8C10.5 9.38 9.38 10.5 8 10.5ZM8 6.5C7.17333 6.5 6.5 7.17333 6.5 8C6.5 8.82667 7.17333 9.5 8 9.5C8.82667 9.5 9.5 8.82667 9.5 8C9.5 7.17333 8.82667 6.5 8 6.5Z" fill="#99A1B7"/>
                                                    <path d="M10.1399 14.7934C9.99992 14.7934 9.85992 14.7734 9.71992 14.7401C9.30658 14.6268 8.95992 14.3668 8.73992 14.0001L8.65992 13.8668C8.26658 13.1868 7.72658 13.1868 7.33325 13.8668L7.25992 13.9934C7.03992 14.3668 6.69325 14.6334 6.27992 14.7401C5.85992 14.8534 5.42659 14.7934 5.05992 14.5734L3.91325 13.9134C3.50659 13.6801 3.21325 13.3001 3.08659 12.8401C2.96659 12.3801 3.02659 11.9068 3.25992 11.5001C3.45325 11.1601 3.50659 10.8534 3.39325 10.6601C3.27992 10.4668 2.99325 10.3534 2.59992 10.3534C1.62659 10.3534 0.833252 9.56011 0.833252 8.58678V7.41344C0.833252 6.44011 1.62659 5.64678 2.59992 5.64678C2.99325 5.64678 3.27992 5.53344 3.39325 5.34011C3.50659 5.14678 3.45992 4.84011 3.25992 4.50011C3.02659 4.09344 2.96659 3.61344 3.08659 3.16011C3.20659 2.70011 3.49992 2.32011 3.91325 2.08678L5.06659 1.42678C5.81992 0.98011 6.81325 1.24011 7.26658 2.00678L7.34659 2.14011C7.73992 2.82011 8.27992 2.82011 8.67325 2.14011L8.74658 2.01344C9.19992 1.24011 10.1933 0.98011 10.9533 1.43344L12.0999 2.09344C12.5066 2.32678 12.7999 2.70678 12.9266 3.16678C13.0466 3.62678 12.9866 4.10011 12.7533 4.50678C12.5599 4.84678 12.5066 5.15344 12.6199 5.34678C12.7333 5.54011 13.0199 5.65344 13.4133 5.65344C14.3866 5.65344 15.1799 6.44678 15.1799 7.42011V8.59344C15.1799 9.56678 14.3866 10.3601 13.4133 10.3601C13.0199 10.3601 12.7333 10.4734 12.6199 10.6668C12.5066 10.8601 12.5533 11.1668 12.7533 11.5068C12.9866 11.9134 13.0533 12.3934 12.9266 12.8468C12.8066 13.3068 12.5133 13.6868 12.0999 13.9201L10.9466 14.5801C10.6933 14.7201 10.4199 14.7934 10.1399 14.7934ZM7.99992 12.3268C8.59325 12.3268 9.14658 12.7001 9.52658 13.3601L9.59992 13.4868C9.67992 13.6268 9.81325 13.7268 9.97325 13.7668C10.1333 13.8068 10.2933 13.7868 10.4266 13.7068L11.5799 13.0401C11.7533 12.9401 11.8866 12.7734 11.9399 12.5734C11.9933 12.3734 11.9666 12.1668 11.8666 11.9934C11.4866 11.3401 11.4399 10.6668 11.7333 10.1534C12.0266 9.64011 12.6333 9.34678 13.3933 9.34678C13.8199 9.34678 14.1599 9.00678 14.1599 8.58011V7.40678C14.1599 6.98678 13.8199 6.64011 13.3933 6.64011C12.6333 6.64011 12.0266 6.34678 11.7333 5.83344C11.4399 5.32011 11.4866 4.64678 11.8666 3.99344C11.9666 3.82011 11.9933 3.61344 11.9399 3.41344C11.8866 3.21344 11.7599 3.05344 11.5866 2.94678L10.4333 2.28678C10.1466 2.11344 9.76659 2.21344 9.59325 2.50678L9.51992 2.63344C9.13992 3.29344 8.58658 3.66678 7.99325 3.66678C7.39992 3.66678 6.84658 3.29344 6.46658 2.63344L6.39325 2.50011C6.22658 2.22011 5.85325 2.12011 5.56659 2.28678L4.41325 2.95344C4.23992 3.05344 4.10659 3.22011 4.05325 3.42011C3.99992 3.62011 4.02659 3.82678 4.12659 4.00011C4.50659 4.65344 4.55325 5.32678 4.25992 5.84011C3.96658 6.35344 3.35992 6.64678 2.59992 6.64678C2.17325 6.64678 1.83325 6.98678 1.83325 7.41344V8.58678C1.83325 9.00678 2.17325 9.35344 2.59992 9.35344C3.35992 9.35344 3.96658 9.64678 4.25992 10.1601C4.55325 10.6734 4.50659 11.3468 4.12659 12.0001C4.02659 12.1734 3.99992 12.3801 4.05325 12.5801C4.10659 12.7801 4.23325 12.9401 4.40659 13.0468L5.55992 13.7068C5.69992 13.7934 5.86658 13.8134 6.01992 13.7734C6.17992 13.7334 6.31325 13.6268 6.39992 13.4868L6.47325 13.3601C6.85325 12.7068 7.40658 12.3268 7.99992 12.3268Z" fill="#99A1B7"/>
                                                </svg>
                                                <span class="mt-2px">Settings</span>
                                            </a></li>
                                            <li><a class="user-dropdown-item" href="#">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.99992 15.1666H5.99992C2.37992 15.1666 0.833252 13.6199 0.833252 9.99992V5.99992C0.833252 2.37992 2.37992 0.833252 5.99992 0.833252H7.33325C7.60659 0.833252 7.83325 1.05992 7.83325 1.33325C7.83325 1.60659 7.60659 1.83325 7.33325 1.83325H5.99992C2.92658 1.83325 1.83325 2.92658 1.83325 5.99992V9.99992C1.83325 13.0733 2.92658 14.1666 5.99992 14.1666H9.99992C13.0733 14.1666 14.1666 13.0733 14.1666 9.99992V8.66658C14.1666 8.39325 14.3933 8.16658 14.6666 8.16658C14.9399 8.16658 15.1666 8.39325 15.1666 8.66658V9.99992C15.1666 13.6199 13.6199 15.1666 9.99992 15.1666Z" fill="#99A1B7"/>
                                                    <path d="M5.66664 11.7934C5.25997 11.7934 4.88664 11.6467 4.61331 11.38C4.28664 11.0534 4.14664 10.58 4.21997 10.08L4.50664 8.07337C4.55997 7.68671 4.8133 7.18671 5.08664 6.91337L10.34 1.66004C11.6666 0.333372 13.0133 0.333372 14.34 1.66004C15.0666 2.38671 15.3933 3.12671 15.3266 3.86671C15.2666 4.46671 14.9466 5.05337 14.34 5.65337L9.08664 10.9067C8.8133 11.18 8.3133 11.4334 7.92664 11.4867L5.91997 11.7734C5.8333 11.7934 5.74664 11.7934 5.66664 11.7934ZM11.0466 2.36671L5.7933 7.62004C5.66664 7.74671 5.51997 8.04004 5.4933 8.21337L5.20664 10.22C5.17997 10.4134 5.21997 10.5734 5.31997 10.6734C5.41997 10.7734 5.57997 10.8134 5.7733 10.7867L7.77997 10.5C7.9533 10.4734 8.2533 10.3267 8.3733 10.2L13.6266 4.94671C14.06 4.51337 14.2866 4.12671 14.32 3.76671C14.36 3.33337 14.1333 2.87337 13.6266 2.36004C12.56 1.29337 11.8266 1.59337 11.0466 2.36671Z" fill="#99A1B7"/>
                                                    <path d="M13.2333 6.55343C13.1866 6.55343 13.14 6.54677 13.1 6.53343C11.3466 6.0401 9.95329 4.64677 9.45996 2.89343C9.38662 2.62677 9.53996 2.35343 9.80662 2.27343C10.0733 2.2001 10.3466 2.35343 10.42 2.6201C10.82 4.0401 11.9466 5.16677 13.3666 5.56677C13.6333 5.6401 13.7866 5.9201 13.7133 6.18677C13.6533 6.41343 13.4533 6.55343 13.2333 6.55343Z" fill="#99A1B7"/>
                                                </svg>
                                                <span class="mt-2px">Edit Profile</span>
                                            </a></li>
                                            <li><a class="user-dropdown-item" href="#">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.12009 15.1667C4.05342 15.1667 3.98009 15.16 3.92009 15.1534L2.47342 14.9534C1.78009 14.86 1.15342 14.24 1.04676 13.5334L0.846758 12.0734C0.780091 11.6067 0.980091 11 1.31342 10.66L4.24009 7.73336C3.76676 5.84003 4.31342 3.84003 5.70676 2.46003C7.86676 0.306697 11.3801 0.30003 13.5468 2.46003C14.5934 3.5067 15.1668 4.90003 15.1668 6.38003C15.1668 7.86003 14.5934 9.25336 13.5468 10.3C12.1468 11.6867 10.1534 12.2334 8.27342 11.7534L5.34009 14.68C5.06009 14.9734 4.56009 15.1667 4.12009 15.1667ZM9.62009 1.84003C8.45342 1.84003 7.29342 2.28003 6.40676 3.1667C5.20676 4.36003 4.77342 6.1067 5.27342 7.73336C5.32676 7.91336 5.28009 8.10003 5.14676 8.23336L2.01342 11.3667C1.90009 11.48 1.80676 11.7734 1.82676 11.9267L2.02676 13.3867C2.06676 13.64 2.34009 13.9267 2.59342 13.96L4.04676 14.16C4.20676 14.1867 4.50009 14.0934 4.61342 13.98L7.76009 10.84C7.89342 10.7067 8.08676 10.6667 8.26009 10.72C9.86676 11.2267 11.6201 10.7934 12.8201 9.59336C13.6734 8.74003 14.1468 7.59336 14.1468 6.38003C14.1468 5.16003 13.6734 4.02003 12.8201 3.1667C11.9534 2.2867 10.7868 1.84003 9.62009 1.84003Z" fill="#99A1B7"/>
                                                    <path d="M6.12664 13.6933C5.99997 13.6933 5.8733 13.6466 5.7733 13.5466L4.23997 12.0133C4.04664 11.82 4.04664 11.5 4.23997 11.3066C4.4333 11.1133 4.7533 11.1133 4.94664 11.3066L6.47997 12.84C6.6733 13.0333 6.6733 13.3533 6.47997 13.5466C6.37997 13.6466 6.2533 13.6933 6.12664 13.6933Z" fill="#99A1B7"/>
                                                    <path d="M9.66675 7.83325C8.84008 7.83325 8.16675 7.15992 8.16675 6.33325C8.16675 5.50659 8.84008 4.83325 9.66675 4.83325C10.4934 4.83325 11.1667 5.50659 11.1667 6.33325C11.1667 7.15992 10.4934 7.83325 9.66675 7.83325ZM9.66675 5.83325C9.39341 5.83325 9.16675 6.05992 9.16675 6.33325C9.16675 6.60659 9.39341 6.83325 9.66675 6.83325C9.94008 6.83325 10.1667 6.60659 10.1667 6.33325C10.1667 6.05992 9.94008 5.83325 9.66675 5.83325Z" fill="#99A1B7"/>
                                                </svg>
                                                <span class="mt-2px">Change Password</span>
                                            </a></li>
                                        </ul>
                                        <div class="px-10px py-12px">
                                            <a href="{{ route('logout') }}" class="user-dropdown-item">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.1599 14.8467L10.0733 14.8467C7.11326 14.8467 5.6866 13.68 5.43993 11.0667C5.41326 10.7933 5.61326 10.5467 5.89326 10.52C6.15993 10.4933 6.41326 10.7 6.43993 10.9733C6.63326 13.0667 7.61993 13.8467 10.0799 13.8467L10.1666 13.8467C12.8799 13.8467 13.8399 12.8867 13.8399 10.1733L13.8399 5.82665C13.8399 3.11332 12.8799 2.15332 10.1666 2.15332L10.0799 2.15332C7.6066 2.15332 6.61993 2.94665 6.43993 5.07999C6.4066 5.35332 6.17326 5.55999 5.89326 5.53332C5.61326 5.51332 5.41326 5.26665 5.43326 4.99332C5.65993 2.33999 7.09326 1.15332 10.0733 1.15332L10.1599 1.15332C13.4333 1.15332 14.8333 2.55332 14.8333 5.82665L14.8333 10.1733C14.8333 13.4467 13.4333 14.8467 10.1599 14.8467Z" fill="#99A1B7"/>
                                                    <path d="M10 8.5L2.41333 8.5C2.14 8.5 1.91333 8.27333 1.91333 8C1.91333 7.72667 2.14 7.5 2.41333 7.5L10 7.5C10.2733 7.5 10.5 7.72667 10.5 8C10.5 8.27333 10.2733 8.5 10 8.5Z" fill="#99A1B7"/>
                                                    <path d="M3.89988 10.7333C3.77321 10.7333 3.64655 10.6866 3.54655 10.5866L1.31321 8.35331C1.11988 8.15998 1.11988 7.83998 1.31321 7.64664L3.54655 5.41331C3.73988 5.21998 4.05988 5.21998 4.25321 5.41331C4.44655 5.60664 4.44655 5.92664 4.25321 6.11998L2.37321 7.99998L4.25321 9.87998C4.44655 10.0733 4.44655 10.3933 4.25321 10.5866C4.15988 10.6866 4.02655 10.7333 3.89988 10.7333Z" fill="#99A1B7"/>
                                                </svg>
                                                <span class="mt-2px">{{ get_phrase('Logout') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <a href="#" class="at-home-login">Login</a>
                                @endif
                                <a href="#" class="btn cap-btn-dark at-home-listing-btn d-flex align-items-center gap-2">
                                    <img src="{{ asset('public/assets/frontend/images/icons/plus-white-8.svg') }}" alt="icon">
                                    <span>Add Listing</span>
                                </a>
                                <button class="btn at-home-menu-btn cap-home-menu-btn d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 20 20" xml:space="preserve" class=""><g><path d="M21 7H8a1 1 0 0 1 0-2h13a1 1 0 0 1 0 2zm1 5a1 1 0 0 0-1-1H3a1 1 0 0 0 0 2h18a1 1 0 0 0 1-1zm0 6a1 1 0 0 0-1-1h-9a1 1 0 0 0 0 2h9a1 1 0 0 0 1-1z" fill="#6c1cff" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    @yield('frontend_layout')


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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.3585 14.7602C16.7204 14.623 16.2156 14.9193 15.7686 15.178C15.3108 15.4446 14.4404 16.1507 13.9414 15.9701C11.387 14.9183 8.98453 12.6825 7.94451 10.1178C7.76122 9.60819 8.46403 8.73223 8.72869 8.26907C8.98551 7.82072 9.27565 7.31114 9.14332 6.66824C9.02373 6.09052 7.47695 4.12232 6.93 3.58411C6.56928 3.22859 6.19974 3.03305 5.8204 3.00144C4.39418 2.94022 2.80134 4.84324 2.52198 5.2985C1.82211 6.26927 1.82603 7.561 2.53374 9.12725C4.23931 13.3343 10.6901 19.6832 14.9128 21.4529C15.6921 21.8173 16.4047 22 17.0448 22C17.6711 22 18.2289 21.8252 18.7083 21.4786C19.0699 21.2702 21.051 19.5983 20.999 18.1338C20.9676 17.7604 20.7726 17.3872 20.4217 17.0257C19.8874 16.4737 17.9319 14.8808 17.3585 14.7602Z" fill="white"/>
                                    </svg>
                                    <span>(91) 98765  4321 54</span>                                     
                                </a></li>
                                <li><a href="mailto:">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    <script src="{{ asset('public/assets/frontend/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <!-- toastr js -->
    <script src="{{ asset('public/plugin/toastr/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    <script src="{{ asset('public/assets/frontend/js/script.js') }}"></script>
    @stack('js')
</body>
</html>
