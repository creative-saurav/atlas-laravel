<!-- Start Header -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-header-area d-flex align-items-center justify-content-between">
                    <div class="header-logo">
                        <a href="{{route('home')}}">
                            @if(get_frontend_settings('light_logo'))
                                <img src="{{ asset('public/uploads/logo/' . get_frontend_settings('light_logo')) }}" alt="" class="radious-15px px-2 py-2 light-logo-preview h-77">
                            @else
                                <img src="{{ asset('public/uploads/logo/light_logo.svg') }}" alt="" class="radious-15px px-2 py-2 light-logo-preview h-77">
                            @endif
                        </a>
                    </div>
                    <div class="header-right-area d-flex align-items-center">
                        <form action="" class="header-search-form">
                            <div class="header-search-wrap d-flex align-items-center">
                                <select class="search-select">
                                    <option selected>Los Angeles, USA</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <input type="search" class="form-control header-search-input" placeholder="Search property....">
                                <button type="submit" class="search-submit-btn">
                                    <img src="{{ asset('public/assets/frontend/images/icons/search-white.svg') }}" alt="">
                                </button>
                            </div>
                        </form>
                        <div class="menu-btn-area d-flex align-items-center">
                            <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
                                <div class="offcanvas-header">
                                    <div class="header-offcanvas-logo">
                                        <a href="#">
                                            <img src="assets/images/logo.svg" alt="logo">
                                        </a>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasMenu" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <nav class="header-nav">
                                        <ul class="header-nav-list">
                                            <li class="have-sub-menu">
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
                                            <li class="have-sub-menu">
                                                <a href="javascript:void(0);" class="first-a">
                                                    <span>{{get_phrase('Listing')}}</span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.5917 7.84025C15.5142 7.76214 15.422 7.70015 15.3205 7.65784C15.2189 7.61553 15.11 7.59375 15 7.59375C14.89 7.59375 14.7811 7.61553 14.6795 7.65784C14.578 7.70015 14.4858 7.76214 14.4083 7.84025L10.5917 11.6569C10.5142 11.735 10.422 11.797 10.3205 11.8393C10.2189 11.8816 10.11 11.9034 10 11.9034C9.89 11.9034 9.78108 11.8816 9.67953 11.8393C9.57798 11.797 9.48581 11.735 9.40834 11.6569L5.59168 7.84025C5.51421 7.76214 5.42204 7.70015 5.32049 7.65784C5.21894 7.61553 5.11002 7.59375 5.00001 7.59375C4.89 7.59375 4.78108 7.61553 4.67953 7.65784C4.57798 7.70015 4.48581 7.76214 4.40834 7.84025C4.25313 7.99638 4.16602 8.20759 4.16602 8.42775C4.16602 8.6479 4.25313 8.85911 4.40834 9.01525L8.23334 12.8402C8.70209 13.3084 9.33751 13.5714 10 13.5714C10.6625 13.5714 11.2979 13.3084 11.7667 12.8402L15.5917 9.01525C15.7469 8.85911 15.834 8.6479 15.834 8.42775C15.834 8.20759 15.7469 7.99638 15.5917 7.84025Z" fill="#555558"/>
                                                    </svg>                                                    
                                                </a>
                                                <ul class="first-sub-menu">
                                                    <li><a href="{{route('listing.view',['type'=>'beauty','view'=>'grid'])}}">{{get_phrase('Beauty')}}</a></li>
                                                    <li><a href="{{route('listing.view',['type'=>'car','view'=>'grid'])}}">{{get_phrase('Car')}}</a></li>
                                                    <li><a href="{{route('listing.view',['type'=>'hotel','view'=>'grid'])}}">{{get_phrase('Hotel')}}</a></li>
                                                    <li><a href="{{route('listing.view',['type'=>'real-estate','view'=>'grid'])}}">{{get_phrase('Real Estate')}}</a></li>

                                                    <li><a href="{{route('listing.view',['type'=>'restaurant','view'=>'grid'])}}">{{get_phrase('Restaurant')}}</a></li>

                                                    <li><a href="{{route('listing.view',['type'=>'doctor','view'=>'grid'])}}">{{get_phrase('Doctor')}}</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#" class="first-a">Category</a></li>
                                            <li><a href="{{route('pricing')}}" class="first-a">Pricing</a></li>
                                            <li><a href="{{route('blogs')}}" class="first-a">Blog</a></li>
                                            {{-- <li><a href="#" class="first-a">Contact</a></li> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-buttons d-flex align-items-center">
                            @if (user('role') == 1)
                                <a href="{{ route('admin.dashboard') }}" class="login">Dashboard</a>
                            @else
                                <a href="{{ route('customer.wishlist') }}" class="login">Login</a>
                            @endif
                            
                                <a href="#" class="add-listing-btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.16602 10.8307H4.99935C4.76324 10.8307 4.56532 10.7509 4.4056 10.5911C4.24588 10.4314 4.16602 10.2335 4.16602 9.9974C4.16602 9.76128 4.24588 9.56337 4.4056 9.40365C4.56532 9.24392 4.76324 9.16406 4.99935 9.16406H9.16602V4.9974C9.16602 4.76128 9.24588 4.56337 9.4056 4.40365C9.56532 4.24392 9.76324 4.16406 9.99935 4.16406C10.2355 4.16406 10.4334 4.24392 10.5931 4.40365C10.7528 4.56337 10.8327 4.76128 10.8327 4.9974V9.16406H14.9993C15.2355 9.16406 15.4334 9.24392 15.5931 9.40365C15.7528 9.56337 15.8327 9.76128 15.8327 9.9974C15.8327 10.2335 15.7528 10.4314 15.5931 10.5911C15.4334 10.7509 15.2355 10.8307 14.9993 10.8307H10.8327V14.9974C10.8327 15.2335 10.7528 15.4314 10.5931 15.5911C10.4334 15.7509 10.2355 15.8307 9.99935 15.8307C9.76324 15.8307 9.56532 15.7509 9.4056 15.5911C9.24588 15.4314 9.16602 15.2335 9.16602 14.9974V10.8307Z" fill="#6C1CFF"/>
                                    </svg>                                            
                                    <span>Add Listing</span>
                                </a>
                                <button class="mobile-menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 20 20" xml:space="preserve" class=""><g><path d="M21 7H8a1 1 0 0 1 0-2h13a1 1 0 0 1 0 2zm1 5a1 1 0 0 0-1-1H3a1 1 0 0 0 0 2h18a1 1 0 0 0 1-1zm0 6a1 1 0 0 0-1-1h-9a1 1 0 0 0 0 2h9a1 1 0 0 0 1-1z" fill="#6c1cff" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->