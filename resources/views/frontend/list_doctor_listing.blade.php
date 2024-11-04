@extends('layouts.frontend')
@section('title', get_phrase('Doctor Listings'))
@section('frontend_layout')
<!-- Start Content Area -->
<section>
    <div class="container">
        <div class="row row-28 mb-80">
            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4">
                @include('frontend.sidebar_doctor')
            </div>
            <!-- Right Content Area -->
            <div class="col-xl-9 col-lg-8">
                <!-- Top Filter Area -->
                <div class="row">
                    <div class="col-md-12">
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
                                <a href="{{route('listing.view',['type'=>'doctor','view'=>'grid'])}}" class="{{request()->is('listing/doctor/grid')?'active':''}} grid-list">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5 10.9V4.1C21.5 2.6 20.86 2 19.27 2H15.23C13.64 2 13 2.6 13 4.1V10.9C13 12.4 13.64 13 15.23 13H19.27C20.86 13 21.5 12.4 21.5 10.9Z" fill="#555558"/>
                                        <path d="M11 13.1V19.9C11 21.4 10.36 22 8.77 22H4.73C3.14 22 2.5 21.4 2.5 19.9V13.1C2.5 11.6 3.14 11 4.73 11H8.77C10.36 11 11 11.6 11 13.1Z" fill="#555558"/>
                                        <path d="M21.5 19.9V17.1C21.5 15.6 20.86 15 19.27 15H15.23C13.64 15 13 15.6 13 17.1V19.9C13 21.4 13.64 22 15.23 22H19.27C20.86 22 21.5 21.4 21.5 19.9Z" fill="#555558"/>
                                        <path d="M11 6.9V4.1C11 2.6 10.36 2 8.77 2H4.73C3.14 2 2.5 2.6 2.5 4.1V6.9C2.5 8.4 3.14 9 4.73 9H8.77C10.36 9 11 8.4 11 6.9Z" fill="#555558"/>
                                    </svg>                                            
                                </a>
                                <a href="{{route('listing.view',['type'=>'doctor','view'=>'list'])}}" class="{{request()->is('listing/doctor/list')?'active':''}} grid-list">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 5.21429C22 5.88619 21.4417 6.42857 20.75 6.42857H3.25C2.55833 6.42857 2 5.88619 2 5.21429C2 4.54238 2.55833 4 3.25 4H20.75C21.4417 4 22 4.54238 22 5.21429ZM7.41667 18.5714H3.25C2.55833 18.5714 2 19.1138 2 19.7857C2 20.4576 2.55833 21 3.25 21H7.41667C8.10833 21 8.66667 20.4576 8.66667 19.7857C8.66667 19.1138 8.10833 18.5714 7.41667 18.5714ZM14.0833 11.2857H3.25C2.55833 11.2857 2 11.8281 2 12.5C2 13.1719 2.55833 13.7143 3.25 13.7143H14.0833C14.775 13.7143 15.3333 13.1719 15.3333 12.5C15.3333 11.8281 14.775 11.2857 14.0833 11.2857Z" fill="#555558"/>
                                    </svg>                                            
                                </a>
                                <div class="switch-wrap">
                                    <div class="switch-button">
                                        <input type="checkbox" class="switch-checkbox" {{get_frontend_settings('map_position') == 'top'?'checked':''}}/>
                                        <div class="knobs">
                                            <span></span>
                                        </div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (get_frontend_settings('map_position') == 'top')
                        @include('frontend.map')
                    @endif
                    <!-- Card Area -->
                    <div class="{{get_frontend_settings('map_position') == 'right'?'col-xl-8':'col-xl-12'}}  col-lg-12 order-2 order-xl-1" id="right-map">
                        <div class="row row-28">
                            @foreach ($listings as $listing)
                            <!-- Single Card -->
                            <div class="col-xl-12">
                                <div class="single-list-card d-flex">
                                    <!-- Banner Slider -->
                                    <div class="doctor-list-slider">
                                        <div class="swiper list-banner-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="list-slide-img">
                                                        <img src="{{get_image('public/storage/users/'.$listing->image)}}" alt="">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                            <p class="list-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                                        </div>
                                        <p class="card-light-text theme-light">Featured</p>
                                        <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark active">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
                                            </svg>                                                 
                                        </a>
                                    </div>
                                    <div class="doctor-list-details">
                                        <div class="docgrid-name-role">
                                            <a href="#" class="name active"> {{$listing->name}} </a>
                                            <p class="hospitam">
                                                <span class="role">{{$listing->specialty}}</span>
                                                <span>{{$listing->treatment_areas}}</span>
                                            </p>
                                            <p class="certified">{{$listing->education}}</p>
                                        </div>
                                        <div class="doctor-grid-ratings d-flex align-items-center">
                                            <img src="{{asset('public/assets/frontend/images/icons/star-yellow-16.svg')}}" alt="">
                                            <p class="rating">4.8</p>
                                            <p class="reviews">(1.5k reviews)</p>
                                        </div>
                                        <div class="doctorgrid-see-price d-flex align-items-center justify-content-between">
                                            <div class="prices d-flex">
                                                <p class="price">$200</p>
                                                <p class="time">/consult</p>
                                            </div>
                                            <a href="#" class="see-details-btn1">See Details</a>
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
                    <!-- Map Area -->
                    <div class="col-xl-4 col-lg-12 order-1 order-xl-2">
                        @include('frontend.map')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content Area -->
@endsection
