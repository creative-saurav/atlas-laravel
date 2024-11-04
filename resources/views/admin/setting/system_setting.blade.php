@extends('layouts.admin')
@section('title', get_phrase('System Settings'))
@section('admin_layout')

<div class="ol-card radius-8px">
    <div class="ol-card-body my-2 py-20px px-20px">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap flex-md-nowrap">
            <h4 class="title fs-16px">
                <i class="fi-rr-settings-sliders me-2"></i>
                {{ get_phrase('System Settings') }}
            </h4>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-6">
        <div class="ol-card">
            <div class="ol-card-body p-3 py-4">
            <form action="{{route('admin.system-setting-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="system_title" class="form-label ol-form-label"> {{get_phrase('System name')}} </label>
                    <input type="text" class="form-control ol-form-control" name="system_title" id="system_title" value="{{get_settings('system_title')}}" required>
                </div>
                <div class="mb-3">
                    <label for="system_email" class="form-label ol-form-label"> {{get_phrase('System Email')}} </label>
                    <input type="text" class="form-control ol-form-control" name="system_email" id="system_email" value="{{get_settings('system_email')}}" required>
                </div>
                <div class="mb-3">
                    <label for="system_currency" class="form-label ol-form-label"> {{get_phrase('System Currency')}} </label>
                    <select name="system_currency" id="system_currency" class="form-control ol-form-control ol-select2" required>
                        @foreach (App\Models\Currency::get() as $item)
                            <option value="{{$item->id}}" {{get_settings('system_currency') == $item->id?'selected':''}}> {{$item->code}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="currency_position" class="form-label ol-form-label"> {{get_phrase('Currency Position')}} </label>
                    <select name="currency_position" id="currency_position" class="form-control ol-form-control ol-select2" required>
                        <option value="left" {{get_settings('currency_position') == 'left'?'selected':''}}> {{get_phrase('Left')}} </option>
                        <option value="right" {{get_settings('currency_position') == 'right'?'selected':''}}> {{get_phrase('Right')}} </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label ol-form-label"> {{get_phrase('Office 
                    Address')}} </label>
                    <input type="text" class="form-control ol-form-control" name="address" id="address" value="{{get_settings('address')}}" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label ol-form-label"> {{get_phrase('Phone Number')}} </label>
                    <input type="text" class="form-control ol-form-control" name="phone" id="phone" value="{{get_settings('phone')}}" required>
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label ol-form-label"> {{get_phrase('System Language')}} </label>
                    <select name="language" id="language" class="form-control ol-form-control ol-select2"  required>
                        <option value="">
                            {{ get_phrase('Select a system language') }}
                        </option>

                        @foreach (App\Models\Language::select('name')->groupBy('name')->get(); as $language)
                        <option value="{{ $language->name }}" @if(get_settings('language')==$language->name) {{ 'selected' }} @endif>
                            {{  get_phrase(ucfirst($language->name )) }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label ol-form-label"> {{get_phrase('Country')}} </label>
                    <select name="country" id="country" class="form-control ol-form-control ol-select2"  required>
                        <option value="">
                            {{ get_phrase('Select a Country') }}
                        </option>

                        @foreach (App\Models\Country::get() as $country)
                        <option value="{{ $country->id }}" @if(get_settings('country_id')==$country->id) {{ 'selected' }} @endif>
                            {{  get_phrase(ucfirst($country->name )) }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="purchase_code" class="form-label ol-form-label"> {{get_phrase('Purchase Code')}} </label>
                    <input type="text" class="form-control ol-form-control" name="purchase_code" id="purchase_code" value="{{get_settings('purchase_code')}}" required>
                </div>
                <div class="mb-3">
                    <label for="verification" class="form-label ol-form-label"> {{get_phrase('Email Verification')}} </label>
                    <select name="signup_email_verification" id="verification" class="form-control ol-form-control"  required>
                        <option value="">{{get_phrase('Select email verfication')}} </option>
                        <option value="1" @if(get_settings('signup_email_verification') == 1) selected @endif>
                            {{ get_phrase('Enable') }}
                        </option>
                        <option value="0" @if(get_settings('signup_email_verification') == 0) selected @endif>
                            {{ get_phrase('Disable') }}
                        </option>  
                    </select>
                </div>
                <div class="mb-3">
                    <label for="map_access_token" class="form-label ol-form-label">{{ get_phrase('Map access token') }}</label>
                    <input type="text" class="form-control ol-form-control" value="{{ get_settings('map_access_token') }}" id="map_access_token" name = "map_access_token" required>
                </div>
                <div class="mb-3">
                    <label for="max_zoom_level" class="form-label ol-form-label">{{ get_phrase('Max zoom level') }}</label>
                    <input type="text" class="form-control ol-form-control" value="{{ get_settings('max_zoom_level') }}" id="max_zoom_level" name = "max_zoom_level" required>
                </div>
                <div class="mb-3">
                    <label for="default_location" class="form-label ol-form-label">{{ get_phrase('Default location') }}</label>
                    <input type="text" class="form-control ol-form-control" value="{{ get_settings('default_location') }}" id="default_location" name = "default_location" required>
                </div>
                <button type="submit" class="btn btn-primary fs-14px"> {{get_phrase('Update')}} </button>
            </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="ol-card">
            <div class="ol-card-body p-3 py-4">
                <form action="{{route('admin.system-setting-update-social')}}" method="post" enctype="multipart/form-data\">
                    @csrf
                    <div class="mb-3">
                        <label for="facebook" class="form-label ol-form-label"> {{get_phrase('Facebook Link')}}* </label>
                        <input type="text" class="form-control ol-form-control" name="facebook" id="facebook" value="{{ get_settings('facebook') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="twitter" class="form-label ol-form-label"> {{get_phrase('Twitter Link')}}* </label>
                        <input type="text" class="form-control ol-form-control" name="twitter" id="twitter" value="{{ get_settings('twitter') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label ol-form-label"> {{get_phrase('Linkedin Link')}}* </label>
                        <input type="text" class="form-control ol-form-control" name="linkedin" id="linkedin" value="{{ get_settings('linkedin') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary fs-14px"> {{get_phrase('Update')}} </button>
                </form>
            </div>
        </div>
        <div class="ol-card mt-3">
            <div class="ol-card-body p-3">
                <form action="" method="post" enctype="multipart/form-data\">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label ol-form-label"> {{get_phrase('Update File')}}* </label>
                        <input type="file" class="form-control ol-form-control" name="file" id="file" required>
                    </div>
                    <button type="submit" class="btn btn-primary fs-14px"> {{get_phrase('Update')}} </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection