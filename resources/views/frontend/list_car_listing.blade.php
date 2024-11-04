@extends('layouts.frontend')
@section('title', get_phrase('Beauty Listings'))
@section('frontend_layout')

<!-- Start Content Area -->
<section>
    <div class="container">
        <div class="row row-28 mb-80">
            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-accordion-area">
                    <div class="sidebar-title mb-24 d-flex align-items-center justify-content-between flex-wrap">
                        <h3 class="title">Filters</h3>
                        <a href="#" class="clear">Clear</a>
                    </div>
                    <ul class="sidebar-accordion">
                        <li class="sidebar-accordion-li">
                            <a href="javascript:void(0);">
                                <span>Car type</span>
                                <img src="assets/images/icons/angle-down-black-20.svg" alt="">
                            </a>
                            <ul class="sidebar-accordion-menu" style="display: block;">
                                <li><a href="#" class="active">
                                    <span>SUV</span>
                                    <span class="total">(1)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Sedan</span>
                                    <span class="total">(20)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Hatchback</span>
                                    <span class="total">(5)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Convertible</span>
                                    <span class="total">(5)</span>
                                </a></li>
                                <li><a href="#" class="show-more">Show More</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="accordion-item-range">
                                <h4 class="title">Price</h4>
                                <form action="" class="accordion-range-form">
                                    <input id="" class="btSlider" data-slider-id='ex1Slider' type="text" data-slider-min="80" data-slider-max="120" data-slider-step="1" data-slider-value="100"/>
                                </form>
                                <div class="accordion-range-value d-flex align-items-center justify-content-between">
                                    <p class="value">$80</p>
                                    <p class="value">$120</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item-range">
                                <h4 class="title">Mileage</h4>
                                <form action="" class="accordion-range-form">
                                    <input id="" class="btSlider2" data-slider-id='ex1Slider' type="text" data-slider-min="600" data-slider-max="21000" data-slider-step="1" data-slider-value="11000"/>
                                </form>
                                <div class="accordion-range-value d-flex align-items-center justify-content-between">
                                    <p class="value">600</p>
                                    <p class="value">21,000</p>
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-accordion-li">
                            <a href="javascript:void(0);">
                                <span>Location</span>
                                <img src="assets/images/icons/angle-down-black-20.svg" alt="">
                            </a>
                            <ul class="sidebar-accordion-menu">
                                <li><a href="#" class="active">
                                    <span>Premium</span>
                                    <span class="total">(1)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Luxury</span>
                                    <span class="total">(20)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Clasic</span>
                                    <span class="total">(5)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Startup</span>
                                    <span class="total">(5)</span>
                                </a></li>
                                <li><a href="#" class="show-more">Show More</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-accordion-li">
                            <a href="javascript:void(0);">
                                <span>Condition</span>
                                <img src="assets/images/icons/angle-down-black-20.svg" alt="">
                            </a>
                            <ul class="sidebar-accordion-menu">
                                <li><a href="#" class="active">
                                    <span>Premium</span>
                                    <span class="total">(1)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Luxury</span>
                                    <span class="total">(20)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Clasic</span>
                                    <span class="total">(5)</span>
                                </a></li>
                                <li><a href="#">
                                    <span>Startup</span>
                                    <span class="total">(5)</span>
                                </a></li>
                                <li><a href="#" class="show-more">Show More</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right Content Area -->
            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Top Filter Area -->
                        <div class="showing-result-header d-flex align-items-center justify-content-between flex-wrap">
                            <div class="listing-info info"> 
                                @if (count($listings) < 10)
                                    {{get_phrase('Showing').' 1 to '.count($listings).' '.get_phrase('of').' '.count($listings).' '.get_phrase('results')}} 
                                @else
                                    {{ $listings->links() }}
                                @endif
                            </div>
                            <div class="filter-tab-switch d-flex align-items-center flex-wrap">
                                <select class="filter-select">
                                    <option selected>Featured</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <a href="{{route('listing.view',['type'=>'car','view'=>'grid'])}}" class="{{request()->is('listing/car/grid')?'active':''}} grid-list">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5 10.9V4.1C21.5 2.6 20.86 2 19.27 2H15.23C13.64 2 13 2.6 13 4.1V10.9C13 12.4 13.64 13 15.23 13H19.27C20.86 13 21.5 12.4 21.5 10.9Z" fill="#555558"/>
                                        <path d="M11 13.1V19.9C11 21.4 10.36 22 8.77 22H4.73C3.14 22 2.5 21.4 2.5 19.9V13.1C2.5 11.6 3.14 11 4.73 11H8.77C10.36 11 11 11.6 11 13.1Z" fill="#555558"/>
                                        <path d="M21.5 19.9V17.1C21.5 15.6 20.86 15 19.27 15H15.23C13.64 15 13 15.6 13 17.1V19.9C13 21.4 13.64 22 15.23 22H19.27C20.86 22 21.5 21.4 21.5 19.9Z" fill="#555558"/>
                                        <path d="M11 6.9V4.1C11 2.6 10.36 2 8.77 2H4.73C3.14 2 2.5 2.6 2.5 4.1V6.9C2.5 8.4 3.14 9 4.73 9H8.77C10.36 9 11 8.4 11 6.9Z" fill="#555558"/>
                                    </svg>                                            
                                </a>
                                <a href="{{route('listing.view',['type'=>'car','view'=>'list'])}}" class="{{request()->is('listing/car/list')?'active':''}} grid-list">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 5.21429C22 5.88619 21.4417 6.42857 20.75 6.42857H3.25C2.55833 6.42857 2 5.88619 2 5.21429C2 4.54238 2.55833 4 3.25 4H20.75C21.4417 4 22 4.54238 22 5.21429ZM7.41667 18.5714H3.25C2.55833 18.5714 2 19.1138 2 19.7857C2 20.4576 2.55833 21 3.25 21H7.41667C8.10833 21 8.66667 20.4576 8.66667 19.7857C8.66667 19.1138 8.10833 18.5714 7.41667 18.5714ZM14.0833 11.2857H3.25C2.55833 11.2857 2 11.8281 2 12.5C2 13.1719 2.55833 13.7143 3.25 13.7143H14.0833C14.775 13.7143 15.3333 13.1719 15.3333 12.5C15.3333 11.8281 14.775 11.2857 14.0833 11.2857Z" fill="#555558"/>
                                    </svg>                                            
                                </a>
                                <div class="switch-wrap">
                                    <div class="switch-button">
                                        <input type="checkbox" class="switch-checkbox" checked>
                                        <div class="knobs">
                                          <span></span>
                                        </div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Google Map -->
                        @include('frontend.map')
                    </div>
                </div>
                <!-- Card Area -->
                <div class="row row-28">
                    @foreach ($listings as $listing)     
                    <!-- Single Card -->
                    <div class="col-xl-12">
                        <div class="car-list-card d-flex">
                            <!-- Banner Slider -->
                            <div class="car-list-slider">
                                <div class="swiper list-banner-slider">
                                    <div class="swiper-wrapper">
                                        @foreach (json_decode($listing->image) as $image)    
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
                                    <p class="list-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                </div>
                                <p class="card-light-text theme-light">Featured</p>
                            </div>
                            <div class="car-list-details">
                                <div class="carlist-title-bookmark d-flex align-items-start justify-content-between">
                                    <div class="car-list-title">
                                        <a href="#" class="title">{{$listing->title}}</a>
                                        <p class="info">{{$listing->sub_title}}</p>
                                    </div>
                                    <a href="javascript:void(0);" class="grid-list-bookmark gray-bookmark">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.99935 18.0404C9.74102 18.0404 9.49102 18.007 9.28268 17.932C6.09935 16.8404 1.04102 12.9654 1.04102 7.24036C1.04102 4.3237 3.39935 1.95703 6.29935 1.95703C7.70768 1.95703 9.02435 2.50703 9.99935 3.49036C10.9743 2.50703 12.291 1.95703 13.6993 1.95703C16.5993 1.95703 18.9577 4.33203 18.9577 7.24036C18.9577 12.9737 13.8993 16.8404 10.716 17.932C10.5077 18.007 10.2577 18.0404 9.99935 18.0404ZM6.29935 3.20703C4.09102 3.20703 2.29102 5.01536 2.29102 7.24036C2.29102 12.932 7.76602 16.0987 9.69102 16.757C9.84102 16.807 10.166 16.807 10.316 16.757C12.2327 16.0987 17.716 12.9404 17.716 7.24036C17.716 5.01536 15.916 3.20703 13.7077 3.20703C12.441 3.20703 11.266 3.7987 10.5077 4.8237C10.2743 5.14036 9.74102 5.14036 9.50768 4.8237C8.73268 3.79036 7.56602 3.20703 6.29935 3.20703Z" fill="white"/>
                                        </svg>                                   
                                    </a>
                                </div>
                                <div class="carlist-item-price d-flex align-items-center justify-content-between">
                                    <ul class="carlist-list-items d-flex align-items-center flex-wrap">
                                        <li>
                                            <img src="{{asset('public/assets/frontend/images/icons/engine-black-24.svg')}}" alt="">
                                            <p class="info"> {{App\Models\Amenities::where('id', $listing->engine_size)->first()->name}} </p>
                                        </li>
                                        <li>
                                            <img src="{{asset('public/assets/frontend/images/icons/mileage-black-24.svg')}}" alt="">
                                            <p class="info"> {{$listing->mileage}} </p>
                                        </li>
                                        <li>
                                            <img src="{{asset('public/assets/frontend/images/icons/petrol-black-24.svg')}}" alt="">
                                            <p class="info"> {{App\Models\Amenities::where('id', $listing->fuel_type)->first()->name}} </p>
                                        </li>
                                    </ul>
                                    <div class="car-list-prices">
                                        <p class="new-price">{{currency($listing->discount_price)}}</p>
                                        <p class="old-price">{{currency($listing->price)}}</p>
                                    </div>
                                </div>
                                <div class="carlist-tag-view d-flex align-items-end justify-content-between flex-wrap">
                                    <ul class="carlist-tag-list d-flex align-items-center flex-wrap">
                                        <li><a href="#" class="car-tag-item">{{ucwords(App\Models\Category::where('id',$listing->category)->first()->name)}}</a></li>
                                    </ul>
                                    <a href="#" class="view-details">
                                        <span>View details</span>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.7019 4.28049L4.63086 11.3516" stroke="#7E7E89" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.0095 4.2927L11.7012 4.28045L11.6895 9.97266" stroke="#7E7E89" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="listing-pegination">
                        {{ $listings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content Area -->

@endsection