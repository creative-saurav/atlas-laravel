<style>
    .nav-link {
        color: #000;
    }
</style>
@php
if($type == 'car'){
    $amenities = App\Models\Amenities::where('type', $type)->where('identifier', $item??'brand')->get();
}elseif($type == 'beauty'){
    if($item == 'service'){
        $amenities = App\Models\Amenities::where('type', $type)->where('identifier', 'service')->get();
    }else{
        $amenities = App\Models\Amenities::where('type', $type)->where('identifier', 'team')->get();
    }
}elseif ($type == 'real-estate' || $type == 'hotel') {
    $amenities = App\Models\Amenities::where('type', $type)->where('identifier', $item)->get();
}

@endphp
<div class="d-flex align-items-start">
    <div class="ol-card mt-3">
        <div class="ol-card-body p-3 ">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @if ($type == 'car')
                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'model'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/model')?'active':''}}"> {{get_phrase('Model')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'car_type'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/car_type')?'active':''}}"> {{get_phrase('Car Type')}}</a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'fuel_type'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/fuel_type')?'active':''}}"> {{get_phrase('Fuel Type')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'transmission'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/transmission')?'active':''}}"> {{get_phrase('Transmission')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'brand'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/brand')?'active':''}}"> {{get_phrase('Brand')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'cylinder'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/cylinder')?'active':''}}"> {{get_phrase('Cylinder')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'interior_color'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/interior_color')?'active':''}}"> {{get_phrase('Interior Color')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'exterior_color'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/exterior_color')?'active':''}}"> {{get_phrase('Exterior Color')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'drive_train'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/drive_train')?'active':''}}"> {{get_phrase('Drive Train')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'trim'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/trim')?'active':''}}"> {{get_phrase('Trim')}} </a>

                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'engine_size'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/car/engine_size')?'active':''}}"> {{get_phrase('Engine Size')}} </a>
                @elseif ($type == 'beauty')
                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'team'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/beauty/team')?'active':''}}"> {{get_phrase('Team Member')}} </a>
                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'service'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/beauty/service')?'active':''}}"> {{get_phrase('Service')}} </a>
                @elseif ($type == 'real-estate' || $type == 'hotel' || $type == 'restaurant')
                    <a href="{{route('admin.amenities.item',['type'=>$type,'item'=>'feature'])}}" class="nav-link text-start {{request()->is('admin/amenities-item/real-estate/feature') || request()->is('admin/amenities-item/hotel/feature') || request()->is('admin/amenities-item/restaurant/feature')?'active':''}}"> {{get_phrase('Features')}} </a>
                @endif
            </div>
        </div>
    </div>
    <div class="ol-card mt-3 w-83 ms-3">
        <div class="ol-card-body p-3 ">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <h3 class="title fs-16px d-flex"> {{ucwords($type).' '.get_phrase('Amenities List')}} </h3>
                
            </div>

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                @if(count($amenities))
                <table id="datatable" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th> {{get_phrase('ID')}} </th>
                            @if ($type == 'car' || $type == 'real-estate' || $type == 'hotel' || $type == 'restaurant')
                            <th> {{get_phrase('Name')}} </th>
                            <th> {{get_phrase('Icon')}} </th>
                            @elseif($type == 'beauty')
                                @if($item == 'service')
                                <th> {{get_phrase('Name')}} </th>
                                <th> {{get_phrase('Time')}} </th>
                                <th> {{get_phrase('Price')}} </th>
                                @else
                                <th> {{get_phrase('Image')}} </th>
                                <th> {{get_phrase('Name')}} </th>
                                <th> {{get_phrase('Designation')}} </th>
                                <th> {{get_phrase('Rating')}} </th>
                                @endif
                            @endif
                            <th> {{get_phrase('Action')}} </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $num = 1 @endphp
                        @foreach ($amenities as $amenitie)     
                        <tr>
                            <td> {{$num++}} </td>
                            @if ($type == 'car' || $type == 'real-estate' || $type == 'hotel' || $type == 'restaurant')
                            <td> {{$amenitie->name}} </td>
                            <td> <i class="{{$amenitie->icon}}"></i> </td>
                            @elseif($type == 'beauty')
                                @if($item == 'service')
                                <td> {{$amenitie->name}} </td>
                                <td> {{$amenitie->time}} </td>
                                <td> {{currency($amenitie->price)}} </td>
                                @else
                                    <td> <img src="{{get_image('public/storage/team/'.$amenitie->image)}}" width="50px" height="50px" alt="" class="rounded"> </td>
                                    <td> {{$amenitie->name}} </td>
                                    <td> {{$amenitie->designation}} </td>
                                    <td> {{$amenitie->rating}} </td>
                                @endif
                            @endif
                            <td> 
                                <div class="dropdown ol-icon-dropdown">
                                    <button class="px-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="fi-rr-menu-dots-vertical"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fs-14px" onclick="edit_modal('modal-md','{{route('admin.amenities.edit',['id'=>$amenitie->id])}}','{{get_phrase('Update Amenities')}}')" href="javascript:void(0);"> {{get_phrase('Edit')}} </a></li>
                                        <li><a class="dropdown-item fs-14px" onclick="delete_modal('{{route('admin.amenities.delete',['id'=>$amenitie->id])}}')" href="javascript:void(0);"> {{get_phrase('Delete')}} </a></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>                
                        @endforeach
                    </tbody>
                </table>
                @else
                    @include('layouts.no_data_found')
                @endif

            </div>
        </div>
    </div>
</div>