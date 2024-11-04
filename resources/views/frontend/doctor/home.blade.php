@extends('layouts.frontend')
@section('title', get_phrase('Hotel Home Page'))
@section('frontend_layout')

    <!-- Start Discount Area -->
    <section class="dt-discount-section mb-100px">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="dt-discount-area-card">
                        <div class="dt-card">
                            <h5 class="mb-30px text-capitalize sf-title-30px">Working Hours</h5>
                            <ul class="mb-20px">
                                <li class="dt-bordered-list d-flex align-items-start gap-2 justify-content-between">
                                    <span>Mon - Wed</span>
                                    <span>8AM - 7PM</span>
                                </li>
                                <li class="dt-bordered-list d-flex align-items-start gap-2 justify-content-between">
                                    <span>Thursday</span>
                                    <span>8AM - 7PM</span>
                                </li>
                                <li class="dt-bordered-list d-flex align-items-start gap-2 justify-content-between">
                                    <span>Friday</span>
                                    <span>8AM - 7PM</span>
                                </li>
                                <li class="dt-bordered-list d-flex align-items-start gap-2 justify-content-between">
                                    <span>Sat - Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>
                            <p class="mb-3 in-subtitle-20px">Time’s not Flexible?</p>
                            <p class="in2-subtitle-16px fw-medium mb-20px">We provide high quality, integrated healthcare services, based on a patient – centered</p>
                            <a href="#" class="btn dt-btn-primary text-start w-100 d-flex align-items-center gap-2 justify-content-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/calendar-edit-white-20.svg') }}" alt="icon">
                                <span>Suggest Checkup Time</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="h-100 d-flex align-items-end justify-content-center justify-content-lg-end">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-end flex-column flex-sm-row">
                            <div class="dt-discount-details">
                                <h4 class="lg-title-64px text-capitalize mb-20px">Get <span class="dt-text-primary">50%</span> OFF</h4>
                                <p class="sf-subtitle-34px text-capitalize">On Doctor Consultation</p>
                            </div>
                            <div class="dt-discount-banner">
                                <img src="{{ asset('public/assets/frontend/images/doctor/dt-discount-banner.webp') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Discount Area -->


    <!-- Start Top Doctors Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <div class="d-flex align-items-baseline justify-content-between gap-2 flex-wrap">
                        <h1 class="lg-title-36px">Top Doctors</h1>
                        <a href="#" class="dt-icontext-link">
                            <span>See all</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.09171 4.40833C8.01361 4.4858 7.95161 4.57796 7.9093 4.67951C7.867 4.78106 7.84521 4.88998 7.84521 4.99999C7.84521 5.11 7.867 5.21893 7.9093 5.32047C7.95161 5.42202 8.01361 5.51419 8.09171 5.59166L11.9084 9.40833C11.9865 9.48579 12.0485 9.57796 12.0908 9.67951C12.1331 9.78106 12.1549 9.88998 12.1549 9.99999C12.1549 10.11 12.1331 10.2189 12.0908 10.3205C12.0485 10.422 11.9865 10.5142 11.9084 10.5917L8.09171 14.4083C8.01361 14.4858 7.95161 14.578 7.9093 14.6795C7.867 14.7811 7.84521 14.89 7.84521 15C7.84521 15.11 7.867 15.2189 7.9093 15.3205C7.95161 15.422 8.01361 15.5142 8.09171 15.5917C8.24785 15.7469 8.45906 15.834 8.67921 15.834C8.89937 15.834 9.11058 15.7469 9.26671 15.5917L13.0917 11.7667C13.5599 11.2979 13.8228 10.6625 13.8228 9.99999C13.8228 9.33749 13.5599 8.70208 13.0917 8.23333L9.26671 4.40833C9.11058 4.25312 8.89937 4.166 8.67921 4.166C8.45906 4.166 8.24785 4.25312 8.09171 4.40833Z" fill="#060F19"/>
                            </svg>
                        </a>
                    </div>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <p class="card-light-text dt-theme-light">Featured</p>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark active">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name active">Dr. Megan Fox</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Labaid Healthcare Hospital</span>
                                </p>
                                <p class="certified">MDS - Orthodontics, BDS, Certified Implantologist</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name">Dr. David Carnegie</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Labaid Healthcare Hospital</span>
                                </p>
                                <p class="certified">MDS - Orthodontics, BDS</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name">Dr. Stiphen Strange</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Central Healthcare Hospital</span>
                                </p>
                                <p class="certified">MDS - Orthodontics, BDS, Certified Implantologist</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <p class="card-light-text dt-theme-light">Featured</p>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name">Dr. David Miller</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Central Healthcare Hospital</span>
                                </p>
                                <p class="certified">BDS, BDS (Implantologist)</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Doctors Area -->


    <!-- Start Providers Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <div class="d-flex align-items-baseline justify-content-between gap-2 flex-wrap">
                        <h1 class="lg-title-36px">Providers</h1>
                        <a href="#" class="dt-icontext-link">
                            <span>See all</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.09171 4.40833C8.01361 4.4858 7.95161 4.57796 7.9093 4.67951C7.867 4.78106 7.84521 4.88998 7.84521 4.99999C7.84521 5.11 7.867 5.21893 7.9093 5.32047C7.95161 5.42202 8.01361 5.51419 8.09171 5.59166L11.9084 9.40833C11.9865 9.48579 12.0485 9.57796 12.0908 9.67951C12.1331 9.78106 12.1549 9.88998 12.1549 9.99999C12.1549 10.11 12.1331 10.2189 12.0908 10.3205C12.0485 10.422 11.9865 10.5142 11.9084 10.5917L8.09171 14.4083C8.01361 14.4858 7.95161 14.578 7.9093 14.6795C7.867 14.7811 7.84521 14.89 7.84521 15C7.84521 15.11 7.867 15.2189 7.9093 15.3205C7.95161 15.422 8.01361 15.5142 8.09171 15.5917C8.24785 15.7469 8.45906 15.834 8.67921 15.834C8.89937 15.834 9.11058 15.7469 9.26671 15.5917L13.0917 11.7667C13.5599 11.2979 13.8228 10.6625 13.8228 9.99999C13.8228 9.33749 13.5599 8.70208 13.0917 8.23333L9.26671 4.40833C9.11058 4.25312 8.89937 4.166 8.67921 4.166C8.45906 4.166 8.24785 4.25312 8.09171 4.40833Z" fill="#060F19"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-100px g-4">
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="dt-user-card">
                        <a href="#" class="dt-user-card-img">
                            <img src="{{ asset('public/assets/frontend/images/doctor/providers-doctor-1.webp') }}" alt="doctor">
                        </a>
                        <div class="p-20px">
                            <div class="d-flex align-items-start gap-2 mb-12px justify-content-between">
                                <p class="sf-text-15px dt-text-primary">Founder/ Chief Surgeon</p>
                                <div class="dt-primary-iconbox-circle dt-user-card-iconbox">
                                    <img src="{{ asset('public/assets/frontend/images/icons/stethoscope-white-26.svg') }}" alt="icon">
                                </div>
                            </div>
                            <a href="#" class="dt-user-card-name active mb-2">Dr. Megan Fox</a>
                            <p class="in2-subtitle-16px mb-22px">Courses available business to online site on top includes.</p>
                            <a href="#" class="btn dt-btn-dark dt-btn-sm">Find Out More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="dt-user-card">
                        <a href="#" class="dt-user-card-img">
                            <img src="{{ asset('public/assets/frontend/images/doctor/providers-doctor-2.webp') }}" alt="doctor">
                        </a>
                        <div class="p-20px">
                            <div class="d-flex align-items-start gap-2 mb-12px justify-content-between">
                                <p class="sf-text-15px dt-text-primary">Assistant Surgeon</p>
                                <div class="dt-primary-iconbox-circle dt-user-card-iconbox">
                                    <img src="{{ asset('public/assets/frontend/images/icons/stethoscope-white-26.svg') }}" alt="icon">
                                </div>
                            </div>
                            <a href="#" class="dt-user-card-name mb-2">Dr. Wade Warren</a>
                            <p class="in2-subtitle-16px mb-22px">Courses available business to online site on top includes.</p>
                            <a href="#" class="btn dt-btn-dark dt-btn-sm">Find Out More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="dt-user-card">
                        <a href="#" class="dt-user-card-img">
                            <img src="{{ asset('public/assets/frontend/images/doctor/providers-doctor-3.webp') }}" alt="doctor">
                        </a>
                        <div class="p-20px">
                            <div class="d-flex align-items-start gap-2 mb-12px justify-content-between">
                                <p class="sf-text-15px dt-text-primary">Cardiology</p>
                                <div class="dt-primary-iconbox-circle dt-user-card-iconbox">
                                    <img src="{{ asset('public/assets/frontend/images/icons/stethoscope-white-26.svg') }}" alt="icon">
                                </div>
                            </div>
                            <a href="#" class="dt-user-card-name active mb-2">Dr. Darlene Robertson</a>
                            <p class="in2-subtitle-16px mb-22px">Courses available business to online site on top includes.</p>
                            <a href="#" class="btn dt-btn-dark dt-btn-sm">Find Out More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="dt-user-card">
                        <a href="#" class="dt-user-card-img">
                            <img src="{{ asset('public/assets/frontend/images/doctor/providers-doctor-4.webp') }}" alt="doctor">
                        </a>
                        <div class="p-20px">
                            <div class="d-flex align-items-start gap-2 mb-12px justify-content-between">
                                <p class="sf-text-15px dt-text-primary">Lead Optometrist</p>
                                <div class="dt-primary-iconbox-circle dt-user-card-iconbox">
                                    <img src="{{ asset('public/assets/frontend/images/icons/stethoscope-white-26.svg') }}" alt="icon">
                                </div>
                            </div>
                            <a href="#" class="dt-user-card-name mb-2">Dr. Leslie Alexander</a>
                            <p class="in2-subtitle-16px mb-22px">Courses available business to online site on top includes.</p>
                            <a href="#" class="btn dt-btn-dark dt-btn-sm">Find Out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Providers Area -->


    <!-- Start Trending Doctors Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <div class="d-flex align-items-baseline justify-content-between gap-2 flex-wrap">
                        <h1 class="lg-title-36px">Trending Doctors</h1>
                        <a href="#" class="dt-icontext-link">
                            <span>See all</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.09171 4.40833C8.01361 4.4858 7.95161 4.57796 7.9093 4.67951C7.867 4.78106 7.84521 4.88998 7.84521 4.99999C7.84521 5.11 7.867 5.21893 7.9093 5.32047C7.95161 5.42202 8.01361 5.51419 8.09171 5.59166L11.9084 9.40833C11.9865 9.48579 12.0485 9.57796 12.0908 9.67951C12.1331 9.78106 12.1549 9.88998 12.1549 9.99999C12.1549 10.11 12.1331 10.2189 12.0908 10.3205C12.0485 10.422 11.9865 10.5142 11.9084 10.5917L8.09171 14.4083C8.01361 14.4858 7.95161 14.578 7.9093 14.6795C7.867 14.7811 7.84521 14.89 7.84521 15C7.84521 15.11 7.867 15.2189 7.9093 15.3205C7.95161 15.422 8.01361 15.5142 8.09171 15.5917C8.24785 15.7469 8.45906 15.834 8.67921 15.834C8.89937 15.834 9.11058 15.7469 9.26671 15.5917L13.0917 11.7667C13.5599 11.2979 13.8228 10.6625 13.8228 9.99999C13.8228 9.33749 13.5599 8.70208 13.0917 8.23333L9.26671 4.40833C9.11058 4.25312 8.89937 4.166 8.67921 4.166C8.45906 4.166 8.24785 4.25312 8.09171 4.40833Z" fill="#060F19"/>
                            </svg>
                        </a>
                    </div>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <p class="card-light-text dt-theme-light">Featured</p>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark active">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name active">Dr. Megan Fox</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Labaid Healthcare Hospital</span>
                                </p>
                                <p class="certified">MDS - Orthodontics, BDS, Certified Implantologist</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name">Dr. David Carnegie</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Labaid Healthcare Hospital</span>
                                </p>
                                <p class="certified">MDS - Orthodontics, BDS</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name">Dr. Stiphen Strange</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Central Healthcare Hospital</span>
                                </p>
                                <p class="certified">MDS - Orthodontics, BDS, Certified Implantologist</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
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
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-8.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-6.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid-slide-img">
                                            <img src="{{ asset('public/assets/frontend/images/grid-list/grid-banner-7.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <p class="card-light-text dt-theme-light">Featured</p>
                            <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="doctor-grid-details">
                            <div class="docgrid-name-role dt-grid-name-role">
                                <a href="#" class="name">Dr. David Miller</a>
                                <p class="hospitam">
                                    <span class="role">Dentist</span>
                                    <span>Central Healthcare Hospital</span>
                                </p>
                                <p class="certified">BDS, BDS (Implantologist)</p>
                            </div>
                            <div class="doctor-grid-ratings d-flex align-items-center">
                                <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-16.svg') }}" alt="">
                                <p class="rating">4.8</p>
                                <p class="reviews">(1.5k reviews)</p>
                            </div>
                            <div class="doctorgrid-see-price dt-grid-see-price d-flex align-items-center justify-content-between">
                                <div class="prices d-flex">
                                    <p class="price">$200</p>
                                    <p class="time">/consult</p>
                                </div>
                                <a href="#" class="see-details-btn1 dt-sm-btn-primary">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Trending Doctors Area -->

@endsection