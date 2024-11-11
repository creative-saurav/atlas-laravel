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
                            <p class="car-hero-subtitle text-center max-w-559px mx-auto">On the top advertising a Courses available business to online includes assembling  site on top advertising Courses includes .</p>
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
                                <img src="{{asset('public/assets/frontend/images/car/car-hero-car.webp')}}" alt="car">
                                <div class="ca-hero-happy-customers d-flex align-items-center gap-14px">
                                    <ul class="ca-happy-customer-wrap">
                                        <li class="image-circle-52px">
                                            <img src="{{asset('public/assets/frontend/images/car/user-sm-1.svg')}}" alt="">
                                        </li>
                                        <li class="image-circle-52px">
                                            <img src="{{asset('public/assets/frontend/images/car/user-sm-2.svg')}}" alt="">
                                        </li>
                                        <li class="image-circle-52px">
                                            <img src="{{asset('public/assets/frontend/images/car/user-sm-3.svg')}}" alt="">
                                        </li>
                                    </ul>
                                    <div>
                                        <h5 class="al-title-18px mb-12px">{{get_phrase('Our Happy Customer')}}</h5>
                                        <div class="d-flex align-items-center gap-1">
                                            <img src="{{asset('public/assets/frontend/images/icons/star-black-18.5.svg')}}" alt="star">
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
                        <h1 class="ex-title-30px text-uppercase text-center">{{get_phrase('Latest Vehicles on Sale')}}</h1>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex gap-14px justify-content-center flex-wrap">
                            <button type="button" data-filter="all" class="btn car-filter-btn mixitup-control-active">{{get_phrase('All')}}</button>
                            <button type="button" data-filter=".audi" class="btn car-filter-btn">Audi</button>
                            <button type="button" data-filter=".bmw" class="btn car-filter-btn">BMW</button>
                            <button type="button" data-filter=".ford" class="btn car-filter-btn">Ford</button>
                            <button type="button" data-filter=".huyndai" class="btn car-filter-btn">Huyndai</button>
                            <button type="button" data-filter=".mercedes" class="btn car-filter-btn">Mercedes</button>
                        </div>
                    </div>
                </div>
                <div class="mixitup row gx-28px gy-30px mb-30px">
                    <!-- Single Card -->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix mercedes huyndai ford">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2 active">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix huyndai audi bmw">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix ford audi">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix bmw mercedes">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix mercedes audi">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2 active">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix huyndai bmw">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid-slide-img">
                                        <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="car-grid-details">
                                <div class="cargrid-title-area">
                                    <a href="#" class="title">Range Rover</a>
                                    <p class="info">2023 C300e AMG Line Night Ed Premium Plus</p>
                                </div>
                                <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
                                    <li>
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix ford huyndai audi">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix bmw ford mercedes">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                <div class="row mb-100px">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn ca-btn-outline-dark">View More</a>
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
                <div class="row mb-30px g-28px">
                    <!-- Single Card -->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2 active">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                <div class="row mb-100px">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn ca-btn-outline-dark">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Vehicles Area -->
    
    
        <!-- Start Top Vehicles Area -->
        <section>
            <div class="container">
                <div class="row mb-30px">
                    <div class="col-12">
                        <h1 class="ex-title-30px text-uppercase text-center">Top Cars</h1>
                    </div>
                </div>
                <div class="row mb-30px g-28px">
                    <!-- Single Card -->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="single-grid-card">
                            <!-- Banner Slider -->
                            <div class="grid-slider-area">
                                <div class="swiper grid-banner-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-10.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-9.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{asset('public/assets/frontend/images/grid-list/grid-banner-11.webp')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <a href="javascript:void(0);" class="grid-list-bookmark ca-bookmark-hover gray-bookmark2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
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
                                        <img src="assets/images/icons/engine-black-24.svg" alt="">
                                        <p class="info">1.8L I4</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/mileage-black-24.svg" alt="">
                                        <p class="info">12,897</p>
                                    </li>
                                    <li>
                                        <img src="assets/images/icons/petrol-black-24.svg" alt="">
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
                <div class="row mb-100px">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn ca-btn-outline-dark">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Vehicles Area -->
    
        <!-- Start Discount Area -->
        <section>
            <div class="container">
                <div class="row mb-100px">
                    <div class="col-12">
                        <div class="car-discount-area" style="background-image: {{asset('public/assets/frontend/images/car/car-discount-banner.webp')}}"
                        >
                            <div class="car-discount-title-wrap">
                                <p class="ca-discount-subtitle">EXCLUSIVE CARS FOR SELL</p>
                                <h1 class="ca-discount-title">UP TO <span class="ca-text-red">30%</span> OFF</h1>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn ca-btn-white">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Discount Area -->

@endsection