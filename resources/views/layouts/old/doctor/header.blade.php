<div class="dt-menu-banner-wrap">
    <!-- Start Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="at-home-menu-wrap">
                        <div>
                            <a href="#">
                                <img src="{{ asset('public/assets/frontend/images/at-home-logo.svg') }}" alt="logo">
                            </a>
                        </div>
                        <div class="at-home-menu-button dt-home-menu-button">
                            <!-- offcanvas menu start -->
                            <div class="offcanvas-xl offcanvas-end at-home-offcanvas" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                                <div class="offcanvas-header">
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('public/assets/frontend/images/at-home-logo.svg') }}" alt="logo">
                                        </a>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <nav>
                                        <ul class="at-home-navbar-nav dt-home-navbar-nav">
                                            <li class="at-home-nav-link have-sub-menu">
                                                <a href="javascript:void(0);" class="first-a">
                                                    <span>{{ get_phrase('Home') }}</span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.5917 7.84025C15.5142 7.76214 15.422 7.70015 15.3205 7.65784C15.2189 7.61553 15.11 7.59375 15 7.59375C14.89 7.59375 14.7811 7.61553 14.6795 7.65784C14.578 7.70015 14.4858 7.76214 14.4083 7.84025L10.5917 11.6569C10.5142 11.735 10.422 11.797 10.3205 11.8393C10.2189 11.8816 10.11 11.9034 10 11.9034C9.89 11.9034 9.78108 11.8816 9.67953 11.8393C9.57798 11.797 9.48581 11.735 9.40834 11.6569L5.59168 7.84025C5.51421 7.76214 5.42204 7.70015 5.32049 7.65784C5.21894 7.61553 5.11002 7.59375 5.00001 7.59375C4.89 7.59375 4.78108 7.61553 4.67953 7.65784C4.57798 7.70015 4.48581 7.76214 4.40834 7.84025C4.25313 7.99638 4.16602 8.20759 4.16602 8.42775C4.16602 8.6479 4.25313 8.85911 4.40834 9.01525L8.23334 12.8402C8.70209 13.3084 9.33751 13.5714 10 13.5714C10.6625 13.5714 11.2979 13.3084 11.7667 12.8402L15.5917 9.01525C15.7469 8.85911 15.834 8.6479 15.834 8.42775C15.834 8.20759 15.7469 7.99638 15.5917 7.84025Z" fill="#555558"/>
                                                    </svg>                                                    
                                                </a>
                                                <ul class="first-sub-menu">
                                                    <li><a href="{{ route('beauty.home') }}">{{ get_phrase('Beauty') }}</a></li>
                                                    <li><a href="{{ route('car.home') }}">{{ get_phrase('Car') }}</a></li>
                                                    <li><a href="{{ route('hotel.home') }}">{{ get_phrase('Hotel') }}</a></li>
                                                    <!-- <li><a href="{{ route('hotel.home') }}">{{ get_phrase('Real Estate') }}</a></li>
                                                    <li><a href="{{ route('hotel.home') }}">{{ get_phrase('Restaurant') }}</a></li> -->
                                                    <li><a href="{{ route('doctor.home') }}">{{ get_phrase('Doctor') }}</a></li>

                                                </ul>
                                            </li>
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
                                <div class="at-home-nav-search dt-home-nav-search d-none d-md-block">
                                    <form class="at-home-search-form" action="">
                                        <div class="at-home-nav-label">
                                            <input type="search" class="at-home-search-input dt-home-search-input" placeholder="Search …"  title="Search for:">
                                            <button type="submit" class="at-home-search-btn dt-home-search-btn">
                                                <img src="{{ asset('public/assets/frontend/images/icons/search-white-16.svg') }}" alt="search">
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <a href="#" class="at-home-login dt-home-login">Login</a>
                                <a href="#" class="btn dt-btn-primary at-home-listing-btn d-flex align-items-center gap-2">
                                    <img src="{{ asset('public/assets/frontend/images/icons/plus-white-8.svg') }}" alt="icon">
                                    <span>Add Listing</span>
                                </a>
                                <button class="btn at-home-menu-btn dt-home-menu-btn d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
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
    <!-- Banner Area Start -->
    <div class="container mt-3">
        <div class="dt-banner-wrap">
            <div class="max-w-751px mx-auto">
                <h1 class="lg-title-56px text-capitalize mb-20px text-center">Your Journey To <span class="fw-medium dt-text-primary">Wellness</span> Begins At Here</h1>
                <p class="mb-30px text-center max-w-559px mx-auto in2-subtitle-16px">On the top advertising a Courses available business to online includes assembling  site on top advertising Courses includes .</p>
                <div class="text-center">
                    <a href="#" class="btn dt-btn-primary">Book A Schedule</a>
                </div>
            </div>
            <div class="dt-hero-banner-area">
                <div class="banner-support-user-wrap d-flex align-items-end justify-content-between gap-2 flex-wrap">
                    <div class="dt-customer-support">
                        <div class="dt-primary-iconbox">
                            <img src="{{ asset('public/assets/frontend/images/icons/headphone-white-26.svg') }}" alt="icon">
                        </div>
                        <p class="info">24/7 Customer Support</p>
                    </div>
                    <div class="dt-setisfied-user-wrap">
                        <ul class="mb-12px dt-setisfied-user-group">
                            <li class="image-circle-42px">
                                <img src="{{ asset('public/assets/frontend/images/doctor/user-300-1.webp') }}" alt="user">
                            </li>
                            <li class="image-circle-42px">
                                <img src="{{ asset('public/assets/frontend/images/doctor/user-300-2.webp') }}" alt="user">
                            </li>
                            <li class="image-circle-42px">
                                <img src="{{ asset('public/assets/frontend/images/doctor/user-300-3.webp') }}" alt="user">
                            </li>
                            <li class="image-circle-42px">
                                <img src="{{ asset('public/assets/frontend/images/doctor/user-300-4.webp') }}" alt="user">
                            </li>
                            <li class="dt-setisfied-user-more">
                                56K
                            </li>
                        </ul>
                        <p class="info">Satisfied Users Globally</p>
                    </div>
                </div>
                <div class="dt-hero-banner">
                    <img src="{{ asset('public/assets/frontend/images/doctor/dt-hero-banner-img.webp') }}" alt="banner">
                </div>
                <div class="dt-banner-search-wrap">
                    <form action="">
                        <div class="dt-banner-search-filters">
                            <div class="d-flex align-items-center gap-2 dt-banner-search-filter">
                                <img src="{{ asset('public/assets/frontend/images/icons/dt-location-gray-22.svg') }}" alt="location">
                                <select class="at-nice-select dt-select-borderless mt-2px">
                                    <option data-display="Location">Location</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="3">Potato</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center gap-2 dt-banner-search-filter">
                                <img src="{{ asset('public/assets/frontend/images/icons/dt-briefcase-gray-22.svg') }}" alt="location">
                                <select class="at-nice-select dt-select-borderless mt-2px">
                                    <option data-display="Category">Category</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="3">Potato</option>
                                </select>
                            </div>
                            <a href="#" class="btn dt-btn-dark d-flex align-items-center gap-2 text-nowrap">
                                <img src="{{ asset('public/assets/frontend/images/icons/search-white-20.svg') }}" alt="icon">
                                <span>Search Doctors</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>