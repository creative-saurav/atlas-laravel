@extends('layouts.admin')
@section('title', get_phrase('Update Listing'))
@section('admin_layout')
@include('admin.listing.listing_style')

@php
    $brands = App\Models\Amenities::where('type','car')->where('identifier','brand')->get();
    $models = App\Models\Amenities::where('type','car')->where('identifier','model')->get();
    $car_types = App\Models\Amenities::where('type','car')->where('identifier','car_type')->get();
    $transmissions = App\Models\Amenities::where('type','car')->where('identifier','transmission')->get();
    $fuel_types = App\Models\Amenities::where('type','car')->where('identifier','fuel_type')->get();
    $cyelinders = App\Models\Amenities::where('type','car')->where('identifier','cylinder')->get();
    $interior_colors = App\Models\Amenities::where('type','car')->where('identifier','interior_color')->get();
    $exterior_colors = App\Models\Amenities::where('type','car')->where('identifier','exterior_color')->get();
    $drive_trains = App\Models\Amenities::where('type','car')->where('identifier','drive_train')->get();
    $trims = App\Models\Amenities::where('type','car')->where('identifier','trim')->get();
    $engine_sizes = App\Models\Amenities::where('type','car')->where('identifier','engine_size')->get();
    $tab = isset($tab)?$tab:0
@endphp

<div class="ol-card">
    <div class="ol-card-body p-3 d-flex align-items-center justify-content-between">
        <h3 class="title fs-16px d-flex"> <i class="fi-rr-settings-sliders me-2"></i> {{ucwords($type).' '.get_phrase('Listing Update')}} </h3>
        <a href="{{route('admin.listing.create')}}" class="btn ol-btn-outline-secondary d-flex align-items-center cg-10px">
            <span class="fi-rr-plus"></span>
            <span> {{get_phrase('Add New Listing')}} </span>
        </a>
    </div>
</div>

<div class="ol-card mt-3">
    <div class="ol-card-body p-3">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
            <button class="nav-link {{($tab == 0)?'active':''}}" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true"> {{get_phrase('Basic Info')}} </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{($tab == 'feature')?'active':''}}" id="feature-tab" data-bs-toggle="tab" data-bs-target="#feature" type="button" role="tab" aria-controls="feature" aria-selected="false"> {{get_phrase('Features')}} </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{($tab == 'specification')?'active':''}}" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false"> {{get_phrase('Specification')}} </button>
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


        <form action="{{route('admin.listing.update',['type'=>'car', 'id'=>$listing->id])}}" id="form-action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="tab-content pt-3" id="myTabContent">
                <div class="tab-pane fade show {{($tab == 0)?'active':''}}" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                    <div id="type" class="d-none"></div>
                    <input type="text" name="category" id="category" value="{{$listing->category}}" class="d-none" >
                    <div class="mb-3">
                        <label for="title" class="form-label ol-form-label"> {{get_phrase('Listing title')}} </label>
                        <input type="text" class="form-control ol-form-control" name="title" id="title" placeholder="{{get_phrase('Enter listing title')}}" value="{{$listing->title}}" >
                    </div>
                    <div class="mb-3">
                        <label for="sub_title" class="form-label ol-form-label"> {{get_phrase('Listing sub title')}} </label>
                        <input type="text" class="form-control ol-form-control" name="sub_title" id="sub_title" placeholder="{{get_phrase('Enter listing sub title')}}" value="{{$listing->sub_title}}" >
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="brand" class="form-label ol-form-label"> {{get_phrase('Brand')}} *</label>
                                <select name="brand" id="brand" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing brand')}} </option>
                                    @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}" {{$listing->brand == $brand->id?'selected':''}}> {{$brand->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="model" class="form-label ol-form-label"> {{get_phrase('Model')}} *</label>
                                <select name="model" id="model" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing model')}} </option>
                                    @foreach ($models as $model)
                                        <option value="{{$model->id}}" {{($listing->model == $model->id)?'selected':''}}> {{$model->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="year" class="form-label ol-form-label"> {{get_phrase('Year')}} *</label>
                                <select name="year" id="year" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing year')}} </option>
                                    @for($x = date('Y'); $x >= 1899; $x--)
                                        <option value="{{$x}}" {{$listing->year == $x ? "selected" : ""}}>{{$x}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="car_type" class="form-label ol-form-label"> {{get_phrase('Car Type')}} *</label>
                                <select name="car_type" id="car_type" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing car type')}} </option>
                                    @foreach ($car_types as $car_type)
                                        <option value="{{$car_type->id}}" {{($listing->car_type == $car_type->id)?'selected':''}}> {{$car_type->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="transmission" class="form-label ol-form-label"> {{get_phrase('Transmission')}} *</label>
                                <select name="transmission" id="transmission" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing transmission')}} </option>
                                    @foreach ($transmissions as $transmission)
                                        <option value="{{$transmission->id}}" {{($listing->transmission == $transmission->id)?'selected':''}}> {{$transmission->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="fuel_type" class="form-label ol-form-label"> {{get_phrase('Fuel Type')}} *</label>
                                <select name="fuel_type" id="fuel_type" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing fuel_type')}} </option>
                                    @foreach ($fuel_types as $fuel_type)
                                        <option value="{{$fuel_type->id}}" {{($listing->fuel_type == $fuel_type->id)?'selected':''}}> {{$fuel_type->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="cyelinder" class="form-label ol-form-label"> {{get_phrase('Cyelinder')}} *</label>
                                <select name="cylinder" id="cyelinder" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing cyelinder')}} </option>
                                    @foreach ($cyelinders as $cyelinder)
                                        <option value="{{$cyelinder->id}}" {{($listing->cylinder == $cyelinder->id)?'selected':''}}> {{$cyelinder->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="car_type" class="form-label ol-form-label"> {{get_phrase('Interior Color')}} *</label>
                                <select name="interior_color" id="interior_color" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing interior color')}} </option>
                                    @foreach ($interior_colors as $interior_color)
                                        <option value="{{$interior_color->id}}" {{($listing->interior_color == $interior_color->id)?'selected':''}}> {{$interior_color->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="car_type" class="form-label ol-form-label"> {{get_phrase('Exterior Color')}} *</label>
                                <select name="exterior_color" id="exterior_color" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing exterior color')}} </option>
                                    @foreach ($exterior_colors as $exterior_color)
                                        <option value="{{$exterior_color->id}}" {{($listing->exterior_color == $exterior_color->id)?'selected':''}}> {{$exterior_color->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="car_type" class="form-label ol-form-label"> {{get_phrase('Drive Train')}} *</label>
                                <select name="drive_train" id="drive_train" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing drive train')}} </option>
                                    @foreach ($drive_trains as $drive_train)
                                        <option value="{{$drive_train->id}}" {{($listing->drive_train == $drive_train->id)?'selected':''}}> {{$drive_train->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="trim" class="form-label ol-form-label"> {{get_phrase('Trim')}} *</label>
                                <select name="trim" id="trim" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing trim')}} </option>
                                    @foreach ($trims as $trim)
                                        <option value="{{$trim->id}}" {{($listing->trim == $trim->id)?'selected':''}}> {{$trim->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="engine_size" class="form-label ol-form-label"> {{get_phrase('Engin_size')}} *</label>
                                <select name="engine_size" id="engine_size" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing trim')}} </option>
                                    @foreach ($engine_sizes as $engine_size)
                                        <option value="{{$engine_size->id}}" {{($listing->engine_size == $engine_size->id)?'selected':''}}> {{$engine_size->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="mileage" class="form-label ol-form-label"> {{get_phrase('Mileage')}} *</label>
                                <input type="text" class="form-control ol-form-control" name="mileage" id="mileage" value="{{$listing->mileage}}" placeholder="{{get_phrase('00')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="vin" class="form-label ol-form-label"> {{get_phrase('vin')}} *</label>
                                <input type="text" class="form-control ol-form-control" name="vin" id="vin" value="{{$listing->vin}}" placeholder="{{get_phrase('4jh45ed4')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="price" class="form-label ol-form-label"> {{get_phrase('price')}} *</label>
                                <input type="text" class="form-control ol-form-control" name="price" id="price" value="{{$listing->price}}" placeholder="{{get_phrase('00.00')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="discount_price" class="form-label ol-form-label"> {{get_phrase('discount_price')}} *</label>
                                <input type="text" class="form-control ol-form-control" name="discount_price" id="discount_price" value="{{$listing->discount_price}}" placeholder="{{get_phrase('00.00')}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="visibility" class="form-label ol-form-label"> {{get_phrase('Visibility')}} *</label>
                                <select name="visibility" id="visibility" class="form-control ol-form-control ol-select2"  data-minimum-results-for-search="Infinity">
                                    <option value=""> {{get_phrase('Select listing visibility')}} </option>
                                    <option value="visible" {{$listing->visibility == 'visible'?'selected':''}}> {{get_phrase('Visible')}} </option>
                                    <option value="hidden" {{$listing->visibility == 'hidden'?'selected':''}}> {{get_phrase('Hidden')}} </option>  
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label ol-form-label"> {{get_phrase('Description')}} </label>
                        <textarea name="description" id="description" cols="30" rows="3" class="form-control ol-form-control" placeholder="{{get_phrase('Enter listing description')}}">{!!$listing->description!!}</textarea>
                    </div>
                </div>

                <div class="tab-pane fade show {{($tab == 'feature')?'active':''}}" id="feature" role="tabpanel" aria-labelledby="feature-tab">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fs-16px title ms-3"> {{get_phrase('Add some listng features')}} </h5>
                        <a href="javascript:void(0)" onclick="modal('modal-md', '{{route('admin.add-listing-feature',['prefix' => 'admin','id'=>$listing->id])}}', '{{get_phrase('Add New Feature')}}')" class="btn btn-primary mb-2 fs-14px"> {{get_phrase('Add Feature')}} </a>
                    </div>
                    @php
                        $features = App\Models\Listing_Feature::where('listing_id', $listing->id)->where('feature_id', 0)->get();
                    @endphp
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach ($features as $key => $feature)    
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$key}}" aria-expanded="false" aria-controls="flush-collapseOne{{$key}}">
                                    {{$feature->title}}
                                </button>
                                <div class="buttons">
                                    <a onclick="delete_modal('{{route('admin.listing.feature.delete',['prefix'=>'admin','id'=>$listing->id, 'feature_id'=>$feature->id])}}')" href="jacascript:void(0);"> <i class="fas fa-trash"></i> </a>

                                    <a onclick="modal('modal-md', '{{route('admin.listing.feature.edit',['prefix'=>'admin','id'=>$listing->id, 'feature_id'=>$feature->id])}}', '{{get_phrase('Update Feature')}}')" href="javascript:void(0);"> <i class="fas fa-pen"></i> </a>

                                    <a onclick="modal('modal-md', '{{route('admin.listing.sub-feature.add',['prefix'=>'admin','id'=>$listing->id, 'feature_id'=>$feature->id])}}', '{{get_phrase('Add New Sub Feature')}}')" href="javascript:void(0);"> <i class="fas fa-plus"></i> </a>
                                </div>
                            </h2>
                           
                            <div id="flush-collapseOne{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <ul>
                                    @php $i = 1; @endphp
                                    @foreach (App\Models\Listing_Feature::where('listing_id', $listing->id)->where('feature_id', $feature->id)->get() as $item)
                                        <li class="p-2 ms-5 sub-feature">
                                            <p> {{$i++}}. {{$item->title}} </p>
                                            <a onclick="delete_modal('{{route('admin.listing.feature.delete',['prefix'=>'admin','id'=>$listing->id, 'feature_id'=>$item->id])}}')" href="javascript:void(0);" class=""> <i class="fas fa-trash"></i> </a>
                                        </li>                                     
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade show {{($tab == 'specification')?'active':''}}" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fs-16px title ms-3"> {{get_phrase('Add some listng specification')}} </h5>
                        <a href="javascript:void(0)" onclick="modal('modal-md', '{{route('admin.add.listing.specification',['prefix'=>'admin','id'=>$listing->id])}}', '{{get_phrase('Add New Specification')}}')" class="btn btn-primary mb-2 fs-14px"> {{get_phrase('Add Specification')}} </a>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlush">
                        @php
                            $specifications = App\Models\Listing_Specification::where('listing_id', $listing->id)->where('specification_id', 0)->get();
                        @endphp
                        @foreach ($specifications as $key => $specification)    
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOn{{$key}}" aria-expanded="false" aria-controls="flush-collapseOn{{$key}}">
                                {{$specification->title}}
                                </button>
                                <div class="buttons">
                                    <a onclick="delete_modal('{{route('admin.delete.listing.specification',['prefix'=>'admin','id'=>$listing->id, 'specification_id'=>$specification->id])}}')" href="jacascript:void(0);"> <i class="fas fa-trash"></i> </a>

                                    <a onclick="modal('modal-md', '{{route('admin.edit.listing.specification',['prefix'=>'admin','id'=>$listing->id, 'specification_id'=>$specification->id])}}', '{{get_phrase('Update Specification')}}')" href="javascript:void(0);"> <i class="fas fa-pen"></i> </a>

                                    <a onclick="modal('modal-md', '{{route('admin.add.listing.sub-specification',['prefix'=>'admin','id'=>$listing->id, 'specification_id'=>$specification->id])}}', '{{get_phrase('Add New Sub Specification')}}')" href="javascript:void(0);"> <i class="fas fa-plus"></i> </a>
                                </div>
                            </h2>
                            <div id="flush-collapseOn{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                                <ul>
                                    @php $i = 1; @endphp
                                    @foreach (App\Models\Listing_Specification::where('listing_id', $listing->id)->where('specification_id', $specification->id)->get() as $item)
                                        <li class="p-2 ms-5 sub-feature">
                                            <div class="d-flex justify-content-between w-50">
                                                <p> {{$i++}}. {{$item->title}} </p>
                                                <p> {{$item->value}} </p>
                                            </div>
                                            <div class="button">
                                                <a onclick="modal('modal-md', '{{route('admin.edit.listing.sub-specification',['prefix'=>'user','id'=>$listing->id, 'specification_id'=>$item->id, 'parent'=>$specification->id])}}', '{{get_phrase('Update Sub Specification')}}')" href="javascript:void(0);"> <i class="fas fa-pen"></i> </a>
                                                <a onclick="delete_modal('{{route('admin.delete.listing.specification',['prefix'=>'admin','id'=>$listing->id, 'specification_id'=>$item->id])}}')" href="javascript:void(0);" class=""> <i class="fas fa-trash"></i> </a>
                                            </div>
                                        </li>                                     
                                    @endforeach
                                </ul>
                            </div>
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
                                    <option value="{{$listing->city}}"> {{App\Models\City::where('id', $listing->city)->first()->name}} </option>
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
                                <input type="text" name="post_code" id="post_code" class="form-control ol-form-control" placeholder="{{get_phrase('Enter post code')}}" value="{{$listing->postal_code}}" >
                            </div>
                            <div class="mb-3">
                                <label for="latitude" class="form-label ol-form-label"> {{get_phrase('Latitude')}} *</label>
                                <input type="text" name="latitude" id="latitude" class="form-control ol-form-control" placeholder="{{get_phrase('Enter Latitude code')}}" value="{{$listing->Latitude}}" >
                            </div>
                            <div class="mb-3">
                                <label for="longitude" class="form-label ol-form-label"> {{get_phrase('Longitude')}} *</label>
                                <input type="text" name="longitude" id="longitude" class="form-control ol-form-control" placeholder="{{get_phrase('Enter longitude code')}}" value="{{$listing->Longitude}}">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <link rel="stylesheet" href="{{asset('public/assets/backend/css/leaflet.css')}}">
                            <script src="{{asset('public/assets/backend/js/leaflet.js')}}"></script>
                            <div id="map" class="rounded" style="height: 400px;"></div>
                            <script type="text/javascript">
                                var map = L.map('map').setView([40.706486, -74.014700], 13);
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    maxZoom: 5,
                                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                }).addTo(map);
                            
                                // Create a popup
                                var popup = L.popup();
                            
                                // Define a function to handle map clicks
                                function onMapClick(e) {
                                    var lat = e.latlng.lat.toFixed(5);  
                                    var lng = e.latlng.lng.toFixed(5);
                                    popup
                                        .setLatLng(e.latlng)
                                        .setContent("You clicked at:<br>Latitude: " + lat + "<br>Longitude: " + lng)
                                        .openOn(map);
                                    document.getElementById('latitude').value = lat;
                                    document.getElementById('longitude').value = lng;
                                }
                                map.on('click', onMapClick);
                            </script>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="mb-3">
                        <label for="meta_title" class="form-label ol-form-label"> {{get_phrase('Meta Title')}}</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control ol-form-control" placeholder="{{get_phrase('Enter meta title')}}" value="{{$listing->meta_title}}">
                    </div>
                    <div class="mb-3">
                        <label for="keyword" class="form-label ol-form-label"> {{get_phrase('Meta keywords')}}</label>
                        <input type="text" name="keyword" id="keyword" class="form-control ol-form-control" placeholder="{{get_phrase('Keyword1; keyword2; keyword3;')}}" value="{{$listing->meta_keyword}}" >
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="form-label ol-form-label"> {{get_phrase('Meta Description')}} </label>
                        <textarea name="meta_description" id="meta_description" cols="30" rows="3" class="form-control ol-form-control" placeholder="{{get_phrase('Enter meta description')}}" > {!!$listing->meta_description!!} </textarea>
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
                        <label for="og_description" class="form-label ol-form-label"> {{get_phrase('OG Description')}} </label>
                        <textarea name="og_description" id="og_description" cols="30" rows="3" class="form-control ol-form-control" placeholder="{{get_phrase('Enter meta description')}}" >{!!$listing->og_description!!}</textarea>
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
                                    <img src="{{get_image('public/storage/listing-images/'.$image)}}" class="rounded" height="50" width="50">
                                    <a href="javascript:void(0);" onclick="listing_image_delete('{{route('admin.listing.image.delete',['type'=>$type,'id'=>$listing->id, 'image'=>$image])}}', '{{$key}}')"> <i class="fas fa-trash-alt"></i> </a>
                                </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="listing-icon-image" class="file-upload-label">
                                    <div class="label-bg">
                                        <span>Click to upload SVG, PNG, JPG, or GIF (max 500 x 700px)</span>
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
        <script src="{{asset("public/assets/backend/js/jquery-3.7.1.min.js")}}"></script>
        <script>

            // document.getElementById('listing-icon-image').addEventListener('change', function(event) {
            //     const imageContainer = document.getElementById('image-container');
            //     const files = event.target.files;

            //     for (const file of files) {
            //         const reader = new FileReader();
                    
            //         reader.onload = function(e) {
            //             const imageIcon = document.createElement('div');
            //             imageIcon.classList.add('image-icon');
                        
            //             const img = document.createElement('img');
            //             img.src = e.target.result;
            //             img.alt = 'Selected image';
                        
            //             const trashIcon = document.createElement('i');
            //             trashIcon.classList.add('fas', 'fa-trash-alt');
            //             trashIcon.addEventListener('click', function() {
            //                 imageIcon.remove();
            //             });

            //             imageIcon.appendChild(img);
            //             imageIcon.appendChild(trashIcon);
            //             imageContainer.appendChild(imageIcon);
            //         }
                    
            //         reader.readAsDataURL(file);
            //     }
            // });

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
                var listing_mileage = $("#mileage").val();
                if(!listing_mileage){
                    toastr.error('Listing mileage is required');
                }
                var listing_vin = $("#vin").val();
                if(!listing_vin){
                    toastr.error('Listing vin is required');
                }
                var listing_price = $("#price").val();
                if(!listing_price){
                    toastr.error('Listing price is required');
                }
                var listing_discount_price = $("#discount_price").val();
                if(!listing_discount_price){
                    toastr.error('Listing discount price is required');
                }
                var listing_brand = $("#brand").val();
                if(!listing_brand){
                    toastr.error('Listing brand is required');
                }
                var listing_model = $("#model").val();
                if(!listing_model){
                    toastr.error('Listing model is required');
                }
                var listing_year = $("#year").val();
                if(!listing_year){
                    toastr.error('Listing year is required');
                }
                var listing_car_type = $("#car_type").val();
                if(!listing_car_type){
                    toastr.error('Listing car type is required');
                }
                var listing_transmission = $("#transmission").val();
                if(!listing_transmission){
                    toastr.error('Listing transmission is required');
                }
                var listing_fuel_type = $("#fuel_type").val();
                if(!listing_fuel_type){
                    toastr.error('Listing fuel type is required');
                }
                var listing_cyelinder = $("#fuel_type").val();
                if(!listing_cyelinder){
                    toastr.error('Listing cyelinder is required');
                }
                var listing_interior_color = $("#fuel_type").val();
                if(!listing_interior_color){
                    toastr.error('Listing interior color is required');
                }
                var listing_exterior_color = $("#exterior_color").val();
                if(!listing_exterior_color){
                    toastr.error('Listing exterior color is required');
                }
                var listing_drive_train = $("#drive_train").val();
                if(!listing_drive_train){
                    toastr.error('Listing drive train is required');
                }
                var listing_trim = $("#trim").val();
                if(!listing_trim){
                    toastr.error('Listing trim is required');
                }
                var listing_engine_size = $("#engine_size").val();
                if(!listing_engine_size){
                    toastr.error('Listing engine size is required');
                }
                var listing_description = $("#description").val();
                if(!listing_description){
                    toastr.error('Listing description is required');
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


                if(listing_category && listing_title && listing_brand && listing_model && listing_year && listing_car_type && listing_transmission && listing_fuel_type && listing_cyelinder  && listing_interior_color && listing_exterior_color && listing_drive_train && listing_trim && listing_engine_size && listing_description && listing_longitude && listing_latitude && listing_post_code && listing_address && listing_city && listing_country && listing_discount_price && listing_price && listing_vin && listing_mileage){
                    $("#form-action").submit();
                }
            })

            // $('.ol-select2').select2();

            // $("#country").on('change', function(){
            //     var country = $("#country").val();
            //     var url = "{{route('admin.country.city',['id'=>':id'])}}";
            //     url = url.replace(':id', country);
            //     $.ajax({
            //         url: url,
            //         success: function(result){
            //             var cityDropdown = $("#city");
            //             cityDropdown.html($('<option>', {
            //                     value: '',
            //                     text: "{{get_phrase('Select listing City')}}"
            //                 }));
            //             $.each(result, function(index, city) {
            //                 cityDropdown.append($('<option>', {
            //                     value: city.id,
            //                     text: city.name
            //                 }));
            //             });
            //         }
            //     })
            // })
        </script>
    </div>
</div>


@endsection