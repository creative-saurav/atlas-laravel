@extends('layouts.frontend')
@section('title', get_phrase('Messages'))
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
                            <h1 class="in-title-16px">{{get_phrase('Messages')}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb cap-breadcrumb">
                                  <li class="breadcrumb-item cap-breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item cap-breadcrumb-item active" aria-current="page">{{get_phrase('Messages')}}</li>
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
                    <style>
                        .horigontal-border {
                            border-right: 1px solid #333;
                        }
                        .message-thread {
                            width: 100%;
                            cursor: pointer;
                            border-radius: 5px;
                            padding: 10px;
                        }
                        .message-thread:hover {
                            background-color: #F7F8FA;
                            transition: 0.6s;
                            color: #fff;
                        }
                    </style>
                    <div class="ca-content-card">
                        <div class="row">
                            <div class="col-sm-4 horigontal-border">
                                <h4 class="in-title-16px"> Messages </h4>
                                <ul class="mt-4">
                                    <li>
                                        <a href="" class="d-flex align-items-center message-thread">
                                            <div class="circle-img-50px">
                                                <img src="{{get_image('dklj')}}" width="50px" height="50px" alt="">
                                            </div>
                                            <div class="ps-2">
                                                <h2 class="in-title-14px mb-2"> name </h2>
                                                <p class="in-subtitle-14px text-break">time</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-8">
                                <h4 class="in-title-16px"> Name </h4>
                                <div class="mt-4">
                                    <ul>
                                        <li class="circle-img-50px d-flex align-items-center my-2">
                                            <img src="{{get_image('dklj')}}" width="50px" height="50px" alt="">
                                            <div class="ps-2">
                                                <h2 class="in-title-14px mb-2"> name </h2>
                                                <p class="in-subtitle-14px text-break">time</p>
                                            </div>
                                        </li>
                                        <li class="w-100 my-2">
                                            <div class="d-flex align-items-center circle-img-50px me-5 float-end">
                                                <div class="pe-2">
                                                    <h2 class="in-title-14px mb-2"> name </h2>
                                                    <p class="in-subtitle-14px text-break">time</p>
                                                </div>
                                                <img src="{{get_image('dklj')}}" width="50px" height="50px" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="input-group mb-3 pt-5 w-100">
                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                              <button type="submit" class="input-group-text p-3 px-4" id="basic-addon2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                                                </svg>
                                              </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection