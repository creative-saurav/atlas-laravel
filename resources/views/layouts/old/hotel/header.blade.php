<div class="ht-header-banner-wrap">
    <!-- Start Header -->
    <header class="ht-home-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="at-home-menu-wrap">
                        <div>
                            <a href="#">
                                <img src="{{ asset('public/assets/frontend/images/at-home-logo2.svg') }}" alt="logo">
                            </a>
                        </div>
                        <div class="at-home-menu-button ht-home-menu-button">
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
                                        <ul class="at-home-navbar-nav ht-home-navbar-nav">
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
                                <div class="at-home-nav-search ht-home-nav-search d-none d-md-block">
                                    <form role="search" method="get" class="at-home-search-form" action="">
                                    <div class="at-home-nav-label">
                                            <input type="search" class="at-home-search-input ht-home-search-input" placeholder="Search …"  title="Search for:">
                                            <button type="submit" class="at-home-search-btn ht-home-search-btn">
                                                <img src="{{ asset('public/assets/frontend/images/icons/search-white-16.svg') }}" alt="search">
                                            </button>
                                    </div>
                                    </form>
                                </div>
                                <a href="#" class="at-home-login ht-home-login">Login</a>
                                <a href="#" class="btn ht-btn-primary at-home-listing-btn d-flex align-items-center gap-2">
                                    <img src="{{ asset('public/assets/frontend/images/icons/plus-white-8.svg') }}" alt="icon">
                                    <span>Add Listing</span>
                                </a>
                                <button class="btn at-home-menu-btn ht-home-menu-btn d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
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
    <!-- Start Banner Area -->
    <section class="ht-banner-section mb-60px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="dm-uppercase-text-16px text-center">Hotel</p>
                    <h1 class="dm-title-60px text-capitalize fw-semibold text-white mb-20px text-center">Stay with us feel like home</h1>
                    <p class="in-subtitle-16px text-white text-center max-w-723px mx-auto mb-40px">Awesome  site. on the top advertising a Courses available business online includes assembling  site on the advertising.</p>
                    <div class="mb-50px d-flex align-items-center gap-3 flex-wrap justify-content-center">
                        <a href="#" class="btn ht-btn-primary">Learn More</a>
                        <a href="javascript:void(0);" class="ht-play-btn d-flex align-items-center gap-12px" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="23.5" stroke="white"/>
                                <path d="M30.05 25.2138C29.9905 25.2761 29.7656 25.5422 29.5563 25.7611C28.3287 27.138 25.1261 29.3917 23.4499 30.0796C23.1953 30.1901 22.5517 30.4241 22.2079 30.4391C21.8784 30.4391 21.5643 30.3618 21.2645 30.2051C20.8909 29.9862 20.5912 29.6417 20.427 29.235C20.3212 28.9527 20.157 28.1082 20.157 28.0931C19.9928 27.1691 19.9024 25.6678 19.9024 24.0086C19.9024 22.4279 19.9928 20.9877 20.1272 20.0497C20.1426 20.0347 20.3069 18.9851 20.4865 18.6256C20.816 17.9688 21.4596 17.561 22.1483 17.561H22.2079C22.6564 17.5771 23.5997 17.9849 23.5997 18C25.1856 18.6889 28.3142 20.8321 29.5717 22.2562C29.5717 22.2562 29.9258 22.6221 30.0797 22.8507C30.32 23.1791 30.439 23.5858 30.439 23.9925C30.439 24.4465 30.3046 24.8693 30.05 25.2138Z" fill="white"/>
                            </svg>
                            <span>Take A Tour</span>
                        </a>
                    </div>
                    <div class="at2-shadow-card mx-auto max-sm-350px">
                        <form action="">
                            <div class="d-flex align-items-start align-items-sm-center ht-search-filter-wrap flex-wrap justify-content-center justify-content-md-Start flex-column flex-sm-row">
                                <div class="ht-search-filter ht-search-filter-border">
                                    <div class="d-flex align-items-center gap-2 mb-6px">
                                        <img src="{{ asset('public/assets/frontend/images/icons/location-blue-24.svg') }}" alt="icon">
                                        <p class="dm-text-16px">Location</p>
                                    </div>
                                    <select class="at-nice-select transparent-nice-select ms-32px min-w-145px">
                                        <option data-display="Where are you going?">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="ht-search-filter ht-search-filter-border">
                                    <div class="d-flex align-items-center gap-2 mb-6px">
                                        <img src="{{ asset('public/assets/frontend/images/icons/user-blue-24.svg') }}" alt="icon">
                                        <p class="dm-text-16px">Guests</p>
                                    </div>
                                    <select class="at-nice-select transparent-nice-select ms-32px min-w-120px">
                                        <option data-display="Number of guests">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="ht-search-filter ht-search-filter-border">
                                    <div class="d-flex align-items-center gap-2 mb-6px">
                                        <img src="{{ asset('public/assets/frontend/images/icons/login-blue-24.svg') }}" alt="icon">
                                        <p class="dm-text-16px">Check In</p>
                                    </div>
                                    <input type="text" name="date"  placeholder="Add date" class="form-control transparent-date-picker flat-date-picker2 ms-32px" id="datetime" />
                                </div>
                                <div class="ht-search-filter">
                                    <div class="d-flex align-items-center gap-2 mb-6px">
                                        <img src="{{ asset('public/assets/frontend/images/icons/logout-blue-24.svg') }}" alt="icon">
                                        <p class="dm-text-16px">Check Out</p>
                                    </div>
                                    <input type="text" name="date"  placeholder="Add date" class="form-control transparent-date-picker flat-date-picker2 ms-32px" id="datetime" />
                                </div>
                                <button type="submit" class="mx-auto mx-sm-0 btn ht-btn-primary d-flex align-items-center gap-2">
                                    <img src="{{ asset('public/assets/frontend/images/icons/search-white-20.svg') }}" alt="icon">
                                    <span>Search</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
</div>
