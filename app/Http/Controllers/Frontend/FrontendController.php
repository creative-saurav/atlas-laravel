<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BeautyListing;
use App\Models\Blog;
use App\Models\CarListing;
use App\Models\Category;
use App\Models\HotelListing;
use App\Models\Pricing;
use App\Models\RealEstateListing;
use App\Models\RestaurantListing;
use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
   
        $page_data['beautyListing'] = BeautyListing::where('visibility','visible')->get();
        $page_data['restaurantListing'] = RestaurantListing::where('visibility','visible')->get();
        $page_data['realEstateListing'] = RealEstateListing::where('visibility','visible')->get();
        $page_data['hotelListing'] = HotelListing::where('visibility','visible')->get();
        $page_data['carListing'] = CarListing::where('visibility','visible')->get();
        $page_data['categories'] = Category::all();
        $page_data['reviews'] = Review::all();
        $page_data['blogs'] = Blog::where('status', 1)->where('is_popular', 1)->take(3)->get();

        // New
         $page_data['Totalhotels'] = HotelListing::where('visibility','visible')->take(8)->get();
         $page_data['Totalrestaurant'] = RestaurantListing::where('visibility','visible')->take(8)->get();
         $page_data['Totalbeauty'] = BeautyListing::where('visibility','visible')->take(8)->get();
         $page_data['TotalrealEstate'] = RealEstateListing::where('visibility','visible')->take(8)->get();
         $page_data['Totalcar'] = CarListing::where('visibility','visible')->take(8)->get();
        // New
        return view('frontend.index',$page_data);
    }

    public function hotel_home(){
        $page_data['top_listings'] = HotelListing::orderBy('id', 'desc')->where('visibility', 'visible')->limit(4)->get();
        $page_data['directory'] = 'hotel';
        return view('frontend.hotel.home', $page_data);
    }    

    public function car_home(){
        $page_data['top_listings'] = CarListing::orderBy('id', 'desc')->where('visibility', 'visible')->limit(4)->get();
        $page_data['directory'] = 'car';
        return view('frontend.car.home', $page_data);
    }

    public function beauty_home(){
        $page_data['BeautyPopular'] = BeautyListing::orderBy('id', 'desc')->where('visibility', 'visible')->where('is_popular','popular')->limit(4)->get();
        $page_data['BeautyBest'] = BeautyListing::orderBy('id', 'desc')->where('visibility', 'visible')->where('is_popular','best')->limit(4)->get();
        $page_data['BeautyWellness'] = BeautyListing::orderBy('id', 'desc')->where('visibility', 'visible')->where('is_popular','wellness')->limit(4)->get();
        //$page_data['top_listings'] = BeautyListing::orderBy('id', 'desc')->where('visibility', 'visible')->limit(4)->get();
        $page_data['directory'] = 'beauty';
        return view('frontend.beauty.home', $page_data);
    }

    public function doctor_home(){
        $page_data['top_listings'] = HotelListing::orderBy('id', 'desc')->where('visibility', 'visible')->limit(4)->get();
        $page_data['directory'] = 'doctor';
        return view('frontend.doctor.home', $page_data);
    }

    public function listing_view($type, $view){
        if($type == 'car'){
            $page_data['listings'] = CarListing::where('visibility', 'visible')->paginate(10);
        }elseif($type == 'beauty'){
            $page_data['listings'] = BeautyListing::where('visibility', 'visible')->paginate(10);
        }elseif($type == 'hotel'){
            $page_data['listings'] = HotelListing::where('visibility', 'visible')->paginate(10);
        }elseif($type == 'real-estate'){
            $page_data['listings'] = RealEstateListing::where('visibility', 'visible')->paginate(10);
        }elseif($type == 'restaurant'){
            $page_data['listings'] = RestaurantListing::where('visibility', 'visible')->paginate(10);
        }elseif($type == 'doctor') {
            $page_data['listings'] = User::where('type', 'doctor')->paginate(10);
        }
        
        $page_data['categories'] = Category::where('type', $type)->get();
        $page_data['type'] = $type;
        $page_data['view'] = $view;
        return view('frontend.'.$type.'.'.$view.'_listing', $page_data);
    }

    public function listing_details($type, $id, $slug){
        if($type == 'car'){
            $page_data['listing'] = CarListing::where('id', $id)->first();
        }elseif($type == 'beauty'){
            $page_data['listing'] = BeautyListing::where('id', $id)->first();
        }elseif($type == 'hotel'){
            $page_data['listing'] = HotelListing::where('id', $id)->paginate(10);
        }elseif($type == 'real-estate'){
            $page_data['listing'] = RealEstateListing::where('id', $id)->paginate(10);
        }elseif($type == 'restaurant'){
            $page_data['listing'] = RestaurantListing::where('id', $id)->paginate(10);
        }
        $page_data['type'] = $type;
        return view('frontend.'.'details_'.$type, $page_data);
    }

    public function pricing(){
        $page_data['packages'] = Pricing::get();
        return view('frontend.pricing', $page_data);
    }

    public function blogs(){
        $page_data['blogs'] = Blog::where('status', 1)->paginate(10);
        return view('frontend.blogs', $page_data);
    }

    public function blog_details($id, $slug){
        $page_data['blog'] = Blog::where('id', $id)->first();
        return view('frontend.blog_details', $page_data);
    }
    public function blog_category($category, $slug){
        $page_data['blogs'] = Blog::where('category', $category)->paginate(10);
        return view('frontend.blogs', $page_data);
    }
    public function blog_search(Request $request){
        $request->validate([
            'search' => 'required|string|max:255',
        ]);
    
        $page_data['blogs'] = Blog::where('title', 'like', '%' . $request->search . '%')->paginate(10);
        return view('frontend.blogs', $page_data);
    }











}
