@extends('layouts.admin')
@section('title', get_phrase('Update Listing'))
@section('admin_layout')
@include('admin.listing.listing_style')

@php
    $tab = isset($tab)?$tab:0
@endphp

<div class="ol-card mt-3">
    <div class="ol-card-body p-3">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link {{($tab == 0)?'active':''}}" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true"> {{get_phrase('Basic Info')}} </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="open-time-tab" data-bs-toggle="tab" data-bs-target="#open-time" type="button" role="tab" aria-controls="open-time" aria-selected="false"> {{get_phrase('Opening Time')}} </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{($tab == 'menu')?'active':''}}" id="menu-tab" data-bs-toggle="tab" data-bs-target="#menu" type="button" role="tab" aria-controls="menu" aria-selected="false"> {{get_phrase('Menu')}} </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{($tab == 'feature')?'active':''}}" id="feature-tab" data-bs-toggle="tab" data-bs-target="#feature" type="button" role="tab" aria-controls="feature" aria-selected="false"> {{get_phrase('Feature')}} </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="addresh-tab" data-bs-toggle="tab" data-bs-target="#addresh" type="button" role="tab" aria-controls="addresh" aria-selected="false"> {{get_phrase('Addresh')}} </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab" aria-controls="seo" aria-selected="false"> {{get_phrase('Seo')}} </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media" type="button" role="tab" aria-controls="media" aria-selected="false"> {{get_phrase('Media')}} </button>
            </li>
        </ul>
        <form action="{{route('admin.listing.update',['type'=>'restaurant', 'id'=>$listing->id])}}" id="form-action" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="category" id="category" value="{{$listing->category}}" class="d-none" >
            <div class="tab-content pt-3" id="myTabContent">
                <div class="tab-pane fade show {{($tab == 0)?'active':''}}" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                    <div class="mb-3">
                        <label for="title" class="form-label ol-form-label"> {{get_phrase('Listing title')}} *</label>
                        <input type="text" name="title" id="title" class="form-control ol-form-control" value="{{$listing->title}}" >
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="visibility" class="form-label ol-form-label"> {{get_phrase('Visibility')}} *</label>
                                <select name="visibility" id="visibility" class="form-control ol-form-control ol-select2" required data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing visibility')}} </option>
                                    <option value="visible" {{($listing->visibility == 'visible')?'selected':''}}> {{get_phrase('Visible')}} </option>
                                    <option value="disable" {{($listing->visibility == 'disable')?'selected':''}}> {{get_phrase('Disable')}} </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="description" class="form-label ol-form-label"> {{get_phrase('Description')}} </label>
                                <textarea name="description" id="description" cols="30" rows="3" placeholder="{{get_phrase('Write your description')}}" class="form-control">{{$listing->description}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="open-time" role="tabpanel" aria-labelledby="open-time-tab">
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
                            <div class="mb-3">
                                <label for="{{$key}}_open" class="form-label ol-form-label"> {{ucwords($key).' '.get_phrase('Opening')}} </label>
                                <select name="{{$key}}_open" id="{{$key}}}_open" class="form-control ol-form-control ol-select2" required data-minimum-results-for-search="Infinity">
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
                            <div class="mb-3">
                                <label for="{{$key}}_close" class="form-label ol-form-label"> {{ucwords($key).' '.get_phrase('Opening')}} </label>
                                <select name="{{$key}}_close" id="{{$key}}}_close" class="form-control ol-form-control ol-select2" required data-minimum-results-for-search="Infinity">
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
                <div class="tab-pane fade show {{($tab == 'menu')?'active':''}}" id="menu" role="tabpanel" aria-labelledby="menu-tab">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h5 class="fs-16px title mb-3"> {{get_phrase('Add some menu for restaurant')}} </h5>
                        <a href="javascript:void(0)" onclick="modal('modal-md', '{{route('admin.add.listing.menu',['prefix'=>'admin','id'=>$listing->id])}}', '{{get_phrase('Add New Menu')}}')" class="btn btn-primary"> {{get_phrase('Add menu')}} </a>
                    </div>
                    @php
                        $menus = App\Models\Menu::where('listing_id', $listing->id)->where('user_id', user('id'))->get();
                    @endphp
                    <div class="row">
                        @foreach ($menus as $key => $menu)    
                        <div class="col-sm-4">
                            
                            <input class="form-check-input d-none" name="menu[]" type="checkbox" value="{{$menu->id}}" id="flexCheckDefault{{$key}}" 
                            @if($listing->menu && $listing->menu != 'null' && in_array($menu->id, json_decode($listing->menu))) checked @endif
                            >
                            <label class="form-check-label w-100" onclick="menu_select('{{$key}}')" for="flexCheckDefault{{$key}}">
                                <div class="card mb-3 team-checkbox">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img class="h-88 object-fit" src="{{get_image('public/storage/menu/'.$menu->image)}}" height="50" width="50" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8 team-body">
                                            <div class="card-body py-0 px-2 position-relative">
                                                <p class="card-title line-1"> {{$menu->title}} </p>
                                                <p class="card-text line-1"> {{$menu->sub_title}} </p>
                                                <p class="card-text">
                                                    @if ($menu->dis_price)
                                                        <del> {{currency($menu->price)}} </del>
                                                        <span> {{currency($menu->dis_price)}} </span>
                                                    @else
                                                        <span> {{currency($menu->price)}} </span>
                                                    @endif 
                                                </p>
                                                <div class="text-end position-absulate">
                                                    <a href="javascript:void(0);" onclick="modal('modal-md', '{{route('admin.edit.listing.menu',['prefix'=>'admin','id'=>$menu->id,'listing_id'=>$listing->id, 'page'=>'edit'])}}', '{{get_phrase('Update Menu')}}')" class="p-1"> <i class="fas fa-edit"></i> </a>

                                                    <a href="javascript:void(0);" onclick="delete_modal('{{route('admin.delete.listing.menu',['prefix'=>'admin','id'=>$menu->id,'listing_id'=>$listing->id])}}')" class="p-1"> <i class="fas fa-trash-alt"></i> </a>
                                                </div>
                                            </div>
                                            <div class="checked @if($listing->menu && $listing->menu != 'null' && in_array($menu->id, json_decode($listing->menu))) @else d-none @endif" id="menu-checked{{$key}}">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade show {{($tab == 'feature')?'active':''}}" id="feature" role="tabpanel" aria-labelledby="feature-tab">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="fs-16px title mb-3"> {{get_phrase('Add some feature')}} </h5>
                        <a href="javascript:void(0);" onclick="modal('modal-md', '{{route('admin.amenities.add',['type'=>'restaurant','item'=>'feature','page'=>'listing','listing_id'=>$listing->id])}}', '{{get_phrase('Add New Service')}}')" class="btn btn-primary fs-14px"> {{get_phrase('Add Feature')}} </a>
                    </div>
                    @php
                        $features = App\Models\Amenities::where('type', 'restaurant')->where('identifier', 'feature')->get();
                    @endphp
                    <div class="real-estate-feature">
                        @foreach ($features as $key => $feature)
                            <div class="feature-item">
                                <input class="form-check-input d-none" name="feature[]" type="checkbox" value="{{$feature->id}}" id="flexCheckDefau{{$key}}" @if($listing->feature && $listing->feature != 'null' && in_array($feature->id, json_decode($listing->feature))) checked @endif>
                            <label class="form-check-label w-100" onclick="feature_select('{{$key}}')" for="flexCheckDefau{{$key}}">
                                <div class="card mb-3 team-checkbox me-2">
                                    <div class="col-md-12 team-body feature-body">
                                        <div class="card-body py-2 px-2 ms-1">
                                            <i class="{{$feature->icon}}"></i>
                                            <span> {{$feature->name}} </span>
                                        </div>
                                        <div class="checked @if($listing->feature && $listing->feature != 'null' && in_array($feature->id, json_decode($listing->feature))) @else d-none @endif" id="feature-checked{{$key}}">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="addresh" role="tabpanel" aria-labelledby="addresh-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="engine_size" class="form-label ol-form-label"> {{get_phrase('Country')}} *</label>
                                <select name="country" id="country" class="form-control ol-form-control ol-select2">
                                    <option value=""> {{get_phrase('Select listing country')}} </option>
                                    @foreach (App\Models\Country::get() as $country)
                                        <option value="{{$country->id}}" {{$listing->country == $country->id?'selected':''}}> {{get_phrase($country->name)}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="city" class="form-label ol-form-label"> {{get_phrase('City')}} *</label>
                                <select name="city" id="city" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value="{{$listing->city}}"> {{App\Models\City::where('id', $listing->city)->first()->name;}} </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label ol-form-label"> {{get_phrase('Address')}} *</label>
                        <textarea name="address" id="address" cols="30" rows="3" class="form-control ol-form-control" placeholder="{{get_phrase('Enter listing address')}}" >{{$listing->address}}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mb-3">
                                <label for="post_code" class="form-label ol-form-label"> {{get_phrase('Post Code')}} *</label>
                                <input type="text" name="post_code" id="post_code" class="form-control ol-form-control" placeholder="{{get_phrase('Enter post code')}}" value="{{$listing->postal_code}}">
                            </div>
                            <div class="mb-3">
                                <label for="latitude" class="form-label ol-form-label"> {{get_phrase('Latitude')}} *</label>
                                <input type="text" name="latitude" id="latitude" class="form-control ol-form-control" value="{{$listing->Latitude}}" placeholder="{{get_phrase('Enter Latitude code')}}" >
                            </div>
                            <div class="mb-3">
                                <label for="longitude" class="form-label ol-form-label"> {{get_phrase('Longitude')}} *</label>
                                <input type="text" name="longitude" id="longitude" class="form-control ol-form-control" value="{{$listing->Longitude}}" placeholder="{{get_phrase('Enter longitude code')}}" >
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <link rel="stylesheet" href="{{asset('public/assets/backend/css/leaflet.css')}}">
                            <script src="{{asset('public/assets/backend/js/leaflet.js')}}"></script>
                            <div id="map" class="rounded" style="height: 400px;"></div>
                            
                        </div>
                    </div>
        
                </div>
                <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="mb-3">
                        <label for="meta_title" class="form-label ol-form-label"> {{get_phrase('Meta Title')}}</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control ol-form-control" value="{{$listing->meta_title}}" placeholder="{{get_phrase('Enter meta title')}}" >
                    </div>
                    <div class="mb-3">
                        <label for="keyword" class="form-label ol-form-label"> {{get_phrase('Meta keywords')}}</label>
                        <input type="text" name="keyword" id="keyword" class="form-control ol-form-control" placeholder="{{get_phrase('Keyword1; keyword2; keyword3;')}}" value="{{$listing->meta_keyword}}">
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="form-label ol-form-label"> {{get_phrase('Meta Description')}} *</label>
                        <textarea name="meta_description" id="meta_description" cols="30" rows="3" class="form-control ol-form-control" placeholder="{{get_phrase('Enter meta description')}}" >{{$listing->meta_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="og_title" class="form-label ol-form-label"> {{get_phrase('OG title')}}</label>
                        <input type="text" name="og_title" id="og_title" class="form-control ol-form-control" placeholder="{{get_phrase('Enter og title')}}" value="{{$listing->og_title}}">
                    </div>
                    <div class="mb-3">
                        <label for="canonical_url" class="form-label ol-form-label"> {{get_phrase('Canonical URL')}}</label>
                        <input type="text" name="canonical_url" id="canonical_url" class="form-control ol-form-control" placeholder="{{get_phrase('Enter canonical URL')}}" value="{{$listing->canonical_url}}">
                    </div>
                    <div class="mb-3">
                        <label for="og_description" class="form-label ol-form-label"> {{get_phrase('OG Description')}} *</label>
                        <textarea name="og_description" id="og_description" cols="30" rows="3" class="form-control ol-form-control" placeholder="{{get_phrase('Enter meta description')}}" >{{$listing->og_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="json_id" class="form-label ol-form-label"> {{get_phrase('Json ID')}}</label>
                        <input type="text" name="json_id" id="json_id" class="form-control ol-form-control" placeholder="{{get_phrase('Enter json ID')}}" value="{{$listing->json_id}}">
                    </div>
                    <div class="mb-3">
                        <label for="og_image" class="form-label ol-form-label"> {{get_phrase('OG Image')}}</label>
                        <input type="file" name="og_image" id="og_image" class="form-control ol-form-control">
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                    <div class="row">
                        <div class="col-sm-2">
                            <span> {{get_phrase('Listing Images')}} :</span>
                        </div>
                        <div class="col-sm-10">
                            <div class="d-flex flex-wrap" id="image-container">
                                <!-- Image previews will be dynamically added here -->
                                @foreach(json_decode($listing->image) as $key => $image)
                                <div class="possition_relative" id="image-icon{{$key}}">
                                    <img class="object-fit" src="{{get_image('public/storage/listing-images/'.$image)}}" class="rounded" height="50" width="50">
                                    <a href="javascript:void(0);" onclick="listing_image_delete('{{route('admin.listing.image.delete',['type'=>$type,'id'=>$listing->id, 'image'=>$image])}}', '{{$key}}')"> <i class="fas fa-trash-alt"></i> </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="listing-icon-image" class="file-upload-label">
                                    <div class="label-bg">
                                        <span>{{get_phrase('Click to upload SVG, PNG, JPG, or GIF')}} (max 500 x 700px)</span>
                                    </div>
                                </label>
                                <input type="file" id="listing-icon-image" name="listing_image[]" class="form-control d-none" multiple>
                            </div>  
                        </div>
                    </div>
        
                    <div class="md-3">
                        <button type="submit" id="form-action-btn" class="btn btn-primary"> {{get_phrase('Update')}} </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('admin.listing.listing_script')
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
        var listing_post_code = $("#post_code").val();
        if(!listing_post_code){
            toastr.error('Listing post code is required');
        }
        var listing_latitude = $("#latitude").val();
        if(!listing_latitude){
            toastr.error('Listing latitude is required');
        }
        var listing_longitude = $("#longitude").val();
        if(!listing_longitude){
            toastr.error('Listing longitude is required');
        }
        var listing_visibility = $("#visibility").val();
        if(!listing_visibility){
            toastr.error('Listing visibility is required');
        }
        if(listing_title && listing_category && listing_country && listing_city && listing_address && listing_post_code && listing_latitude && listing_longitude && listing_visibility){
            $("#form-action").submit();
        }

    })
</script>
@endsection