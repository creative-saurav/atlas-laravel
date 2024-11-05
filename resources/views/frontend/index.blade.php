@extends('layouts.frontend')
@section('title', get_phrase('Home Page'))
@section('frontend_layout')
    <div class="header-banner-wrap">
        <!-- Banner slider -->
        <div class="swiper banner-slider">
            <div class="swiper-wrapper">
                @php
                $homeBanner = json_decode(get_frontend_settings('mother_homepage_banner'), true);
               @endphp
            
            @if(!empty($homeBanner) && is_array($homeBanner))
                @foreach($homeBanner as $banner)
                    <div class="swiper-slide">
                        <div class="banner-slider-wrap" style="background-image: url('{{ asset('public/uploads/mother_homepage_banner/' . $banner['image']) }}');">
                            <div class="banner-slider-content">
                                <h1 class="mb-3 lg-title-78px text-white text-capitalize text-center">{{ $banner['title'] }}</h1>
                                <p class="in-subtitle-16px text-white text-center max-w-621px mx-auto">{{ $banner['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                {{-- Fallback design when no banners are available
                <div class="swiper-slide">
                    <div class="banner-slider-wrap" style="background-image: url('{{ asset('public/assets/frontend/images/home/home-banner1.webp') }}');">
                        <div class="banner-slider-content">
                            <h1 class="mb-3 lg-title-78px text-white text-capitalize text-center">Your Default Banner Title</h1>
                            <p class="in-subtitle-16px text-white text-center max-w-621px mx-auto">Default banner description goes here.</p>
                        </div>
                    </div>
                </div> --}}
            @endif
            
              </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Start Search Filter Area -->
    <section class="atn-search-filter-section mb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="atn-search-filter-wrap">
                        <ul class="nav nav-pills atn-search-nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link atn-search-nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5622 17.0624H6.56218C3.09718 17.0624 2.45218 15.4499 2.28718 13.8824L1.72468 7.87495C1.64218 7.08745 1.61968 5.92495 2.39968 5.05495C3.07468 4.30495 4.19218 3.94495 5.81218 3.94495H13.3122C14.9397 3.94495 16.0572 4.31245 16.7247 5.05495C17.5047 5.92495 17.4822 7.08745 17.3997 7.88245L16.8372 13.8749C16.6722 15.4499 16.0272 17.0624 12.5622 17.0624ZM5.81218 5.06245C4.54468 5.06245 3.67468 5.30995 3.23218 5.80495C2.86468 6.20995 2.74468 6.83245 2.84218 7.76245L3.40468 13.7699C3.53218 14.9549 3.85468 15.9374 6.56218 15.9374H12.5622C15.2622 15.9374 15.5922 14.9549 15.7197 13.7624L16.2822 7.76995C16.3797 6.83245 16.2597 6.20995 15.8922 5.80495C15.4497 5.30995 14.5797 5.06245 13.3122 5.06245H5.81218Z" fill="#7E7E89"/>
                                    <path d="M12.5625 5.0625C12.255 5.0625 12 4.8075 12 4.5V3.9C12 2.565 12 2.0625 10.1625 2.0625H8.9625C7.125 2.0625 7.125 2.565 7.125 3.9V4.5C7.125 4.8075 6.87 5.0625 6.5625 5.0625C6.255 5.0625 6 4.8075 6 4.5V3.9C6 2.58 6 0.9375 8.9625 0.9375H10.1625C13.125 0.9375 13.125 2.58 13.125 3.9V4.5C13.125 4.8075 12.87 5.0625 12.5625 5.0625Z" fill="#7E7E89"/>
                                    <path d="M9.5625 12.5625C7.5 12.5625 7.5 11.2875 7.5 10.5225V9.75C7.5 8.6925 7.755 8.4375 8.8125 8.4375H10.3125C11.37 8.4375 11.625 8.6925 11.625 9.75V10.5C11.625 11.28 11.625 12.5625 9.5625 12.5625ZM8.625 9.5625C8.625 9.6225 8.625 9.69 8.625 9.75V10.5225C8.625 11.295 8.625 11.4375 9.5625 11.4375C10.5 11.4375 10.5 11.3175 10.5 10.515V9.75C10.5 9.69 10.5 9.6225 10.5 9.5625C10.44 9.5625 10.3725 9.5625 10.3125 9.5625H8.8125C8.7525 9.5625 8.685 9.5625 8.625 9.5625Z" fill="#7E7E89"/>
                                    <path d="M11.0631 11.0776C10.7856 11.0776 10.5381 10.8676 10.5081 10.5826C10.4706 10.2751 10.6881 9.99006 10.9956 9.95256C12.9756 9.70506 14.8731 8.95506 16.4706 7.79256C16.7181 7.60506 17.0706 7.66506 17.2581 7.92006C17.4381 8.16756 17.3856 8.52006 17.1306 8.70756C15.3756 9.98256 13.3056 10.8001 11.1306 11.0776C11.1081 11.0776 11.0856 11.0776 11.0631 11.0776Z" fill="#7E7E89"/>
                                    <path d="M8.06207 11.085C8.03957 11.085 8.01707 11.085 7.99457 11.085C5.93957 10.8525 3.93707 10.1025 2.20457 8.91755C1.94957 8.74505 1.88207 8.39255 2.05457 8.13755C2.22707 7.88255 2.57957 7.81505 2.83457 7.98755C4.41707 9.06755 6.23957 9.75005 8.11457 9.96755C8.42207 10.005 8.64707 10.2825 8.60957 10.59C8.58707 10.875 8.34707 11.085 8.06207 11.085Z" fill="#7E7E89"/>
                                </svg>
                                <span>Hotel</span>                                    
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link atn-search-nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.7891 17.0625H4.28906C1.47656 17.0625 1.47656 15.5025 1.47656 14.25V13.5C1.47656 12.78 2.06906 12.1875 2.78906 12.1875H16.2891C17.0091 12.1875 17.6016 12.78 17.6016 13.5V14.25C17.6016 15.5025 17.6016 17.0625 14.7891 17.0625ZM2.78906 13.3125C2.68406 13.3125 2.60156 13.395 2.60156 13.5V14.25C2.60156 15.48 2.60156 15.9375 4.28906 15.9375H14.7891C16.4766 15.9375 16.4766 15.48 16.4766 14.25V13.5C16.4766 13.395 16.3941 13.3125 16.2891 13.3125H2.78906Z" fill="#7E7E89"/>
                                    <path d="M16.1031 13.3125H3.01562C2.70812 13.3125 2.45312 13.0575 2.45312 12.75V9.75C2.45312 6.675 4.63563 3.975 7.63563 3.3375C8.07812 3.24 8.54313 3.1875 9.01562 3.1875H10.1031C10.5831 3.1875 11.0481 3.24 11.4906 3.3375C14.4906 3.9825 16.6656 6.6825 16.6656 9.75V12.75C16.6656 13.0575 16.4181 13.3125 16.1031 13.3125ZM3.57812 12.1875H15.5406V9.75C15.5406 7.2075 13.7406 4.9725 11.2506 4.4325C10.8831 4.35 10.5006 4.3125 10.1031 4.3125H9.01562C8.62563 4.3125 8.24312 4.35 7.87563 4.4325C5.38563 4.965 3.57812 7.2 3.57812 9.75V12.1875Z" fill="#7E7E89"/>
                                    <path d="M7.755 4.4475C7.5075 4.4475 7.2825 4.2825 7.215 4.035C7.155 3.8175 7.125 3.6 7.125 3.375C7.125 2.0325 8.22 0.9375 9.5625 0.9375C10.905 0.9375 12 2.0325 12 3.375C12 3.6 11.97 3.8175 11.91 4.035C11.835 4.32 11.55 4.5 11.25 4.4325C10.8825 4.35 10.5 4.3125 10.1025 4.3125H9.015C8.625 4.3125 8.2425 4.35 7.875 4.4325C7.8375 4.44 7.8 4.4475 7.755 4.4475ZM9.015 3.1875H10.1025C10.3575 3.1875 10.62 3.2025 10.8675 3.2325C10.8 2.5725 10.2375 2.0625 9.5625 2.0625C8.8875 2.0625 8.3325 2.5725 8.2575 3.2325C8.5125 3.2025 8.76 3.1875 9.015 3.1875Z" fill="#7E7E89"/>
                                </svg>
                                <span>Restaurant</span>    
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link atn-search-nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">
                                <svg class="mt-1px" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.5625 16.2375C9.33 16.2375 9.105 16.2075 8.9175 16.14C6.0525 15.1575 1.5 11.67 1.5 6.51745C1.5 3.89245 3.6225 1.76245 6.2325 1.76245C7.5 1.76245 8.685 2.25745 9.5625 3.14245C10.44 2.25745 11.625 1.76245 12.8925 1.76245C15.5025 1.76245 17.625 3.89995 17.625 6.51745C17.625 11.6775 13.0725 15.1575 10.2075 16.14C10.02 16.2075 9.795 16.2375 9.5625 16.2375ZM6.2325 2.88745C4.245 2.88745 2.625 4.51495 2.625 6.51745C2.625 11.64 7.5525 14.49 9.285 15.0825C9.42 15.1275 9.7125 15.1275 9.8475 15.0825C11.5725 14.49 16.5075 11.6475 16.5075 6.51745C16.5075 4.51495 14.8875 2.88745 12.9 2.88745C11.76 2.88745 10.7025 3.41995 10.02 4.34245C9.81 4.62745 9.33 4.62745 9.12 4.34245C8.4225 3.41245 7.3725 2.88745 6.2325 2.88745Z" fill="#7E7E89"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.9917 6.42857C9.9917 6.19188 9.79982 6 9.56313 6C9.32643 6 9.13456 6.19188 9.13456 6.42857V8.57142L6.99107 8.57141C6.75438 8.57141 6.5625 8.76329 6.5625 8.99999C6.5625 9.23668 6.75438 9.42856 6.99107 9.42856L9.13456 9.42856V11.5714C9.13456 11.8081 9.32643 12 9.56313 12C9.79982 12 9.9917 11.8081 9.9917 11.5714V9.42856L12.1339 9.42856C12.3706 9.42856 12.5625 9.23668 12.5625 8.99999C12.5625 8.76329 12.3706 8.57142 12.1339 8.57142L9.9917 8.57142V6.42857Z" fill="#7E7E89"/>
                                </svg>
                                <span>Doctor</span>    
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link atn-search-nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5625 8.81256H3.56251C3.39001 8.81256 3.23251 8.73756 3.12751 8.60256C3.02251 8.47506 2.97751 8.29506 3.01501 8.13006L3.86251 4.08006C4.14001 2.76756 4.70251 1.56006 6.93001 1.56006H12.2025C14.43 1.56006 14.9925 2.77506 15.27 4.08006L16.1175 8.13756C16.155 8.30256 16.11 8.47506 16.005 8.61006C15.8925 8.73756 15.735 8.81256 15.5625 8.81256ZM4.25251 7.68756H14.865L14.16 4.31256C13.95 3.33006 13.7025 2.68506 12.195 2.68506H6.93001C5.42251 2.68506 5.17501 3.33006 4.96501 4.31256L4.25251 7.68756Z" fill="#7E7E89"/>
                                    <path d="M15.5317 17.0625H14.1217C12.9067 17.0625 12.6742 16.365 12.5242 15.9075L12.3742 15.4575C12.1792 14.8875 12.1567 14.8125 11.4817 14.8125H7.64171C6.96671 14.8125 6.92171 14.94 6.74921 15.4575L6.59921 15.9075C6.44171 16.3725 6.21671 17.0625 5.00171 17.0625H3.59171C2.99921 17.0625 2.42921 16.815 2.03171 16.38C1.64171 15.9525 1.45421 15.3825 1.50671 14.8125L1.92671 10.245C2.03921 9.0075 2.36921 7.6875 4.77671 7.6875H14.3467C16.7542 7.6875 17.0767 9.0075 17.1967 10.245L17.6167 14.8125C17.6692 15.3825 17.4817 15.9525 17.0917 16.38C16.6942 16.815 16.1242 17.0625 15.5317 17.0625ZM7.64171 13.6875H11.4817C12.8467 13.6875 13.1692 14.295 13.4392 15.09L13.5967 15.555C13.7242 15.9375 13.7242 15.945 14.1292 15.945H15.5392C15.8167 15.945 16.0792 15.8325 16.2667 15.63C16.4467 15.435 16.5292 15.1875 16.5067 14.925L16.0867 10.3575C15.9892 9.345 15.8692 8.82 14.3617 8.82H4.77671C3.26171 8.82 3.14171 9.345 3.05171 10.3575L2.63171 14.925C2.60921 15.1875 2.69171 15.435 2.87171 15.63C3.05171 15.8325 3.32171 15.945 3.59921 15.945H5.00921C5.41421 15.945 5.41421 15.9375 5.54171 15.5625L5.69171 15.105C5.87921 14.505 6.15671 13.6875 7.64171 13.6875Z" fill="#7E7E89"/>
                                    <path d="M3.5625 6.5625H2.8125C2.505 6.5625 2.25 6.3075 2.25 6C2.25 5.6925 2.505 5.4375 2.8125 5.4375H3.5625C3.87 5.4375 4.125 5.6925 4.125 6C4.125 6.3075 3.87 6.5625 3.5625 6.5625Z" fill="#7E7E89"/>
                                    <path d="M16.3125 6.5625H15.5625C15.255 6.5625 15 6.3075 15 6C15 5.6925 15.255 5.4375 15.5625 5.4375H16.3125C16.62 5.4375 16.875 5.6925 16.875 6C16.875 6.3075 16.62 6.5625 16.3125 6.5625Z" fill="#7E7E89"/>
                                    <path d="M9.5625 4.3125C9.255 4.3125 9 4.0575 9 3.75V2.25C9 1.9425 9.255 1.6875 9.5625 1.6875C9.87 1.6875 10.125 1.9425 10.125 2.25V3.75C10.125 4.0575 9.87 4.3125 9.5625 4.3125Z" fill="#7E7E89"/>
                                    <path d="M10.6875 4.3125H8.4375C8.13 4.3125 7.875 4.0575 7.875 3.75C7.875 3.4425 8.13 3.1875 8.4375 3.1875H10.6875C10.995 3.1875 11.25 3.4425 11.25 3.75C11.25 4.0575 10.995 4.3125 10.6875 4.3125Z" fill="#7E7E89"/>
                                    <path d="M7.3125 11.8125H5.0625C4.755 11.8125 4.5 11.5575 4.5 11.25C4.5 10.9425 4.755 10.6875 5.0625 10.6875H7.3125C7.62 10.6875 7.875 10.9425 7.875 11.25C7.875 11.5575 7.62 11.8125 7.3125 11.8125Z" fill="#7E7E89"/>
                                    <path d="M14.0625 11.8125H11.8125C11.505 11.8125 11.25 11.5575 11.25 11.25C11.25 10.9425 11.505 10.6875 11.8125 10.6875H14.0625C14.37 10.6875 14.625 10.9425 14.625 11.25C14.625 11.5575 14.37 11.8125 14.0625 11.8125Z" fill="#7E7E89"/>
                                </svg>
                                <span>Car</span>    
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link atn-search-nav-link" id="pills-five-tab" data-bs-toggle="pill" data-bs-target="#pills-five" type="button" role="tab" aria-controls="pills-five" aria-selected="false">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.3125 17.0625H4.3125C2.4975 17.0625 1.5 16.065 1.5 14.25V8.25C1.5 6.435 2.4975 5.4375 4.3125 5.4375H8.0625C8.37 5.4375 8.625 5.6925 8.625 6V14.25C8.625 15.435 9.1275 15.9375 10.3125 15.9375C10.62 15.9375 10.875 16.1925 10.875 16.5C10.875 16.8075 10.62 17.0625 10.3125 17.0625ZM4.3125 6.5625C3.1275 6.5625 2.625 7.065 2.625 8.25V14.25C2.625 15.435 3.1275 15.9375 4.3125 15.9375H7.91249C7.64249 15.495 7.5 14.9325 7.5 14.25V6.5625H4.3125Z" fill="#7E7E89"/>
                                    <path d="M8.0625 6.5625H4.3125C4.005 6.5625 3.75 6.3075 3.75 6V4.5C3.75 3.36 4.6725 2.4375 5.8125 2.4375H8.14499C8.31749 2.4375 8.48251 2.51998 8.58751 2.65498C8.69251 2.79748 8.72999 2.9775 8.68499 3.1425C8.63999 3.3075 8.625 3.495 8.625 3.75V6C8.625 6.3075 8.37 6.5625 8.0625 6.5625ZM4.875 5.4375H7.5V3.75C7.5 3.6825 7.5 3.6225 7.5 3.5625H5.8125C5.295 3.5625 4.875 3.9825 4.875 4.5V5.4375Z" fill="#7E7E89"/>
                                    <path d="M11.0625 10.3125C10.755 10.3125 10.5 10.0575 10.5 9.75V6C10.5 5.6925 10.755 5.4375 11.0625 5.4375C11.37 5.4375 11.625 5.6925 11.625 6V9.75C11.625 10.0575 11.37 10.3125 11.0625 10.3125Z" fill="#7E7E89"/>
                                    <path d="M14.0625 10.3125C13.755 10.3125 13.5 10.0575 13.5 9.75V6C13.5 5.6925 13.755 5.4375 14.0625 5.4375C14.37 5.4375 14.625 5.6925 14.625 6V9.75C14.625 10.0575 14.37 10.3125 14.0625 10.3125Z" fill="#7E7E89"/>
                                    <path d="M14.0625 17.0625H11.0625C10.755 17.0625 10.5 16.8075 10.5 16.5V13.5C10.5 12.78 11.0925 12.1875 11.8125 12.1875H13.3125C14.0325 12.1875 14.625 12.78 14.625 13.5V16.5C14.625 16.8075 14.37 17.0625 14.0625 17.0625ZM11.625 15.9375H13.5V13.5C13.5 13.395 13.4175 13.3125 13.3125 13.3125H11.8125C11.7075 13.3125 11.625 13.395 11.625 13.5V15.9375Z" fill="#7E7E89"/>
                                    <path d="M5.0625 13.3125C4.755 13.3125 4.5 13.0575 4.5 12.75V9.75C4.5 9.4425 4.755 9.1875 5.0625 9.1875C5.37 9.1875 5.625 9.4425 5.625 9.75V12.75C5.625 13.0575 5.37 13.3125 5.0625 13.3125Z" fill="#7E7E89"/>
                                    <path d="M14.8125 17.0625H10.3125C8.4975 17.0625 7.5 16.065 7.5 14.25V3.75C7.5 1.935 8.4975 0.9375 10.3125 0.9375H14.8125C16.6275 0.9375 17.625 1.935 17.625 3.75V14.25C17.625 16.065 16.6275 17.0625 14.8125 17.0625ZM10.3125 2.0625C9.1275 2.0625 8.625 2.565 8.625 3.75V14.25C8.625 15.435 9.1275 15.9375 10.3125 15.9375H14.8125C15.9975 15.9375 16.5 15.435 16.5 14.25V3.75C16.5 2.565 15.9975 2.0625 14.8125 2.0625H10.3125Z" fill="#7E7E89"/>
                                </svg>
                                <span>Real Estate</span>    
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link atn-search-nav-link" id="pills-six-tab" data-bs-toggle="pill" data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six" aria-selected="false">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.31266 16.4025C3.75766 16.4025 3.21016 16.1925 2.79016 15.7725C2.38516 15.3675 2.16016 14.8275 2.16016 14.25C2.16016 13.6725 2.38516 13.1325 2.79016 12.7275L12.5402 2.97753C13.3802 2.13753 14.7452 2.13753 15.5852 2.97753C15.9902 3.38253 16.2152 3.92253 16.2152 4.50003C16.2152 5.07753 15.9902 5.61753 15.5852 6.02253L5.83516 15.7725C5.41516 16.1925 4.86766 16.4025 4.31266 16.4025ZM14.0627 3.47253C13.8002 3.47253 13.5377 3.57003 13.3352 3.77253L3.58516 13.5225C3.39016 13.7175 3.28516 13.9725 3.28516 14.25C3.28516 14.5275 3.39016 14.7825 3.58516 14.9775C3.98266 15.375 4.64266 15.375 5.04016 14.9775L14.7902 5.22753C14.9852 5.03253 15.0902 4.77753 15.0902 4.50003C15.0902 4.22253 14.9852 3.96753 14.7902 3.77253C14.5877 3.57003 14.3252 3.47253 14.0627 3.47253Z" fill="#7E7E89"/>
                                    <path d="M14.0704 7.30501C13.9279 7.30501 13.7854 7.25251 13.6729 7.14001L11.4229 4.89001C11.2054 4.67251 11.2054 4.31251 11.4229 4.09501C11.6404 3.87751 12.0004 3.87751 12.2179 4.09501L14.4679 6.34501C14.6854 6.56251 14.6854 6.92251 14.4679 7.14001C14.3554 7.25251 14.2129 7.30501 14.0704 7.30501Z" fill="#7E7E89"/>
                                    <path d="M8.06181 4.12504C8.02431 4.12504 7.99431 4.11754 7.95681 4.11004L6.93681 3.81004L5.91681 4.11004C5.78181 4.14754 5.63931 4.11004 5.54931 4.01254C5.45181 3.91504 5.41431 3.78004 5.45181 3.64504L5.75181 2.62504L5.45181 1.60504C5.41431 1.47004 5.45181 1.32754 5.54931 1.23754C5.64681 1.14004 5.78931 1.10254 5.91681 1.14004L6.93681 1.44004L7.95681 1.14004C8.09181 1.10254 8.22681 1.14004 8.32431 1.23754C8.42181 1.33504 8.45931 1.47754 8.42181 1.60504L8.12181 2.62504L8.42181 3.64504C8.45931 3.78004 8.42181 3.92254 8.32431 4.01254C8.25681 4.08754 8.15931 4.12504 8.06181 4.12504ZM6.93681 3.04504C6.97431 3.04504 7.00431 3.05254 7.04181 3.06004L7.50681 3.19504L7.37181 2.73004C7.34931 2.66254 7.34931 2.58754 7.37181 2.52004L7.50681 2.05504L7.04181 2.19004C6.97431 2.21254 6.89931 2.21254 6.83181 2.19004L6.36681 2.05504L6.50181 2.52004C6.52431 2.58754 6.52431 2.66254 6.50181 2.73004L6.36681 3.19504L6.83181 3.06004C6.86931 3.05254 6.89931 3.04504 6.93681 3.04504Z" fill="#7E7E89"/>
                                    <path d="M5.06181 8.62504C5.02431 8.62504 4.99431 8.61754 4.95681 8.61004L3.93681 8.31004L2.91681 8.61004C2.78181 8.64754 2.64681 8.61004 2.54931 8.51254C2.45181 8.41504 2.41431 8.27254 2.45181 8.14504L2.75181 7.12504L2.45181 6.10504C2.41431 5.97004 2.45181 5.82754 2.54931 5.73754C2.64681 5.64754 2.78931 5.60254 2.91681 5.64004L3.93681 5.94004L4.95681 5.64004C5.08431 5.60254 5.22681 5.64004 5.32431 5.73754C5.42181 5.83504 5.45931 5.97754 5.42181 6.10504L5.12181 7.12504L5.42181 8.14504C5.45931 8.28004 5.42181 8.42254 5.32431 8.51254C5.25681 8.58754 5.15931 8.62504 5.06181 8.62504ZM3.93681 7.54504C3.97431 7.54504 4.00431 7.55254 4.04181 7.56004L4.50681 7.69504L4.37181 7.23004C4.34931 7.16254 4.34931 7.08754 4.37181 7.02004L4.50681 6.55504L4.04181 6.69004C3.97431 6.71254 3.89931 6.71254 3.83181 6.69004L3.36681 6.55504L3.50181 7.02004C3.52431 7.08754 3.52431 7.16254 3.50181 7.23004L3.36681 7.69504L3.83181 7.56004C3.86931 7.55254 3.89931 7.54504 3.93681 7.54504Z" fill="#7E7E89"/>
                                    <path d="M16.3118 12.375C16.2743 12.375 16.2443 12.3675 16.2068 12.36L15.1868 12.06L14.1668 12.36C14.0318 12.3975 13.8968 12.36 13.7993 12.2625C13.7018 12.165 13.6643 12.0225 13.7018 11.895L14.0018 10.875L13.7018 9.85504C13.6643 9.72004 13.7018 9.57754 13.7993 9.48754C13.8968 9.39754 14.0393 9.35254 14.1668 9.39004L15.1868 9.69004L16.2068 9.39004C16.3343 9.35254 16.4768 9.39004 16.5743 9.48754C16.6718 9.58504 16.7093 9.72754 16.6718 9.85504L16.3718 10.875L16.6718 11.895C16.7093 12.03 16.6718 12.1725 16.5743 12.2625C16.5068 12.3375 16.4093 12.375 16.3118 12.375ZM15.1868 11.295C15.2243 11.295 15.2543 11.3025 15.2918 11.31L15.7568 11.445L15.6218 10.98C15.5993 10.9125 15.5993 10.8375 15.6218 10.77L15.7568 10.305L15.2918 10.44C15.2243 10.4625 15.1493 10.4625 15.0818 10.44L14.6168 10.305L14.7518 10.77C14.7743 10.8375 14.7743 10.9125 14.7518 10.98L14.6168 11.445L15.0818 11.31C15.1193 11.3025 15.1493 11.295 15.1868 11.295Z" fill="#7E7E89"/>
                                </svg>
                                <span>Beauty</span>    
                              </button>
                            </li>
                        </ul>
                        <div class="tab-content atn-search-tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">
                                <form action="">
                                    <div class="atn-search-content">
                                        <div class="atn-single-search-item">
                                            <label class="mb-2 atn-search-filter-label">Location</label>
                                            <select class="at-nice-select transparent2-nice-select mh-filter-select">
                                                <option data-display="Choose Category">Nothing</option>
                                                <option value="1">Some option</option>
                                                <option value="2">Another option</option>
                                                <option value="4">Potato</option>
                                            </select>
                                        </div>
                                        <div class="atn-single-search-item">
                                            <label class="mb-2 atn-search-filter-label">Unite Type</label>
                                            <select class="at-nice-select transparent2-nice-select mh-filter-select">
                                                <option data-display="House">Nothing</option>
                                                <option value="1">Some option</option>
                                                <option value="2">Another option</option>
                                                <option value="4">Potato</option>
                                            </select>
                                        </div>
                                        <div class="atn-single-search-item">
                                            <label class="mb-2 atn-search-filter-label">Pricing Range</label>
                                            <select class="at-nice-select transparent2-nice-select mh-filter-select">
                                                <option data-display="Price">Nothing</option>
                                                <option value="1">Some option</option>
                                                <option value="2">Another option</option>
                                                <option value="4">Potato</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn at-btn-purple">
                                            <img src="assets/images/icons/search-white-20.svg" alt="icon">
                                            <span>Search</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-six" role="tabpanel" aria-labelledby="pills-six-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Search Filter Area -->


    <!-- Start Top Categoris Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <h1 class="in-title-36px text-center text-capitalize lh-1">{{get_phrase('Browse Top Categories.')}}</h1>
                </div>
            </div>
            <div class="row g-12px mb-100px row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6">
            
                <div class="col">
                    <a href="#" class="mh-category-link">
                        <div class="mh-single-category">
                            <img class="banner" src="{{ asset('public/uploads/category_type/' . get_frontend_settings('hotel'))}}" alt="">
                            <div class="mh-category-content">
                                <div class="white-iconbox-radio mb-12px mx-auto">
                                    <img src="{{asset('public/assets/frontend/images/icons/briefcase-purple-28.svg')}}" alt="">
                                </div>
                                <h4 class="text-white text-center mb-2 in-title-18px fw-semibold">{{get_phrase('Hotel')}}</h4>
                                <p class="text-center text-white in-subtitle-14px fw-medium lh-1">{{count($hotelListing)}} {{get_phrase('Listing')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="mh-category-link">
                        <div class="mh-single-category">
                            <img class="banner" src="{{ asset('public/uploads/category_type/' . get_frontend_settings('restaurent'))}}" alt="">
                            <div class="mh-category-content">
                                <div class="white-iconbox-radio mb-12px mx-auto">
                                    <img src="{{asset('public/assets/frontend/images/icons/bell-purple-28.svg')}}" alt="">
                                </div>
                                <h4 class="text-white text-center mb-2 in-title-18px fw-semibold">{{get_phrase('Reataurent')}}</h4>
                                <p class="text-center text-white in-subtitle-14px fw-medium lh-1">{{count($restaurantListing)}} {{get_phrase('Listing')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="mh-category-link">
                        <div class="mh-single-category">
                            <img class="banner" src="{{ asset('public/uploads/category_type/' . get_frontend_settings('car'))}}" alt="">
                            <div class="mh-category-content">
                                <div class="white-iconbox-radio mb-12px mx-auto">
                                    <img src="{{asset('public/assets/frontend/images/icons/car-purple-28.svg')}}" alt="">
                                </div>
                                <h4 class="text-white text-center mb-2 in-title-18px fw-semibold">{{get_phrase('Car')}}</h4>
                                <p class="text-center text-white in-subtitle-14px fw-medium lh-1">{{count($carListing)}} {{get_phrase('Listing')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="mh-category-link">
                        <div class="mh-single-category">
                            <img class="banner" src="{{ asset('public/uploads/category_type/' . get_frontend_settings('doctors'))}}" alt="">
                            <div class="mh-category-content">
                                <div class="white-iconbox-radio mb-12px mx-auto">
                                    <img src="{{asset('public/assets/frontend/images/icons/hart-plus-purple-28.svg')}}" alt="">
                                </div>
                                <h4 class="text-white text-center mb-2 in-title-18px fw-semibold">{{get_phrase('Doctors')}}</h4>
                                <p class="text-center text-white in-subtitle-14px fw-medium lh-1">103 Listing</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="mh-category-link">
                        <div class="mh-single-category">
                            <img class="banner" src="{{ asset('public/uploads/category_type/' . get_frontend_settings('real_estate'))}}" alt="">
                            <div class="mh-category-content">
                                <div class="white-iconbox-radio mb-12px mx-auto">
                                    <img src="{{asset('public/assets/frontend/images/icons/buildings-purple-28.svg')}}" alt="">
                                </div>
                                <h4 class="text-white text-center mb-2 in-title-18px fw-semibold">{{get_phrase('Real Estate')}}</h4>
                                <p class="text-center text-white in-subtitle-14px fw-medium lh-1">{{count($realEstateListing)}} {{get_phrase('Listing')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="mh-category-link">
                        <div class="mh-single-category">
                            <img class="banner" src="{{ asset('public/uploads/category_type/' . get_frontend_settings('beauty'))}}" alt="">
                            <div class="mh-category-content">
                                <div class="white-iconbox-radio mb-12px mx-auto">
                                    <img src="{{asset('public/assets/frontend/images/icons/magicpen-purple-28.svg')}}" alt="">
                                </div>
                                <h4 class="text-white text-center mb-2 in-title-18px fw-semibold">{{get_phrase('Beauty')}}</h4>
                                <p class="text-center text-white in-subtitle-14px fw-medium lh-1">{{count($beautyListing)}} {{get_phrase('Listing')}}</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Top Categoris Area -->


    <!-- Start Featured Listing Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <h1 class="in-title-36px text-center text-capitalize lh-1">{{get_phrase('Featured Listings')}}</h1>
                </div>
            </div>
            <div class="row mb-30px">
                <div class="col-12">
                    <div class="d-flex gap-14px justify-content-center flex-wrap">
                        <button type="button" data-filter="all" class="btn mh-filter-btn mixitup-control-active">All</button>
                        <button type="button" data-filter=".hotel" class="btn mh-filter-btn mixitup-control-active">Hotel</button>
                        <button type="button" data-filter=".restaurant" class="btn mh-filter-btn">Restaurant</button>
                        <button type="button" data-filter=".beauty" class="btn mh-filter-btn">Beauty</button>
                        <button type="button" data-filter=".doctors" class="btn mh-filter-btn">Doctors</button>
                        <button type="button" data-filter=".real-estate" class="btn mh-filter-btn">Real Estate</button>
                        <button type="button" data-filter=".car" class="btn mh-filter-btn">Car</button>
                    </div>
                </div>
            </div>
            <div class="mixitup row g-4 mb-30px">
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix restaurant doctors car">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner1.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Ulysses S. Grant</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg " alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$69 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix beauty real-estate hotel">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner2.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Grand Palace Hotel</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg" alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$76 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix restaurant beauty real-estate car">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner3.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Ulysses S. Grant</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg" alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$95 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix doctors car hotel">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner2.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Stradivarius</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg" alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$49 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix restaurant doctors real-estate">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner4.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Ulysses S. Grant</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg" alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$59 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix beauty car hotel">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner3.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Grand Palace Hotel</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg" alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$44 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix restaurant beauty real-estate">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner4.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Ulysses S. Grant</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg" alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$95 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mix doctors hotel">
                    <div class="mh-product-card max-md-400px mx-auto mx-md-0">
                        <a href="#" class="mh-product-card-link"></a>
                        <div class="mh-product-card-banner">
                            <img src="{{asset('public/assets/frontend/images/hotel/hotel-blog-banner1.webp')}}" alt="banner">
                            <a href="javascript:void(0);" class="mh-product-card-bookmark">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 18.0417C9.7415 18.0417 9.4915 18.0084 9.28317 17.9334C6.09984 16.8417 1.0415 12.9667 1.0415 7.24171C1.0415 4.32504 3.39984 1.95837 6.29984 1.95837C7.70817 1.95837 9.02484 2.50837 9.99984 3.49171C10.9748 2.50837 12.2915 1.95837 13.6998 1.95837C16.5998 1.95837 18.9582 4.33337 18.9582 7.24171C18.9582 12.975 13.8998 16.8417 10.7165 17.9334C10.5082 18.0084 10.2582 18.0417 9.99984 18.0417ZM6.29984 3.20837C4.0915 3.20837 2.2915 5.01671 2.2915 7.24171C2.2915 12.9334 7.7665 16.1 9.6915 16.7584C9.8415 16.8084 10.1665 16.8084 10.3165 16.7584C12.2332 16.1 17.7165 12.9417 17.7165 7.24171C17.7165 5.01671 15.9165 3.20837 13.7082 3.20837C12.4415 3.20837 11.2665 3.80004 10.5082 4.82504C10.2748 5.14171 9.7415 5.14171 9.50817 4.82504C8.73317 3.79171 7.5665 3.20837 6.29984 3.20837Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mh-product-card-details">
                            <div class="mb-6px d-flex align-items-start justify-content-between gap-1">
                                <h4 class="in-title2-18px">Stradivarius</h4>
                                <div class="mb-2 d-flex align-items-center gap-1">
                                    <img class="mb-2px" src="assets/images/icons/star-yellow-20.svg" alt="icon">   
                                    <h4 class="in-text-16px at-text-dark">4.5</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <img src="assets/images/icons/location-purple-16.svg" alt="icon">
                                <p class="in-subtitle-14px at-text-secondary">Sydney, Australia</p>
                            </div>
                            <div class="gap-6px mb-3 d-flex flex-wrap align-items-center">
                                <ul class="mh-product-card-tags">
                                    <li>Wifi</li>
                                    <li>Breakfast</li>
                                    <li>Balcony</li>
                                </ul>
                                <p class="mh-product-card-tag-more">+5 More</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                <a href="https://creativeitem.com/" class="btn at2-btn-purple position-relative z-1">See Details</a>
                                <h3 class="mh-product-card-price d-flex align-items-center align-items-end">$65 <span>/ night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn at-btn-outline-dark">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Listing Area -->


    <!-- Start Trusted Companies Area -->
    <section>
        <div class="container">
            <div class="row mb-50px">
                <div class="col-12">
                    <h1 class="in-title-36px text-center text-capitalize max-w-538px mx-auto">{{get_phrase('We Have Worked with ')}}<span class="mh-title-highlight">{{get_phrase('10,000')}}+</span>{{get_phrase(' Trusted Companies')}}</h1>
                </div>
            </div>
            <div class="row mb-100px">
                <div class="col-12">
                    <div>
                        <ul class="trusted-companies-wrap">
                            @php
                            $company_images = json_decode(get_frontend_settings('company_images'), true);
                           @endphp
                            @if(!empty($company_images) && is_array($company_images))
                                @foreach($company_images as $images)
                                    <li><a href="javascript:;">
                                        <img src="{{ asset('public/uploads/company_logo/' . $images['image']) }}" alt="">
                                    </a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Trusted Companies Area -->


    <!-- Start Testimonial Area -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="in-title-36px text-center text-capitalize">{{get_phrase('What the people Thinks About Us')}}</h1>
                </div>
            </div>
        </div>
        <div class="mb-100px">
            <!-- Swiper -->
            <div class="swiper mh-testimonial">
                <div class="swiper-wrapper">
                   @if(count($reviews) > 0)
                        @foreach($reviews as $review )
                        @php 
                            $users = App\Models\User::where('id', $review->user_id)->first();
                        @endphp
                        <div class="swiper-slide">
                            <div class="mh-testimonial-single">
                                <div class="d-flex gap-10px align-items-start mb-3">
                                    <div class="image-circle-58px">
                                        <img src="{{ get_image('public/storage/users/' . $users['image']) }}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="in-title-16px at-text-dark mb-2">{{$users->name}}</h6>
                                        <p class="in-subtitle-14px lh-1 fw-medium at-text-secondary mb-2">{{ \Carbon\Carbon::parse($review->created_at)->format('h:i A') }}
                                        </p>
                                        <div class="d-flex align-items-center mh-testimonial-stars">
                                              @for($i = 1; $i <= 5; $i++ )
                                                   @if($i <= $review->rating)
                                                        <img src="{{ asset('public/assets/frontend/images/icons/star-yellow-17.svg') }}" alt="">
                                                        @else
                                                        <img src="{{ asset('public/assets/frontend/images/icons/star-gray-17.svg') }}" alt="">
                                                     @endif
                                               @endfor   
                                        </div>
                                    </div>
                                </div>
                                <p class="in-subtitle-16px at-text-secondary">{{$review->review}}</p>
                            </div>
                        </div>
                        @endforeach
                   @endif
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->


    <!-- Start Blog Area -->
    <section>
        <div class="container">
            <div class="row mb-30px">
                <div class="col-12">
                    <h1 class="in-title-36px text-center text-capitalize">{{get_phrase('Pickup New Updates')}}</h1>
                </div>
            </div>
            <div class="row mb-100px g-4">
                @if(count($blogs) > 0)
                @foreach($blogs as $blog)
                @php 
                   $category_name = App\Models\Blog_category::where('id', $blog->category)->first();
                   $usersBlog = App\Models\User::where('id', $blog->user_id)->first();
                @endphp
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('blog.details',['id'=>$blog->id, 'slug'=>slugify($blog->title)])}}" class="mh-blog-link max-w-md-450px mx-auto">
                        <div class="mh-blog-card">
                            <div class="mh-blog-card-image">
                                <img src="{{get_image('public/storage/blog-images/'.$blog->image)}}" alt="">
                            </div>
                            <div class="p-20px">
                                <p class="at-category-badge mb-12px">{{$category_name->name}}</p>
                                <div class="mh-blog-titles mb-2 pb-3">
                                    <h4 class="in-title-20px fw-semibold at-text-dark mb-12px">{{$blog->title}}</h4>
                                    <p class="in-subtitle-16px at-text-secondary"><p> {{ Str::limit(strip_tags($blog->description), 80) }}</p></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="d-flex align-items-center gap-10px">
                                        <div class="image-circle-40px">
                                            <img src="{{ get_image('public/storage/users/' . $usersBlog['image']) }}" alt="">
                                        </div>
                                        <div>
                                            <h6 class="in-title-16px at-text-dark mb-2">{{$usersBlog->name}}</h6>
                                            <p class="in-subtitle-14px lh-1 fw-medium at-text-secondary">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y ') }}</p>
                                        </div>
                                    </div>
                                    <div class="mh-blog-arrow">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_272_1797)">
                                              <path d="M20.6508 5.70479L9.92639 5.70479C9.64237 5.70973 9.37166 5.82602 9.17255 6.02862C8.97345 6.23121 8.86188 6.50391 8.86188 6.78796C8.86188 7.07202 8.97345 7.34471 9.17255 7.54731C9.37166 7.74991 9.64237 7.8662 9.92639 7.87113L18.0356 7.87113L4.56416 21.3426C4.36099 21.5457 4.24686 21.8213 4.24686 22.1086C4.24686 22.3959 4.36099 22.6715 4.56416 22.8746C4.76732 23.0778 5.04287 23.1919 5.33019 23.1919C5.61751 23.1919 5.89306 23.0778 6.09622 22.8746L19.5677 9.4032L19.5677 17.5124C19.5652 17.6562 19.5913 17.7991 19.6446 17.9327C19.698 18.0663 19.7773 18.188 19.8782 18.2906C19.979 18.3932 20.0993 18.4747 20.2319 18.5303C20.3646 18.5859 20.507 18.6146 20.6508 18.6146C20.7947 18.6146 20.9371 18.5859 21.0698 18.5303C21.2024 18.4747 21.3227 18.3932 21.4235 18.2906C21.5243 18.188 21.6037 18.0663 21.657 17.9327C21.7103 17.7991 21.7365 17.6562 21.734 17.5124L21.734 6.78796C21.734 6.5007 21.6198 6.22522 21.4167 6.02209C21.2136 5.81897 20.9381 5.70483 20.6508 5.70479Z" fill="#7E7E89"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_272_1797">
                                                <rect width="26" height="26" fill="white"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
   
@endsection
@push('js')
<script src="{{ asset('public/assets/frontend/js/swiper-bundle.min.js') }}"></script>
@endpush