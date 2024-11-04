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
                    <div class="at-home-menu-button ca-home-menu-button">
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
                                    <ul class="at-home-navbar-nav ca-home-navbar-nav">
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
                            <div class="at-home-nav-search ca-home-nav-search d-none d-md-block">
                                <form class="at-home-search-form" action="">
                                    <div class="at-home-nav-label">
                                        <input type="search" class="at-home-search-input car-home-search-input" placeholder="Search …"  title="Search for:">
                                        <button type="submit" class="at-home-search-btn ca-home-search-btn">
                                            <img src="{{ asset('public/assets/frontend/images/icons/search-white-16.svg') }}" alt="search">
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <a href="#" class="at-home-login ca-home-login">Login</a>
                            <a href="#" class="btn ca-btn-dark at-home-listing-btn d-flex align-items-center gap-2">
                                <img src="{{ asset('public/assets/frontend/images/icons/plus-white-8.svg') }}" alt="icon">
                                <span>Add Listing</span>
                            </a>
                            <button class="btn at-home-menu-btn ca-home-menu-btn d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
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