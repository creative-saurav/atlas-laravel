@extends('layouts.frontend')
@section('title', get_phrase('pricing'))
@section('frontend_layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
@php
    $subscription = App\Models\Subscription::where('user_id', user('id'))->orderBy('id','DESC')->first();
@endphp
<!-- Start Pricing Area -->
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="in-title-3 mb-32 mt-2 text-center">Pricing Plan for Becoming Agent</h1>
            </div>
        </div>
        <div class="row row-28 mb-90 justify-content-center">
            @foreach ($packages as $key => $package)     
            <div class="col-lg-4 col-md-6">
                <div class="at-shadow-card {{$package->choice == 1?'active':''}}">
                    <div class="d-flex flex-column h-100 justify-content-between">
                        <div>
                            <div class="sml-radio-iconbox mb-3">
                                <i class="{{$package->icon}} fs-30px icon-color"></i>
                                {{-- @if ($key == 0)
                                <img src="{{asset('public/assets/frontend/images/icons/flug-purple-30.svg')}}" alt="icon">
                                @elseif ($key == 1)
                                <img src="{{asset('public/assets/frontend/images/icons/crown-purple-30.svg')}}" alt="icon">
                                @elseif ($key == 2)
                                <img src="{{asset('public/assets/frontend/images/icons/diamond-purple-30.svg')}}" alt="icon">
                                @endif --}}
                            </div>
                            <h4 class="in-title-4 mb-1 {{$package->choice == 1?'text-white':''}}">{{$package->name}}</h4>
                            <p class="in-subtitle-1 fw-medium mb-2 {{$package->choice == 1?'text-white':''}}">{{$package->sub_title}}</p>
                            <div class="d-flex align-items-center pb-3 mb-3 at-border-bottom">
                                <h1 class="in-title-1 {{$package->choice == 1?'text-white':''}}">{{currency($package->price)}}</h1>
                                <p class="in-subtitle-1 fw-medium {{$package->choice == 1?'text-white':''}}">/ {{ucwords($package->period)}}</p>
                            </div>
                            <ul class="d-flex flex-column gap-12px mb-4">
                                <li class="at-check-listitem {{$package->choice == 1?'text-white':''}}"> {{get_phrase('Listing Feature').' '.ucwords($package->feature)}} </li>
                                <li class="at-check-listitem {{$package->choice == 1?'text-white':''}}"> {{$package->listing.' '.get_phrase('Directory listings')}} </li>
                                <li class="at-check-listitem {{$package->choice == 1?'text-white':''}}"> {{$package->category.' '.get_phrase('Categorys par listing')}} </li>
                                <li class="at-check-listitem {{$package->choice == 1?'text-white':''}}"> {{ucwords($package->contact).' '.get_phrase('Contact Form')}} </li>
                                <li class="at-check-listitem {{$package->choice == 1?'text-white':''}}"> {{ucwords($package->video).' '.get_phrase('Listing Video')}} </li>
                            </ul>
                        </div>
                        @if (isset($subscription->package_id) && $subscription->package_id == $package->id)
                            <a href="javascript:void(0)" class="{{$package->choice == 1?'btn at-btn-white':'theme-btn1'}} w-100 text-center">{{get_phrase('Current Package')}}</a>
                        @else
                            <a href="{{route('user.payment.index',['id'=>$package->id])}}" class="{{$package->choice == 1?'btn at-btn-white':'theme-btn1'}} w-100 text-center">{{get_phrase('Try Now')}}</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Pricing Area -->

<!-- Start QNA Area -->
<section>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="in-title-3 mb-32 text-center">Frequently Asked Questions</h1>
        </div>
        <div class="col-12 mb-90">
            <div class="accordion at-accordion" id="ataccordion1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Where can I watch?
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#ataccordion1">
                    <div class="accordion-body">
                        <p class="in-subtitle-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome  site Lorem Ipsum has been the industry's standard dummy text ever since the  unknown printer took a galley of type and scrambled</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Mauris id nibh eu fermentum mattis purus?
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#ataccordion1">
                    <div class="accordion-body">
                        <p class="in-subtitle-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome  site Lorem Ipsum has been the industry's standard dummy text ever since the  unknown printer took a galley of type and scrambled</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Eros imperdiet rhoncus?
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#ataccordion1">
                    <div class="accordion-body">
                        <p class="in-subtitle-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome  site Lorem Ipsum has been the industry's standard dummy text ever since the  unknown printer took a galley of type and scrambled</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Fames imperdiet quam fermentum?
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#ataccordion1">
                    <div class="accordion-body">
                        <p class="in-subtitle-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome  site Lorem Ipsum has been the industry's standard dummy text ever since the  unknown printer took a galley of type and scrambled</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Varius vitae, convallis amet lacus sit aliquet nibh?
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#ataccordion1">
                    <div class="accordion-body">
                        <p class="in-subtitle-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome  site Lorem Ipsum has been the industry's standard dummy text ever since the  unknown printer took a galley of type and scrambled</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Tortor nisl pellentesque sit quis orci dolor?
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#ataccordion1">
                    <div class="accordion-body">
                        <p class="in-subtitle-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome  site Lorem Ipsum has been the industry's standard dummy text ever since the  unknown printer took a galley of type and scrambled</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End QNA Area -->

@endsection