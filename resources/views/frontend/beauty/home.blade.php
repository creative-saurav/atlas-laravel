@extends('layouts.frontend')
@section('title', get_phrase('Hotel Home Page'))
@section('frontend_layout')
@php
    $BeautyBanner = json_decode(get_homepage_settings('BeautyBanner') ?? '{}');
    $BeautyMassage = json_decode(get_homepage_settings('BeautyMassage') ?? '{}');
   


    $banner_title = $BeautyBanner->title ?? ''; 
    $titleWords = explode(' ', $banner_title);
    $firstPart = implode(' ', array_slice($titleWords, 0, 3)); 
    $highlightedWord = $titleWords[3] ?? ''; 
    $remainingPart = implode(' ', array_slice($titleWords, 4)); 

    // Facial 
    $BeautyFacial = json_decode(get_homepage_settings('BeautyFacial') ?? '{}');
    $words = explode(' ', $BeautyFacial->description ?? '');
    $firstWord = $words[0] ?? ''; 
    $secondWord = $words[1] ?? '';

    // Motion Discount 
    $BeautyMotion = json_decode(get_homepage_settings('BeautyMotion') ?? '{}');
    $description = $BeautyMotion->description ?? '';
    $mwords = explode(' ', $description);
    // Ensure there are enough words in the description for this structure
    $word1 = $mwords[0] ?? '';
    $word2 = $mwords[1] ?? '';
    $word3 = $mwords[2] ?? '';
    $word4 = $mwords[3] ?? '';
    $word5 = $mwords[4] ?? '';
    $remainingWords = implode(' ', array_slice($mwords, 5));
@endphp

      <!-- Start Banner Area -->
      <section>
        <div class="container">
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="d-flex justify-content-between bt-banner-area align-items-start">
                        <div class="bt-banner-title-area">
                            <h1 class="mb-30px ers-title-76px">
                                {{ $firstPart }} <span class="bt-italic-title">{{ $highlightedWord }}</span> {{ $remainingPart }}
                            </h1>
                            <p class="mb-40px eub-subtitle-16px">{{$BeautyBanner->description ?? ''}}</p>
                            <div class="d-flex align-items-center gap-4 flex-wrap">
                                <a href="#" class="btn bt-btn-dark d-flex align-items-center gap-2">
                                    <span>{{get_phrase('Book Now')}}</span>
                                    <img src="{{ asset('public/assets/frontend/images/icons/arrow-right-white-18.svg') }}" alt="">
                                </a>
                                <a href="#" class="bt-underline-link">{{get_phrase('Explore Our Products')}}</a>
                            </div>
                            <!-- for under xl -->
                            <div class="d-block d-xl-none">
                                <div class="bt-banner-counter-area">
                                    <div>
                                        <div class="d-flex align-items-center gap-6px mb-2">
                                            <h2 class="ju-title-44px">500</h2>
                                            <img src="assets/images/icons/plus-black-20.svg" alt="plus">
                                        </div>
                                        <p class="eub-subtitle-14px">{{get_phrase('Organic Product')}}</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-6px mb-2">
                                            <h2 class="ju-title-44px">25k</h2>
                                            <img src="assets/images/icons/plus-black-20.svg" alt="plus">
                                        </div>
                                        <p class="eub-subtitle-14px">{{get_phrase('Product Preview')}}</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-6px mb-2">
                                            <h2 class="ju-title-44px">12Y</h2>
                                            <img src="assets/images/icons/plus-black-20.svg" alt="plus">
                                        </div>
                                        <p class="eub-subtitle-14px">{{get_phrase('Market Experience')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bt-banner-wrap">
                            <div class="bt-banner-banner">
                                @if(isset($BeautyBanner->image))
                                <img src="{{ asset('public/uploads/homepage/beauty/'. $BeautyBanner->image) }}" alt="">
                                @else
                                <img src="{{ asset('public/assets/frontend/images/beauty/beauty-hero-banner.webp') }}" alt="">
                                @endif
                            </div>
                            <a href="{{$BeautyBanner->video_url}}" class="bt-banner-play-btn video-popup" data-maxwidth="900px" data-vbtype="video">
                                <img src="{{ asset('public/assets/frontend/images/beauty/bt-play-btn.svg') }}" alt="play">
                            </a>
                        </div>
                        <!-- for upper xl -->
                        <div class="d-none d-xl-block">
                            <div class="bt-banner-counter-area">
                                <div>
                                    <div class="d-flex align-items-center gap-6px mb-2">
                                        <h2 class="ers-title-44px"><span class="at-counter">500</span></h2>
                                        <img src="{{ asset('public/assets/frontend/images/icons/plus-black-20.svg') }}" alt="plus">
                                    </div>
                                    <p class="eub-subtitle-14px">{{get_phrase('Organic Product')}}</p>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-6px mb-2">
                                        <h2 class="ers-title-44px"><span class="at-counter">25</span>k</h2>
                                        <img src="{{ asset('public/assets/frontend/images/icons/plus-black-20.svg') }}" alt="plus">
                                    </div>
                                    <p class="eub-subtitle-14px">{{get_phrase('Product Preview')}}</p>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-6px mb-2">
                                        <h2 class="ers-title-44px"><span class="at-counter">12</span>Y</h2>
                                        <img src="{{ asset('public/assets/frontend/images/icons/plus-black-20.svg') }}" alt="plus">
                                    </div>
                                    <p class="eub-subtitle-14px">{{get_phrase('Market Experience')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Title Area -->
    <section class="bt-title-section mb-60px">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center flex-wrap bt-title-wrap flex-column flex-sm-row">
                    <h4 class="ju-title-24px text-center text-sm-start">{{get_phrase('Hair Treatment')}} <span class="fu-title-24px">{{get_phrase('&')}}</span> {{get_phrase('Repair')}}</h4>
                    <img class="d-none d-sm-block" src="{{asset('public/assets/frontend/images/icons/start4-black-20.svg')}}" alt="icon">
                    <h4 class="ju-title-24px text-center text-sm-start">{{get_phrase('Get Discount Up To 20')}}<span class="fu-title-24px">{{get_phrase('%')}}</span></h4>
                    <img class="d-none d-sm-block" src="{{asset('public/assets/frontend/images/icons/start4-black-20.svg')}}" alt="icon">
                    <h4 class="ju-title-24px text-center text-sm-start">{{get_phrase('Best Massage')}}</h4>
                    <img class="d-none d-sm-block" src="{{asset('public/assets/frontend/images/icons/start4-black-20.svg')}}" alt="icon">
                    <h4 class="ju-title-24px text-center text-sm-start">{{get_phrase('Hair Treatment')}} <span class="fu-title-24px">{{get_phrase('&')}}</span> {{get_phrase('Repair')}}</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End Title Area -->

    <!-- Start Banner Card Area -->
    <section>
        <div class="container">
            <div class="row g-4 mb-70px">
                <div class="col-lg-6">
                    <div class="bt-advertise-banner1">
                        <div class="advertise-banner-img1">
                            @if(isset($BeautyFacial->image))
                            <img src="{{ asset('public/uploads/homepage/beauty/'. $BeautyFacial->image) }}" alt="">
                            @else
                            <img src="{{asset('public/assets/frontend/images/beauty/bt-banner-card-bg1.webp')}}" alt="">
                            @endif
                        </div>
                        <div class="advertise-banner-details1">
                            <h4 class="fs-title-40px mb-3 text-white">{{$BeautyFacial->title}}</h4>
                            <div class="bt-discount-rectangular">
                                <h5 class="al-title-32px text-center mb-2px"><?= htmlspecialchars($firstWord) ?></h5>
                                <h6 class="bai-title-26px"><?= htmlspecialchars($secondWord) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bt-advertise-banner2 mb-10px">
                        <div class="advertise-banner-img2">
                            @if(isset($BeautyMassage->image))
                            <img src="{{ asset('public/uploads/homepage/beauty/'. $BeautyMassage->image) }}" alt="">
                            @else
                            <img src="{{asset('public/assets/frontend/images/beauty/bt-banner-card-bg2.webp')}}" alt="banner">
                            @endif
                        </div>
                        <div class="advertise-banner-details2">
                            <h4 class="fs-title-40px mb-12px text-white">{{$BeautyMassage->title}}</h4>
                            <p class="text-white mb-4 al-subtitle-16px text-uppercase fw-bold">{{$BeautyMassage->description}}</p>
                            <a href="#" class="btn bt-btn-dark">{{get_phrase('Explore More')}}</a>
                        </div>
                    </div>
                    {{-- <p class="eub-title-18px">Relax & Save: 30% Off All Massages!</p> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Card Area -->

    <!-- Start Popular Parlour Area -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-30px ers-title-36px text-center">{{get_phrase('Popular Beauty Parlour')}}</h1>
                </div>
            </div>
            <div class="row g-4 mb-30px">
                @if(count($BeautyPopular) > 0)
                @foreach($BeautyPopular as $popular)
                @php 
                 $images = json_decode($popular->image) ?? [];
                  $countryName = App\Models\Country::where('id', $popular->country)->first();
                  $cityName = App\Models\City::where('id', $popular->city)->first();
                  $today = strtolower(now()->format('l'));
                    $openingTimes = json_decode($popular->opening_time, true);
                    $todayOpening = $openingTimes[$today]['open'];
                    $todayClosing = $openingTimes[$today]['close'];
                    $currentTime = now()->format('H');

                    // Determine if the place is open or closed
                    $isClosed = ($todayOpening === 'closed' && $todayClosing === 'closed');
                    $isWithinTimeRange = ($currentTime >= $todayOpening || $currentTime < $todayClosing);
                @endphp
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{get_image('public/storage/listing-images/'.$image)}}" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <p class="bt-status-badge">{{$popular->is_popular}}</p>
                            <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark bt-grid-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7001 2.58337C12.1917 2.58337 10.8417 3.31671 10.0001 4.44171C9.15841 3.31671 7.80841 2.58337 6.30008 2.58337C3.74175 2.58337 1.66675 4.66671 1.66675 7.24171C1.66675 8.23337 1.82508 9.15004 2.10008 10C3.41675 14.1667 7.47508 16.6584 9.48341 17.3417C9.76675 17.4417 10.2334 17.4417 10.5167 17.3417C12.5251 16.6584 16.5834 14.1667 17.9001 10C18.1751 9.15004 18.3334 8.23337 18.3334 7.24171C18.3334 4.66671 16.2584 2.58337 13.7001 2.58337Z" fill="#FF736A"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="beauty-grid-details2">
                            <div class="beautygrid-location-title mb-12px">
                                <div class="location d-flex mb-2">
                                    <img src="{{ asset('public/assets/frontend/images/icons/location-gray2-16.svg') }}" alt="">
                                    <p class="name">{{$cityName->name}}, {{$countryName->name}}</p>
                                </div>
                                <a href="#" class="bt-grid-title">{{$popular->title}} </a>
                            </div>
                            <div class="beautygrid-rating-open d-flex align-items-center justify-content-between flex-wrap">
                                <div class="beauty-grid-ratings d-flex align-items-center">
                                    <p class="bt-grid-rating">4.8</p>
                                    <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="">
                                    <p class="bt-grid-reviews">1.5k</p>
                                </div>
                                <div class="beauty-grid-open d-flex align-items-center">
                                    @if ($isClosed || !$isWithinTimeRange)
                                    <img src="{{ asset('public/assets/frontend/images/icons/door-open-red.svg') }}" alt="">
                                    <p class="status close">{{get_phrase('Closed')}}</p>
                                @else
                                    <img src="{{ asset('public/assets/frontend/images/icons/door-open-green.svg') }}" alt="">
                                    <p class="status">{{get_phrase('Open')}}</p>
                                @endif
                                </div>
                            </div>
                            <div class="beauty-grid-btns d-flex align-items-center justify-content-between flex-wrap">
                                <a href="#" class="btn bt-btn-outline-secondary">{{get_phrase('Beauty Salon')}}</a>
                                <a href="#" class="bt-grid-viewlink">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.6499 9.33752H6.8999C6.5924 9.33752 6.3374 9.08252 6.3374 8.77502C6.3374 8.46752 6.5924 8.21252 6.8999 8.21252H10.6499C10.9574 8.21252 11.2124 8.46752 11.2124 8.77502C11.2124 9.08252 10.9574 9.33752 10.6499 9.33752Z" fill="#8A8A8A"/>
                                        <path d="M8.7749 11.2125C8.4674 11.2125 8.2124 10.9575 8.2124 10.65V6.90002C8.2124 6.59252 8.4674 6.33752 8.7749 6.33752C9.0824 6.33752 9.3374 6.59252 9.3374 6.90002V10.65C9.3374 10.9575 9.0824 11.2125 8.7749 11.2125Z" fill="#8A8A8A"/>
                                        <path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#8A8A8A"/>
                                        <path d="M16.5001 17.0625C16.3576 17.0625 16.2151 17.01 16.1026 16.8975L13.5003 14.2955C13.2828 14.078 13.2828 13.718 13.5003 13.5005C13.7178 13.283 14.0778 13.283 14.2953 13.5005L16.8976 16.1025C17.1151 16.32 17.1151 16.68 16.8976 16.8975C16.7851 17.01 16.6426 17.0625 16.5001 17.0625Z" fill="#8A8A8A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
               

            </div>
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="text-center">
                        <a href="#" class="btn bt-btn-dark">{{get_phrase('View More')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular Parlour Area -->

    <!-- Start Best Spa Area -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-30px ers-title-36px text-center">{{get_phrase('Find The Best Spa Here')}}</h1>
                </div>
            </div>
            <div class="row g-4 mb-30px">
                @if(count($BeautyBest) > 0)
                @foreach($BeautyBest as $best)
                @php 
                 $images = json_decode($best->image) ?? [];
                  $countryName = App\Models\Country::where('id', $best->country)->first();
                  $cityName = App\Models\City::where('id', $best->city)->first();
                  $today = strtolower(now()->format('l'));
                    $openingTimes = json_decode($best->opening_time, true);
                    $todayOpening = $openingTimes[$today]['open'];
                    $todayClosing = $openingTimes[$today]['close'];
                    $currentTime = now()->format('H');

                    // Determine if the place is open or closed
                    $isClosed = ($todayOpening === 'closed' && $todayClosing === 'closed');
                    $isWithinTimeRange = ($currentTime >= $todayOpening || $currentTime < $todayClosing);
                @endphp
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{get_image('public/storage/listing-images/'.$image)}}" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <p class="bt-status-badge">{{$best->is_popular}}</p>
                            <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark bt-grid-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7001 2.58337C12.1917 2.58337 10.8417 3.31671 10.0001 4.44171C9.15841 3.31671 7.80841 2.58337 6.30008 2.58337C3.74175 2.58337 1.66675 4.66671 1.66675 7.24171C1.66675 8.23337 1.82508 9.15004 2.10008 10C3.41675 14.1667 7.47508 16.6584 9.48341 17.3417C9.76675 17.4417 10.2334 17.4417 10.5167 17.3417C12.5251 16.6584 16.5834 14.1667 17.9001 10C18.1751 9.15004 18.3334 8.23337 18.3334 7.24171C18.3334 4.66671 16.2584 2.58337 13.7001 2.58337Z" fill="#FF736A"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="beauty-grid-details2">
                            <div class="beautygrid-location-title mb-12px">
                                <div class="location d-flex mb-2">
                                    <img src="{{ asset('public/assets/frontend/images/icons/location-gray2-16.svg') }}" alt="">
                                    <p class="name">{{$cityName->name}}, {{$countryName->name}}</p>
                                </div>
                                <a href="#" class="bt-grid-title">{{$best->title}} </a>
                            </div>
                            <div class="beautygrid-rating-open d-flex align-items-center justify-content-between flex-wrap">
                                <div class="beauty-grid-ratings d-flex align-items-center">
                                    <p class="bt-grid-rating">4.8</p>
                                    <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="">
                                    <p class="bt-grid-reviews">1.5k</p>
                                </div>
                                <div class="beauty-grid-open d-flex align-items-center">
                                    @if ($isClosed || !$isWithinTimeRange)
                                    <img src="{{ asset('public/assets/frontend/images/icons/door-open-red.svg') }}" alt="">
                                    <p class="status close">{{get_phrase('Closed')}}</p>
                                @else
                                    <img src="{{ asset('public/assets/frontend/images/icons/door-open-green.svg') }}" alt="">
                                    <p class="status">{{get_phrase('Open')}}</p>
                                @endif
                                </div>
                            </div>
                            <div class="beauty-grid-btns d-flex align-items-center justify-content-between flex-wrap">
                                <a href="#" class="btn bt-btn-outline-secondary">{{get_phrase('Beauty Salon')}}</a>
                                <a href="#" class="bt-grid-viewlink">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.6499 9.33752H6.8999C6.5924 9.33752 6.3374 9.08252 6.3374 8.77502C6.3374 8.46752 6.5924 8.21252 6.8999 8.21252H10.6499C10.9574 8.21252 11.2124 8.46752 11.2124 8.77502C11.2124 9.08252 10.9574 9.33752 10.6499 9.33752Z" fill="#8A8A8A"/>
                                        <path d="M8.7749 11.2125C8.4674 11.2125 8.2124 10.9575 8.2124 10.65V6.90002C8.2124 6.59252 8.4674 6.33752 8.7749 6.33752C9.0824 6.33752 9.3374 6.59252 9.3374 6.90002V10.65C9.3374 10.9575 9.0824 11.2125 8.7749 11.2125Z" fill="#8A8A8A"/>
                                        <path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#8A8A8A"/>
                                        <path d="M16.5001 17.0625C16.3576 17.0625 16.2151 17.01 16.1026 16.8975L13.5003 14.2955C13.2828 14.078 13.2828 13.718 13.5003 13.5005C13.7178 13.283 14.0778 13.283 14.2953 13.5005L16.8976 16.1025C17.1151 16.32 17.1151 16.68 16.8976 16.8975C16.7851 17.01 16.6426 17.0625 16.5001 17.0625Z" fill="#8A8A8A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
               

            </div>
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="text-center">
                        <a href="#" class="btn bt-btn-dark">{{get_phrase('View More')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Best Spa Area -->

    <!-- Start Complete Wellness Area -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-30px ers-title-36px text-center">{{get_phrase('Complete wellness with massage')}}</h1>
                </div>
            </div>
            <div class="row g-4 mb-30px">
                @if(count($BeautyWellness) > 0)
                @foreach($BeautyWellness as $wellness)
                @php 
                 $images = json_decode($wellness->image) ?? [];
                  $countryName = App\Models\Country::where('id', $wellness->country)->first();
                  $cityName = App\Models\City::where('id', $wellness->city)->first();
                  $today = strtolower(now()->format('l'));
                    $openingTimes = json_decode($wellness->opening_time, true);
                    $todayOpening = $openingTimes[$today]['open'];
                    $todayClosing = $openingTimes[$today]['close'];
                    $currentTime = now()->format('H');

                    // Determine if the place is open or closed
                    $isClosed = ($todayOpening === 'closed' && $todayClosing === 'closed');
                    $isWithinTimeRange = ($currentTime >= $todayOpening || $currentTime < $todayClosing);
                @endphp
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-grid-card">
                        <!-- Banner Slider -->
                        <div class="grid-slider-area">
                            <div class="swiper grid-banner-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <div class="grid-slide-img">
                                                <img src="{{get_image('public/storage/listing-images/'.$image)}}" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                            </div>
                            <p class="bt-status-badge">{{$wellness->is_popular}}</p>
                            <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark bt-grid-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7001 2.58337C12.1917 2.58337 10.8417 3.31671 10.0001 4.44171C9.15841 3.31671 7.80841 2.58337 6.30008 2.58337C3.74175 2.58337 1.66675 4.66671 1.66675 7.24171C1.66675 8.23337 1.82508 9.15004 2.10008 10C3.41675 14.1667 7.47508 16.6584 9.48341 17.3417C9.76675 17.4417 10.2334 17.4417 10.5167 17.3417C12.5251 16.6584 16.5834 14.1667 17.9001 10C18.1751 9.15004 18.3334 8.23337 18.3334 7.24171C18.3334 4.66671 16.2584 2.58337 13.7001 2.58337Z" fill="#FF736A"/>
                                </svg>                                             
                            </a>
                        </div>
                        <div class="beauty-grid-details2">
                            <div class="beautygrid-location-title mb-12px">
                                <div class="location d-flex mb-2">
                                    <img src="{{ asset('public/assets/frontend/images/icons/location-gray2-16.svg') }}" alt="">
                                    <p class="name">{{$cityName->name}}, {{$countryName->name}}</p>
                                </div>
                                <a href="#" class="bt-grid-title">{{$wellness->title}} </a>
                            </div>
                            <div class="beautygrid-rating-open d-flex align-items-center justify-content-between flex-wrap">
                                <div class="beauty-grid-ratings d-flex align-items-center">
                                    <p class="bt-grid-rating">4.8</p>
                                    <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="">
                                    <p class="bt-grid-reviews">1.5k</p>
                                </div>
                                <div class="beauty-grid-open d-flex align-items-center">
                                    @if ($isClosed || !$isWithinTimeRange)
                                    <img src="{{ asset('public/assets/frontend/images/icons/door-open-red.svg') }}" alt="">
                                    <p class="status close">{{get_phrase('Closed')}}</p>
                                @else
                                    <img src="{{ asset('public/assets/frontend/images/icons/door-open-green.svg') }}" alt="">
                                    <p class="status">{{get_phrase('Open')}}</p>
                                @endif
                                </div>
                            </div>
                            <div class="beauty-grid-btns d-flex align-items-center justify-content-between flex-wrap">
                                <a href="#" class="btn bt-btn-outline-secondary">{{get_phrase('Beauty Salon')}}</a>
                                <a href="#" class="bt-grid-viewlink">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.6499 9.33752H6.8999C6.5924 9.33752 6.3374 9.08252 6.3374 8.77502C6.3374 8.46752 6.5924 8.21252 6.8999 8.21252H10.6499C10.9574 8.21252 11.2124 8.46752 11.2124 8.77502C11.2124 9.08252 10.9574 9.33752 10.6499 9.33752Z" fill="#8A8A8A"/>
                                        <path d="M8.7749 11.2125C8.4674 11.2125 8.2124 10.9575 8.2124 10.65V6.90002C8.2124 6.59252 8.4674 6.33752 8.7749 6.33752C9.0824 6.33752 9.3374 6.59252 9.3374 6.90002V10.65C9.3374 10.9575 9.0824 11.2125 8.7749 11.2125Z" fill="#8A8A8A"/>
                                        <path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#8A8A8A"/>
                                        <path d="M16.5001 17.0625C16.3576 17.0625 16.2151 17.01 16.1026 16.8975L13.5003 14.2955C13.2828 14.078 13.2828 13.718 13.5003 13.5005C13.7178 13.283 14.0778 13.283 14.2953 13.5005L16.8976 16.1025C17.1151 16.32 17.1151 16.68 16.8976 16.8975C16.7851 17.01 16.6426 17.0625 16.5001 17.0625Z" fill="#8A8A8A"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
               

            </div>
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="text-center">
                        <a href="#" class="btn bt-btn-dark">{{get_phrase('View More')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Complete Wellness Area -->

    <!-- Start Discount Area -->
    <section>
        <div class="container">
            <div class="row mb-60px">
                <div class="col-12">
                    <div class="bt-bgimg-card w-100" style="background-image: url('{{ asset('public/uploads/homepage/beauty/'. $BeautyMotion->image) }}">
                        <p class="mb-12px text-center text-white eub-title-18px text-center">{{$BeautyMotion->title}}</p>
                        <h4 class="text-center text-white mb-1 ju-title-54px text-center">
                            <?php echo htmlspecialchars($word1 . ' ' . $word2 . ' ' . $word3); ?>
                        </h4>
                        <h2 class="text-center text-white mb-40px ju-title-90px text-center">
                            <?php echo htmlspecialchars($word4); ?>
                            <span class="fu-title-90px text-white"><?php echo htmlspecialchars($word5); ?></span>
                            <?php echo htmlspecialchars(' ' . $remainingWords); ?>
                        </h2>
                        <a href="#" class="btn bt-btn-white d-flex align-items-center gap-2 mx-auto">
                            <span>{{get_phrase('Booking Online')}}</span>
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5303 8.46975L12.2802 3.21975C12.1388 3.08313 11.9493 3.00754 11.7527 3.00924C11.5561 3.01095 11.3679 3.08983 11.2289 3.22889C11.0898 3.36794 11.011 3.55605 11.0092 3.7527C11.0075 3.94935 11.0831 4.1388 11.2198 4.28025L15.1895 8.25H2C1.80109 8.25 1.61032 8.32902 1.46967 8.46967C1.32902 8.61032 1.25 8.80109 1.25 9C1.25 9.19891 1.32902 9.38968 1.46967 9.53033C1.61032 9.67098 1.80109 9.75 2 9.75H15.1895L11.2198 13.7197C11.1481 13.7889 11.091 13.8717 11.0517 13.9632C11.0124 14.0547 10.9917 14.1531 10.9908 14.2527C10.9899 14.3523 11.0089 14.451 11.0466 14.5432C11.0843 14.6354 11.14 14.7191 11.2105 14.7895C11.2809 14.86 11.3646 14.9157 11.4568 14.9534C11.549 14.9911 11.6477 15.0101 11.7473 15.0092C11.8469 15.0083 11.9453 14.9876 12.0368 14.9483C12.1283 14.909 12.2111 14.8519 12.2802 14.7803L17.5303 9.53025C17.6709 9.3896 17.7498 9.19887 17.7498 9C17.7498 8.80113 17.6709 8.6104 17.5303 8.46975Z" fill="#0C0B0B"/>
                            </svg>
                        </a>
                        <span class="left-shadow"></span>
                        <span class="right-shadow"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Discount Area -->    
 
@endsection
