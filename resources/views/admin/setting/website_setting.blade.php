@extends('layouts.admin')
@section('title', get_phrase('System Settings'))
@section('admin_layout')

<div class="ol-card radius-8px">
    <div class="ol-card-body my-2 py-20px px-20px">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap flex-md-nowrap">
            <h4 class="title fs-16px">
                <i class="fi-rr-settings-sliders me-2"></i>
                {{ get_phrase('Website Settings') }}
            </h4>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-3">
    <div class="col-xl-12">
        <div class="ol-card p-4">
            <div class="ol-card-body">
                <div class="col-md-12 pb-3">
                    <ul class="nav nav-tabs eNav-Tabs-custom eTab" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="cHome-tab" data-bs-toggle="tab" data-bs-target="#cHome"
                                type="button" role="tab" aria-controls="cHome" aria-selected="true">
                                {{ get_phrase('Frontend Settings') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cDoctor-tab" data-bs-toggle="tab" data-bs-target="#cDoctor"
                                type="button" role="tab" aria-controls="cDoctor" aria-selected="false">
                                {{ get_phrase('Doctor') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cBeauty-tab" data-bs-toggle="tab" data-bs-target="#cBeauty"
                                type="button" role="tab" aria-controls="cBeauti" aria-selected="false">
                                {{ get_phrase('Beauty') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cCar-tab" data-bs-toggle="tab" data-bs-target="#cCar"
                                type="button" role="tab" aria-controls="cCar" aria-selected="false">
                                {{ get_phrase('Car') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cRealEstate-tab" data-bs-toggle="tab" data-bs-target="#cRealEstate"
                                type="button" role="tab" aria-controls="cRealEstate" aria-selected="false">
                                {{ get_phrase('Real Estate') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cHotel-tab" data-bs-toggle="tab" data-bs-target="#cHotel"
                                type="button" role="tab" aria-controls="cHotel" aria-selected="false">
                                {{ get_phrase('Hotel') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cRestaurent-tab" data-bs-toggle="tab" data-bs-target="#cRestaurent"
                                type="button" role="tab" aria-controls="cRestaurent" aria-selected="false">
                                {{ get_phrase('Restaurent') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="logo_images-tab" data-bs-toggle="tab"
                                data-bs-target="#logo_images" type="button" role="tab" aria-controls="logo_images"
                                aria-selected="false">
                                {{ get_phrase('Logo & Images') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews" data-bs-toggle="tab"
                                data-bs-target="#reviews-tab" type="button" role="tab" aria-controls="reviews-tab"
                                aria-selected="false">
                                {{ get_phrase('User Reviews') }}
                                <span></span>
                            </button>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cSettings-tab" data-bs-toggle="tab" data-bs-target="#cSettings"
                                type="button" role="tab" aria-controls="cSettings" aria-selected="false">
                                {{ get_phrase('Website FAQS') }}
                                <span></span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact_information-tab" data-bs-toggle="tab"
                                data-bs-target="#contact_information" type="button" role="tab"
                                aria-controls="contact_information" aria-selected="false">
                                {{ get_phrase('Contact Information') }}
                                <span></span>
                            </button>
                        </li> --}}
                    </ul>
                    <div class="tab-content eNav-Tabs-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="cHome" role="tabpanel"
                            aria-labelledby="cHome-tab">
                            <div class="tab-pane show active" id="frontendsettings">
                                <form action="{{route('admin.website-setting-update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="type" value="frontend_settings">
                                    <div class=" fpb-7 mb-3">
                                        <label for="map_position" class="form-label ol-form-label"> {{get_phrase('Map Position')}} </label>
                                        <select name="map_position" id="map_position" class="form-control ol-select2 ol-form-control">
                                            <option value="right" {{get_frontend_settings('map_position') == 'right'?'selected':''}}> {{get_phrase('Right Sidebar')}} </option>
                                            <option value="top" {{get_frontend_settings('map_position') == 'top'?'selected':''}}> {{get_phrase('Top Header')}} </option>
                                        </select>
                                    </div>  
                                    <div class="fpb-7 mb-3">
                                        <button type="submit" class="btn ol-btn-primary">{{get_phrase('Update Settings')}}</button>
                                    </div>
    
                                 </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cDoctor" role="tabpanel" aria-labelledby="cDoctor-tab">
                            doctor
                        </div>
                        <div class="tab-pane fade" id="cBeauty" role="tabpanel" aria-labelledby="cBeauty-tab">
                            Beauty
                        </div>
                        <div class="tab-pane fade" id="cCar" role="tabpanel" aria-labelledby="cCar-tab">
                            car
                        </div>
                        <div class="tab-pane fade" id="cRealEstate" role="tabpanel" aria-labelledby="cRealEstate-tab">
                            Real Estate
                        </div>
                        <div class="tab-pane fade" id="cHotel" role="tabpanel" aria-labelledby="cHotel-tab">
                           Hotel
                        </div>
                        <div class="tab-pane fade" id="cRestaurent" role="tabpanel" aria-labelledby="cRestaurent-tab">
                            Restaurent
                        </div>
                        <div class="tab-pane fade" id="logo_images" role="tabpanel"
                            aria-labelledby="logo_images-tab">
                            <form action="{{route('admin.website-setting-update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="type" value="logo_images_settings">
                                <label for="map_position" class="form-label ol-form-label mt-3">{{get_phrase('Mother Homepage Banner')}} </label>
                                <div class="row mb-3">
                                    @php
                                    $mother_banner_images = json_decode(get_frontend_settings('mother_homepage_banner'), true);
                                    $mother_banner_images = is_array($mother_banner_images) && !empty(array_filter($mother_banner_images, fn($banner) => !empty($banner['title']) || !empty($banner['description']) || !empty($banner['image'])))
                                        ? $mother_banner_images
                                        : null;
                                @endphp
                                
                                @if($mother_banner_images)
                                    @foreach ($mother_banner_images as $key => $banner_images)
                                        <div class="col-md-2">
                                            <div class="eImage eCard card">
                                                <img src="{{ asset('public/uploads/mother_homepage_banner/' . $banner_images['image']) }}" alt="">
                                                <div class="card-body card_text">
                                                    <h5>{{ \Illuminate\Support\Str::limit($banner_images['title'], 18, '...') }}</h5>
                                                </div>
                                                <div class="eControll d-flex">
                                                    <a href="javascript:;" onclick="edit_modal('modal-md', '{{ route('admin.mother-banner.edit', ['id' => $banner_images['id']]) }}', '{{ get_phrase('Update Banner') }}')"  data-bs-toggle="tooltip" 
                                                    title="{{ get_phrase('Edit') }}"> <i class="fas fa-edit"></i>
                                                 </a>
                                                 
                                                 <a href="javascript:;" onclick="delete_modal('{{ route('admin.delete-mother-banner', ['id' => $banner_images['id']]) }}')" 
                                                    class="mx-1"  data-bs-toggle="tooltip" title="{{ get_phrase('Delete') }}"> <i class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                    <div class="col-md-2">
                                        <div class="eImage"  onclick="modal('modal-md', '{{route('admin.mother.banner')}}', '{{get_phrase('Add New Banner')}}')">
                                            <span><i class="fas fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                             </form>
                             <div class="row mt-5">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="ol-card p-4 ol-card p-4-2">
                                        <div class="ol-card-body">
                                            <div class="col-xl-12">
                                                <div class="row justify-content-center">
                                                    <form action="{{ route('admin.website-setting-update') }}" method="post" enctype="multipart/form-data" class="text-center">
                                                        @csrf
                                                        <input type="hidden" name="type" value="light_logo">
                                                        <div class="form-group mb-2">
                                                            <div class="wrapper-image-preview  d-flex justify-content-center">
                                                                <div class="box">
                                                                    <div class="upload-options">
                                                                        @if(get_frontend_settings('light_logo'))
                                                                          <img src="{{ asset('public/uploads/logo/' . get_frontend_settings('light_logo')) }}" alt="" class="radious-15px px-2 py-2 light-logo-preview h-77">
                                                                        @else
                                                                            <img src="{{ asset('public/uploads/logo/light_logo.svg') }}" alt="" class="radious-15px px-2 py-2 dark-logo-preview h-77">
                                                                        @endif
                                                                        <label for="light_logo" class="btn ol-card p-4-text">
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M18 6C17.39 6 16.83 5.65 16.55 5.11L15.83 3.66C15.37 2.75 14.17 2 13.15 2H10.86C9.83005 2 8.63005 2.75 8.17005 3.66L7.45005 5.11C7.17004 5.65 6.61005 6 6.00005 6C3.83005 6 2.11005 7.83 2.25005 9.99L2.77005 18.25C2.89005 20.31 4.00005 22 6.76005 22H17.24C20 22 21.1 20.31 21.23 18.25L21.75 9.99C21.89 7.83 20.17 6 18 6ZM10.5 7.25H13.5C13.91 7.25 14.25 7.59 14.25 8C14.25 8.41 13.91 8.75 13.5 8.75H10.5C10.09 8.75 9.75005 8.41 9.75005 8C9.75005 7.59 10.09 7.25 10.5 7.25ZM12 18.12C10.14 18.12 8.62005 16.61 8.62005 14.74C8.62005 12.87 10.13 11.36 12 11.36C13.87 11.36 15.38 12.87 15.38 14.74C15.38 16.61 13.86 18.12 12 18.12Z"
                                                                                    fill="#797c8b" />
                                                                            </svg>
                                                                            {{ get_phrase('Upload light logo') }}
                                                                            <small class="d-block">(330 X 70)</small> </label>
                                                                        <input id="light_logo" type="file" class="image-upload d-none" name="light_logo" accept="image/*">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn ol-btn-primary w-100">{{ get_phrase('Save Changes') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xl-4 col-lg-6">
                                    <div class="ol-card p-4 ol-card p-4-2">
                                        <div class="ol-card-body">
                                            <div class="col-xl-12">
                                                <div class="row justify-content-center">
                                                    <form action="{{ route('admin.website-setting-update') }}" method="post" enctype="multipart/form-data" class="text-center">
                                                        @csrf
                                                        <input type="hidden" name="type" value="dark_logo">
                                                        <div class="form-group mb-2">
                                                            <div class="wrapper-image-preview  d-flex justify-content-center">
                                                                <div class="box">
                                                                    <div class="upload-options">
                                                                        @if(get_frontend_settings('dark_logo'))
                                                                            <img src="{{ asset('public/uploads/logo/' . get_frontend_settings('dark_logo')) }}" alt="" class="bg-dark radious-15px px-2 py-2 dark-logo-preview h-77">
                                                                        @else
                                                                            <img src="{{ asset('public/uploads/logo/dark_logo.svg') }}" alt="" class="bg-dark radious-15px px-2 py-2 dark-logo-preview h-77">
                                                                        @endif

                                                                        <label for="dark_logo" class="btn ol-card p-4-text">
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M18 6C17.39 6 16.83 5.65 16.55 5.11L15.83 3.66C15.37 2.75 14.17 2 13.15 2H10.86C9.83005 2 8.63005 2.75 8.17005 3.66L7.45005 5.11C7.17004 5.65 6.61005 6 6.00005 6C3.83005 6 2.11005 7.83 2.25005 9.99L2.77005 18.25C2.89005 20.31 4.00005 22 6.76005 22H17.24C20 22 21.1 20.31 21.23 18.25L21.75 9.99C21.89 7.83 20.17 6 18 6ZM10.5 7.25H13.5C13.91 7.25 14.25 7.59 14.25 8C14.25 8.41 13.91 8.75 13.5 8.75H10.5C10.09 8.75 9.75005 8.41 9.75005 8C9.75005 7.59 10.09 7.25 10.5 7.25ZM12 18.12C10.14 18.12 8.62005 16.61 8.62005 14.74C8.62005 12.87 10.13 11.36 12 11.36C13.87 11.36 15.38 12.87 15.38 14.74C15.38 16.61 13.86 18.12 12 18.12Z"
                                                                                    fill="#797c8b" />
                                                                            </svg>
                                                                            {{ get_phrase('Upload Dark logo') }}
                                                                            <small class="d-block">(330 X 70)</small> </label>
                                                                        <input id="dark_logo" type="file" class="image-upload d-none" name="dark_logo" accept="image/*">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn ol-btn-primary w-100">{{ get_phrase('Save Changes') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xl-4 col-lg-6">
                                    <div class="ol-card p-4 ol-card p-4-2">
                                        <div class="ol-card-body">
                                            <div class="col-xl-12">
                                                <div class="row justify-content-center">
                                                    <form action="{{ route('admin.website-setting-update') }}" method="post" enctype="multipart/form-data" class="text-center">
                                                        @csrf
                                                        <input type="hidden" name="type" value="favicon_logo">
                                                        <div class="form-group mb-2">
                                                            <div class="wrapper-image-preview  d-flex justify-content-center">
                                                                <div class="box">
                                                                    <div class="upload-options">
                                                                       
                                                                        @if(get_frontend_settings('favicon_logo'))
                                                                          <img src="{{ asset('public/uploads/logo/' . get_frontend_settings('favicon_logo')) }}" alt="" class="radious-15px px-2 py-2 favicon-logo-preview h-77">
                                                                        @else
                                                                            <img src="{{ asset('public/uploads/logo/favicon.svg') }}" alt="" class="radious-15px px-2 py-2 dark-logo-preview h-77">
                                                                        @endif
                                                                        <label for="favicon_logo" class="btn ol-card p-4-text">
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M18 6C17.39 6 16.83 5.65 16.55 5.11L15.83 3.66C15.37 2.75 14.17 2 13.15 2H10.86C9.83005 2 8.63005 2.75 8.17005 3.66L7.45005 5.11C7.17004 5.65 6.61005 6 6.00005 6C3.83005 6 2.11005 7.83 2.25005 9.99L2.77005 18.25C2.89005 20.31 4.00005 22 6.76005 22H17.24C20 22 21.1 20.31 21.23 18.25L21.75 9.99C21.89 7.83 20.17 6 18 6ZM10.5 7.25H13.5C13.91 7.25 14.25 7.59 14.25 8C14.25 8.41 13.91 8.75 13.5 8.75H10.5C10.09 8.75 9.75005 8.41 9.75005 8C9.75005 7.59 10.09 7.25 10.5 7.25ZM12 18.12C10.14 18.12 8.62005 16.61 8.62005 14.74C8.62005 12.87 10.13 11.36 12 11.36C13.87 11.36 15.38 12.87 15.38 14.74C15.38 16.61 13.86 18.12 12 18.12Z"
                                                                                    fill="#797c8b" />
                                                                            </svg>
                                                                            {{ get_phrase('Upload favicon') }}
                                                                            <small class="d-block">(90 X 90)</small> </label>
                                                                        <input id="favicon_logo" type="file" class="image-upload d-none" name="favicon_logo" accept="image/*">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn ol-btn-primary w-100">{{ get_phrase('Save Changes') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="tab-pane fade" id="reviews-tab" role="tabpanel"
                            aria-labelledby="reviews">
                            @include('admin.setting.user_review_list')
                        </div>
                        <div class="tab-pane fade" id="cSettings" role="tabpanel" aria-labelledby="cSettings-tab">
                            
                        </div>
                        <div class="tab-pane fade" id="contact_information" role="tabpanel"
                            aria-labelledby="contact_information-tab">
                          
                        </div>
                        <div class="tab-pane fade" id="recaptcha" role="tabpanel" aria-labelledby="recaptcha-tab">
                            
                        </div>
                        
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div>
    </div>
</div>


<script>
    // Generalized function to handle image preview for light, dark, and favicon logos
function handleImagePreview(input, previewSelector) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector(previewSelector).src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Event listeners for the logos
document.getElementById('light_logo').addEventListener('change', function(event) {
    handleImagePreview(event.target, '.light-logo-preview');
});

document.getElementById('dark_logo').addEventListener('change', function(event) {
    handleImagePreview(event.target, '.dark-logo-preview');
});

document.getElementById('favicon_logo').addEventListener('change', function(event) {
    handleImagePreview(event.target, '.favicon-logo-preview');
});

</script>


@endsection