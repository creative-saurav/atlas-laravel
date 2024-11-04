@extends('layouts.admin')
@section('title', ucwords($type).' '.get_phrase('lists'))
@section('admin_layout')

<div class="ol-card radius-8px">
    <div class="ol-card-body my-2 py-12px px-20px">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap flex-md-nowrap">
            <h4 class="title fs-16px">
                <i class="fi-rr-settings-sliders me-2"></i>
                {{ ucwords($type).' '.get_phrase('lists') }}
            </h4>

            <a href="{{route('admin.user',['type'=>$type,'action'=>'add'])}}" class="btn ol-btn-outline-secondary d-flex align-items-center cg-10px">
                <span class="fi-rr-plus"></span>
                <span> {{get_phrase('Add New'.' '.$type)}} </span>
            </a>
        </div>
    </div>
</div>

<div class="ol-card mt-3">
    <div class="ol-card-body p-3">
        @if(count($users))
        <table id="datatable" class="table w-100">
            <thead>
                <tr>
                    <th> {{get_phrase('ID')}} </th>
                    <th> {{get_phrase('Image')}} </th>
                    <th> {{get_phrase('Name')}} </th>
                    <th> {{get_phrase('Email')}} </th>
                    <th> {{get_phrase('Status')}} </th>
                    <th> {{get_phrase('Action')}} </th>
                </tr>
            </thead>
            <tbody>
                @php $num = 1 @endphp
                @foreach ($users as $user)     
                <tr>
                    <td> {{$num++}} </td>
                    <td> <img src="{{get_image('public/storage/users/'.$user->image)}}" class="rounded" height="50px" width="50px" alt=""></td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                    <td>
                        @php
                            if($user->status == 1){
                                echo get_phrase('Active');
                            }elseif($user->status == 2){
                                echo get_phrase('Deactive');
                            }else{
                                echo get_phrase('Blocked');
                            }
                        @endphp
                    </td>
                    <td> 
                        <div class="dropdown ol-icon-dropdown">
                            <button class="px-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fi-rr-menu-dots-vertical"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-14px" href="{{route('admin.edit.user',['type'=>$user->type, 'id'=>$user->id])}}"> {{get_phrase('Edit User')}} </a></li>
                                <li><a class="dropdown-item fs-14px" href="{{route('admin.user.status',['id'=>$user->id, 'status'=>1])}}"> {{get_phrase('Active')}} </a></li>
                                <li><a class="dropdown-item fs-14px" href="{{route('admin.user.status',['id'=>$user->id, 'status'=>2])}}"> {{get_phrase('Deactive')}} </a></li>
                                <li><a class="dropdown-item fs-14px" href="{{route('admin.user.status',['id'=>$user->id, 'status'=>0])}}"> {{get_phrase('Blocked')}} </a></li>
                                <li><a class="dropdown-item fs-14px" onclick="delete_modal('{{route('admin.delete.user',['id'=>$user->id])}}')" href="javascript:void(0);"> {{get_phrase('Delete')}} </a></a></li>
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