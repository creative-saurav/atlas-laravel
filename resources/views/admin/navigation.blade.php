@php $current_route = Route::currentRouteName(); @endphp

<div class="sidebar-logo-area">
    <a href="{{ route('home') }}" class="sidebar-logos">
        <img class="sidebar-logo-lg" height="50px" src="{{ asset('public/assets/backend/images/logo-light-bg.svg') }}" alt="">
        <img class="sidebar-logo-sm" height="40px" src="{{ asset('public/assets/backend/images/favicon.svg') }}" alt="">
    </a>
    <button class="sidebar-cross menu-toggler d-block d-lg-none">
        <span class="fi-rr-cross"></span>
    </button>
</div>
<div class="sidebar-nav-area">
    <nav class="sidebar-nav">
        <h3 class="sidebar-title fs-12px px-30px pb-20px text-uppercase mt-4">MAIN MENU</h3>
        <ul class="px-14px pb-24px">
            <li class="sidebar-first-li {{request()->is('admin/dashboard')?'active':''}}"><a href="{{ route('admin.dashboard')}}">
                <span class="icon fi-rr-house-blank"></span>
                <div class="text">
                    <span> {{get_phrase('Dashboard')}} </span>
                </div>
            </a></li>
            <li class="sidebar-first-li first-li-have-sub {{request()->is('admin/categories*')?'active':''}}">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-apps"></span>
                    <div class="text">
                        <span> {{get_phrase('Listing Categories')}} </span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="sidebar-second-li {{request()->is('admin/categories/doctor')?'active':''}}"><a href="{{ route('admin.categories',['type'=>'doctor'])}}"> {{get_phrase('Doctor')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/categories/beauty')?'active':''}}"><a href="{{ route('admin.categories',['type'=>'beauty'])}}"> {{get_phrase('Beauty')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/categories/car')?'active':''}}"><a href="{{ route('admin.categories',['type'=>'car'])}}"> {{get_phrase('Car')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/categories/real-estate')?'active':''}}"><a href="{{ route('admin.categories',['type'=>'real-estate'])}}"> {{get_phrase('Real Estate')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/categories/hotel')?'active':''}}"><a href="{{ route('admin.categories',['type'=>'hotel'])}}"> {{get_phrase('Hotel')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/categories/restaurant')?'active':''}}"><a href="{{ route('admin.categories',['type'=>'restaurant'])}}"> {{get_phrase('Restaurant')}} </a></li>
                </ul>
            </li>
            <li class="sidebar-first-li {{request()->is('admin/cities*')?'active':''}}">
                <a href="{{ route('admin.cities')}}">
                    <span class="icon fi-rr-square-plus"></span>
                    <div class="text">
                        <span> {{get_phrase('Cities')}} </span>
                    </div>
                </a>
            </li>
            <li class="sidebar-first-li first-li-have-sub {{request()->is('admin/amenities*')?'active':''}}">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-apps"></span>
                    <div class="text">
                        <span> {{get_phrase('Listing Amenities')}} </span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    {{-- <li class="sidebar-second-li {{request()->is('admin/categories/doctor')?'active':''}}"><a href="{{ route('admin.categories',['type'=>'doctor'])}}"> {{get_phrase('Doctor')}} </a></li> --}}

                    
                    <li class="sidebar-second-li {{request()->is('admin/amenities-item/car*')?'active':''}}"><a href="{{ route('admin.amenities.item',['type'=>'car','item'=>'model'])}}"> {{get_phrase('Car')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/amenities-item/beauty*')?'active':''}}"><a href="{{ route('admin.amenities.item',['type'=>'beauty', 'item'=>'team'])}}"> {{get_phrase('Beauty')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/amenities/real-estate') || request()->is('admin/amenities-item/real-estate/feature')?'active':''}}"><a href="{{ route('admin.amenities.item',['type'=>'real-estate','item'=>'feature'])}}"> {{get_phrase('Real Estate')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/amenities/hotel') || request()->is('admin/amenities-item/hotel*')?'active':''}}"><a href="{{ route('admin.amenities.item',['type'=>'hotel', 'item'=>'feature'])}}"> {{get_phrase('Hotel')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/amenities/restaurant') || request()->is('admin/amenities-item/restaurant*')?'active':''}}"><a href="{{ route('admin.amenities.item',['type'=>'restaurant','item'=>'feature'])}}"> {{get_phrase('Restaurant')}} </a></li>
                </ul>
            </li>
            <li class="sidebar-first-li first-li-have-sub {{request()->is('admin/listings*') || request()->is('admin/listing-create') || request()->is('admin/listing-edit*') || request()->is('admin/listing-store*') || request()->is('admin/claimed-listings*') || request()->is('admin/reported-listings*') ?'active':''}}">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-clipboard-list"></span>
                    <div class="text">
                        <span> {{get_phrase('Directory Listings')}} </span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="sidebar-second-li second-li-have-sub {{request()->is('admin/listings*') || request()->is('admin/listing-edit*')?'active':''}}">
                        <a href="javascript:void(0);">  {{get_phrase('All Listings')}} </a>
                        <ul class="second-sub-menu">

                            {{-- <li class="sidebar-third-li"><a href="{{ route('admin.listing.list',['type'=>'doctor'])}}"> {{get_phrase('Doctor')}} </a></li> --}}

                            <li class="sidebar-third-li {{request()->is('admin/listings/beauty*') || request()->is('admin/listing-edit/beauty*') ?'active':''}}"><a href="{{ route('admin.listing.list',['type'=>'beauty'])}}"> {{get_phrase('Beauty')}} </a></li>

                            <li class="sidebar-third-li {{request()->is('admin/listings/car*') || request()->is('admin/listing-edit/car*') ?'active':''}}"><a href="{{ route('admin.listing.list',['type'=>'car'])}}"> {{get_phrase('Car')}} </a></li>

                            <li class="sidebar-third-li {{request()->is('admin/listings/real-estate*') || request()->is('admin/listing-edit/real-estate*')?'active':''}}"><a href="{{ route('admin.listing.list',['type'=>'real-estate'])}}"> {{get_phrase('Real Estate')}} </a></li>

                            <li class="sidebar-third-li {{request()->is('admin/listings/hotel*') || request()->is('admin/listing-edit/hotel*')?'active':''}}"><a href="{{ route('admin.listing.list',['type'=>'hotel'])}}"> {{get_phrase('Hotel')}} </a></li>

                            <li class="sidebar-third-li {{request()->is('admin/listings/restaurant*') || request()->is('admin/listing-edit/restaurant*')?'active':''}}"><a href="{{ route('admin.listing.list',['type'=>'restaurant'])}}"> {{get_phrase('Restaurant')}} </a></li>

                        </ul>
                    </li>
                    <li class="sidebar-second-li {{request()->is('admin/listing-create') || request()->is('admin/listing-store*')?'active':''}}"><a href="{{ route('admin.listing.create')}}"> {{get_phrase('Add Listing')}} </a></li>
                    <li class="sidebar-second-li  {{ request()->is('admin/claimed-listings*') ? 'active' : '' }}"><a href="{{ route('admin.claimed_listings')}}"> {{get_phrase('Claimed Listings')}} </a></li>
                    <li class="sidebar-second-li {{ request()->is('admin/reported-listings*') ? 'active' : '' }}"><a href="{{ route('admin.reported_listings')}}"> {{get_phrase('Reported Listing')}} </a></li>
                </ul>
            </li>
            <li class="sidebar-first-li {{ request()->is('admin/subscription-list*') ? 'active' : '' }}"><a href="{{ route('admin.subscriptions') }}">
                <span class="icon fi-rr-comment-dollar"></span>
                <div class="text">
                    <span> {{get_phrase('Subscription History')}} </span>
                </div>
            </a></li>
            <li class="sidebar-first-li {{request()->is('admin/pricing')?'active':''}}">
                <a href="{{ route('admin.pricing')}}">
                    <span class="icon fi-rr-note-medical"></span>
                    <div class="text">
                        <span> {{get_phrase('Pricing')}} </span>
                    </div>
                </a>
            </li>
            <li class="sidebar-first-li {{request()->is('admin/appointments')?'active':''}}">
                <a href="{{ route('admin.appointments')}}">
                    <span class="icon fi-rr-note-medical"></span>
                    <div class="text">
                        <span> {{get_phrase('Appointments')}} </span>
                    </div>
                </a>
            </li>
            <li class="sidebar-first-li first-li-have-sub {{request()->is('admin/user*') || request()->is('admin/edit-user*')?'active':''}}">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-users"></span>
                    <div class="text">
                        <span> {{get_phrase('Users')}} </span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="sidebar-second-li second-li-have-sub {{request()->is('admin/user/doctor*') || request()->is('admin/edit-user/doctor*')?'active':''}}">
                        <a href="javascript:void(0);">  {{get_phrase('Doctor')}} </a>
                        <ul class="second-sub-menu">
                            <li class="sidebar-third-li {{request()->is('admin/user/doctor/add')?'active':''}}"><a href="{{ route('admin.user',['type'=>'doctor','action'=>'add'])}}"> {{get_phrase('Add New')}} </a></li>
                            <li class="sidebar-third-li {{request()->is('admin/user/doctor/all') || request()->is('admin/edit-user/doctor*')?'active':''}}"><a href="{{ route('admin.user',['type'=>'doctor','action'=>'all'])}}"> {{get_phrase('All Doctors')}} </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-second-li second-li-have-sub {{request()->is('admin/user/agent*') || request()->is('admin/edit-user/agent*')?'active':''}}">
                        <a href="javascript:void(0);">  {{get_phrase('Agent')}} </a>
                        <ul class="second-sub-menu">
                            <li class="sidebar-third-li {{request()->is('admin/user/agent/add')?'active':''}}"><a href="{{ route('admin.user',['type'=>'agent','action'=>'add'])}}"> {{get_phrase('Add New')}} </a></li>

                            <li class="sidebar-third-li {{request()->is('admin/user/agent/all') || request()->is('admin/edit-user/agent*')?'active':''}}"><a href="{{ route('admin.user',['type'=>'agent','action'=>'all'])}}"> {{get_phrase('All Agents')}} </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-second-li second-li-have-sub {{request()->is('admin/user/customer*') || request()->is('admin/edit-user/customer*')?'active':''}}">
                        <a href="javascript:void(0);">  {{get_phrase('Customer')}} </a>
                        <ul class="second-sub-menu">
                            <li class="sidebar-third-li {{request()->is('admin/user/customer/add')?'active':''}}"><a href="{{ route('admin.user',['type'=>'customer','action'=>'add'])}}"> {{get_phrase('Add New')}} </a></li>

                            <li class="sidebar-third-li {{request()->is('admin/user/customer/all') || request()->is('admin/edit-user/customer*')?'active':''}}"><a href="{{ route('admin.user',['type'=>'customer','action'=>'all'])}}"> {{get_phrase('All Customers')}} </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidebar-first-li first-li-have-sub">
                <a href="javascript:void(0);">
                    <span class="icon fi fi-rr-envelope-open-text"></span>
                    <div class="text">
                        <span> {{get_phrase('Newsletter')}} </span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="sidebar-second-li"><a href="#"> {{get_phrase('Manage Newsletter')}} </a></li>
                    <li class="sidebar-second-li"><a href="#"> {{get_phrase('Subscribed User')}} </a></li>
                </ul>
            </li>
            <li class="sidebar-first-li"><a href="#">
                <span class="icon fi fi-rr-blog-text"></span>
                <div class="text">
                    <span> {{get_phrase('Contacts')}} </span>
                </div>
            </a></li>
            <li class="sidebar-first-li first-li-have-sub {{request()->is('admin/blogs/all') || request()->is('admin/blogs/pending') || request()->is('admin/blog-category') || request()->is('admin/blog-create')?'active':''}}">
                <a href="javascript:void(0);">
                    <span class="icon fi fi-rr-blog-text"></span>
                    <div class="text">
                        <span> {{get_phrase('Blogs')}} </span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="sidebar-second-li {{request()->is('admin/blogs/all')?'active':''}}"><a href="{{ route('admin.blogs',['type'=>'all'])}}"> {{get_phrase('All Blogs')}} </a></li>
                    <li class="sidebar-second-li {{request()->is('admin/blogs/pending')?'active':''}}"><a href="{{ route('admin.blogs',['type'=>'pending'])}}"> {{get_phrase('Pending Blogs')}} </a></li>
                    <li class="sidebar-second-li {{request()->is('admin/blog-create')?'active':''}}"><a href="{{ route('admin.blog.create')}}"> {{get_phrase('Add Blogs')}} </a></li>
                    <li class="sidebar-second-li {{request()->is('admin/blog-category')?'active':''}}"><a href="{{ route('admin.blog.category')}}"> {{get_phrase('Blog Category')}} </a></li>
                </ul>
            </li>
            <li class="sidebar-first-li first-li-have-sub {{request()->is('admin/system-setting') || request()->is('admin/language-setting') || request()->is('admin/email-settings') || request()->is('admin/website-setting') || request()->is('admin/language-phrase*') || request()->is('admin/payment-edit*') || request()->is('admin/payment-gateways*') || $current_route == 'admin.seo.settings' || $current_route == 'admin.about' ?'active':''}}">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-settings"></span>
                    <div class="text">
                        <span> {{get_phrase('Settings')}} </span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="sidebar-second-li {{request()->is('admin/system-setting')?'active':''}}"><a href="{{ route('admin.system.setting')}}"> {{get_phrase('System Settings')}} </a></li>
                    <li class="sidebar-second-li {{request()->is('admin/website-setting')?'active':''}}"><a href="{{ route('admin.website.settings')}}"> {{get_phrase('Website Settings')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/payment-gateways') || request()->is('admin/payment-edit*')?'active':''}}"><a href="{{route('admin.payment.setting')}}"> {{get_phrase('Payment Settings')}} </a></li>

                    <li class="sidebar-second-li {{request()->is('admin/language-setting') || request()->is('admin/language-phrase*')?'active':''}}"><a href="{{ route('admin.language.setting')}}"> {{get_phrase('Language Settings')}} </a></li>
                    <li class="sidebar-second-li {{request()->is('admin/email-settings')?'active':''}}"><a href="{{ route('admin-email-settings')}}"> {{get_phrase('Email Settings')}} </a></li>
                    <li class="sidebar-second-li {{ $current_route == 'admin.seo.settings' ? 'active' : '' }}"><a href="{{ route('admin.seo.settings') }}">{{ get_phrase('SEO Settings') }}</a></li>
                    <li class="sidebar-second-li {{ $current_route == 'admin.about' ? 'active' : '' }}"><a href="{{ route('admin.about') }}">{{ get_phrase('About') }}</a></li>
                </ul>
            </li>
            <li class="sidebar-first-li {{request()->is('admin/profile')?'active':''}}"><a href="{{ route('admin.profile')}}">
                <span class="icon fi-rr-circle-user"></span>
                <div class="text">
                    <span> {{get_phrase('Manage Profile')}} </span>
                </div>
            </a></li>
        </ul>
    </nav>
</div>