@extends('layouts.frontend')
@section('title', get_phrase('Agent Appontment'))
@section('frontend_layout')

<!-- Start Main Area -->
<section class="ca-wraper-main mb-90px mt-4">
    <div class="container">
        <div class="row gx-20px">
            <div class="col-lg-4 col-xl-3">
                @include('user.navigation')
            </div>
            <div class="col-lg-8 col-xl-9">
                <!-- Header -->
                <div class="d-flex align-items-start justify-content-between gap-2 mb-20px">
                    <div class="d-flex justify-content-between align-items-start gap-12px flex-column flex-lg-row w-100">
                        <h1 class="ca-title-18px">{{get_phrase('Agent Appointment')}}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb cap-breadcrumb">
                                <li class="breadcrumb-item cap-breadcrumb-item"><a href="#">{{get_phrase('Home')}}</a></li>
                                <li class="breadcrumb-item cap-breadcrumb-item active" aria-current="page">{{get_phrase('appointment')}}</li>
                            </ol>
                        </nav>
                    </div>
                    <button class="btn ca-menu-btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#user-sidebar-offcanvas" aria-controls="user-sidebar-offcanvas">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 5.25H3C2.59 5.25 2.25 4.91 2.25 4.5C2.25 4.09 2.59 3.75 3 3.75H21C21.41 3.75 21.75 4.09 21.75 4.5C21.75 4.91 21.41 5.25 21 5.25Z" fill="#242D47"/>
                            <path d="M21 10.25H3C2.59 10.25 2.25 9.91 2.25 9.5C2.25 9.09 2.59 8.75 3 8.75H21C21.41 8.75 21.75 9.09 21.75 9.5C21.75 9.91 21.41 10.25 21 10.25Z" fill="#242D47"/>
                            <path d="M21 15.25H3C2.59 15.25 2.25 14.91 2.25 14.5C2.25 14.09 2.59 13.75 3 13.75H21C21.41 13.75 21.75 14.09 21.75 14.5C21.75 14.91 21.41 15.25 21 15.25Z" fill="#242D47"/>
                            <path d="M21 20.25H3C2.59 20.25 2.25 19.91 2.25 19.5C2.25 19.09 2.59 18.75 3 18.75H21C21.41 18.75 21.75 19.09 21.75 19.5C21.75 19.91 21.41 20.25 21 20.25Z" fill="#242D47"/>
                        </svg>
                    </button>
                </div>
                <div class="ca-content-card">
                    <div class="table-responsive pb-1">
                        <table class="table ca-table ca-table-width">
                            <thead class="ca-thead">
                              <tr class="ca-tr">
                                <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Date')}}</th>
                                <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Customer')}}</th>
                                <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Listing')}}</th>
                                <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Details')}}</th>
                                <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Status')}}</th>
                                <th scope="col" class="ca-title-14px ca-text-dark text-center">{{get_phrase('Action')}}</th>
                              </tr>
                            </thead>
                            <tbody class="ca-tbody">
                                @foreach ($appointments as $appointment)    
                                <tr class="ca-tr">
                                    <td class="min-w-110px">
                                        <p class="ca-subtitle-14px ca-text-dark mb-2">
                                            {{date('d M y', strtotime($appointment->date))}}
                                        </p>
                                        <div class="d-flex gap-1 align-items-center">
                                            <img src="{{ asset('public/assets/frontend/images/icons/clock-gray-12.svg') }}" alt="icon">
                                            <p class="in-subtitle-12px">{{date('h:i A', strtotime($appointment->date))}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="ca-subtitle-14px ca-text-dark text-nowrap">
                                            {{App\Models\User::where('id', $appointment->customer_id)->first()?->name}}
                                        </p>
                                    </td>
                                    <td class="min-w-140px">
                                        @php
                                            if($appointment->listing_type == 'car'){
                                                $listing = App\Models\CarListing::where('id', $appointment->listing_id)->first();
                                            }elseif($appointment->listing_type == 'beauty'){
                                                $listing = App\Models\BeautyListing::where('id', $appointment->listing_id)->first();
                                            }elseif($appointment->listing_type == 'hotel'){
                                                $listing = App\Models\HotelListing::where('id', $appointment->listing_id)->first();
                                            }elseif($appointment->listing_type == 'real-estate'){
                                                $listing = App\Models\RealEstateListing::where('id', $appointment->listing_id)->first();
                                            }elseif($appointment->listing_type == 'restaurant'){
                                                $listing = App\Models\RestaurantListing::where('id', $appointment->listing_id)->first();
                                            }
                                        @endphp
                                        <p class="ca-subtitle-14px ca-text-dark mb-2 line-1">
                                            {{$listing->title}}
                                        </p>
                                        <div class="d-flex align-items-center gap-2">
                                            <p class="badge-dark">{{App\Models\Category::where('id', $listing->category)->first()->name}}</p>
                                            {{-- <p class="badge-secondary-light">1 night</p> --}}
                                        </div>
                                    </td>
                                    <td class="min-w-110px">
                                        <p class="ca-subtitle-14px ca-text-dark mb-6px text-nowrap mb-2">{{$appointment->message}}</p>
                                        {{-- <p class="ca-subtitle-14px ca-text-dark mb-6px text-nowrap">Adult Guest : 03</p> --}}
                                    </td>
                                    <td>
                                        @if ($appointment->status == 1)
                                            <p class="badge-success-light">{{get_phrase('Successfully Ended')}}</p>
                                        @else
                                            <p class="badge-danger-light">{{get_phrase('Not start yet')}}</p>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn at-dropdown-icon-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{ asset('public/assets/frontend/images/icons/menu-dots-vertical-14.svg') }}" alt="icon">
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end ca-dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('agent.appointment.status',['id'=>$appointment->id, 'status'=>$appointment->status])}}">{{get_phrase('Chagne Status')}}</a></li>

                                            <li><a class="dropdown-item" href="{{route('listing.details',['type'=>$listing->type,'id'=>$listing->id,'slug'=>$listing->title])}}">{{get_phrase('View Listing')}}</a></li>

                                            <li><a class="dropdown-item" onclick="modal('modal-md', '{{route('agent.appointment.view_details',['id'=>$appointment->id, 'type'=>'phone'])}}', '{{get_phrase('Customer Phone Number')}}')" href="javascript:void(0)">{{get_phrase('Phone Number')}}</a></li>

                                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="modal('modal-md', '{{route('agent.appointment.view_details',['id'=>$appointment->id, 'type'=>'email'])}}', '{{get_phrase('Customer Email Address')}}')">{{get_phrase('Email Address')}}</a></li>

                                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="modal('modal-md', '{{route('agent.appointment.view_details',['id'=>$appointment->id, 'type'=>'zoom'])}}', '{{get_phrase('Customer Email Address')}}')">{{get_phrase('Metting Link')}}</a></li>

                                            <li><a class="dropdown-item" onclick="delete_modal('{{route('agent.appointment.delete',['id'=>$appointment->id])}}')" href="javascript:void(0)">{{get_phrase('Remove')}}</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.modal')


@endsection