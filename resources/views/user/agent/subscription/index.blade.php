@extends('layouts.frontend')
@section('title', get_phrase('Agent Subscription'))
@section('frontend_layout')
@php use Carbon\Carbon; @endphp
@include('user.agent.subscription.style')
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
                        <h1 class="ca-title-18px">{{get_phrase('Agent Subscription')}}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb cap-breadcrumb">
                                <li class="breadcrumb-item cap-breadcrumb-item"><a href="#">{{get_phrase('Home')}}</a></li>
                                <li class="breadcrumb-item cap-breadcrumb-item active" aria-current="page">{{get_phrase('subscription')}}</li>
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
                <div class="dl_column_content d-flex flex-column rg-30">
                    @if($expiry_status)
                    <div class="dl_column_item pt-22 px-30 pb-30 boxShadow-06 bg-white">
                        <div class="d-flex justify-content-between align-items-center flex-wrap pb-22 mb-30 bd-b-1">
                            <!-- Title -->
                            <div class="tableTitle-3">
                                <h4 class="fz-20-sb-black pb-10">{{ get_phrase($current_package->name).' '.get_phrase('Account') }}</h4>
                                <p class="fz-15-r-gray">{{ get_phrase($current_package->sub_title).' - '.ucwords(get_phrase($current_package->period)).' '.get_phrase('plan') }}</p>
                            </div>
                            <!-- Button -->  
                        </div>
                        <p class="fz-15-r-gray">
                            {{ get_phrase('Your current package price is') }}
                            @php $date = date('M d, Y, h:m a', strtotime($current_subscription->expire_date)); @endphp
                            <span class="fz-24-b-black">{{ currency($current_package->price) }}.</span> {{ get_phrase('It will exipired on ') }} {{ $date }}
                        </p>
                    </div>
                    @else
                    <div class="dl_column_item pt-22 px-30 pb-30 boxShadow-06 bg-white">
                        <!-- Title -->
                        <div class="tableTitle-3 pb-20 mb-30 bd-b-1">
                            <h4 class="fz-20-sb-black pb-10">{{ get_phrase('Expired Subscription') }}</h4>
                        </div>
                        <!-- Expired Content -->
                        <div class="subscription-expired px-30 py-30 bd-r-5">
                            <h3 class="fz-18-sb-black pb-10">
                                {{ get_phrase('Your subscription has expired') }}
                            </h3>
                            <p class="fz-15-r-gray pb-30">
                                {{ get_phrase('Your package has expired, please renew your package') }}.
                            </p>
                            <a href="{{route('customer.become_an_agent')}}" onclick="renew_subscription()" class="eBtn expired-btn">{{ get_phrase('Renew Subscription') }}</a>
                        </div>
                    </div>
                    @endif
                    <!-- Payment Method -->
                    <div class="dl_column_item pt-22 px-30 pb-30 boxShadow-06 bg-white">
                        <!-- Title -->
                        <div class="tableTitle-3 pb-22 mb-25 bd-b-1">
                            <h4 class="fz-20-sb-black">{{ get_phrase('Payment Method') }}</h4>
                        </div>
                        <!-- Card Info -->
                        <div class="card-info d-flex align-items-center g-8 mt-3">
                            <div class="icon text-black fz-15-r-gray">
                                <i class="fas fa-credit-card me-2"></i>
                            </div>
                            <p class="fz-15-r-gray">{{ ucfirst($current_subscription->payment_method) }}</p>
                        </div>
                    </div>
                    <!-- Invoicing -->
                    <div class="dl_column_item pt-22 px-30 pb-30 boxShadow-06 bg-white">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <!-- Title -->
                            <div class="tableTitle-3">
                                <h4 class="fz-20-sb-black pb-10">{{ get_phrase('Invoicing') }}</h4>
                                @php $last_payment_date = date('d-m-Y', strtotime($current_subscription->created_at)); @endphp
                                <p class="fz-15-r-gray">{{ get_phrase('Last payment:').' ' }}{{ $last_payment_date }}</p>
                            </div>
                            <!-- Button -->
                            <a href="{{ route('modifyBilling') }}" class="modify-bill"
                                >{{ get_phrase('Modify Billing Information') }}</a
                                >
                        </div>
                    </div>
                    <!-- Billing History -->
                    <div class="dl_column_item pt-22 px-30 pb-30 boxShadow-06 bg-white">
                        <!-- Title -->
                        <div class="tableTitle-3">
                            <h4 class="fz-20-sb-black">{{ get_phrase('Billing History') }}</h4>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table eTable eTable-2 last_t_cell table-pb0">
                                <!-- Table Head -->
                                <thead>
                                    <tr>
                                        <th scope="col">{{ get_phrase('Package') }}</th>
                                        <th scope="col">{{ get_phrase('Reference') }}</th>
                                        <th scope="col">{{ get_phrase('Date') }}</th>
                                        <th scope="col">{{ get_phrase('Price') }}</th>
                                        <th scope="col">{{ get_phrase('Status') }}</th>
                                        <th scope="col">{{ get_phrase('Download') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_subscription as $row)
                                    @php
                                    $today = date("Y-m-d");
                                    $today_time = strtotime($today);
                                    $expiry_status = strtotime($row->expire_date) < $today_time;
                                    $created_at = date('d M Y', strtotime($row->created_at));
                                    $expire_date = date('d M Y', strtotime($row->expire_date));
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="dl_table_package">
                                                <h4 class="fz-15-m-black">{{ App\Models\Pricing::where('id', $row->package_id)->first()->name }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dl_property_id">
                                                <p>{{ $created_at }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="dl_property_time d-flex flex-column g-8"
                                                >
                                                <span class="eBadge-2">{{ $expire_date }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dl_table_package">
                                                <h4 class="fz-15-sb-black">{{ currency($row->paid_amount) }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            @if($expiry_status)
                                            <div class="subscription_deactive_status text-center">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            @else
                                            <div class="subscription_active_status text-cetner">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="tDownloadIcon">
                                                <a class="invoiceTag" href="{{ route('subscriptionInvoice', ['id' => $row->id]) }}" target="_blank"><i class="fas fa-download"></i></a>
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
    </div>
    </div>
</section>
@endsection