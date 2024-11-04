@extends('layouts.admin')
@section('title', get_phrase('Payment'))
@section('admin_layout')

<div class="ol-card radius-8px">
    <div class="ol-card-body my-2 py-12px px-20px">
        <div class="d-flex align-items-center justify-content-between gap-3 py-3 flex-wrap flex-md-nowrap">
            <h4 class="title fs-16px">
                <i class="fi-rr-settings-sliders me-2"></i>
                {{ $payment_gateway->title.' '.get_phrase('Credentials Update') }}
            </h4>
        </div>
    </div>
</div>

<div class="ol-card mt-3">
    <div class="ol-card-body p-3">
        <form action="{{route('admin.payment.update',['id'=>$payment_gateway->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @foreach (json_decode($payment_gateway->keys) as $key => $value)
            @if ($key == 'currency')     
                <div class="form-group mb-2">
                    <label for="currency" class="form-label"> {{get_phrase('Payment currency')}} </label>
                    <select type="text" name="currency" id="currency" class="form-control ol-select2 select2-hidden-accessible ol-form-control">
                        @foreach ($currencies as $item)
                        <option value="{{$item->code}}" {{$item->code == $value?'selected':''}}> {{$item->code}} </option>
                        @endforeach
                    </select>
                </div>
            @else
                <div class="form-group mb-2">
                    <label for="{{$key}}" class="form-label"> {{ucwords($key)}} </label>
                    <input type="hidden" name="label[]" value="{{$key}}">
                    <input type="text" name="payment[]" id="{{$key}}" class="form-control ol-form-control" value="{{$value}}">
                </div>
            @endif  
            @endforeach
           <button type="submit" class="btn btn-primary mt-2 fs-14"> {{get_phrase('Update')}} </button>
        </form>
    </div>
</div>

@endsection