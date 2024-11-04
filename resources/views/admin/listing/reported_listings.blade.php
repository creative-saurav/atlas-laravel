@extends('layouts.admin')
@section('title', get_phrase('Reported Listings'))
@section('admin_layout')

<div class="ol-card radius-8px">
    <div class="ol-card-body my-2 py-18px px-20px">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap flex-md-nowrap">
            <h4 class="title fs-16px">
                <i class="fi-rr-settings-sliders me-2"></i>
                {{ get_phrase('Reported Listings') }}
            </h4>
        </div>
    </div>
</div>

<div class="ol-card mt-3">
    <div class="ol-card-body p-3">
        @if(count($reported_listings))
        <table id="datatable" class="table" style="width:100%">
            <thead>
                <tr>
                    <th> {{get_phrase('ID')}} </th>
                    <th> {{get_phrase('Image')}} </th>
                    <th> {{get_phrase('Title')}} </th>
                    <th> {{get_phrase('Category')}} </th>
                    <th> {{get_phrase('Price')}} </th>
                    <th> {{get_phrase('Visibility')}} </th>
                    <th> {{get_phrase('Action')}} </th>
                </tr>
            </thead>
            <tbody>
                @php $num = 1 @endphp
                @foreach ($reported_listings as $listing)
                @php
                    $category = App\Models\Category::where('id', $listing->category)->first()->name;
                    $image = json_decode($listing->image)[0]??0;
                @endphp    
                <tr>
                    <td> {{$num++}} </td>
                    <td>
                        <img src="{{get_image('public/storage/listing-images/'.$image)}}" width="50" height="50" class="rounded" alt="">
                    </td>
                    <td> {{$listing->title}} </td>
                    <td> {{$category}} </td>
                    <td> {{currency($listing->price)}} </td>
                    <td> {{ucwords($listing->visibility)}} </td>
                    <td> 
                        <div class="dropdown ol-icon-dropdown">
                            <button class="px-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fi-rr-menu-dots-vertical"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item fs-14px" href="{{route('admin.listing.status',['type'=>$type, 'id'=>$listing->id, 'status'=>$listing->visibility])}}"> {{get_phrase('Change visibility')}} </a></li>

                              <li><a class="dropdown-item fs-14px" href="{{route('admin.listing.edit',['type'=>$type, 'id'=>$listing->id, 'tab'=>0])}}"> {{get_phrase('Edit')}} </a></li>

                              <li><a class="dropdown-item fs-14px" onclick="delete_modal('{{route('admin.listing.delete',['type'=>$type, 'id'=>$listing->id])}}')" href="javascript:void(0);"> {{get_phrase('Delete')}} </a></a></li>
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

@endsection