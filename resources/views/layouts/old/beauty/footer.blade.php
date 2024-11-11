<!-- Start Footer Area -->
<footer class="main-footer-section bt-footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Footer Top Area -->
                <div class="footer-top-area at-footer-top-area d-flex justify-content-between flex-wrap">
                    <div class="footer-top-details at-footer-top-details bt-footer-top-details">
                        <h3 class="title">{{get_phrase('Sign up to our newsletter')}}</h3>
                        <p class="info">{{get_phrase('Stay up to date with the latest news, announcements, and articles.')}}</p>
                    </div>
                    <div class="footer-search">
                        <form action="">
                            <div class="footer-input-wrap at-footer-input-wrap bt-footer-input-wrap">
                                <input class="form-control" type="search" placeholder="Enter your email Address">
                                <button type="submit" class="">{{get_phrase('Subscribe')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Footer Middle Area -->
                <div class="footer-middle-area d-flex justify-content-between flex-wrap">
                    <div class="footer-middle-logo">
                        <a href="#">
                         @if(get_frontend_settings('dark_logo'))
                              <img src="{{ asset('public/uploads/logo/' . get_frontend_settings('dark_logo')) }}" alt="">
                            @else
                                <img src="{{ asset('public/uploads/logo/footer_logo.svg') }}" alt="">
                            @endif
                       </a>
                        <p class="info">{{get_phrase('Lorem ipsum dolor sit amet, consectetur they adipiscing elit ut aliquam, purus sit amet luctus venenatis.')}}.</p>
                    </div>
                    <div class="footer-middle-nav at-footer-middle-nav bt-footer-middle-nav">
                        <h3 class="title">Company</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Testimonial</a></li>
                        </ul>
                    </div>
                    <div class="footer-middle-nav at-footer-middle-nav bt-footer-middle-nav">
                        <h3 class="title">Support</h3>
                        <ul>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Tweet @ Us</a></li>
                            <li><a href="#">Webians</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </div>
                    <div class="footer-middle-nav at-footer-middle-nav bt-footer-middle-nav">
                        <h3 class="title">Links</h3>
                        <ul>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Become Teacher</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">All in One</a></li>
                        </ul>
                    </div>
                    <div class="footer-middle-contact footer-middle-nav at-footer-middle-nav bt-footer-middle-nav">
                        <h3 class="title">{{get_phrase('Contact Us')}}</h3>
                        <ul>
                            <li><a href="tel:">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.3585 14.7602C16.7204 14.623 16.2156 14.9193 15.7686 15.178C15.3108 15.4446 14.4404 16.1507 13.9414 15.9701C11.387 14.9183 8.98453 12.6825 7.94451 10.1178C7.76122 9.60819 8.46403 8.73223 8.72869 8.26907C8.98551 7.82072 9.27565 7.31114 9.14332 6.66824C9.02373 6.09052 7.47695 4.12232 6.93 3.58411C6.56928 3.22859 6.19974 3.03305 5.8204 3.00144C4.39418 2.94022 2.80134 4.84324 2.52198 5.2985C1.82211 6.26927 1.82603 7.561 2.53374 9.12725C4.23931 13.3343 10.6901 19.6832 14.9128 21.4529C15.6921 21.8173 16.4047 22 17.0448 22C17.6711 22 18.2289 21.8252 18.7083 21.4786C19.0699 21.2702 21.051 19.5983 20.999 18.1338C20.9676 17.7604 20.7726 17.3872 20.4217 17.0257C19.8874 16.4737 17.9319 14.8808 17.3585 14.7602Z" fill="white"/>
                                </svg>
                                <span>{{ get_settings('phone') }}</span>                                     
                            </a></li>
                            <li><a href="mailto:">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 3.5H7C4 3.5 2 5 2 8.5V15.5C2 19 4 20.5 7 20.5H17C20 20.5 22 19 22 15.5V8.5C22 5 20 3.5 17 3.5ZM17.47 9.59L14.34 12.09C13.68 12.62 12.84 12.88 12 12.88C11.16 12.88 10.31 12.62 9.66 12.09L6.53 9.59C6.21 9.33 6.16 8.85 6.41 8.53C6.67 8.21 7.14 8.15 7.46 8.41L10.59 10.91C11.35 11.52 12.64 11.52 13.4 10.91L16.53 8.41C16.85 8.15 17.33 8.2 17.58 8.53C17.84 8.85 17.79 9.33 17.47 9.59Z" fill="white"/>
                                </svg>
                                <span>{{ get_settings('system_email') }}</span>                                     
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area at-footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-wrap at-footer-bottom-wrap bt-footer-bottom-wrap d-flex align-items-center justify-content-between flex-wrap">
                        <p class="info">{{ get_settings('footer_text') }}</p>
                        <div class="footer-bottom-social at-footer-bottom-social bt-footer-bottom-social">
                            <ul class="d-flex align-items-center">
                                <li><a href="{{get_settings('facebook')}}" target="_Blank">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_8_202)">
                                        <path d="M20.001 10C20.001 4.47715 15.5238 0 10.001 0C4.47813 0 0.000976562 4.47715 0.000976562 10C0.000976562 14.9912 3.65781 19.1283 8.43848 19.8785V12.8906H5.89941V10H8.43848V7.79688C8.43848 5.29063 9.93145 3.90625 12.2156 3.90625C13.3094 3.90625 14.4541 4.10156 14.4541 4.10156V6.5625H13.1932C11.951 6.5625 11.5635 7.3334 11.5635 8.125V10H14.3369L13.8936 12.8906H11.5635V19.8785C16.3441 19.1283 20.001 14.9912 20.001 10Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_202">
                                        <rect width="20" height="20" fill="white" transform="translate(0.000976562)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                        
                                </a></li>
                                <li><a href="{{get_settings('twitter')}}" target="_Blank">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_8_204)">
                                        <path d="M11.8626 8.46864L19.148 0H17.4216L11.0957 7.3532L6.04323 0H0.21582L7.85612 11.1193L0.21582 20H1.94231L8.6226 12.2348L13.9584 20H19.7858L11.8622 8.46864H11.8626ZM9.49793 11.2173L8.72381 10.1101L2.56439 1.29967H5.21619L10.1869 8.40994L10.961 9.51718L17.4224 18.7594H14.7706L9.49793 11.2177V11.2173Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_204">
                                        <rect width="20" height="20" fill="white" transform="translate(0.000976562)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                             
                                </a></li>
                                {{-- <li><a href="">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_8_206)">
                                        <path d="M10.001 1.80078C12.6729 1.80078 12.9893 1.8125 14.04 1.85937C15.0166 1.90234 15.5439 2.06641 15.8955 2.20313C16.3604 2.38281 16.6963 2.60156 17.0439 2.94922C17.3955 3.30078 17.6104 3.63281 17.79 4.09766C17.9268 4.44922 18.0908 4.98047 18.1338 5.95312C18.1807 7.00781 18.1924 7.32422 18.1924 9.99219C18.1924 12.6641 18.1807 12.9805 18.1338 14.0313C18.0908 15.0078 17.9268 15.5352 17.79 15.8867C17.6104 16.3516 17.3916 16.6875 17.0439 17.0352C16.6924 17.3867 16.3604 17.6016 15.8955 17.7813C15.5439 17.918 15.0127 18.082 14.04 18.125C12.9854 18.1719 12.6689 18.1836 10.001 18.1836C7.3291 18.1836 7.0127 18.1719 5.96191 18.125C4.98535 18.082 4.45801 17.918 4.10645 17.7813C3.6416 17.6016 3.30566 17.3828 2.95801 17.0352C2.60645 16.6836 2.3916 16.3516 2.21191 15.8867C2.0752 15.5352 1.91113 15.0039 1.86816 14.0313C1.82129 12.9766 1.80957 12.6602 1.80957 9.99219C1.80957 7.32031 1.82129 7.00391 1.86816 5.95312C1.91113 4.97656 2.0752 4.44922 2.21191 4.09766C2.3916 3.63281 2.61035 3.29688 2.95801 2.94922C3.30957 2.59766 3.6416 2.38281 4.10645 2.20313C4.45801 2.06641 4.98926 1.90234 5.96191 1.85937C7.0127 1.8125 7.3291 1.80078 10.001 1.80078ZM10.001 0C7.28613 0 6.94629 0.0117187 5.87988 0.0585938C4.81738 0.105469 4.08691 0.277344 3.4541 0.523438C2.79395 0.78125 2.23535 1.12109 1.68066 1.67969C1.12207 2.23438 0.782227 2.79297 0.524414 3.44922C0.27832 4.08594 0.106445 4.8125 0.0595703 5.875C0.0126953 6.94531 0.000976562 7.28516 0.000976562 10C0.000976562 12.7148 0.0126953 13.0547 0.0595703 14.1211C0.106445 15.1836 0.27832 15.9141 0.524414 16.5469C0.782227 17.207 1.12207 17.7656 1.68066 18.3203C2.23535 18.875 2.79395 19.2188 3.4502 19.4727C4.08691 19.7188 4.81348 19.8906 5.87598 19.9375C6.94238 19.9844 7.28223 19.9961 9.99707 19.9961C12.7119 19.9961 13.0518 19.9844 14.1182 19.9375C15.1807 19.8906 15.9111 19.7188 16.5439 19.4727C17.2002 19.2188 17.7588 18.875 18.3135 18.3203C18.8682 17.7656 19.2119 17.207 19.4658 16.5508C19.7119 15.9141 19.8838 15.1875 19.9307 14.125C19.9775 13.0586 19.9893 12.7188 19.9893 10.0039C19.9893 7.28906 19.9775 6.94922 19.9307 5.88281C19.8838 4.82031 19.7119 4.08984 19.4658 3.45703C19.2197 2.79297 18.8799 2.23438 18.3213 1.67969C17.7666 1.125 17.208 0.78125 16.5518 0.527344C15.915 0.28125 15.1885 0.109375 14.126 0.0625C13.0557 0.0117188 12.7158 0 10.001 0Z" fill="white"/>
                                        <path d="M10.001 4.86328C7.16504 4.86328 4.86426 7.16406 4.86426 10C4.86426 12.8359 7.16504 15.1367 10.001 15.1367C12.8369 15.1367 15.1377 12.8359 15.1377 10C15.1377 7.16406 12.8369 4.86328 10.001 4.86328ZM10.001 13.332C8.16113 13.332 6.66895 11.8398 6.66895 10C6.66895 8.16016 8.16113 6.66797 10.001 6.66797C11.8408 6.66797 13.333 8.16016 13.333 10C13.333 11.8398 11.8408 13.332 10.001 13.332Z" fill="white"/>
                                        <path d="M16.54 4.66016C16.54 5.32422 16.001 5.85938 15.3408 5.85938C14.6768 5.85938 14.1416 5.32031 14.1416 4.66016C14.1416 3.99609 14.6807 3.46094 15.3408 3.46094C16.001 3.46094 16.54 4 16.54 4.66016Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_206">
                                        <rect width="20" height="20" fill="white" transform="translate(0.000976562)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </a></li> --}}
                                <li><a href="{{get_settings('linkedin')}}" target="_Blank">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_8_210)">
                                        <path d="M18.5205 0H1.47754C0.661133 0 0.000976562 0.644531 0.000976562 1.44141V18.5547C0.000976562 19.3516 0.661133 20 1.47754 20H18.5205C19.3369 20 20.001 19.3516 20.001 18.5586V1.44141C20.001 0.644531 19.3369 0 18.5205 0ZM5.93457 17.043H2.96582V7.49609H5.93457V17.043ZM4.4502 6.19531C3.49707 6.19531 2.72754 5.42578 2.72754 4.47656C2.72754 3.52734 3.49707 2.75781 4.4502 2.75781C5.39941 2.75781 6.16894 3.52734 6.16894 4.47656C6.16894 5.42188 5.39941 6.19531 4.4502 6.19531ZM17.0439 17.043H14.0791V12.4023C14.0791 11.2969 14.0596 9.87109 12.5361 9.87109C10.9932 9.87109 10.7588 11.0781 10.7588 12.3242V17.043H7.79785V7.49609H10.6416V8.80078H10.6807C11.0752 8.05078 12.0439 7.25781 13.4854 7.25781C16.4893 7.25781 17.0439 9.23438 17.0439 11.8047V17.043Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_210">
                                        <rect width="20" height="20" fill="white" transform="translate(0.000976562)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                       
                                </a></li>
                                {{-- <li><a href="#">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_8_212)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0363 5.45722C13.0038 4.47247 11.6259 3.936 10.2002 3.95805C7.59134 3.95805 5.37566 5.71809 4.58564 8.0881C4.16676 9.33005 4.16676 10.675 4.58564 11.9169H4.58931C5.38299 14.2833 7.59501 16.0433 10.2039 16.0433C11.5505 16.0433 12.7067 15.6989 13.6027 15.0904V15.088C14.6573 14.3898 15.3775 13.2912 15.6016 12.0492H10.2002V8.1984H19.6325C19.7501 8.86714 19.8052 9.55059 19.8052 10.2304C19.8052 13.2719 18.7182 15.8434 16.8269 17.5851L16.8289 17.5866C15.1717 19.1151 12.8972 20.0007 10.2002 20.0007C6.41918 20.0007 2.96153 17.8695 1.26394 14.4927C-0.154389 11.6671 -0.154385 8.33801 1.26395 5.51237C2.96154 2.13188 6.41918 0.000673888 10.2002 0.000673888C12.6841 -0.0287217 15.0835 0.904587 16.8913 2.60218L14.0363 5.45722Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_212">
                                        <rect width="20" height="20" fill="white" transform="translate(0.000976562)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                        
                                </a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->