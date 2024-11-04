<div class="offcanvas-lg offcanvas-start ca-offcanvas" tabindex="-1" id="user-sidebar-offcanvas" aria-labelledby="user-sidebar-offcanvasLabel">
    <div class="offcanvas-header ca-offcanvas-header pb-3 cap-border-bottom mx-2 d-block">
        <div class="d-flex align-items-center gap-10px">
            <div class="circle-img-50px">
                <img src="{{ asset('public/assets/frontend/images/customer-agent/sidebar-user.png') }}" alt="user">
            </div>
            <div>
                <h2 class="in-title-14px mb-2">David Warner</h2>
                <p class="in-subtitle-14px text-break">devidwarner@gmail.com</p>
            </div>
        </div>
        <button type="button" class="btn-close ca-btn-close d-block d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#user-sidebar-offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ca-offcanvas-body">
        <div class="w-100 pt-3">
            <div class="mb-3">
                <h3 class="in-title-14px mb-2 cap-sidebar-title">My Customer Panel</h3>
                <nav>
                    <ul>
                        <li class="sidebar-nav-item"><a href="{{ route('customer.wishlist') }}" class="sidebar-nav-link {{ $active == 'wishlist' ? 'active' : '' }}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.465 15.6075C9.21 15.6975 8.79 15.6975 8.535 15.6075C6.36 14.865 1.5 11.7675 1.5 6.51745C1.5 4.19995 3.3675 2.32495 5.67 2.32495C7.035 2.32495 8.2425 2.98495 9 4.00495C9.7575 2.98495 10.9725 2.32495 12.33 2.32495C14.6325 2.32495 16.5 4.19995 16.5 6.51745C16.5 11.7675 11.64 14.865 9.465 15.6075Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">Wishlist</span>
                            </span> 
                            <span class="badge-secondary mt-1px">1</span>                                               
                        </a></li>
                        <li class="sidebar-nav-item"><a href="{{ route('customer.appointment') }}" class="sidebar-nav-link {{ $active == 'userAppointment' ? 'active' : '' }}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.98242 11.025L8.10742 12.15L11.1074 9.15002" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.5 4.5H10.5C12 4.5 12 3.75 12 3C12 1.5 11.25 1.5 10.5 1.5H7.5C6.75 1.5 6 1.5 6 3C6 4.5 6.75 4.5 7.5 4.5Z" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 3.01501C14.4975 3.15001 15.75 4.07251 15.75 7.50001V12C15.75 15 15 16.5 11.25 16.5H6.75C3 16.5 2.25 15 2.25 12V7.50001C2.25 4.08001 3.5025 3.15001 6 3.01501" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('Appointment')}}</span>
                            </span> 
                            <span class="badge-secondary mt-1px">2</span>                                               
                        </a></li>
                        <li class="sidebar-nav-item"><a href="{{route('user.account')}}" class="sidebar-nav-link {{$active == 'account' ? 'active':''}}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.11992 8.1525C9.04492 8.145 8.95492 8.145 8.87242 8.1525C7.08742 8.0925 5.66992 6.63 5.66992 4.83C5.66992 2.9925 7.15492 1.5 8.99992 1.5C10.8374 1.5 12.3299 2.9925 12.3299 4.83C12.3224 6.63 10.9049 8.0925 9.11992 8.1525Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.37004 10.92C3.55504 12.135 3.55504 14.115 5.37004 15.3225C7.43254 16.7025 10.815 16.7025 12.8775 15.3225C14.6925 14.1075 14.6925 12.1275 12.8775 10.92C10.8225 9.5475 7.44004 9.5475 5.37004 10.92Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('Account')}}</span>
                            </span>                                               
                        </a></li>
                        <li class="sidebar-nav-item"><a href="#" class="sidebar-nav-link">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8301 14.2875L11.9701 15.4275L14.2501 13.1475" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.11995 8.1525C9.04495 8.145 8.95495 8.145 8.87245 8.1525C7.08745 8.0925 5.66995 6.63 5.66995 4.83C5.66245 2.9925 7.15495 1.5 8.99245 1.5C10.83 1.5 12.3225 2.9925 12.3225 4.83C12.3225 6.63 10.8974 8.0925 9.11995 8.1525Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.99229 16.3575C7.62728 16.3575 6.26979 16.0125 5.23479 15.3225C3.41979 14.1075 3.41979 12.1275 5.23479 10.92C7.29729 9.54001 10.6798 9.54001 12.7423 10.92" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">Following agent</span>
                            </span>                                               
                        </a></li>
                        @if (!check_subscription(user('id')))    
                        <li class="sidebar-nav-item"><a href="{{route('customer.become_an_agent')}}" class="sidebar-nav-link {{ $active == 'become_an_agent' ? 'active' : '' }}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.86992 8.1525C6.79492 8.145 6.70492 8.145 6.62242 8.1525C4.83742 8.0925 3.41992 6.63 3.41992 4.83C3.41992 2.9925 4.90492 1.5 6.74992 1.5C8.58742 1.5 10.0799 2.9925 10.0799 4.83C10.0724 6.63 8.65492 8.0925 6.86992 8.1525Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.3075 3C13.7625 3 14.9325 4.1775 14.9325 5.625C14.9325 7.0425 13.8075 8.1975 12.405 8.25C12.345 8.2425 12.2775 8.2425 12.21 8.25" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.12004 10.92C1.30504 12.135 1.30504 14.115 3.12004 15.3225C5.18254 16.7025 8.56504 16.7025 10.6275 15.3225C12.4425 14.1075 12.4425 12.1275 10.6275 10.92C8.57254 9.5475 5.19004 9.5475 3.12004 10.92Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.7549 15C14.2949 14.8875 14.8049 14.67 15.2249 14.3475C16.3949 13.47 16.3949 12.0225 15.2249 11.145C14.8124 10.83 14.3099 10.62 13.7774 10.5" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('Become an agent')}}</span>
                            </span>                                               
                        </a></li>
                        @endif
                    </ul>
                </nav>
            </div>
            @if(check_subscription(user('id')))
            <div class="mb-3">
                <h3 class="in-title-14px mb-2 cap-sidebar-title">{{get_phrase('My Agent Panel')}}</h3>
                <nav>
                    <ul>
                        <li class="sidebar-nav-item"><a href="{{ route('agent.my_listings') }}" class="sidebar-nav-link {{ $active == 'agent_listing' || $active == 'add_listing' ? 'active' : '' }}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 7.5V11.25C16.5 15 15 16.5 11.25 16.5H6.75C3 16.5 1.5 15 1.5 11.25V6.75C1.5 3 3 1.5 6.75 1.5H10.5" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.5 7.5H13.5C11.25 7.5 10.5 6.75 10.5 4.5V1.5L16.5 7.5Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.25 9.75H9.75" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.25 12.75H8.25" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('My Listing')}}</span>
                            </span>                                               
                        </a></li>
                        @php $user_prefix = (user('is_agent') == 1) ? 'agent' : 'customer'; @endphp
                        <li class="sidebar-nav-item"><a href="{{route('user.messages',['prefix'=>$user_prefix])}}" class="sidebar-nav-link {{$active == 'message'?'active':''}}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.75 15.375H5.25C3 15.375 1.5 14.25 1.5 11.625V6.375C1.5 3.75 3 2.625 5.25 2.625H12.75C15 2.625 16.5 3.75 16.5 6.375V11.625C16.5 14.25 15 15.375 12.75 15.375Z" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.75 6.75L10.4025 8.625C9.63 9.24 8.3625 9.24 7.59 8.625L5.25 6.75" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('Message')}}</span>
                            </span> 
                            <span class="badge-secondary mt-1px">5</span>                                               
                        </a></li>
                        <li class="sidebar-nav-item"><a href="{{ route('agent.appointment') }}" class="sidebar-nav-link {{$active == 'appointment' ? 'active':''}}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.98242 11.025L8.10742 12.15L11.1074 9.15002" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.5 4.5H10.5C12 4.5 12 3.75 12 3C12 1.5 11.25 1.5 10.5 1.5H7.5C6.75 1.5 6 1.5 6 3C6 4.5 6.75 4.5 7.5 4.5Z" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 3.01501C14.4975 3.15001 15.75 4.07251 15.75 7.50001V12C15.75 15 15 16.5 11.25 16.5H6.75C3 16.5 2.25 15 2.25 12V7.50001C2.25 4.08001 3.5025 3.15001 6 3.01501" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('Appointment')}}</span>
                            </span>                                               
                        </a></li>
                        <li class="sidebar-nav-item"><a href="{{route('user.blogs')}}" class="sidebar-nav-link {{$active == 'blogs'?'active':''}}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.25 1.5H6.75C3 1.5 1.5 3 1.5 6.75V11.25C1.5 15 3 16.5 6.75 16.5H11.25C15 16.5 16.5 15 16.5 11.25V9.75" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.0299 2.26501L6.11991 8.17501C5.89491 8.40001 5.66991 8.84251 5.62491 9.16501L5.30241 11.4225C5.18241 12.24 5.75991 12.81 6.57741 12.6975L8.83491 12.375C9.14991 12.33 9.59241 12.105 9.82491 11.88L15.7349 5.97001C16.7549 4.95001 17.2349 3.76501 15.7349 2.26501C14.2349 0.765006 13.0499 1.24501 12.0299 2.26501Z" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.1826 3.11249C11.6851 4.90499 13.0876 6.30749 14.8876 6.81749" stroke="#99A1B7" stroke-width="1.4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('Blog')}}</span>
                            </span>                                               
                        </a></li>
                        <li class="sidebar-nav-item"><a href="{{route('user.subscription')}}" class="sidebar-nav-link {{ $active == 'subscription' ? 'active' : '' }}">
                            <span class="d-flex align-items-start mt-1px gap-6px">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.50391 10.7474C6.50391 11.7149 7.24641 12.4949 8.16891 12.4949H10.0514C10.8539 12.4949 11.5064 11.8124 11.5064 10.9724C11.5064 10.0574 11.1089 9.73488 10.5164 9.52488L7.49391 8.47488C6.90141 8.26488 6.50391 7.94238 6.50391 7.02738C6.50391 6.18738 7.15641 5.50488 7.95891 5.50488H9.84141C10.7639 5.50488 11.5064 6.28488 11.5064 7.25238" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 4.5V13.5" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.25 16.5H6.75C3 16.5 1.5 15 1.5 11.25V6.75C1.5 3 3 1.5 6.75 1.5H11.25C15 1.5 16.5 3 16.5 6.75V11.25C16.5 15 15 16.5 11.25 16.5Z" stroke="#99A1B7" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="mt-1px">{{get_phrase('Subscription')}}</span>
                            </span>                                               
                        </a></li>
                    </ul>
                </nav>
            </div>
            @endif
            <div class="d-flex justify-content-center">
                <a href="{{route('logout')}}" class="btn cap-btn-primary w-100">
                    <img src="{{ asset('public/assets/frontend/images/icons/logout-left-white-20.svg') }}" alt="icon">
                    <span>{{get_phrase('Logout')}}</span>
                </a>
            </div>
        </div>
    </div>
</div>