@extends('layouts.frontend')
@section('title', get_phrase('Update Listing'))
@section('frontend_layout')

<style>
.possition_relative {
    position: relative;
    margin-right: 15px;
    margin-top: 11px;
}
.possition_relative i {
    position: absolute;
    top: -12px;
    right: -10px;
    color: #fff;
    background-color: red;
    padding: 7px;
    cursor: pointer;
    border-radius: 50px;
    font-size: 12px;
}
.team-checkbox {
    position: relative;
}
.team-checkbox .card-title {
    font-size: 14px;
    font-weight: 600;
    padding: 0;
    margin: 0;
}
.team-checkbox .card-text {
    font-size: 12px;
}
.team-checkbox .card-text {
    font-size: 12px;
}
.team-checkbox .team-body .checked {
    position: absolute;
    top: 2px;
    right: 5px;
}
.team-checkbox .team-body .checked i {
    background-color: #1B84FF;
    padding: 7px 5px;
    border-radius: 50px;
    color: #fff;
    font-size: 10px;
}
.team-checkbox img {
    height: 65px;
    width: 100px;
    object-fit: cover;
    border-radius: 5px;
}
</style>

<section class="mb-90px mt-4">
    <div class="container">
        <div class="row gx-20px">
            <div class="col-lg-4 col-xl-3">
                @include('user.navigation')
            </div>
            <div class="col-lg-8 col-xl-9">
                <!-- Header -->
                <div class="d-flex align-items-start justify-content-between gap-2 mb-20px">
                    <div class="d-flex justify-content-between align-items-start gap-12px flex-column flex-lg-row w-100">
                        <h1 class="ca-title-18px">{{get_phrase('Update').' '.ucwords($listing->type).' '.get_phrase('Listing')}}</h1>
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
                <div class="ca-content-card p-4">
                    <ul class="nav nav-pills cap-nav-pills mb-20px" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-basic-info-tab" data-bs-toggle="pill" data-bs-target="#pills-basic-info" type="button" role="tab" aria-controls="pills-basic" aria-selected="true">{{get_phrase('Basic Info')}}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-services-tab" data-bs-toggle="pill" data-bs-target="#pills-services" type="button" role="tab" aria-controls="pills-services" aria-selected="true">{{get_phrase('Services')}}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-open-time-tab" data-bs-toggle="pill" data-bs-target="#pills-open-time" type="button" role="tab" aria-controls="pills-open-time" aria-selected="true">{{get_phrase('Open Time')}}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-team-members-tab" data-bs-toggle="pill" data-bs-target="#pills-team-members" type="button" role="tab" aria-controls="pills-team-members" aria-selected="true">{{get_phrase('Team Members')}}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill" data-bs-target="#pills-address" type="button" role="tab" aria-controls="pills-address" aria-selected="false">{{get_phrase('Address')}}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false">{{get_phrase('Seo')}}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-media-tab" data-bs-toggle="pill" data-bs-target="#pills-media" type="button" role="tab" aria-controls="pills-media" aria-selected="false">{{get_phrase('Media')}}</button>
                        </li>
                    </ul>
                    <form action="{{route('user.listing.update',['type'=>'beauty','id'=>$listing->id])}}" id="form-action" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="is_agent" value="1">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-basic-info" role="tabpanel" aria-labelledby="pills-basic-info-tab" tabindex="0">
                            <input type="hidden" name="is_agent" value="1">
                            <div class="mb-2">
                                <label for="title" class="form-label cap-form-label"> {{get_phrase('Listing title')}} *</label>
                                <input type="text" class="form-control cap-form-control" name="title" id="title" value="{{$listing->title}}" required>
                            </div>
                            <div class="mb-2">
                                <label for="category" class="form-label cap-form-label"> {{get_phrase('category')}} *</label>
                                <select name="category" id="category" class="at-select2 cap-select2 select2-hidden-accessible" data-select2-id="select2-data-1-2ry6" tabindex="-1" aria-hidden="true">
                                    <option value=""> {{get_phrase('Select listing category')}} </option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $listing->category?'selected':''}}> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="engine_size" class="form-label cap-form-label"> {{get_phrase('Description')}} *</label>
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control cap-form-control" placeholder="{{get_phrase('Enter listing description')}}">{{$listing->description}}</textarea>
                            </div>
                            <div class="mb-2">
                                <label for="visibility" class="form-label cap-form-label"> {{get_phrase('Visibility')}} *</label>
                                <select name="visibility" id="visibility" class="at-select2 cap-select2 select2-hidden-accessible" data-select2-id="select2-data-1-2ry7" tabindex="-1" aria-hidden="true">
                                    <option value=""> {{get_phrase('Select listing visibility')}} </option>
                                    <option value="visible" {{'visible' == $listing->visibility?'selected':''}}> {{get_phrase('Visible')}} </option>
                                    <option value="hidden" {{'hidden' == $listing->visibility?'selected':''}}> {{get_phrase('Hidden')}} </option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="latitude" class="form-label cap-form-label"> {{get_phrase('Latitude')}} *</label>
                                <input type="text" name="latitude" id="latitude" class="form-control cap-form-control" value="{{$listing->Latitude}}" placeholder="{{get_phrase('Enter Latitude code')}}" >
                            </div>
                            <div class="mb-2">
                                <label for="longitude" class="form-label cap-form-label"> {{get_phrase('Longitude')}} *</label>
                                <input type="text" name="longitude" id="longitude" value="{{$listing->Longitude}}" class="form-control cap-form-control" placeholder="{{get_phrase('Enter longitude code')}}" >
                            </div>
                            <div class="mt-3">
                                <link rel="stylesheet" href="{{asset('public/assets/backend/css/leaflet.css')}}">
                                <script src="{{asset('public/assets/backend/js/leaflet.js')}}"></script>
                                <div id="map" class="rounded" style="height: 400px;"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-services" role="tabpanel" aria-labelledby="pills-services-info" tabindex="0">
                           
                            @php $services = App\Models\Amenities::where('type', 'beauty')->where('identifier', 'service')->get(); @endphp
                            <div class="row">
                                @foreach ($services as $key => $service)    
                                <div class="col-sm-3">
                                    <input class="form-check-input d-none" name="service[]" type="checkbox" value="{{$service->id}}" id="flexCheckDefau{{$key}}" @if($listing->service && $listing->service != 'null' && in_array($service->id, json_decode($listing->service))) checked @endif>
                                    <label class="form-check-label w-100" onclick="service_select('{{$key}}')" for="flexCheckDefau{{$key}}">
                                        <div class="card mb-3 team-checkbox">
                                            <div class="col-md-8 team-body">
                                                <div class="card-body py-2 px-2 ms-1">
                                                    <p class="card-title line-1"> {{$service->name}} </p>
                                                    <p class="card-text line-1"> {{$service->time}} </p>
                                                    <p class="card-text"> {{get_phrase('From').' '.currency($service->price)}} </p>
                                                </div>
                                                <div class="checked @if($listing->service && $listing->service != 'null' && in_array($service->id, json_decode($listing->service))) @else d-none @endif" id="service-checked{{$key}}">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                @endforeach
                            </div>


                        </div>
                        <div class="tab-pane fade" id="pills-open-time" role="tabpanel" aria-labelledby="pills-open-time-tab" tabindex="0">
                            <div class="row justify-content-center">
                                <div class="col-sm-5">
                                    @php
                                    if(json_decode($listing->opening_time)){
                                        $opening_times = json_decode($listing->opening_time);
                                    }else{
                                        $times = '{"saturday":{"open":"closed","close":"closed"},"sunday":{"open":"closed","close":"closed"},"monday":{"open":"closed","close":"closed"},"tuesday":{"open":"closed","close":"closed"},"wednesday":{"open":"closed","close":"closed"},"thursday":{"open":"closed","close":"closed"},"friday":{"open":"closed","close":"closed"}}';
                                        $opening_times = json_decode($times);
                                    }
                                    @endphp
                                    @foreach ($opening_times as $key => $day)
                                    <div class="mb-2">
                                        <label for="{{$key}}_open" class="form-label cap-form-label"> {{ucwords($key).' '.get_phrase('Opening')}} </label>
                                        <select name="{{$key}}_open" id="{{$key}}}_open" class="form-control cap-form-control ol-select2" required data-minimum-results-for-search="Infinity">
                                            <option value="closed"><?php echo get_phrase('Closed'); ?></option>
                                            <?php for($i = 0; $i < 24; $i++): ?>
                                                <option value="<?php echo $i; ?>" {{$day->open == $i?'selected':''}}><?php echo date('h:i A', strtotime("$i:00:00")) ?></option>
                                                <option value="<?php echo $i.':30'; ?>" {{$day->open == $i.':30'?'selected':''}}> <?php echo date('h:i A', strtotime("$i:30:00")) ?> </option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-sm-5">
                                    @foreach ($opening_times as $key => $day)  
                                    <div class="mb-2">
                                        <label for="{{$key}}_close" class="form-label cap-form-label"> {{ucwords($key).' '.get_phrase('Opening')}} </label>
                                        <select name="{{$key}}_close" id="{{$key}}}_close" class="form-control cap-form-control cap-select2" required data-minimum-results-for-search="Infinity">
                                            <option value="closed"><?php echo get_phrase('Closed'); ?></option>
                                            <?php for($i = 0; $i < 24; $i++): ?>
                                                <option value="<?php echo $i; ?>" {{$day->close == $i?'selected':''}}><?php echo date('h:i A', strtotime("$i:00:00")) ?></option>
                                                <option value="<?php echo $i.':30'; ?>" {{$day->close == $i.':30'?'selected':''}}> <?php echo date('h:i A', strtotime("$i:30:00")) ?> </option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-team-members" role="tabpanel" aria-labelledby="pills-team-members-tab" tabindex="0">
                            @php
                                $teams = App\Models\Amenities::where('type', 'beauty')->where('identifier', 'team')->get();
                            @endphp
                            <div class="row">
                                @foreach ($teams as $key => $team)    
                                <div class="col-sm-3">
                                    
                                    <input class="form-check-input d-none" name="team[]" type="checkbox" value="{{$team->id}}" id="flexCheckDefault{{$key}}" @if($listing->team && $listing->team != 'null' && in_array($team->id, json_decode($listing->team))) checked @endif>
                                    <label class="form-check-label w-100" onclick="team_select('{{$key}}')" for="flexCheckDefault{{$key}}">
                                        <div class="card mb-3 team-checkbox">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img class="object-fit" src="{{get_image('public/storage/team/'.$team->image)}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8 team-body">
                                                    <div class="card-body py-0 px-2">
                                                        <p class="card-title line-1"> {{$team->name}} </p>
                                                        <p class="card-text line-1"> {{$team->designation}} </p>
                                                    </div>
                                                    <div class="checked @if($listing->team && $listing->team != 'null' && in_array($team->id, json_decode($listing->team))) @else d-none @endif" id="team-checked{{$key}}">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-address" role="tabpanel" aria-labelledby="pills-address-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                        <label for="engine_size" class="form-label cap-form-label"> {{get_phrase('Country')}} *</label>
                                        <select name="country" id="country" class="at-select2 cap-select2 select2-hidden-accessible" data-select2-id="select2-data-1-2ry8" tabindex="-1" aria-hidden="true">
                                            <option value=""> {{get_phrase('Select listing country')}} </option>
                                            @foreach (App\Models\Country::get() as $country)
                                                <option value="{{$country->id}}" {{$country->id == $listing->country?'selected':''}}> {{get_phrase($country->name)}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                        <label for="city" class="form-label cap-form-label"> {{get_phrase('City')}} *</label>
                                        <select name="city" id="city" class="at-select2 cap-select2 select2-hidden-accessible" data-select2-id="select2-data-1-2ry9" tabindex="-1" aria-hidden="true">
                                            <option value="{{$listing->city}}"> {{App\Models\City::where('id', $listing->city)->first()?->name}} {{$listing->id}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="address" class="form-label cap-form-label"> {{get_phrase('Address')}} *</label>
                                <textarea name="address" id="address" cols="30" rows="3" class="form-control cap-form-control" placeholder="{{get_phrase('Enter listing address')}}" >{{$listing->address}}</textarea>
                            </div>
                            <div class="mb-2">
                                <label for="post_code" class="form-label cap-form-label"> {{get_phrase('Post Code')}} *</label>
                                <input type="text" name="post_code" id="post_code" class="form-control cap-form-control" value="{{$listing->postal_code}}" placeholder="{{get_phrase('Enter post code')}}" >
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab" tabindex="0">
                            <div class="mb-2">
                                <label for="meta_title" class="form-label cap-form-label"> {{get_phrase('Meta Title')}}</label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control cap-form-control" value="{{$listing->meta_title}}" placeholder="{{get_phrase('Enter meta title')}}" >
                            </div>
                            <div class="mb-2">
                                <label for="keyword" class="form-label cap-form-label"> {{get_phrase('Meta keywords')}}</label>
                                <input type="text" name="keyword" id="keyword" class="form-control cap-form-control" value="{{$listing->meta_keyword}}" placeholder="{{get_phrase('Keyword1; keyword2; keyword3;')}}" >
                            </div>
                            <div class="mb-2">
                                <label for="meta_description" class="form-label cap-form-label"> {{get_phrase('Meta Description')}} *</label>
                                <textarea name="meta_description" id="meta_description" cols="30" rows="3" class="form-control cap-form-control" placeholder="{{get_phrase('Enter meta description')}}" >{{$listing->meta_description}}</textarea>
                            </div>
                            <div class="mb-2">
                                <label for="og_title" class="form-label cap-form-label"> {{get_phrase('OG title')}}</label>
                                <input type="text" name="og_title" id="og_title" class="form-control cap-form-control" value="{{$listing->og_title}}" placeholder="{{get_phrase('Enter og title')}}" >
                            </div>
                            <div class="mb-2">
                                <label for="canonical_url" class="form-label cap-form-label"> {{get_phrase('Canonical URL')}}</label>
                                <input type="text" name="canonical_url" id="canonical_url" class="form-control cap-form-control" value="{{$listing->canonical_url}}" placeholder="{{get_phrase('Enter canonical URL')}}" >
                            </div>
                            <div class="mb-2">
                                <label for="og_description" class="form-label cap-form-label"> {{get_phrase('OG Description')}} *</label>
                                <textarea name="og_description" id="og_description" cols="30" rows="3" class="form-control cap-form-control" placeholder="{{get_phrase('Enter meta description')}}" >{{$listing->og_description}}</textarea>
                            </div>
                            <div class="mb-2">
                                <label for="json_id" class="form-label cap-form-label"> {{get_phrase('Json ID')}}</label>
                                <input type="text" name="json_id" value="{{$listing->json_id}}" id="json_id" class="form-control cap-form-control" placeholder="{{get_phrase('Enter json ID')}}">
                            </div>
                            <div class="mb-2">
                                <label for="og_image" class="form-label cap-form-label"> {{get_phrase('OG Image')}}</label>
                                <input type="file" name="og_image" value="{{$listing->og_image}}" id="og_image" class="form-control cap-form-control">
                            </div>
                            <div class="md-2">
                                {{-- <button type="submit" class="btn btn-primary"> {{get_phrase('Create')}} </button> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-media" role="tabpanel" aria-labelledby="pills-media-tab" tabindex="0">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label class="form-label cap-form-label"> {{get_phrase('Listing Images')}} :</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="d-flex flex-wrap">
                                        <!-- Image previews will be dynamically added here -->
                                        @foreach(json_decode($listing->image) as $key => $image)
                                        {{-- <img src="{{get_image('public/storage/listing-images/'.$image)}}" alt="{{get_phrase('Image')}}" width="50px" class="my-2 me-2 rounded">
                                        <input type="hidden" name="listing_image[]" value="{{$image}}"> --}}
                                        <div class="possition_relative" id="image-icon{{$key}}">
                                            <img class="object-fit rounded" src="{{get_image('public/storage/listing-images/'.$image)}}" class="rounded" height="50" width="50">
                                            <input type="hidden" name="listing_image[]" value="{{$image}}">
                                            <a href="javascript:void(0);" onclick="listing_image_delete('{{route('user.listing.image.delete',['type'=>$listing->type,'id'=>$listing->id, 'image'=>$image])}}', '{{$key}}')"> <i class="fas fa-times"></i> </a>
                                        </div>
                                        @endforeach
                                        <div class="d-flex flex-wrap" id="image-container"></div>
                                    </div>
                                    
                                    <div class="upload__box">
                                        <div class="upload__img-wrap"></div>
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <div class="d-flex justify-content-center mb-2">
                                                    <img src="assets/images/icons/cloud-minus-32.svg" alt="">
                                                </div>
                                                <p class="upload-btn-subtitle">{{get_phrase('Upload Product Image')}}</p>
                                                <input type="file" name="listing_image[]" multiple data-max_length="20" class="upload__inputfile" id="image-input">
                                            </label>
                                        </div>
                                    </div>                    
                
                                </div>
                            </div>
                
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <label class="form-label cap-form-label"> {{get_phrase('Preview Video')}} :</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="video" id="video" class="form-control cap-form-control" value="{{$listing->video}}" placeholder="{{get_phrase('Enter youtube link')}}" >
                                </div>
                            </div>
                
                            <div class="md-2">
                                <button type="submit" id="form-action-btn" class="btn btn-primary"> {{get_phrase('Create')}} </button>
                            </div>
                        </div>
                    </div>
                
                    </form>
                </div>
                    
            </div>
        </div>
    </div>
</section>

@include('user.agent.listing.script')
<script>
    $("#form-action-btn").on('click', function() {
        event.preventDefault(); 
        var listing_category = $("#category").val();
        if(!listing_category){
            toastr.error('Listing category is required');
        }
        var listing_title = $("#title").val();
        if(!listing_title){
            toastr.error('Listing title is required');
        }
        var listing_description = $("#description").val();
        if(!listing_description){
            toastr.error('Listing description is required');
        }
        var listing_visibility = $("#visibility").val();
        if(!listing_visibility){
            toastr.error('Listing visibility is required');
        }
        var listing_country = $("#country").val();
        if(!listing_country){
            toastr.error('Listing country is required');
        }
        var listing_city = $("#city").val();
        if(!listing_city){
            toastr.error('Listing city is required');
        }
        var listing_address = $("#address").val();
        if(!listing_address){
            toastr.error('Listing address is required');
        }
        var listing_latitude = $("#latitude").val();
        if(!listing_latitude){
            toastr.error('Listing latitude is required');
        }
        var listing_longitude = $("#longitude").val();
        if(!listing_longitude){
            toastr.error('Listing longitude is required');
        }
        var listing_post_code = $("#post_code").val();
        if(!listing_post_code){
            toastr.error('Listing post code is required');
        }

        if(listing_category && listing_title && listing_description && listing_visibility && listing_country && listing_city && listing_address && listing_latitude && listing_longitude && listing_post_code){
            $("#form-action").submit();
        }
    });
</script>
@endsection