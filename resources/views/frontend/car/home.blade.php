@extends('layouts.frontend')
@section('title', get_phrase('Hotel Home Page'))
@section('frontend_layout')

    <!-- Banner Area Start -->
    <section class="car-hero-section mb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="car-hero-details">
                        <h1 class="ex-title-100px text-center">FIND YOUR CAR</h1>
                        <p class="in2-subtitle-16px car-hero-subtitle text-center max-w-559px mx-auto">On the top advertising a Courses available business to online includes assembling  site on top advertising Courses includes .</p>
                        <div class="car-search-filters">
                            <form action="">
                                <div class="car-search-filters-wrap">
                                    <div class="car-filter-selects">
                                        <select class="at-nice-select ca-select-white mt-2px">
                                            <option data-display="Model">Model</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3">Potato</option>
                                        </select>
                                        <select class="at-nice-select ca-select-white mt-2px">
                                            <option data-display="Trim">Trim</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3">Potato</option>
                                        </select>
                                        <select class="at-nice-select ca-select-white mt-2px">
                                            <option data-display="Exterior Paint">Exterior Paint</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3">Potato</option>
                                        </select>
                                        <select class="at-nice-select ca-select-white mt-2px">
                                            <option data-display="Wheels">Wheels</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn ca-btn-white d-flex align-items-center gap-2">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.58317 18.1251C4.87484 18.1251 1.0415 14.2917 1.0415 9.58342C1.0415 4.87508 4.87484 1.04175 9.58317 1.04175C14.2915 1.04175 18.1248 4.87508 18.1248 9.58342C18.1248 14.2917 14.2915 18.1251 9.58317 18.1251ZM9.58317 2.29175C5.55817 2.29175 2.2915 5.56675 2.2915 9.58342C2.2915 13.6001 5.55817 16.8751 9.58317 16.8751C13.6082 16.8751 16.8748 13.6001 16.8748 9.58342C16.8748 5.56675 13.6082 2.29175 9.58317 2.29175Z" fill="#0F0B0B"/>
                                            <path d="M18.3335 18.9583C18.1752 18.9583 18.0169 18.9 17.8919 18.775L16.2252 17.1083C15.9835 16.8666 15.9835 16.4666 16.2252 16.225C16.4669 15.9833 16.8669 15.9833 17.1085 16.225L18.7752 17.8916C19.0169 18.1333 19.0169 18.5333 18.7752 18.775C18.6502 18.9 18.4919 18.9583 18.3335 18.9583Z" fill="#0F0B0B"/>
                                        </svg>
                                        <span>Add Listing</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="car-hero-banner">
                            <img src="{{ asset('public/assets/frontend/images/car/car-hero-car.webp') }}" alt="car">
                            <div class="ca-hero-happy-customers d-flex align-items-center gap-14px">
                                <ul class="ca-happy-customer-wrap">
                                    <li class="image-circle-52px">
                                        <img src="{{ asset('public/assets/frontend/images/car/user-sm-1.svg') }}" alt="user">
                                    </li>
                                    <li class="image-circle-52px">
                                        <img src="{{ asset('public/assets/frontend/images/car/user-sm-2.svg') }}" alt="user">
                                    </li>
                                    <li class="image-circle-52px">
                                        <img src="{{ asset('public/assets/frontend/images/car/user-sm-3.svg') }}" alt="user">
                                    </li>
                                </ul>
                                <div>
                                    <h5 class="al-title-18px mb-12px">Our Happy Customer</h5>
                                    <div class="d-flex align-items-center gap-1">
                                        <img src="{{ asset('public/assets/frontend/images/icons/star-black-18.5.svg') }}" alt="star">
                                        <p class="ca-rating-review"><span>4.5</span> (13.5k Review)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area Start -->


    <!-- Start Latest Vehicles Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <h1 class="ex-title-30px text-uppercase text-center"><h1 class="ex-title-30px text-uppercase text-center">Latest Vehicles on Sale</h1></h1>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <ul class="nav nav-pills ca-nav-pills mb-30px" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-five-tab" data-bs-toggle="pill" data-bs-target="#pills-five" type="button" role="tab" aria-controls="pills-five" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-six-tab" data-bs-toggle="pill" data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-six" role="tabpanel" aria-labelledby="pills-six-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Vehicles Area -->


    <!-- Start Featured Vehicles Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <h1 class="ex-title-30px text-uppercase text-center">FEATURED VEHICLES</h1>
                </div>
            </div>
            <div class="row mb-100px g-4">
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark active">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Hyundai</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Range Rover</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Toyota</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Hyundai</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Vehicles Area -->


    <!-- Start Featured Vehicles Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <h1 class="ex-title-30px text-uppercase text-center">Top Cars</h1>
                </div>
            </div>
            <div class="row mb-100px g-4">
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Hyundai</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Range Rover</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Toyota</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-11.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-9.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-10.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                          
                            </a>
                        </div>
                        <div class="car-grid-details">
                            <div class="cargrid-title-area">
                                <a href="#" class="title">Hyundai</a>
                                <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                            </div>
                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/engine-black-24.svg') }}" alt="">
                                    <p class="info">1.8L I4</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/mileage-black-24.svg') }}" alt="">
                                    <p class="info">12,897</p>
                                </li>
                                <li>
                                    <img src="{{ asset('public/assets/frontend/images/icons/petrol-black-24.svg') }}" alt="">
                                    <p class="info">Petrol</p>
                                </li>
                            </ul>
                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                <div class="prices">
                                    <p class="old-price">$50,985</p>
                                    <p class="new-price ca-new-price">$48,983</p>
                                </div>
                                <a href="#" class="btn ca-btn-dark ca-btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Vehicles Area -->

@endsection