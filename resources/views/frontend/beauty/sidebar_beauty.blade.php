@include('frontend.sidebar_top')
@php
    $location = App\Models\BeautyListing::select('city')->groupBy('city')->get();
@endphp
<div class="sidebar-accordion-area">
    <div class="sidebar-title mb-24 d-flex align-items-center justify-content-between flex-wrap">
        <h3 class="title">Filters</h3>
        <a href="#" class="clear">Clear</a>
    </div>
    <ul class="sidebar-accordion">
        <li class="sidebar-accordion-li">
            <a href="javascript:void(0);">
                <span>{{ucwords($type).' '.get_phrase('Category')}}</span>
                <img src="{{asset('public/assets/frontend/images/icons/angle-down-black-20.svg')}}" alt="">
            </a>
            <ul class="sidebar-accordion-menu sidebar-menu-active" style="display: block;">
                @foreach ($categories as $category)     
                <li><a href="#" class="active">
                    <span> {{$category->name}} </span>
                    <span class="total">(1)</span>
                </a></li>
                @endforeach
                {{-- <li><a href="#" class="show-more">Show More</a></li> --}}
            </ul>
        </li>
        <li>
            <div class="accordion-item-range">
                <h4 class="title mb-3">Price</h4>
                <div id="price-slider" class="btSlider"></div>
                <div class="accordion-range-value d-flex align-items-center justify-content-between">
                    <input type="text" class="value" disabled id="min-price" name="min_price">
                    <input type="text" class="value text-end" disabled id="max-price" name="max_price">
                </div>
            </div>
        </li>
        <li class="sidebar-accordion-li">
            <a href="javascript:void(0);">
                <span>{{get_phrase('Location')}}</span>
                <img src="{{asset('public/assets/frontend/images/icons/angle-down-black-20.svg')}}" alt="">
            </a>
            <ul class="sidebar-accordion-menu">
                @foreach ($location as $item)    
                @php
                    $city = App\Models\City::where('id',$item->city)->first();
                @endphp
                <li><a href="#" class="active">
                    <span> {{$city->name}} </span>
                    <span class="total">(1)</span>
                </a></li>
                @endforeach               
                {{-- <li><a href="#" class="show-more">Show More</a></li> --}}
            </ul>
        </li>
        {{-- <li class="sidebar-accordion-li">
            <a href="javascript:void(0);">
                <span>Department</span>
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
                <span>Experience</span>
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
                <span>Area</span>
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
                <span>Garage</span>
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
        </li> --}}
        {{-- <li class="sidebar-accordion-li">
            <a href="javascript:void(0);">
                <span>Type</span>
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
        </li> --}}
    </ul>
</div>
@include('frontend.sidebar_bottom')