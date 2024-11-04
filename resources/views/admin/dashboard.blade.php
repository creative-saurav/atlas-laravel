@extends('layouts.admin')
@section('title', get_phrase('Admin Dashboard'))
@section('admin_layout')

<div class="row g-2 g-sm-3 mb-3 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="sub-title fs-14px mb-2">All</p>
                <p class="title card-title-hover fs-18px">6,255</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="sub-title fs-14px mb-2">Refunded</p>
                <p class="title card-title-hover fs-18px">12</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="sub-title fs-14px mb-2">Succeeded</p>
                <p class="title card-title-hover fs-18px">3,665</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="sub-title fs-14px mb-2">Uncaptured</p>
                <p class="title card-title-hover fs-18px">6,255</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm">
        <div class="ol-card card-hover">
            <div class="ol-card-body px-20px py-3">
                <p class="sub-title fs-14px mb-2">Failed</p>
                <p class="title card-title-hover fs-18px">0</p>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <!-- Chart Item -->
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <div class="ol-card h-100">
            <div class="ol-card-body p-4">
                <div class="chart-sm-item d-flex g-14px align-items-end justify-content-between">
                    <div class="chart-sm-details">
                        <h5 class="title fs-16px mb-2">Total Orders</h5>
                        <p class="sub-title fs-14px mb-30px">Last 7 days</p>
                        <h3 class="title fs-30px mb-3">25.7K</h3>
                        <div class="d-flex column-gap-2">
                            <p class="chart-percentage green d-flex align-items-center column-gap-1 sub-title fs-14px">
                                <span class="arrow"></span>
                                <span>6%</span>
                            </p>
                            <p class="sub-title fs-14px">vs last 7 days</p>
                        </div>
                    </div>
                    <div class="chart-sm-chart-wrap">
                        <div id="area6" class="chart-sm-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart Item -->
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <div class="ol-card h-100">
            <div class="ol-card-body p-4">
                <div class="chart-sm-item d-flex g-14px align-items-end justify-content-between">
                    <div class="chart-sm-details">
                        <h5 class="title fs-16px mb-2">Total Customer</h5>
                        <p class="sub-title fs-14px mb-30px">Last 7 days</p>
                        <h3 class="title fs-30px mb-3">50K</h3>
                        <div class="d-flex column-gap-2">
                            <p class="chart-percentage green d-flex align-items-center column-gap-1 sub-title fs-14px">
                                <span class="arrow"></span>
                                <span>12%</span>
                            </p>
                            <p class="sub-title fs-14px">vs last 7 days</p>
                        </div>
                    </div>
                    <div class="chart-sm-chart-wrap">
                        <div id="area7" class="chart-sm-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart Item -->
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <div class="ol-card h-100">
            <div class="ol-card-body p-4">
                <div class="chart-sm-item d-flex g-14px align-items-end justify-content-between">
                    <div class="chart-sm-details">
                        <h5 class="title fs-16px mb-2">Total Category</h5>
                        <p class="sub-title fs-14px mb-30px">Last 7 days</p>
                        <h3 class="title fs-30px mb-3">12K</h3>
                        <div class="d-flex column-gap-2">
                            <p class="chart-percentage red d-flex align-items-center column-gap-1 sub-title fs-14px">
                                <span class="arrow"></span>
                                <span>2%</span>
                            </p>
                            <p class="sub-title fs-14px">vs last 7 days</p>
                        </div>
                    </div>
                    <div class="chart-sm-chart-wrap">
                        <div id="area8" class="chart-sm-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-24px">
    <div class="col-md-7">
        <div class="ol-card">
            <div class="ol-card-body p-4">
                <!-- Title Area -->
                <div class="mb-20px d-flex cg-20px">
                    <div>
                        <h3 class="title fs-18px mb-2">Category wise product sale</h3>
                        <p class="sub-title fs-14px">Last 7 Days</p>
                    </div>
                    <div class="dropdown ol-icon-dropdown ol-icon-dropdown-transparent ms-auto">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fi-rr-menu-dots-vertical"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">View</a></li>
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <ul class="nav nav-pills insights-nav-pills mb-20px" id="pills-tab2" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-customers-tab" data-bs-toggle="pill" data-bs-target="#pills-customers" type="button" role="tab" aria-controls="pills-customers" aria-selected="true">
                            <span class="title fs-20px d-block mb-2">24k</span>
                            <span class="sub-title fs-12px">Customers</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-totalp-tab" data-bs-toggle="pill" data-bs-target="#pills-totalp" type="button" role="tab" aria-controls="pills-totalp" aria-selected="false">
                            <span class="title fs-20px d-block mb-2">3.5k</span>
                            <span class="sub-title fs-12px">Total Products</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-stockp-tab" data-bs-toggle="pill" data-bs-target="#pills-stockp" type="button" role="tab" aria-controls="pills-stockp" aria-selected="false">
                            <span class="title fs-20px d-block mb-2">2.5k</span>
                            <span class="sub-title fs-12px">Stock Products</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-outofs-tab" data-bs-toggle="pill" data-bs-target="#pills-outofs" type="button" role="tab" aria-controls="pills-outofs" aria-selected="false">
                            <span class="title fs-20px d-block mb-2">0.5k</span>
                            <span class="sub-title fs-12px">Out of Stock</span>
                          </button>
                        </li>   
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-revenue-tab" data-bs-toggle="pill" data-bs-target="#pills-revenue" type="button" role="tab" aria-controls="pills-revenue" aria-selected="false">
                            <span class="title fs-20px d-block mb-2">250k</span>
                            <span class="sub-title fs-12px">Revenue</span>
                          </button>
                        </li>   
                    </ul>
                    <div class="tab-content" id="pills-tab2Content">
                        <div class="tab-pane fade show active" id="pills-customers" role="tabpanel" aria-labelledby="pills-customers-tab" tabindex="0">
                            <div id="area1" class="area-chart-lg"></div>
                        </div>
                        <div class="tab-pane fade" id="pills-totalp" role="tabpanel" aria-labelledby="pills-totalp-tab" tabindex="0">
                            <div id="area2" class="area-chart-lg"></div>
                        </div>
                        <div class="tab-pane fade" id="pills-stockp" role="tabpanel" aria-labelledby="pills-stockp-tab" tabindex="0">
                            <div id="area3" class="area-chart-lg"></div>
                        </div>
                        <div class="tab-pane fade" id="pills-outofs" role="tabpanel" aria-labelledby="pills-outofs-tab" tabindex="0">
                            <div id="area4" class="area-chart-lg"></div>
                        </div>
                        <div class="tab-pane fade" id="pills-revenue" role="tabpanel" aria-labelledby="pills-revenue-tab" tabindex="0">
                            <div id="area5" class="area-chart-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="ol-card mb-20px">
            <div class="ol-card-body p-4">
                <div class="d-flex align-items-center g-30px flex-wrap flex-xl-nowrap justify-content-center">
                    <div class="pie-chart-sm">
                        <canvas id="pie1"></canvas>
                    </div>
                    <div class="pie-chart-sm-details">
                        <h4 class="title fs-18px mb-20px">Product</h4>
                        <ul class="color-info-list">
                            <li>
                                <span class="info-list-color" style="--pie-bg:#0095FF"></span>
                                <span class="title2 fs-14px">Total published</span>
                            </li>
                            <li>
                                <span class="info-list-color" style="--pie-bg:#4BC483"></span>
                                <span class="title2 fs-14px">Total sellers</span>
                            </li>
                            <li>
                                <span class="info-list-color" style="--pie-bg:#E5E5E5"></span>
                                <span class="title2 fs-14px">Total admin</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ol-card">
            <div class="ol-card-body p-4">
                <div class="d-flex align-items-center g-30px flex-wrap flex-xl-nowrap justify-content-center">
                    <div class="pie-chart-sm">
                        <canvas id="pie2"></canvas>
                    </div>
                    <div class="pie-chart-sm-details">
                        <h4 class="title fs-18px mb-20px">Product</h4>
                        <ul class="color-info-list">
                            <li>
                                <span class="info-list-color" style="--pie-bg:#884DFF"></span>
                                <span class="title2 fs-14px">Total approved</span>
                            </li>
                            <li>
                                <span class="info-list-color" style="--pie-bg:#0095FF"></span>
                                <span class="title2 fs-14px">Total sellers</span>
                            </li>
                            <li>
                                <span class="info-list-color" style="--pie-bg:#E5E5E5"></span>
                                <span class="title2 fs-14px">Total pending</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection