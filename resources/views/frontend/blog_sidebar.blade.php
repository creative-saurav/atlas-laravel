@php
    $categories = App\Models\Blog_category::get();
    $resent_post = App\Models\Blog::orderby('id')->limit(5)->get()
@endphp
<div class="at-sidebar at-sidebar-2">
    <h4 class="in-title-5 lh-1 fw-semibold mb-3">{{get_phrase('Search')}}</h4>
    <form action="{{route('blog.search')}}">
        <div class="d-flex align-items-center mb-30 position-relative">
            <input type="search" name="search" class="form-control at1-form-control sml-search-form-control" id="search" placeholder="Search here...">
            <button type="submit" class="sml-search-btn">
                <img src="{{asset('public/assets/frontend/images/icons/search-white-20.svg')}}" alt="">
            </button>
        </div>
    </form>
    <div class="mb-30">
        <h4 class="in-title-5 lh-1 fw-semibold mb-3">{{get_phrase('Categories')}}</h4>
        <div class="overflow-hidden">
            <ul class="side-bordered-list-group">
                @foreach ($categories as $category)
                @php 
                    $totalCategori = App\Models\Blog::where('status', 1)->where('category', $category->id)->count();
                    $isActive = (request()->category == $category->id) ? 'active' : ''; 
                @endphp
                <li class="side-border-list-item">
                    <a href="{{ route('blog.category', ['category' => $category->id, 'slug' => slugify($category->name)]) }}" class="between-list-item-link {{ $isActive }}">
                        <span>{{ $category->name }}</span>
                        <span class="between-list-item-number">({{ $totalCategori }})</span>
                    </a>
                </li>
              @endforeach
            </ul>
        </div>
    </div> 
    <div class="mb-30">
        <h4 class="in-title-5 lh-1 fw-semibold mb-3">{{get_phrase('Resent Post')}}</h4>
        <div>
            @foreach ($resent_post as $item)    
            <a href="{{route('blog.details',['id'=>$item->id, 'slug'=>slugify($item->title)])}}" class="sml-list-post-link">
                <div class="d-flex align-items-center gap-3">
                    <div class="sml-list-post-banner">
                        <img src="{{asset('public/storage/blog-images/'.$item->image)}}" alt="banner">
                    </div>
                    <div>
                        <h5 class="in-subtitle-1 fw-semibold mb-2">{{$item->title}}</h5>
                        <p class="sml-icontext-3 d-flex gap-6px">
                            <span class="fi-rr-calendar-minus"></span>
                            <span>{{date('d M Y', $item->time)}}</span>
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        
    </div>
    {{-- <div>
        <h4 class="in-title-4 mb-20">Tags</h4>
        <ul class="d-flex gap-10px flex-wrap">
            <li><a href="#" class="btn at-btn-light active">City</a></li>
            <li><a href="#" class="btn at-btn-light">Relation</a></li>
            <li><a href="#" class="btn at-btn-light">Hotel</a></li>
            <li><a href="#" class="btn at-btn-light">Food</a></li>
            <li><a href="#" class="btn at-btn-light">Health</a></li>
            <li><a href="#" class="btn at-btn-light">Training</a></li>
            <li><a href="#" class="btn at-btn-light">Parking</a></li>
        </ul>
    </div> --}}
</div>