    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    
    @if(get_frontend_settings('favicon_logo'))
    <link rel="shortcut icon" href="{{ asset('public/uploads/logo/' . get_frontend_settings('favicon_logo')) }}" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="{{ asset('public/uploads/logo/favicon.svg') }}" type="image/x-icon">
    @endif
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/vendors/bootstrap/bootstrap.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/vendors/nice-select/nice-select.css') }}">
    <!-- Flat UI Icon -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/icons/uicons-regular-rounded/css/uicons-regular-rounded.css') }}">
    {{-- Video Palyr --}}
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/plyr.css') }}">
    <!-- listing slider -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/backend/icon-picker/icons/fontawesome-all.min.css') }}" />
    <!-- toastr css -->
    <link rel="stylesheet" href="{{asset('public/plugin/toastr/toastr.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/custom.css') }}">