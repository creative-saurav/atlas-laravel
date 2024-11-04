@extends('layouts.frontend')
@section('title', get_phrase('Blogs'))
@section('frontend_layout')
<!-- Start Blog Post -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="in-title-2 mt-2 mb-4">Our Latest Blog</h3>
            </div>
        </div>
        <div class="row row-28 mb-90">
            <!-- Blog Area  -->
            <div class="col-xl-8 col-lg-7">
                @if (count($blogs) > 0)
                <div class="row row-28 mb-32">
                    @foreach ($blogs as $blog)    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="at-blog-card">
                            <div class="at-blog-card-image">
                                <img src="{{asset('public/storage/blog-images/'.$blog->image)}}" alt="banner">
                            </div>
                            <div class="at-blog-details">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-14">
                                    <p class="sml-icontext-1 in-subtitle-2 d-flex align-items-center gap-1">
                                        <span class="fi-rr-calendar-minus"></span>
                                        <span>{{date('d M Y', $blog->time)}}</span>
                                    </p>
                                    <p class="sml-icontext-1 in-subtitle-2 d-flex align-items-center gap-1">
                                        <span class="fi-rr-user"></span>
                                        <span>{{App\Models\User::where('id', $blog->user_id)->first()->name;}}</span>
                                    </p>
                                </div>
                                <a href="{{route('blog.details',['id'=>$blog->id, 'slug'=>slugify($blog->title)])}}" class="in-title-5 mb-14">{{$blog->title}}</a>
                                <p class="in-subtitle-2 mb-14 at-blog-subtitle at-border-bottom">{{substr_replace($blog->description, "...", 70)}}</p>
                                <a href="{{route('blog.details',['id'=>$blog->id, 'slug'=>slugify($blog->title)])}}" class="link-icontext-1 d-flex align-items-center gap-1">
                                    <span>{{get_phrase('Read More')}}</span>
                                    <span class="fi-rr-arrow-small-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <nav class="pagination-nav-1">
                                <ul>
                                    <li><a href="#" class="next-prev">
                                        <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.8036 1.19171C11.0643 0.921203 11.0643 0.475224 10.8036 0.204712C10.6768 0.0731115 10.5077 -4.30422e-08 10.3315 -5.84417e-08C10.1554 -7.38411e-08 9.98625 0.0731114 9.85943 0.204712L6.19553 4.0065C5.93483 4.27701 5.93483 4.71568 6.19553 4.98619L9.85943 8.78798C9.97921 8.92689 10.1554 9 10.3315 9C10.5077 9 10.6768 8.92689 10.8036 8.79529C11.0643 8.53209 11.0643 8.09342 10.8106 7.82291L10.8036 7.82291L7.61881 4.50366L10.8036 1.19171Z" fill="#7E7E89"></path>
                                            <path d="M4.80359 1.19171C5.06429 0.921203 5.06429 0.475224 4.80359 0.204712C4.67676 0.0731115 4.50766 -4.30422e-08 4.33151 -5.84417e-08C4.15536 -7.38411e-08 3.98625 0.0731114 3.85943 0.204712L0.195526 4.0065C-0.0651746 4.27701 -0.0651747 4.71568 0.195526 4.98619L3.85943 8.78798C3.97921 8.92689 4.15536 9 4.33151 9C4.50765 9 4.67676 8.92689 4.80358 8.79529C5.06429 8.53209 5.06429 8.09342 4.81063 7.82291L4.80358 7.82291L1.61881 4.50366L4.80359 1.19171Z" fill="#7E7E89"></path>
                                        </svg>
                                    </a></li>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" class="more">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#" class="next-prev">
                                        <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.196415 1.19171C-0.0642861 0.921203 -0.0642861 0.475224 0.196414 0.204712C0.323242 0.0731115 0.492345 -4.30422e-08 0.668494 -5.84417e-08C0.844643 -7.38411e-08 1.01375 0.0731114 1.14057 0.204712L4.80447 4.0065C5.06517 4.27701 5.06517 4.71568 4.80447 4.98619L1.14057 8.78798C1.02079 8.92689 0.844644 9 0.668495 9C0.492346 9 0.323243 8.92689 0.196415 8.79529C-0.0642854 8.53209 -0.0642854 8.09342 0.189369 7.82291L0.196415 7.82291L3.38119 4.50366L0.196415 1.19171Z" fill="#7E7E89"></path>
                                            <path d="M6.19641 1.19171C5.93571 0.921203 5.93571 0.475224 6.19641 0.204712C6.32324 0.0731115 6.49234 -4.30422e-08 6.66849 -5.84417e-08C6.84464 -7.38411e-08 7.01375 0.0731114 7.14057 0.204712L10.8045 4.0065C11.0652 4.27701 11.0652 4.71568 10.8045 4.98619L7.14057 8.78798C7.02079 8.92689 6.84464 9 6.66849 9C6.49235 9 6.32324 8.92689 6.19642 8.79529C5.93571 8.53209 5.93571 8.09342 6.18937 7.82291L6.19642 7.82291L9.38119 4.50366L6.19641 1.19171Z" fill="#7E7E89"></path>
                                        </svg>
                                    </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> --}}
                {{$blogs->links()}}
                @else
                search image
                @endif
            </div>
            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-5">
                @include('frontend.blog_sidebar')
            </div>
        </div>
    </div>
</section>
<!-- End Blog Post -->
@endsection