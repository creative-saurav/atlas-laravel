<!-- Header -->
<div class="ol-header print-d-none d-flex align-items-center justify-content-between py-2 ps-3">
    <div class="header-title-menubar d-flex align-items-center">
        <button class="menu-toggler sidebar-plus">
            <span class="fi-rr-menu-burger"></span>
        </button>

        <div class="main-header-title">
            <h1 class="page-title fs-18px d-flex align-items-center gap-3">
                {{ get_settings('system_title') }}
            </h1>
            <span class="text-12px d-none d-md-inline-block">{{ get_phrase('Atlas Admin Panel') }}</span>
        </div>
        <a href="{{ route('home') }}" target="_blank" class="btn btn-sm pt-0 d-none d-md-inline-block text-14px text-muted">
            <span>{{ get_phrase('View site') }}</span>
            <i class="fi-rr-arrow-up-right-from-square text-12px text-muted"></i>
        </a>
    </div>
    <div class="header-content-right d-flex align-items-center justify-content-end">
        <!-- language Select -->
        <div class="d-none d-sm-block">
            <div class="img-text-select ">
                @php
                    $activated_language = strtolower(session('language') ?? get_settings('language'));
                @endphp
                <div class="selected-show" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ get_phrase('Language') }}">
                    <i class="fi-rr-language text-20px py-2"></i>
                </div>
                <div class="drop-content">
                    <ul>
                        @foreach (App\Models\Language::select('name')->distinct()->get() as $lng)
                            <li>
                                <a href="{{ route('admin.select.language', ['language' => $lng->name]) }}" class="select-text text-capitalize">

                                    <i class="fi fi-br-check text-10px me-1 @if ($activated_language != strtolower($lng->name)) visibility-hidden @endif"></i>
                                    {{ $lng->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Profile -->
        <div class="header-dropdown-md">
            <button class="header-dropdown-toggle-md" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-profile-sm">
                    <img src="{{ get_image('storage/app/public/users/'.user('image')) }}" alt="">
                </div>
            </button>
            <div class="header-dorpdown-menu-md p-3">
                <div class="d-flex column-gap-2 mb-12px pb-12px ol-border-bottom-2">
                    <div class="user-profile-sm">
                        <img src="{{ get_image('storage/app/public/users/'.user('image')) }}" alt="">
                    </div>
                    <div>
                        <h6 class="title fs-12px mb-2px"> {{user('name')}} </h6>
                        <p class="sub-title fs-12px"> {{get_phrase('Admin')}} </p>
                    </div>
                </div>
                <ul class="mb-12px">
                    <li class="dropdown-list-1"><a class="dropdown-item-1" href="{{ route('admin.profile')}}"> {{get_phrase('My Profile')}} </a></li>
                    <li class="dropdown-list-1"><a class="dropdown-item-1" href="{{ route('logout') }}"> {{get_phrase('Sign Out')}} </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>