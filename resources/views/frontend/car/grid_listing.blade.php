@extends('layouts.frontend')
@section('title', get_phrase('Car Listings'))
@section('frontend_layout')

<!-- Start Content Area -->
<section>
    <div class="container">
       
        <div class="row row-28 mb-80">
            <div class="col-xl-3 col-lg-4">
                @include('frontend.car.sidebar_car')
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
                        @if (get_frontend_settings('map_position') == 'top')
                            <!-- Map Area -->
                            @include('frontend.map')
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="{{get_frontend_settings('map_position') == 'right'?'col-xl-8':'col-xl-12'}} col-lg-12 order-2 order-xl-1" id="right-map">
                        <!-- Card Area -->
                        <div class="row row-28">
                            @foreach ($listings as $listing)    
                                <!-- Single Card -->
                                <div class="col-sm-6 {{get_frontend_settings('map_position') == 'right'?'col-sm-6':'col-xl-4'}} map-card">
                                    <div class="single-grid-card">
                                        <!-- Banner Slider -->
                                        <div class="grid-slider-area">
                                            <div class="swiper grid-banner-slider">
                                                <div class="swiper-wrapper">
                                                    @foreach (json_decode($listing->image) as $image)    
                                                    <div class="swiper-slide">
                                                        <div class="grid-slide-img">
                                                            <img src="{{ get_image('storage/app/public/listing-images/'.$image) }}" alt="">
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination"></div>
                                                <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                            </div>
                                            <p class="card-light-text theme-light">Featured</p>
                                            <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark active">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
                                                </svg>                                                 
                                            </a>
                                        </div>
                                        <div class="car-grid-details">
                                            <div class="cargrid-title-area">
                                                <a href="{{route('listing.details',['type'=>$type, 'id'=>$listing->id, 'slug'=>slugify($listing->title)])}}" class="title line-1 mb-2"> {{$listing->title}} </a>
                                                <p class="info">{{$listing->sub_title}}</p>
                                            </div>
                                            <ul class="cargrid-list-items d-flex align-items-center flex-wrap">
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
                                            <div class="cargrid-price-view d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="prices">
                                                    <p class="old-price">{{currency($listing->price)}}</p>
                                                    <p class="new-price">{{currency($listing->discount_price)}}</p>
                                                </div>
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
                    @if (get_frontend_settings('map_position') == 'right')    
                    <!-- Map Area -->
                    <div class="col-xl-4 col-lg-12 order-1 order-xl-2">
                        @include('frontend.map')
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content Area -->

@endsection