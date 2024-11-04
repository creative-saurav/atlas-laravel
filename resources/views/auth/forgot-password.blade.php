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
                        <h3 class="mb-3 in-title2-24px">{{ get_phrase('Forget Password') }}</h3>
                        <p class="in-subtitle3-16px lh-base">{{ get_phrase('Enter your email address to receive a verification  code') }}</p>
                    </div>
                    <div class="mb-30px">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="user-email" class="form-label ua-form-label mb-3">{{ get_phrase('Email') }}</label>
                                <input type="email" class="form-control ua-form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="username@gmail.com" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn ua-btn-dark w-100">{{ get_phrase('Send') }}</button>
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
