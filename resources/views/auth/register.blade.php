@extends('auth.index')
@section('title', get_phrase('Atlas Login'))
@section('content')

<!-- Start Main Area -->
<section class="mb-60px mt-6px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div>
                    <div class="mb-50px">
                        <h3 class="mb-3 in-title2-24px">{{ get_phrase('Get Started Now') }}</h3>
                        <p class="in-subtitle3-16px lh-base">{{ get_phrase('Enter your credentials to access your account') }}</p>
                    </div>
                    <div class="mb-30px">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label ua-form-label mb-3">{{ get_phrase('Name') }}<span>*</span></label>
                                <input type="text" class="form-control ua-form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" aria-label="Your Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label ua-form-label mb-3">{{ get_phrase('Email') }}<span>*</span></label>
                                <input type="email" class="form-control ua-form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-20px">
                                <div class="d-flex align-items-center justify-content-between column-gap-2 row-gap-1 flex-wrap mb-3">
                                    <label for="password" class="fform-label ua-form-label">{{ get_phrase('New Password') }}<span>*</span></label>
                                </div>
                                <div class="at-password-group">
                                    <div class="toggle-icons">
                                        <img src="{{ asset('public/assets/frontend/images/icons/eye-slash-20.svg') }}" class="password-icon" toggle=".password-field1" alt="">
                                        <img src="{{ asset('public/assets/frontend/images/icons/eye-show-20.svg') }}" class="password-icon d-none" toggle=".password-field1" alt="">
                                    </div>
                                    <input type="password" class="form-control ua-form-control password-field1 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" aria-label="Password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-20px">
                                <div class="d-flex align-items-center justify-content-between column-gap-2 row-gap-1 flex-wrap mb-3">
                                    <label for="password" class="fform-label ua-form-label">{{ get_phrase('Confirm Password') }}<span>*</span></label>
                                </div>
                                <div class="at-password-group">
                                    <div class="toggle-icons">
                                        <img src="{{ asset('public/assets/frontend/images/icons/eye-slash-20.svg') }}" class="password-icon" toggle=".password-field2" alt="">
                                        <img src="{{ asset('public/assets/frontend/images/icons/eye-show-20.svg') }}" class="password-icon d-none" toggle=".password-field2" alt="">
                                    </div>
                                    <input type="password_confirmation" class="form-control ua-form-control password-field2 @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirmed Password" aria-label="password_confirmation" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-30px">
                                <div class="form-check ua-form-check">
                                    <input class="form-check-input ua-form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ua-form-check-label" for="flexCheckDefault">
                                        {{ get_phrase('I agree to the') }} <a href="#" class="at-text-underline ua-link">{{ get_phrase('Terms & Policy') }}</a>
                                    </label>
                                </div>                                      
                            </div>
                            <button type="submit" class="btn ua-btn-dark w-100 mb-3">{{ get_phrase('Register') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <div class="ua-banner-slider-wrap">
                        <!-- Swiper -->
                        <div class="swiper ua-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="ua-slider-banner">
                                        <img class="banner" src="{{ asset('public/assets/frontend/images/login/ua-login-banner1.webp') }}" alt="banner">
                                    </div>
                                    <div class="ua-slider-content">
                                        <img class="mb-3" src="{{ asset('public/assets/frontend/images/login/ua-star-shape.svg') }}" alt="shape">
                                        <h1 class="ua-title-36px text-white mb-3">Book Your Luxury Hotel</h1>
                                        <p class="in-subtitle-16px text-white ua-slider-subtitle-margin">Create a free account and get full access to all features for 30 days. No credit card needed.</p>
                                        <div class="d-flex align-items-center gap-12px ua-customer-rating">
                                            <ul class="d-flex">
                                                <li class="circle-user-list">
                                                    <img src="{{ asset('public/assets/frontend/images/login/user-1.svg') }}" alt="user">
                                                </li>
                                                <li class="circle-user-list">
                                                    <img src="{{ asset('public/assets/frontend/images/login/user-2.svg') }}" alt="user">
                                                </li>
                                                <li class="circle-user-list">
                                                    <img src="{{ asset('public/assets/frontend/images/login/user-3.svg') }}" alt="user">
                                                </li>
                                            </ul>
                                            <div>
                                                <h3 class="text-white al-title-18px mb-2">Our Happy Customer</h3>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="star">
                                                    <p class="text-white ua-subtitle2-16px"><span class="fw-medium">4.5</span> (13.5k Review)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ua-slider-banner">
                                        <img class="banner" src="{{ asset('public/assets/frontend/images/login/ua-login-banner2.webp') }}" alt="banner">
                                    </div>
                                    <div class="ua-slider-content">
                                        <img class="mb-3" src="{{ asset('public/assets/frontend/images/login/ua-star-shape.svg') }}" alt="shape">
                                        <h1 class="ua-title-36px text-white mb-3">Enjoy Healthy And Delicious Food</h1>
                                        <p class="in-subtitle-16px text-white ua-slider-subtitle-margin">Create a free account and get full access to all features for 30 days. No credit card needed.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ua-slider-banner">
                                        <img class="banner" src="{{ asset('public/assets/frontend/images/login/ua-login-banner3.webp') }}" alt="banner">
                                    </div>
                                    <div class="ua-slider-content">
                                        <img class="mb-3" src="{{ asset('public/assets/frontend/images/login/ua-star-shape.svg') }}" alt="shape">
                                        <h1 class="ua-title-36px text-white mb-3">Visit Doctor Today</h1>
                                        <p class="in-subtitle-16px text-white ua-slider-subtitle-margin">Create a free account and get full access to all features for 30 days. No credit card needed.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ua-slider-banner">
                                        <img class="banner" src="{{ asset('public/assets/frontend/images/login/ua-login-banner4.webp') }}" alt="banner">
                                    </div>
                                    <div class="ua-slider-content">
                                        <img class="mb-3" src="{{ asset('public/assets/frontend/images/login/ua-star-shape.svg') }}" alt="shape">
                                        <h1 class="ua-title-36px text-white mb-3">Buy Your Favorite Car</h1>
                                        <p class="in-subtitle-16px text-white ua-slider-subtitle-margin">Create a free account and get full access to all features for 30 days. No credit card needed.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ua-slider-banner">
                                        <img class="banner" src="{{ asset('public/assets/frontend/images/login/ua-login-banner5.webp') }}" alt="banner">
                                    </div>
                                    <div class="ua-slider-content">
                                        <img class="mb-3" src="{{ asset('public/assets/frontend/images/login/ua-star-shape.svg') }}" alt="shape">
                                        <h1 class="ua-title-36px text-white mb-3">Show Your Beauty</h1>
                                        <p class="in-subtitle-16px text-white ua-slider-subtitle-margin">Create a free account and get full access to all features for 30 days. No credit card needed.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ua-slider-banner">
                                        <img class="banner" src="{{ asset('public/assets/frontend/images/login/ua-login-banner6.webp') }}" alt="banner">
                                    </div>
                                    <div class="ua-slider-content">
                                        <img class="mb-3" src="{{ asset('public/assets/frontend/images/login/ua-star-shape.svg') }}" alt="shape">
                                        <h1 class="ua-title-36px text-white mb-3">Your Dream Home</h1>
                                        <p class="in-subtitle-16px text-white ua-slider-subtitle-margin">Create a free account and get full access to all features for 30 days. No credit card needed.</p>
                                        <div class="d-flex align-items-center gap-12px ua-customer-rating">
                                            <ul class="d-flex">
                                                <li class="circle-user-list">
                                                    <img src="{{ asset('public/assets/frontend/images/login/user-1.svg') }}" alt="user">
                                                </li>
                                                <li class="circle-user-list">
                                                    <img src="{{ asset('public/assets/frontend/images/login/user-2.svg') }}" alt="user">
                                                </li>
                                                <li class="circle-user-list">
                                                    <img src="{{ asset('public/assets/frontend/images/login/user-3.svg') }}" alt="user">
                                                </li>
                                            </ul>
                                            <div>
                                                <h3 class="text-white al-title-18px mb-2">Our Happy Customer</h3>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="star">
                                                    <p class="text-white ua-subtitle2-16px"><span class="fw-medium">4.5</span> (13.5k Review)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Area -->


@endsection
