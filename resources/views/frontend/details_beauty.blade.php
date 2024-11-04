@extends('layouts.frontend')
@section('title', get_phrase('Listing Details'))
@section('frontend_layout')

@php
@endphp

<!-- Start Top Title and Back -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="details-title-back1 d-flex align-items-start justify-content-between flex-wrap">
                    <div class="detailstop-title-location1">
                        <div class="detailstop-title1 d-flex align-items-center flex-wrap">
                            <h1 class="title"> {{$listing->title}} </h1>
                        </div>
                        <div class="location d-flex align-items-center">
                            <img src="{{asset('public/assets/frontend/images/icons/location-gray-16.svg')}}" alt="location">
                            @php
                                $city_name = App\Models\City::where('id',$listing->city)->first()->name;
                                $country_name = App\Models\Country::where('id',$listing->country)->first()->name;
                            @endphp
                            <p class="name"> {{$city_name.', '.$country_name}} </p>
                        </div>
                    </div>
                    <div class="detailstop-share-back d-flex align-items-center flex-wrap">
                        <a href="#" class="save-share">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.6501C11.69 21.6501 11.39 21.6101 11.14 21.5201C7.32 20.2101 1.25 15.5601 1.25 8.6901C1.25 5.1901 4.08 2.3501 7.56 2.3501C9.25 2.3501 10.83 3.0101 12 4.1901C13.17 3.0101 14.75 2.3501 16.44 2.3501C19.92 2.3501 22.75 5.2001 22.75 8.6901C22.75 15.5701 16.68 20.2101 12.86 21.5201C12.61 21.6101 12.31 21.6501 12 21.6501ZM7.56 3.8501C4.91 3.8501 2.75 6.0201 2.75 8.6901C2.75 15.5201 9.32 19.3201 11.63 20.1101C11.81 20.1701 12.2 20.1701 12.38 20.1101C14.68 19.3201 21.26 15.5301 21.26 8.6901C21.26 6.0201 19.1 3.8501 16.45 3.8501C14.93 3.8501 13.52 4.5601 12.61 5.7901C12.33 6.1701 11.69 6.1701 11.41 5.7901C10.48 4.5501 9.08 3.8501 7.56 3.8501Z" fill="#7E7E89"/>
                            </svg>
                        </a>
                        <a href="#" class="save-share active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7259 14.4443C18.0336 14.4448 17.3519 14.614 16.7395 14.9373C16.1271 15.2605 15.6025 15.728 15.2109 16.2995L9.25111 13.6056C9.67441 12.5823 9.67606 11.4329 9.25569 10.4084L15.2072 7.70071C15.7876 8.54103 16.6496 9.14527 17.6369 9.40383C18.6241 9.66239 19.6713 9.55815 20.5884 9.11001C21.5055 8.66187 22.2317 7.89952 22.6354 6.96124C23.0392 6.02296 23.0936 4.9709 22.7888 3.9959C22.4841 3.02089 21.8403 2.18752 20.9744 1.64695C20.1085 1.10638 19.0777 0.894424 18.069 1.04952C17.0603 1.20461 16.1406 1.71649 15.4766 2.4923C14.8126 3.26811 14.4484 4.25647 14.45 5.27809C14.4539 5.51989 14.4784 5.76092 14.5232 5.99855L8.19632 8.87673C7.58867 8.3068 6.82794 7.92697 6.00761 7.78391C5.18728 7.64084 4.34307 7.74078 3.5787 8.07144C2.81432 8.40211 2.16308 8.94909 1.70497 9.64519C1.24686 10.3413 1.00184 11.1562 1.00001 11.9898C0.998181 12.8234 1.23962 13.6394 1.69467 14.3375C2.14972 15.0356 2.79856 15.5854 3.56147 15.9195C4.32439 16.2535 5.16815 16.3571 5.9891 16.2177C6.81005 16.0782 7.57243 15.7017 8.18259 15.1345L14.526 18.0017C14.4819 18.2391 14.4577 18.4798 14.4536 18.7212C14.4535 19.5674 14.7039 20.3946 15.1734 21.0982C15.6429 21.8018 16.3103 22.3503 17.0911 22.6742C17.872 22.9981 18.7313 23.0829 19.5603 22.9178C20.3893 22.7528 21.1507 22.3454 21.7484 21.747C22.3461 21.1487 22.7531 20.3864 22.9179 19.5565C23.0828 18.7266 22.9981 17.8664 22.6745 17.0846C22.351 16.3029 21.8032 15.6348 21.1003 15.1648C20.3974 14.6949 19.5711 14.4441 18.7259 14.4443ZM18.7259 2.83346C19.2089 2.83328 19.6811 2.9765 20.0828 3.24501C20.4845 3.51352 20.7977 3.89526 20.9826 4.34194C21.1676 4.78862 21.2161 5.28018 21.122 5.75445C21.0278 6.22872 20.7953 6.66439 20.4539 7.00637C20.1124 7.34835 19.6773 7.58127 19.2036 7.67567C18.7298 7.77007 18.2388 7.72171 17.7925 7.53671C17.3463 7.35171 16.9648 7.03838 16.6965 6.63634C16.4281 6.23431 16.2849 5.76163 16.2849 5.27809C16.2854 4.63004 16.5427 4.00866 17.0003 3.55034C17.458 3.09201 18.0786 2.83419 18.7259 2.83346ZM5.29748 14.4443C4.81447 14.4445 4.34226 14.3012 3.94056 14.0327C3.53886 13.7642 3.22573 13.3825 3.04077 12.9358C2.8558 12.4891 2.80731 11.9976 2.90143 11.5233C2.99555 11.049 3.22805 10.6133 3.56953 10.2714C3.911 9.92939 4.34611 9.69647 4.81983 9.60207C5.29355 9.50767 5.78459 9.55603 6.23085 9.74103C6.67711 9.92603 7.05854 10.2394 7.32691 10.6414C7.59527 11.0434 7.73851 11.5161 7.73851 11.9997C7.73779 12.6476 7.4804 13.2689 7.02281 13.7271C6.56521 14.1854 5.94475 14.4433 5.29748 14.4443ZM18.7259 21.1658C18.2429 21.1658 17.7708 21.0225 17.3692 20.7539C16.9677 20.4852 16.6547 20.1034 16.4698 19.6567C16.285 19.21 16.2367 18.7185 16.3309 18.2443C16.4251 17.7701 16.6577 17.3345 16.9992 16.9926C17.3407 16.6507 17.7758 16.4179 18.2495 16.3236C18.7232 16.2292 19.2142 16.2777 19.6604 16.4627C20.1066 16.6477 20.488 16.961 20.7563 17.3631C21.0246 17.7651 21.1679 18.2377 21.1679 18.7212C21.1674 19.3694 20.9099 19.9909 20.4521 20.4493C19.9942 20.9076 19.3734 21.1654 18.7259 21.1658Z" fill="#7E7E89"/>
                            </svg>
                        </a>
                        <a href="#" class="back-btn1">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.9752 15.6834C7.81686 15.6834 7.65853 15.6251 7.53353 15.5001L2.4752 10.4418C2.23353 10.2001 2.23353 9.8001 2.4752 9.55843L7.53353 4.5001C7.7752 4.25843 8.1752 4.25843 8.41686 4.5001C8.65853 4.74176 8.65853 5.14176 8.41686 5.38343L3.8002 10.0001L8.41686 14.6168C8.65853 14.8584 8.65853 15.2584 8.41686 15.5001C8.3002 15.6251 8.13353 15.6834 7.9752 15.6834Z" fill="#7E7E89"/>
                                <path d="M17.0831 10.625H3.05811C2.71644 10.625 2.43311 10.3417 2.43311 10C2.43311 9.65833 2.71644 9.375 3.05811 9.375H17.0831C17.4248 9.375 17.7081 9.65833 17.7081 10C17.7081 10.3417 17.4248 10.625 17.0831 10.625Z" fill="#7E7E89"/>
                            </svg>
                            <span>Back to listing</span>    
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Top Title and Back -->

<!-- Start Main Content Area -->
<section>
    <div class="container">
        <div class="row row-28">
            <div class="col-xl-8 col-lg-7">
                <!-- Banners -->
                <div class="beauty-details-banners">
                    <div class="banner-top">
                        @foreach (json_decode($listing->image) as $key => $image)
                        @php if ($key >= 1) { break; } @endphp
                        <img class="big-image-view" src="{{get_image('public/storage/listing-images/'.$image)}}" alt="">
                        @endforeach
                    </div>
                    <ul class="beauty-banner-list">
                        @foreach (json_decode($listing->image) as $key => $image)
                            @php if ($key == 0) { continue; } elseif($key > 4) { break; } @endphp
                            @if ($key > 0 && $key <= 3)    
                                <li>
                                    <img class="small-image-view" src="{{get_image('public/storage/listing-images/'.$image)}}" alt="">
                                </li>
                            @else
                                <li class="last-child small-image-view">
                                    <img src="{{get_image('public/storage/listing-images/'.$image)}}" alt="">
                                    <a href="#" class="see-more" data-bs-toggle="modal" data-bs-target="#imageViewModal">  +{{(count(json_decode($listing->image))- 4).' '.get_phrase('More')}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                
                <!-- Description -->
                <div class="realestate-details-description">
                    <h4 class="title mb-16">{{get_phrase('Description')}}</h4>
                    <p class="info mb-16">{!!$listing->description!!}</p>
                    {{-- <a href="#" class="more-link-btn">
                        <span>Read More</span>
                        <img src="assets/images/icons/arrow-right-purple-24.svg" alt="">
                    </a> --}}
                </div>
                @if ($listing->service)    
                <!-- Services -->
                <div class="beauty-details-services mb-36">
                    <h4 class="title mb-20">{{get_phrase('Services')}}</h4>
                    <div class="row row-28">
                        @foreach (json_decode($listing->service) as $service)
                        @php
                            $amenities = App\Models\Amenities::where('id',$service)->first();
                        @endphp   
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="beauty-details-service d-flex align-items-center justify-content-between flex-wrap">
                                <div class="details">
                                    <p class="info">{{$amenities->name}}</p>
                                    <p class="time">{{$amenities->time}}</p>
                                    <p class="price">{{get_phrase('from').' '.currency($amenities->price)}}</p>
                                </div>
                                <a href="#" class="small-white-btn">Book Now</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if ($listing->opening_time)
                <!-- Opening Time -->
                <div class="restaurent-opening-time mb-36">
                    <h2 class="title mb-20">{{get_phrase('Opening Time')}}</h2>
                    <ul class="restopning-time-list beautyopning-time-list">
                        @foreach (json_decode($listing->opening_time) as $key => $day)    
                            <li>
                                <p class="day">{{ ucwords($key) }}</p>
                                <p class="time">{{ format_time($day->open) }} - {{ format_time($day->close) }}</p>
                            </li>
                        @endforeach

                    </ul>
                </div>
                @endif

                <!-- Team Members -->
                <div class="beautydetails-team-members mb-36">
                    <h2 class="title mb-20">{{get_phrase('Team Members')}}</h2>
                    <div class="beauty-team-members">
                        <div class="beauty-team-member">
                            <div class="profile">
                                <img src="assets/images/details/beauty-member-1.svg" alt="">
                            </div>
                            <div class="ratings d-flex align-items-center">
                                <p class="rating">5.0</p>
                                <img src="assets/images/icons/star-yellow2-20.svg" alt="">
                            </div>
                            <h5 class="name">Mark Wood</h5>
                            <p class="role">Creative Stylish</p>
                        </div>
                    </div>
                </div>
                <!-- Video -->
                <div class="realdetails-video-area mb-36">
                    <h2 class="title mb-20">Video</h2>
                    <div class="realdetails-video">
                        <div class="plyr__video-embed" id="player">
                            <iframe src="https://www.youtube.com/embed/5YHAVhEJ9TM?si=GrmhAZyUahBciHUm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- Reviews -->
                <div class="real-details-reviews mb-36">
                    <div class="review-title-button d-flex align-items-center justify-content-between flex-wrap">
                        <h2 class="title">2 reviews</h2>
                        <a href="#" class="white-btn1">Edit Reviews</a>
                    </div>
                    <!-- Single comment wrapper -->
                    <div class="single-comment-wrap">
                        <!-- Comment -->
                        <div class="single-comment d-flex">
                            <div class="comment-profile">
                                <img src="assets/images/details/review-profile-1.webp" alt="">
                            </div>
                            <div class="comment-details">
                                <div class="commentator-name-dropdown d-flex justify-content-between">
                                    <div class="commentator-name-date">
                                        <h3 class="name">Taylor swift</h3>
                                        <p class="date">January 9, 2022 . 7:08 pm</p>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="assets/images/icons/menu-dots-vertical.svg" alt="">
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p class="info">Many remote jobs also come with flexible schedules, which means that workers can start and end their day as they choose, as long as their work.</p>
                                </div>
                                <button class="comment-reply-btn">Reply</button>
                            </div>
                        </div>
                        <!-- All Reply -->
                        <ul class="comment-replies">
                            <li>
                                <!-- Reply -->
                                <div class="single-comment d-flex">
                                    <div class="comment-profile">
                                        <img src="assets/images/details/review-profile-2.webp" alt="">
                                    </div>
                                    <div class="comment-details">
                                        <div class="commentator-name-dropdown d-flex justify-content-between">
                                            <div class="commentator-name-date">
                                                <h3 class="name">Amber Ross</h3>
                                                <p class="date">January 9, 2022 . 7:08 pm</p>
                                            </div>
                                            <div class="dropdown">
                                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="assets/images/icons/menu-dots-vertical.svg" alt="">
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p class="info">Many remote jobs also come with flexible schedules, which means that workers can start and end their day as they choose, as long as their work.</p>
                                        </div>
                                        <button class="comment-reply-btn">Reply</button>
                                    </div>
                                </div>
                            </li>
                            <li class="more-reply-li"><button class="more-reply-btn">View 1 more reply...</button></li>
                        </ul>
                    </div>
                </div>
                <!-- Edit Review -->
                <div class="realdetails-edit-reviews mb-36">
                    <h2 class="title mb-20">Edit Your Review</h2>
                    <form action="">
                        <div class="realdetails-review-form">
                            <div class="mb-16">
                                <label class="form-label smform-label2 mb-16">Rating</label>
                                <select class="mNiceSelect review-select mform-control">
                                    <option selected>Five</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-20">
                                <label for="textarea1" class="form-label smform-label2 mb-16">Review</label>
                                <textarea class="form-control mform-control review-textarea" id="textarea1"></textarea>
                            </div>
                            <button class="theme-btn1" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-5">
                <div class="realdetails-sidebar">
                    <h1 class="title mb-20">Book a Meeting</h1>
                    <form action="">
                        <div class="realdetails-meeting-form mb-16">
                            <div class="mb-14">
                                <label for="datetime" class="form-label mform-label mb-14">Select Date and Time</label>
                                <input type="text" name="time"  placeholder="18 June 2023 12:30PM" class="form-control mform-control flat-input-picker" id="datetime" />
                            </div>
                            <input type="text" class="form-control mform-control mb-14" placeholder="Name">
                            <input type="email" class="form-control mform-control mb-14" placeholder="Email">
                            <button type="submit" class="submit-fluid-btn2">Submit Now</button>
                        </div>
                    </form>
                    <div class="beautysidebar-time-location">
                        <div class="beautysidebar-time d-flex mb-12">
                            <img src="assets/images/icons/clock-gray-20.svg" alt="">
                            <p class="info"><span class="light">Closed</span> opens at 9.00am</p>
                        </div>
                        <div class="beautysidebar-location d-flex">
                            <img src="assets/images/icons/location-gray-20.svg" alt="">
                            <p class="location">36 store st, London, England</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Content Area -->

<!-- Start Modal Area -->
<div class="modal modal-main-xl fade" id="imageViewModal" tabindex="-1" aria-labelledby="imageViewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <div class="alm-header-wrap d-flex align-items-center">
                <div class="alm-header-title-wrap d-flex align-items-center justify-content-between">
                    <h3 class="xl-modal-title">{{$listing->title}}</h3>
                    <div class="alm-rating-review d-flex align-items-center gap-1">
                        <span>0</span>
                        <img src="assets/images/icons/star-yellow-16.svg" alt="">
                        <p>(0 REVIEWS)</p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-3">
            <div class="row mt-2 gx-3 row-gap-3">
                @foreach (json_decode($listing->image) as $key => $image)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sing-gallery">
                        <div class="gallery-head">
                            <a class="veno-gallery-img" href="{{get_image('public/storage/listing-images/'.$image)}}"><img src="{{get_image('public/storage/listing-images/'.$image)}}" alt="photo"></a>
                        </div>
                        <p>{{$listing->title}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</div>
<!-- End Modal Area -->

<!-- Start Related Product Area -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="related-product-title mb-20">{{get_phrase('Related Property')}}</h1>
            </div>
        </div>
        <div class="row row-28 mb-80">
            <!-- Single Card -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-grid-card">
                    <!-- Banner Slider -->
                    <div class="grid-slider-area">
                        <div class="swiper grid-banner-slider">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/gird-banner-5.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-4.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-3.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-1.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-2.webp" alt="">
                                </div>
                            </div>
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
                    <div class="beauty-grid-details">
                        <div class="beautygrid-location-title">
                            <div class="location d-flex">
                                <img src="assets/images/icons/location-gray-16.svg" alt="">
                                <p class="name">New York City, USA</p>
                            </div>
                            <a href="#" class="title">In the best reals sate </a>
                        </div>
                        <div class="beautygrid-rating-open d-flex align-items-center justify-content-between flex-wrap">
                            <div class="beauty-grid-ratings d-flex align-items-center">
                                <p class="rating">4.8</p>
                                <img src="assets/images/icons/star-yellow-20.svg" alt="">
                                <p class="reviews">1.5k</p>
                            </div>
                            <div class="beauty-grid-open d-flex align-items-center">
                                <img src="assets/images/icons/door-open-green.svg" alt="">
                                <p class="status">Open</p>
                            </div>
                        </div>
                        <div class="beauty-grid-btns d-flex align-items-center justify-content-between flex-wrap">
                            <a href="#" class="small-border-btn1">Beauty Salon</a>
                            <a href="#" class="reals-grid-view">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6499 9.33752H6.8999C6.5924 9.33752 6.3374 9.08252 6.3374 8.77502C6.3374 8.46752 6.5924 8.21252 6.8999 8.21252H10.6499C10.9574 8.21252 11.2124 8.46752 11.2124 8.77502C11.2124 9.08252 10.9574 9.33752 10.6499 9.33752Z" fill="#555558"/>
                                    <path d="M8.7749 11.2125C8.4674 11.2125 8.2124 10.9575 8.2124 10.65V6.90002C8.2124 6.59252 8.4674 6.33752 8.7749 6.33752C9.0824 6.33752 9.3374 6.59252 9.3374 6.90002V10.65C9.3374 10.9575 9.0824 11.2125 8.7749 11.2125Z" fill="#555558"/>
                                    <path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#555558"/>
                                    <path d="M16.5001 17.0625C16.3576 17.0625 16.2151 17.01 16.1026 16.8975L13.5003 14.2955C13.2828 14.078 13.2828 13.718 13.5003 13.5005C13.7178 13.283 14.0778 13.283 14.2953 13.5005L16.8976 16.1025C17.1151 16.32 17.1151 16.68 16.8976 16.8975C16.7851 17.01 16.6426 17.0625 16.5001 17.0625Z" fill="#555558"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-grid-card">
                    <!-- Banner Slider -->
                    <div class="grid-slider-area">
                        <div class="swiper grid-banner-slider">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-4.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/gird-banner-5.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-3.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-1.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-2.webp" alt="">
                                </div>
                            </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                        </div>
                        <p class="card-light-text theme-light">Featured</p>
                        <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
                            </svg>                                                 
                        </a>
                    </div>
                    <div class="beauty-grid-details">
                        <div class="beautygrid-location-title">
                            <div class="location d-flex">
                                <img src="assets/images/icons/location-gray-16.svg" alt="">
                                <p class="name">New York City, USA</p>
                            </div>
                            <a href="#" class="title">Impact Body Massage</a>
                        </div>
                        <div class="beautygrid-rating-open d-flex align-items-center justify-content-between flex-wrap">
                            <div class="beauty-grid-ratings d-flex align-items-center">
                                <p class="rating">4.8</p>
                                <img src="assets/images/icons/star-yellow-20.svg" alt="">
                                <p class="reviews">1.2k</p>
                            </div>
                            <div class="beauty-grid-open d-flex align-items-center">
                                <img src="assets/images/icons/door-open-green.svg" alt="">
                                <p class="status">Open</p>
                            </div>
                        </div>
                        <div class="beauty-grid-btns d-flex align-items-center justify-content-between flex-wrap">
                            <a href="#" class="small-border-btn1">Massage</a>
                            <a href="#" class="reals-grid-view">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6499 9.33752H6.8999C6.5924 9.33752 6.3374 9.08252 6.3374 8.77502C6.3374 8.46752 6.5924 8.21252 6.8999 8.21252H10.6499C10.9574 8.21252 11.2124 8.46752 11.2124 8.77502C11.2124 9.08252 10.9574 9.33752 10.6499 9.33752Z" fill="#555558"/>
                                    <path d="M8.7749 11.2125C8.4674 11.2125 8.2124 10.9575 8.2124 10.65V6.90002C8.2124 6.59252 8.4674 6.33752 8.7749 6.33752C9.0824 6.33752 9.3374 6.59252 9.3374 6.90002V10.65C9.3374 10.9575 9.0824 11.2125 8.7749 11.2125Z" fill="#555558"/>
                                    <path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#555558"/>
                                    <path d="M16.5001 17.0625C16.3576 17.0625 16.2151 17.01 16.1026 16.8975L13.5003 14.2955C13.2828 14.078 13.2828 13.718 13.5003 13.5005C13.7178 13.283 14.0778 13.283 14.2953 13.5005L16.8976 16.1025C17.1151 16.32 17.1151 16.68 16.8976 16.8975C16.7851 17.01 16.6426 17.0625 16.5001 17.0625Z" fill="#555558"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-grid-card">
                    <!-- Banner Slider -->
                    <div class="grid-slider-area">
                        <div class="swiper grid-banner-slider">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-4.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/gird-banner-5.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-3.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-1.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-2.webp" alt="">
                                </div>
                            </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                        </div>
                        <p class="card-light-text theme-light">Featured</p>
                        <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
                            </svg>                                                 
                        </a>
                    </div>
                    <div class="beauty-grid-details">
                        <div class="beautygrid-location-title">
                            <div class="location d-flex">
                                <img src="assets/images/icons/location-gray-16.svg" alt="">
                                <p class="name">New York City, USA</p>
                            </div>
                            <a href="#" class="title">Impact Body Massage</a>
                        </div>
                        <div class="beautygrid-rating-open d-flex align-items-center justify-content-between flex-wrap">
                            <div class="beauty-grid-ratings d-flex align-items-center">
                                <p class="rating">4.8</p>
                                <img src="assets/images/icons/star-yellow-20.svg" alt="">
                                <p class="reviews">1.2k</p>
                            </div>
                            <div class="beauty-grid-open d-flex align-items-center">
                                <img src="assets/images/icons/door-open-green.svg" alt="">
                                <p class="status">Open</p>
                            </div>
                        </div>
                        <div class="beauty-grid-btns d-flex align-items-center justify-content-between flex-wrap">
                            <a href="#" class="small-border-btn1">Massage</a>
                            <a href="#" class="reals-grid-view">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6499 9.33752H6.8999C6.5924 9.33752 6.3374 9.08252 6.3374 8.77502C6.3374 8.46752 6.5924 8.21252 6.8999 8.21252H10.6499C10.9574 8.21252 11.2124 8.46752 11.2124 8.77502C11.2124 9.08252 10.9574 9.33752 10.6499 9.33752Z" fill="#555558"/>
                                    <path d="M8.7749 11.2125C8.4674 11.2125 8.2124 10.9575 8.2124 10.65V6.90002C8.2124 6.59252 8.4674 6.33752 8.7749 6.33752C9.0824 6.33752 9.3374 6.59252 9.3374 6.90002V10.65C9.3374 10.9575 9.0824 11.2125 8.7749 11.2125Z" fill="#555558"/>
                                    <path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#555558"/>
                                    <path d="M16.5001 17.0625C16.3576 17.0625 16.2151 17.01 16.1026 16.8975L13.5003 14.2955C13.2828 14.078 13.2828 13.718 13.5003 13.5005C13.7178 13.283 14.0778 13.283 14.2953 13.5005L16.8976 16.1025C17.1151 16.32 17.1151 16.68 16.8976 16.8975C16.7851 17.01 16.6426 17.0625 16.5001 17.0625Z" fill="#555558"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-grid-card">
                    <!-- Banner Slider -->
                    <div class="grid-slider-area">
                        <div class="swiper grid-banner-slider">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-4.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/gird-banner-5.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-3.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-1.webp" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="grid-slide-img">
                                    <img src="assets/images/grid-list/grid-banner-2.webp" alt="">
                                </div>
                            </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <p class="grid-slider-counter d-flex align-items-center justify-content-center"><span class="current-slide">00</span>/<span class="total-slides">00</span></p>
                        </div>
                        <p class="card-light-text theme-light">Featured</p>
                        <a href="javascript:void(0);" class="grid-list-bookmark white-bookmark">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.4361 3C12.7326 3.01162 12.0445 3.22023 11.4411 3.60475C10.8378 3.98927 10.3407 4.53609 10 5.18999C9.65929 4.53609 9.16217 3.98927 8.55886 3.60475C7.95554 3.22023 7.26738 3.01162 6.56389 3C5.44243 3.05176 4.38583 3.57288 3.62494 4.44953C2.86404 5.32617 2.4607 6.48707 2.50302 7.67861C2.50302 10.6961 5.49307 13.9917 8.00081 16.2262C8.56072 16.726 9.26864 17 10 17C10.7314 17 11.4393 16.726 11.9992 16.2262C14.5069 13.9917 17.497 10.6961 17.497 7.67861C17.5393 6.48707 17.136 5.32617 16.3751 4.44953C15.6142 3.57288 14.5576 3.05176 13.4361 3Z" fill="#6C1CFF"/>
                            </svg>                                                 
                        </a>
                    </div>
                    <div class="beauty-grid-details">
                        <div class="beautygrid-location-title">
                            <div class="location d-flex">
                                <img src="assets/images/icons/location-gray-16.svg" alt="">
                                <p class="name">New York City, USA</p>
                            </div>
                            <a href="#" class="title">Impact Body Massage</a>
                        </div>
                        <div class="beautygrid-rating-open d-flex align-items-center justify-content-between flex-wrap">
                            <div class="beauty-grid-ratings d-flex align-items-center">
                                <p class="rating">4.8</p>
                                <img src="assets/images/icons/star-yellow-20.svg" alt="">
                                <p class="reviews">1.2k</p>
                            </div>
                            <div class="beauty-grid-open d-flex align-items-center">
                                <img src="assets/images/icons/door-open-green.svg" alt="">
                                <p class="status">Open</p>
                            </div>
                        </div>
                        <div class="beauty-grid-btns d-flex align-items-center justify-content-between flex-wrap">
                            <a href="#" class="small-border-btn1">Massage</a>
                            <a href="#" class="reals-grid-view">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6499 9.33752H6.8999C6.5924 9.33752 6.3374 9.08252 6.3374 8.77502C6.3374 8.46752 6.5924 8.21252 6.8999 8.21252H10.6499C10.9574 8.21252 11.2124 8.46752 11.2124 8.77502C11.2124 9.08252 10.9574 9.33752 10.6499 9.33752Z" fill="#555558"/>
                                    <path d="M8.7749 11.2125C8.4674 11.2125 8.2124 10.9575 8.2124 10.65V6.90002C8.2124 6.59252 8.4674 6.33752 8.7749 6.33752C9.0824 6.33752 9.3374 6.59252 9.3374 6.90002V10.65C9.3374 10.9575 9.0824 11.2125 8.7749 11.2125Z" fill="#555558"/>
                                    <path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#555558"/>
                                    <path d="M16.5001 17.0625C16.3576 17.0625 16.2151 17.01 16.1026 16.8975L13.5003 14.2955C13.2828 14.078 13.2828 13.718 13.5003 13.5005C13.7178 13.283 14.0778 13.283 14.2953 13.5005L16.8976 16.1025C17.1151 16.32 17.1151 16.68 16.8976 16.8975C16.7851 17.01 16.6426 17.0625 16.5001 17.0625Z" fill="#555558"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Related Product Area -->

@endsection