@extends('layouts.frontend')
@section('title', get_phrase('Customer Wishlist'))
@section('frontend_layout')

    <!-- Start Main Area -->
    <section class="ca-wraper-main mb-90px">
        <div class="container">
            <div class="row gx-20px">
                <div class="col-lg-4 col-xl-3">
                    @include('user.navigation')
                </div>
                <div class="col-lg-8 col-xl-9">
                    <!-- Header -->
                    <div class="d-flex align-items-start justify-content-between gap-2 mb-20px">
                        <div class="d-flex justify-content-between align-items-start gap-12px flex-column flex-lg-row w-100">
                            <h1 class="in-title-16px">Wishlist</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb cap-breadcrumb">
                                  <li class="breadcrumb-item cap-breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item cap-breadcrumb-item active" aria-current="page">Wishlist</li>
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
                        <!-- Table Start -->
                        <div class="table-responsive pb-1">
                            <table class="table ca-table ca-table-width">
                                <thead class="ca-thead">
                                  <tr class="ca-tr">
                                    <th scope="col" class="ca-title-14px ca-text-dark">Image</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark">Name</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark">Location</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark">Price</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody class="ca-tbody">
                                  <tr class="ca-tr">
                                    <td>
                                        <div class="sm2-banner-wrap">
                                            <img src="{{ asset('public/assets/frontend/images/customer-agent/product-banner-1.png') }}" alt="banner">
                                        </div>
                                    </td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">Ulysses S. Grant palace</td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">3517 W. Gray St. Utica</td>
                                    <td class="ca-subtitle-14px ca-text-dark text-nowrap">$50.00</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="dropdown">
                                                <button class="btn at-dropdown-icon-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{ asset('public/assets/frontend/images/icons/menu-dots-vertical-14.svg') }}" alt="icon">
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end at-dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit Listing</a></li>
                                                <li><a class="dropdown-item" href="#">Hide Listing</a></li>
                                                <li><a class="dropdown-item" href="#">Remove Listing</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr class="ca-tr">
                                    <td>
                                        <div class="sm2-banner-wrap">
                                            <img src="{{ asset('public/assets/frontend/images/customer-agent/product-banner-2.png') }}" alt="banner">
                                        </div>
                                    </td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">Grand Palace</td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">2464 Royal Ln. Mesa</td>
                                    <td class="ca-subtitle-14px ca-text-dark text-nowrap">$50.00</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="dropdown">
                                                <button class="btn at-dropdown-icon-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{ asset('public/assets/frontend/images/icons/menu-dots-vertical-14.svg') }}" alt="icon">
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end at-dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit Listing</a></li>
                                                <li><a class="dropdown-item" href="#">Hide Listing</a></li>
                                                <li><a class="dropdown-item" href="#">Remove Listing</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr class="ca-tr">
                                    <td>
                                        <div class="sm2-banner-wrap">
                                            <img src="{{ asset('public/assets/frontend/images/customer-agent/product-banner-3.png') }}" alt="banner">
                                        </div>
                                    </td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">Grand Castel</td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">4140 Parker Rd. Allentown</td>
                                    <td class="ca-subtitle-14px ca-text-dark text-nowrap">$50.00</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="dropdown">
                                                <button class="btn at-dropdown-icon-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{ asset('public/assets/frontend/images/icons/menu-dots-vertical-14.svg') }}" alt="icon">
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end at-dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Edit Listing</a></li>
                                                <li><a class="dropdown-item" href="#">Hide Listing</a></li>
                                                <li><a class="dropdown-item" href="#">Remove Listing</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Area -->

@endsection