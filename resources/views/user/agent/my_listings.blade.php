@extends('layouts.frontend')
@section('title', get_phrase('Agent Listings'))
@section('frontend_layout')

<style>
    .fs-14px{
        font-size: 14px !important;
    }
    #delete-modal p {
        font-size: 14px;
    }
</style>

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
                            <h1 class="ca-title-18px">Booking</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb cap-breadcrumb">
                                  <li class="breadcrumb-item cap-breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item cap-breadcrumb-item active" aria-current="page">Booking</li>
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
                        <div class="mb-20px d-flex align-items-center column-gap-3 row-gap-3 justify-content-between flex-wrap">
                            <form action="">
                                <div class="d-flex column-gap-3 row-gap-2 flex-wrap">
                                    <select class="at-nice-select sm-secondary-niceselect">
                                        <option selected>Name</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="at-nice-select sm-secondary-niceselect">
                                        <option selected>Location</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="at-nice-select sm-secondary-niceselect">
                                        <option selected>Visibility</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <button type="submit" class="cap2-btn-primary cap-btn-sm gap-1">
                                        <img src="{{ asset('public/assets/frontend/images/icons/filter-white-18.svg') }}" alt="">
                                        <span>Filter</span>
                                    </button>
                                </div>
                            </form>
                            <a href="{{route('agent.add.listing')}}" class="btn cap2-btn-primary d-flex gap-6px align-items-center">
                                <span class="fi-rr-plus"></span>
                                <span>{{get_phrase('Add Listing')}}</span>
                            </a>
                        </div>
                        <!-- Table Start -->
                        <div class="table-responsive pb-1">
                            <table class="table ca-table ca-table-width">
                                <thead class="ca-thead">
                                  <tr class="ca-tr">
                                    <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Image')}}</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Name')}}</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Type')}}</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Location')}}</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark">{{get_phrase('Status')}}</th>
                                    <th scope="col" class="ca-title-14px ca-text-dark text-center">{{get_phrase('Action')}}</th>
                                  </tr>
                                </thead>
                                <tbody class="ca-tbody">
                                    @foreach ($listings as $listing)    
                                    <tr class="ca-tr">
                                      <td>
                                          <div class="sm2-banner-wrap">
                                              <img src="{{get_image('public/storage/listing-images/'.json_decode($listing->image)[0]??0)}}" alt="banner">
                                          </div>
                                      </td>
                                      <td class="ca-subtitle-14px ca-text-dark min-w-110px">{{$listing->title}}</td>
                                      <td class="ca-subtitle-14px ca-text-dark min-w-110px">{{ucwords($listing->type)}}</td>
                                      <td class="ca-subtitle-14px ca-text-dark min-w-110px">{{$listing->address}}</td>
                                      <td>
                                          <p class="badge-{{$listing->visibility == 'hidden'?'danger':'success'}}-light">{{$listing->visibility}}</p>
                                      </td>
                                      <td>
                                          <div class="d-flex justify-content-center">
                                              <div class="dropdown">
                                                  <button class="btn at-dropdown-icon-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{ asset('public/assets/frontend/images/icons/menu-dots-vertical-14.svg') }}" alt="icon">
                                                  </button>
                                                  <ul class="dropdown-menu dropdown-menu-end at-dropdown-menu">
                                                  <li><a class="dropdown-item" href="{{route('user.listing.edit',['id'=>$listing->id,'type'=>$listing->type,'tab'=>'basic'])}}">{{get_phrase('Edit Listing')}}</a></li>

                                                  <li><a class="dropdown-item" href="{{route('user.listing.status',['type'=>$listing->type, 'id'=>$listing->id, 'status'=>$listing->visibility])}}">{{$listing->visibility == 'hidden'?get_phrase('Visiable'):get_phrase('Hide')}} {{get_phrase('Listing')}}</a></li>

                                                  <li><a class="dropdown-item" onclick="delete_modal('{{route('user.listing.delete',['type'=>$listing->type, 'id'=>$listing->id])}}')" href="javascript:void(0);">{{get_phrase('Remove Listing')}}</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </td>
                                    </tr>
                                    @endforeach
                                  {{-- <tr class="ca-tr">
                                    <td>
                                        <div class="sm2-banner-wrap">
                                            <img src="{{ asset('public/assets/frontend/images/customer-agent/product-banner-2.png') }}" alt="banner">
                                        </div>
                                    </td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">Grand Palace</td>
                                    <td class="ca-subtitle-14px ca-text-dark min-w-110px">2464 Royal Ln. Mesa</td>
                                    <td class="ca-subtitle-14px ca-text-dark text-nowrap">$50.00</td>
                                    <td>
                                        <p class="badge-danger-light">Hidden</p>
                                    </td>
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
                                        <p class="badge-danger-light">Hidden</p>
                                    </td>
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
                                  </tr> --}}
                                </tbody>
                            </table>
                            <style>
                                .pagination .page-link {
                                    border: 0 !important;
                                    color: #000 !important;
                                }
                                .pagination .active .page-link {
                                    background-color: #242D47 !important;
                                    color: #fff !important;
                                    border-radius: 5px;
                                }
                                .pagination .disabled .page-link {
                                    background-color: none !important;
                                }
                                .pagination .page-link:last-child {
                                    background-color: none !important;
                                }
                            </style>
                            <!-- Pagination -->
                            <div class="mt-20px d-flex align-items-center gap-3 justify-content-between flex-wrap pagination">
                                <p class="in-subtitle-12px">Showing 1 to 5 of 5 entries</p>
                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                    {{$listings->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Area -->
    
@include('layouts.modal')
@endsection