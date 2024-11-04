@extends('layouts.frontend')
@section('title', get_phrase('Hotel Home Page'))
@section('frontend_layout')

    <!-- Start Image Card Area -->
    <section>
        <div class="container">
            <div class="row g-4 mb-100px">
                <div class="col-md-6">
                    <div class="bg-img-card h-100" style="background-image: url(public/assets/frontend/images/hotel/bg-card-banner1.webp);">
                        <div class="d-flex flex-column justify-content-between h-100 max-w-415px">
                            <div class="mb-30px">
                                <h2 class="text-white mb-12px dm-title-30px">Exclusive Hotel Deals</h2>
                                <h3 class="text-white dm-title-26px">Just For You  -<span class="fw-bold">70%</span></h3>
                            </div>
                            <a href="#" class="btn ht-btn-primary2">Find Gateway Deals</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-img-card h-100" style="background-image: url(public/assets/frontend/images/hotel/bg-card-banner2.webp);">
                        <div class="d-flex flex-column justify-content-between h-100 max-w-415px">
                            <div class="mb-30px">
                                <h2 class="text-white mb-12px dm-title-30px">Seize the moment</h2>
                                <h4 class="text-white dm-title-20px">Save 15% or more when you book and stay before 1 October 2024</h4>
                            </div>
                            <a href="#" class="btn ht-btn-primary2">Explore Hotel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Image Card Area -->

    <!-- Start Grid Area -->
    <section>
        <div class="container">
                <div class="row g-4 mb-100px">
                <div class="col-sm-6 col-md-4 col-lg-3 order-1">
                    <div class="ht-grid-item max-sm-350px mx-auto mx-sm-0">
                        <p class="ht-grid-country-name">USA</p>
                        <img src="{{ asset('public/assets/frontend/images/hotel/country-banner1.webp') }}" alt="banner">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 order-2">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="ht-grid-item max-sm-350px mx-auto mx-sm-0">
                                <p class="ht-grid-country-name">Australia</p>
                                <img src="{{ asset('public/assets/frontend/images/hotel/country-banner2.webp') }}" alt="banner">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="ht-grid-item max-sm-350px mx-auto mx-sm-0">
                                <p class="ht-grid-country-name">Oman</p>
                                <img src="{{ asset('public/assets/frontend/images/hotel/country-banner5.webp') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8 col-lg-3 order-3 order-md-4 order-lg-3">
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="ht-grid-item max-sm-350px mx-auto mx-sm-0">
                                <p class="ht-grid-country-name">Thailand</p>
                                <img src="{{ asset('public/assets/frontend/images/hotel/country-banner3.webp') }}" alt="banner">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="ht-grid-item max-sm-350px mx-auto mx-sm-0">
                                <p class="ht-grid-country-name">England</p>
                                <img src="{{ asset('public/assets/frontend/images/hotel/country-banner6.webp') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 order-4 order-md-3 order-lg-4">
                    <div class="ht-grid-item max-sm-350px mx-auto mx-sm-0">
                        <p class="ht-grid-country-name">India</p>
                        <img src="{{ asset('public/assets/frontend/images/hotel/country-banner4.webp') }}" alt="banner">
                    </div>
                </div>
                </div>
        </div>
    </section>
    <!-- End Grid Area -->

    <!-- Start Top Hotels Area -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between flex-wrap column-gap-4 row-gap-2 mb-30px">
                        <h1 class="dm-title-36px">Top Hotels</h1>
                        <a href="#" class="ht-icontext-link d-flex align-items-center gap-1">
                            <span>See all</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.09171 4.40833C8.01361 4.4858 7.95161 4.57796 7.9093 4.67951C7.867 4.78106 7.84521 4.88998 7.84521 4.99999C7.84521 5.11 7.867 5.21893 7.9093 5.32047C7.95161 5.42202 8.01361 5.51419 8.09171 5.59166L11.9084 9.40833C11.9865 9.48579 12.0485 9.57796 12.0908 9.67951C12.1331 9.78106 12.1549 9.88998 12.1549 9.99999C12.1549 10.11 12.1331 10.2189 12.0908 10.3205C12.0485 10.422 11.9865 10.5142 11.9084 10.5917L8.09171 14.4083C8.01361 14.4858 7.95161 14.578 7.9093 14.6795C7.867 14.7811 7.84521 14.89 7.84521 15C7.84521 15.11 7.867 15.2189 7.9093 15.3205C7.95161 15.422 8.01361 15.5142 8.09171 15.5917C8.24785 15.7469 8.45906 15.834 8.67921 15.834C8.89937 15.834 9.11058 15.7469 9.26671 15.5917L13.0917 11.7667C13.5599 11.2979 13.8228 10.6625 13.8228 9.99999C13.8228 9.33749 13.5599 8.70208 13.0917 8.23333L9.26671 4.40833C9.11058 4.25312 8.89937 4.166 8.67921 4.166C8.45906 4.166 8.24785 4.25312 8.09171 4.40833Z" fill="#060F19"/>
                            </svg>                                
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-100px">
                @foreach($top_listings as $listing)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="ht-product-card-link"></a>
                        <div class="ht-product-card-banner">
                            @php
                                $images = json_decode($listing->image, true);
                            @endphp

                            @if(!empty($images))
                                <img src="{{ asset('storage/app/public/listing-images/' . $images[0]) }}" alt="Hotel Image">
                            @else
                                <img src="{{ asset('public/assets/frontend/images/hotel/hotel-blog-banner1.webp') }}" alt="banner">
                            @endif
                            <a href="javascript:void(0);" class="ht-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="ht-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="dm-title-18px">{{ ucfirst($listing->title) }}</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="icon">   
                                    <h4 class="in-text-16px">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="{{ asset('public/assets/frontend/images/icons/location-blue-16.svg') }}" alt="icon">
                                <p class="in-subtitle-14px">{{ $listing->cityToCity->name . ', ' .$listing->countryToCountry->name }}</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="ht-product-card-tags">
                                    @php
                                        if(isset($listing->feature) && is_array(json_decode($listing->feature))){
                                            $features = json_decode($listing->feature);
                                            foreach ($features as $key => $item) {
                                                $feature = App\Models\Amenities::where('id', $item)->first();
                                                if ($key < 2) {
                                                echo "<li>".$feature->name."</li>";
                                                }
                                            }
                                            $more_amenities = count(json_decode($listing->feature));
                                            if($more_amenities > 4){
                                                echo "<li class='more'>+".($more_amenities-4).' '.get_phrase('More')."</li>";
                                            }
                                        }
                                    @endphp
                                </ul>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn ht-btn-primary2 position-relative z-1 py-2">See Details</a>
                                <h3 class="ht-product-card-price d-flex align-items-center align-items-end">
                                    {{ currency($listing->price) }}
                                    <span>/ {{ get_phrase('night') }}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Top Hotels Area -->

    <!-- End Hotels Count Area -->
    <section>
        <div class="container">
            <div class="row g-4 mb-100px">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-count max-md-400px mx-auto mx-md-0">
                        <img src="{{ asset('public/assets/frontend/images/hotel/hotel-count-banner1.webp') }}" alt="banner">
                        <div class="ht-product-count-content">
                            <h4 class="mb-10px dm-title-20px text-white lh-1">California</h4>
                            <p class="in-subtitle-14px text-white lh-1">40 Hotels</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-count max-md-400px mx-auto mx-md-0">
                        <img src="{{ asset('public/assets/frontend/images/hotel/hotel-count-banner2.webp') }}" alt="banner">
                        <div class="ht-product-count-content">
                            <h4 class="mb-10px dm-title-20px text-white lh-1">Chicago</h4>
                            <p class="in-subtitle-14px text-white lh-1">35 Hotels</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-count max-md-400px mx-auto mx-md-0">
                        <img src="{{ asset('public/assets/frontend/images/hotel/hotel-count-banner3.webp') }}" alt="banner">
                        <div class="ht-product-count-content">
                            <h4 class="mb-10px dm-title-20px text-white lh-1">Detroit</h4>
                            <p class="in-subtitle-14px text-white lh-1">21 Hotels</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-count max-md-400px mx-auto mx-md-0">
                        <img src="{{ asset('public/assets/frontend/images/hotel/hotel-count-banner4.webp') }}" alt="banner">
                        <div class="ht-product-count-content">
                            <h4 class="mb-10px dm-title-20px text-white lh-1">Oklahoma City</h4>
                            <p class="in-subtitle-14px text-white lh-1">21 Hotels</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hotels Count Area -->

    <!-- Start Hotels In New York Area -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between flex-wrap column-gap-4 row-gap-2 mb-30px">
                        <h1 class="dm-title-36px">Hotels In New York</h1>
                        <a href="#" class="ht-icontext-link d-flex align-items-center gap-1">
                            <span>See all</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.09171 4.40833C8.01361 4.4858 7.95161 4.57796 7.9093 4.67951C7.867 4.78106 7.84521 4.88998 7.84521 4.99999C7.84521 5.11 7.867 5.21893 7.9093 5.32047C7.95161 5.42202 8.01361 5.51419 8.09171 5.59166L11.9084 9.40833C11.9865 9.48579 12.0485 9.57796 12.0908 9.67951C12.1331 9.78106 12.1549 9.88998 12.1549 9.99999C12.1549 10.11 12.1331 10.2189 12.0908 10.3205C12.0485 10.422 11.9865 10.5142 11.9084 10.5917L8.09171 14.4083C8.01361 14.4858 7.95161 14.578 7.9093 14.6795C7.867 14.7811 7.84521 14.89 7.84521 15C7.84521 15.11 7.867 15.2189 7.9093 15.3205C7.95161 15.422 8.01361 15.5142 8.09171 15.5917C8.24785 15.7469 8.45906 15.834 8.67921 15.834C8.89937 15.834 9.11058 15.7469 9.26671 15.5917L13.0917 11.7667C13.5599 11.2979 13.8228 10.6625 13.8228 9.99999C13.8228 9.33749 13.5599 8.70208 13.0917 8.23333L9.26671 4.40833C9.11058 4.25312 8.89937 4.166 8.67921 4.166C8.45906 4.166 8.24785 4.25312 8.09171 4.40833Z" fill="#060F19"/>
                            </svg>                                
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-100px">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="ht-product-card-link"></a>
                        <div class="ht-product-card-banner">
                            <img src="{{ asset('public/assets/frontend/images/hotel/hotel-blog-banner1.webp') }}" alt="banner">
                            <a href="javascript:void(0);" class="ht-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="ht-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="dm-title-18px">Ulysses S. Grant</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="icon">   
                                    <h4 class="in-text-16px">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="{{ asset('public/assets/frontend/images/icons/location-blue-16.svg') }}" alt="icon">
                                <p class="in-subtitle-14px">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="ht-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="ht-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn ht-btn-primary2 position-relative z-1 py-2">See Details</a>
                                <h3 class="ht-product-card-price d-flex align-items-center align-items-end">$59 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="ht-product-card-link"></a>
                        <div class="ht-product-card-banner">
                            <img src="{{ asset('public/assets/frontend/images/hotel/hotel-blog-banner2.webp') }}" alt="banner">
                            <a href="javascript:void(0);" class="ht-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="ht-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="dm-title-18px">Grand Palace Hotel</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="icon">   
                                    <h4 class="in-text-16px">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="{{ asset('public/assets/frontend/images/icons/location-blue-16.svg') }}" alt="icon">
                                <p class="in-subtitle-14px">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="ht-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="ht-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn ht-btn-primary2 position-relative z-1 py-2">See Details</a>
                                <h3 class="ht-product-card-price d-flex align-items-center align-items-end">$59 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="ht-product-card-link"></a>
                        <div class="ht-product-card-banner">
                            <img src="{{ asset('public/assets/frontend/images/hotel/hotel-blog-banner3.webp') }}" alt="banner">
                            <a href="javascript:void(0);" class="ht-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="ht-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="dm-title-18px">Ulysses S. Grant</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="icon">   
                                    <h4 class="in-text-16px">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="{{ asset('public/assets/frontend/images/icons/location-blue-16.svg') }}" alt="icon">
                                <p class="in-subtitle-14px">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="ht-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="ht-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn ht-btn-primary2 position-relative z-1 py-2">See Details</a>
                                <h3 class="ht-product-card-price d-flex align-items-center align-items-end">$59 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="ht-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="ht-product-card-link"></a>
                        <div class="ht-product-card-banner">
                            <img src="{{ asset('public/assets/frontend/images/hotel/hotel-blog-banner4.webp') }}" alt="banner">
                            <a href="javascript:void(0);" class="ht-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="ht-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="dm-title-18px">Stradivarius</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="{{ asset('public/assets/frontend/images/icons/star-yellow-20.svg') }}" alt="icon">   
                                    <h4 class="in-text-16px">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="{{ asset('public/assets/frontend/images/icons/location-blue-16.svg') }}" alt="icon">
                                <p class="in-subtitle-14px">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="ht-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="ht-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn ht-btn-primary2 position-relative z-1 py-2">See Details</a>
                                <h3 class="ht-product-card-price d-flex align-items-center align-items-end">$59 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hotels In New York Area -->

    <!-- Start Book A Room Area -->
    <section>
        <div class="container">
            <div class="row justify-content-center mb-100px">
                <div class="col-xl-10">
                    <div class="bg-img-card2">
                        <h1 class="dm-title-36px mb-26px text-white">Book a room today</h1>
                        <ul class="mb-30px d-flex align-items-center flex-wrap gap-3">
                            <li class="d-flex align-items-center gap-2">
                                <img src="{{ asset('public/assets/frontend/images/icons/check-yellow-18.svg') }}" alt="icon">
                                <span class="in-title-18px text-white">Flexible budget</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="{{ asset('public/assets/frontend/images/icons/check-yellow-18.svg') }}" alt="icon">
                                <span class="in-title-18px text-white">Peaceful place</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="{{ asset('public/assets/frontend/images/icons/check-yellow-18.svg') }}" alt="icon">
                                <span class="in-title-18px text-white">Well decorated</span>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center gap-14px flex-wrap">
                            <a href="#" class="btn ht-btn-primary2">Get Started</a>
                            <a href="#" class="btn ht-btn-white">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Book A Room Area -->


    <!-- Video Popup Modal Area Start -->
    <div class="modal fade at-video-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="in-title-4" id="exampleModalLabel">Video title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ht-video-wrap">
                    <div class="plyr__video-embed at-video-player" id="player2">
                        <iframe src="https://www.youtube.com/embed/5YHAVhEJ9TM?si=GrmhAZyUahBciHUm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Video Popup Modal Area End -->

@endsection