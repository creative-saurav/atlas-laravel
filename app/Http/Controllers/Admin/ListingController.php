<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeautyListing;
use App\Models\CarListing;
use App\Models\Category;
use App\Models\HotelListing;
use App\Models\Listing_Feature;
use App\Models\Listing_Specification;
use App\Models\RealEstateListing;
use App\Models\RestaurantListing;
use App\Models\Room;
use App\Models\Menu;
use App\Models\ClaimedListing;
use App\Models\ReportedListing;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListingController extends Controller
{
    public function listing_list($type){
        if($type == 'beauty'){
            $page_data['listings'] = BeautyListing::get();
        }elseif($type == 'car'){
            $page_data['listings'] = CarListing::get();
        }elseif($type == 'real-estate'){
            $page_data['listings'] = RealEstateListing::get();
        }elseif($type == 'hotel'){
            $page_data['listings'] = HotelListing::get();
        }elseif($type == 'restaurant'){
            $page_data['listings'] = RestaurantListing::get();
        }
        $page_data['type'] = $type;
        return view('admin.listing.list', $page_data);
    }

    public function listing_create(){
        return view('admin.listing.create');
    }

    public function create_type($type){
        return view('admin.listing.'.$type);
    }

    public function listing_category($type){
        $categories = Category::where('type', $type)->get();
        return response()->json($categories);
    }

    public function listing_store(Request $request, $type){

        $data['title'] = $request->title;
        $data['category'] = $request->category;
        $data['description'] = $request->description;
        $data['visibility'] = $request->visibility;
        $data['type'] = $type;

        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->keyword;
        $data['meta_description'] = $request->meta_description;
        $data['og_title'] = $request->og_title;
        $data['og_description'] = $request->og_description;
        // $data['og_image'] = $request->og_image;
        $data['canonical_url'] = $request->canonical_url;
        $data['json_id'] = $request->json_id;
        $data['country'] = $request->country;
        $data['city'] = $request->city;
        $data['area'] = $request->country.':@:'.$request->city.':@:'.$request->address;
        $data['address'] = $request->address;
        $data['postal_code'] = $request->post_code;
        $data['Latitude'] = $request->latitude;
        $data['Longitude'] = $request->longitude;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();

        $data['user_id'] = user('id');

        $listing_image = [];
        if ($request->hasFile('listing_image')) {
            foreach ($request->file('listing_image') as $key => $image) {
                $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/listing-images', $imageName);
                array_push($listing_image, $imageName);
            }
        }
        $data['image'] = json_encode($listing_image);

        if($type == 'car'){
            $data['sub_title'] = $request->sub_title;
            $data['brand'] = $request->brand;
            $data['model'] = $request->model;
            $data['year'] = $request->year;
            $data['car_type'] = $request->car_type;
            $data['transmission'] = $request->transmission;
            $data['fuel_type'] = $request->fuel_type;
            $data['engine_size'] = $request->engine_size;
            $data['cylinder'] = $request->cylinder;
            $data['interior_color'] = $request->interior_color;
            $data['exterior_color'] = $request->exterior_color;
            $data['drive_train'] = $request->drive_train;
            $data['trim'] = $request->trim;
            $data['mileage'] = $request->mileage;
            $data['vin'] = $request->vin;
            $data['price'] = $request->price;
            $data['discount_price'] = $request->discount_price;
            $data['feature'] = $request->feature;
            $data['specification'] = $request->specification; 
            CarListing::insert($data);
        }elseif($type == 'beauty'){
            $data['video'] = $request->video;
            BeautyListing::insert($data);
        }elseif($type == 'hotel'){
            $data['price'] = $request->price;
            $data['bed'] = $request->bed;
            $data['bath'] = $request->bath;
            $data['size'] = $request->size;
            $data['dimension'] = $request->dimension;
            HotelListing::insert($data);
        }elseif($type == 'real-estate'){
            $data['price'] = $request->price;
            $data['bed'] = $request->bed;
            $data['bath'] = $request->bath;
            $data['garage'] = $request->garage;
            $data['size'] = $request->size;
            $data['year'] = $request->year;
            $data['dimension'] = $request->dimension;
            $data['sub_dimension'] = $request->sub_dimension;
            RealEstateListing::insert($data);
        }elseif($type == 'restaurant'){
            RestaurantListing::insert($data);
        }elseif($type == 'doctor'){

        }

        Toastr::success(get_phrase('Listing Created successfully!'), get_phrase('Success'));
        if(isset($request->is_agent) && $request->is_agent == 1){
            return redirect('agent/my-listings');
        }else{
            return redirect('admin/listings/'.$type);
        }

    }

    public function listing_edit($type, $id, $tab = ""){
        if($type == 'beauty'){
            $page_data['listing'] = BeautyListing::where('id', $id)->first();
        }elseif($type == 'car'){
            $page_data['listing'] = CarListing::where('id', $id)->first();
        }elseif($type == 'real-estate'){
            $page_data['listing'] = RealEstateListing::where('id', $id)->first();
        }elseif($type == 'hotel'){
            $page_data['listing'] = HotelListing::where('id', $id)->first();
        }elseif($type == 'restaurant'){
            $page_data['listing'] = RestaurantListing::where('id', $id)->first();
        }
        $page_data['tab'] = $tab;
        $page_data['type'] = $type;
        return view('admin.listing.'.$type.'_edit', $page_data);
    }

    public function listing_update(Request $request, $type, $id){
        
        $data['title'] = $request->title;
        $data['category'] = $request->category;
        $data['description'] = $request->description;
        $data['visibility'] = $request->visibility;
        $data['updated_at'] = Carbon::now();
       
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->keyword;
        $data['meta_description'] = $request->meta_description;
        $data['og_title'] = $request->og_title;
        $data['og_description'] = $request->og_description;
        // $data['og_image'] = $request->og_image;
        $data['canonical_url'] = $request->canonical_url;
        $data['json_id'] = $request->json_id;
        $data['country'] = $request->country;
    
        if($request->city){
            $data['city'] = $request->city;
        }
        $data['area'] = $request->country.':@:'.$request->city.':@:'.$request->address;
        $data['address'] = $request->address;
        $data['postal_code'] = $request->post_code;
        $data['Latitude'] = $request->latitude;
        $data['Longitude'] = $request->longitude;

        $data['user_id'] = user('id');

        if($type == 'car'){
            $data['sub_title'] = $request->sub_title;
            $data['brand'] = $request->brand;
            $data['model'] = $request->model;
            $data['year'] = $request->year;
            $data['car_type'] = $request->car_type;
            $data['transmission'] = $request->transmission;
            $data['fuel_type'] = $request->fuel_type;
            $data['engine_size'] = $request->engine_size;
            $data['cylinder'] = $request->cylinder;
            $data['interior_color'] = $request->interior_color;
            $data['exterior_color'] = $request->exterior_color;
            $data['drive_train'] = $request->drive_train;
            $data['trim'] = $request->trim;
            $data['mileage'] = $request->mileage;
            $data['vin'] = $request->vin;
            $data['price'] = $request->price;
            $data['discount_price'] = $request->discount_price;
            $data['feature'] = $request->feature;
            $data['specification'] = $request->specification;
           

            $listing_image = json_decode(CarListing::where('id', $id)->pluck('image')->toArray()[0])??[];

            if ($request->hasFile('listing_image')) {
                foreach ($request->file('listing_image') as $key => $image) {
                    $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/listing-images', $imageName);
                    array_push($listing_image, $imageName);
                }
                $data['image'] = json_encode($listing_image);
            }else{
                $data['image'] = $listing_image;
            }
            
            CarListing::where('id', $id)->update($data);
            Toastr::success(get_phrase('Listing Update successfully!'), get_phrase('Success'));
            if(isset($request->is_agent) && $request->is_agent == 1){
                return redirect('agent/my-listings');
            }else{
                return redirect('admin/listings/car');
            }
        }elseif($type == 'beauty'){

            $opening_times = [
                'saturday' => ['open' => $request->saturday_open, 'close' => $request->saturday_close],
                'sunday' => ['open' => $request->sunday_open, 'close' => $request->sunday_close],
                'monday' => ['open' => $request->monday_open, 'close' => $request->monday_close],
                'tuesday' => ['open' => $request->tuesday_open, 'close' => $request->tuesday_close],
                'wednesday' => ['open' => $request->wednesday_open, 'close' => $request->wednesday_close],
                'thursday' => ['open' => $request->thursday_open, 'close' => $request->thursday_close],
                'friday' => ['open' => $request->friday_open, 'close' => $request->friday_close],
            ];
            
            // Encode the array into JSON format
            $data['opening_time'] = json_encode($opening_times);

            $data['video'] = $request->video;
            
            $data['team'] = json_encode($request->team)??[];
            $data['service'] = json_encode($request->service)??[];

            $listing_image = json_decode(BeautyListing::where('id', $id)->pluck('image')->toArray()[0])??[];

            if ($request->hasFile('listing_image')) {
                foreach ($request->file('listing_image') as $key => $image) {
                    $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/listing-images', $imageName);
                    array_push($listing_image, $imageName);
                }
                $data['image'] = json_encode($listing_image);
            }else{
                $data['image'] = $listing_image;
            }

            Toastr::success(get_phrase('Listing Update successfully!'), get_phrase('Success'));
            BeautyListing::where('id', $id)->update($data);

            if(isset($request->is_agent) && $request->is_agent == 1){
                return redirect('agent/my-listings');
            }else{
                return redirect('admin/listings/beauty');
            }
            
        }elseif($type == 'hotel'){
            $data['price'] = $request->price;
            $data['bed'] = $request->bed;
            $data['bath'] = $request->bath;
            $data['size'] = $request->size;
            $data['dimension'] = $request->dimension;
            $data['feature'] = json_encode($request->feature)??[];
            $data['room'] = json_encode($request->room)??[];

            $listing_image = json_decode(HotelListing::where('id', $id)->pluck('image')->toArray()[0])??[];

            if ($request->hasFile('listing_image')) {
                foreach ($request->file('listing_image') as $key => $image) {
                    $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/listing-images', $imageName);
                    array_push($listing_image, $imageName);
                }
                $data['image'] = json_encode($listing_image);
            }else{
                $data['image'] = $listing_image;
            }
            
            HotelListing::where('id', $id)->update($data);
            Toastr::success(get_phrase('Listing Update successfully!'), get_phrase('Success'));
            if(isset($request->is_agent) && $request->is_agent == 1){
                return redirect('agent/my-listings');
            }else{
                return redirect('admin/listings/hotel');
            }
        }elseif($type == 'real-estate'){
            $data['price'] = $request->price;
            $data['bed'] = $request->bed;
            $data['bath'] = $request->bath;
            $data['garage'] = $request->garage;
            $data['size'] = $request->size;
            $data['year'] = $request->year;
            $data['dimension'] = $request->dimension;
            $data['video'] = $request->video;
            $data['sub_dimension'] = $request->sub_dimension;
            $data['feature'] = json_encode($request->feature)??[];

            $listing_image = json_decode(RealEstateListing::where('id', $id)->pluck('image')->toArray()[0])??[];

            if ($request->hasFile('listing_image')) {
                foreach ($request->file('listing_image') as $key => $image) {
                    $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/listing-images', $imageName);
                    array_push($listing_image, $imageName);
                }
                $data['image'] = json_encode($listing_image);
            }else{
                $data['image'] = json_encode($listing_image);
            }

            $listing_listing_floor_plan = json_decode(RealEstateListing::where('id', $id)->pluck('floor_plan')->toArray()[0])??[];

            if ($request->hasFile('listing_floor_plan')) {
                foreach ($request->file('listing_floor_plan') as $key => $image) {
                    $floorImage = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/floor-plan', $floorImage);
                    array_push($listing_listing_floor_plan, $floorImage);
                }
                $data['floor_plan'] = json_encode($listing_listing_floor_plan);
            }else{
                $data['floor_plan'] = json_encode($listing_listing_floor_plan);
            }

            Toastr::success(get_phrase('Listing Update successfully!'), get_phrase('Success'));
            RealEstateListing::where('id', $id)->update($data);
            if(isset($request->is_agent) && $request->is_agent == 1){
                return redirect('agent/my-listings');
            }else{
                return redirect('admin/listings/real-estate');
            }
        }elseif($type == 'restaurant'){

            $opening_times = [
                'saturday' => ['open' => $request->saturday_open, 'close' => $request->saturday_close],
                'sunday' => ['open' => $request->sunday_open, 'close' => $request->sunday_close],
                'monday' => ['open' => $request->monday_open, 'close' => $request->monday_close],
                'tuesday' => ['open' => $request->tuesday_open, 'close' => $request->tuesday_close],
                'wednesday' => ['open' => $request->wednesday_open, 'close' => $request->wednesday_close],
                'thursday' => ['open' => $request->thursday_open, 'close' => $request->thursday_close],
                'friday' => ['open' => $request->friday_open, 'close' => $request->friday_close],
            ];
            
            // Encode the array into JSON format
            $data['opening_time'] = json_encode($opening_times);

            $listing_image = json_decode(RestaurantListing::where('id', $id)->pluck('image')->toArray()[0])??[];

            if ($request->hasFile('listing_image')) {
                foreach ($request->file('listing_image') as $key => $image) {
                    $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/listing-images', $imageName);
                    array_push($listing_image, $imageName);
                }
                $data['image'] = json_encode($listing_image);
            }else{
                $data['image'] = json_encode($listing_image);
            }
            $data['menu'] = json_encode($request->menu)??[];
            RestaurantListing::where('id', $id)->update($data);
            Toastr::success(get_phrase('Listing Update successfully!'), get_phrase('Success'));
            if(isset($request->is_agent) && $request->is_agent == 1){
                return redirect('agent/my-listings');
            }else{
                return redirect('admin/listings/beauty');
            }
        }elseif($type == 'doctor'){

        }
    }

    public function listing_image_delete($type, $id, $image){
        if($type == 'car'){
            $listing = CarListing::where('id', $id);
        }elseif($type == 'beauty'){
            $listing = BeautyListing::where('id', $id);
        }elseif($type == 'hotel'){
            $listing = HotelListing::where('id', $id);
        }elseif($type == 'real-estate'){
            $listing = RealEstateListing::where('id', $id);
        }elseif($type == 'restaurant'){
            $listing = RestaurantListing::where('id', $id);
        }
        $imageToRemove = $image;
        $imageArray = json_decode($listing->first()->image);
        $key = array_search($imageToRemove, $imageArray);
        if ($key !== false) {
            unset($imageArray[$key]);
        }
        $imageArray = array_values($imageArray);
        $resultJson = json_encode($imageArray);
        $listing->update(['image'=>$resultJson]);
        if(file_exists('public/storage/listing-images/'.$image)){
            unlink('public/storage/listing-images/'.$image);
        }
        return 1;
    }

    public function listing_floor_image_delete($type, $id, $image){
        if($type == 'car'){
            $listing = CarListing::where('id', $id);
        }elseif($type == 'beauty'){
            $listing = BeautyListing::where('id', $id);
        }elseif($type == 'hotel'){
            $listing = HotelListing::where('id', $id);
        }elseif($type == 'real-estate'){
            $listing = RealEstateListing::where('id', $id);
        }elseif($type == 'restaurant'){
            $listing = RestaurantListing::where('id', $id);
        }
        $imageToRemove = $image;
        $imageArray = json_decode($listing->first()->floor_plan);
        $key = array_search($imageToRemove, $imageArray);
        if ($key !== false) {
            unset($imageArray[$key]);
        }
        $imageArray = array_values($imageArray);
        $resultJson = json_encode($imageArray);
        $listing->update(['floor_plan'=>$resultJson]);
        if(file_exists('public/storage/floor-plan/'.$image)){
            unlink('public/storage/floor-plan/'.$image);
        }
        return 1;
    }

    public function listing_status($type, $id, $status){
        $status = $status == 'visible'?'hidden':'visible';
       
        if($type == 'car'){
            $listing = CarListing::where('id', $id);
        }elseif($type == 'beauty'){
            $listing = BeautyListing::where('id', $id);
        }elseif($type == 'hotel'){
            $listing = HotelListing::where('id', $id);
        }elseif($type == 'real-estate'){
            $listing = RealEstateListing::where('id', $id);
        }elseif($type == 'restaurant'){
            $listing = RestaurantListing::where('id', $id);
        }       
        $listing->update(['visibility'=>$status]);
        Toastr::success(get_phrase('Listing Update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function listing_delete($type, $id){
        if($type == 'car'){
            $listing = CarListing::where('id', $id);
        }elseif($type == 'beauty'){
            $listing = BeautyListing::where('id', $id);
        }elseif($type == 'hotel'){
            $listing = HotelListing::where('id', $id);
        }elseif($type == 'real-estate'){
            $listing = RealEstateListing::where('id', $id);
        }elseif($type == 'restaurant'){
            $listing = RestaurantListing::where('id', $id);
        }
        foreach(json_decode($listing->first()->image) as $listImage){
            if(file_exists('public/storage/listing-images/'.$listImage)){
                unlink('public/storage/listing-images/'.$listImage);
            }
        }
        $listing->delete();
        Toastr::success(get_phrase('Listing deleted successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function listing_feature_add($prefix, $id){
        $page_data['id'] = $id;
        $page_data['page'] = 'add';
        return view('admin.listing.feature', $page_data);
    }

    public function listing_feature_edit($prefix, $id, $feature_id){
        $page_data['id'] = $id;
        $page_data['feature_id'] = $feature_id;
        $page_data['page'] = 'edit';
        $page_data['feature'] = Listing_Feature::where('id', $feature_id)->first();
        return view('admin.listing.feature', $page_data);
    }

    public function listing_feature_store(Request $request, $prefix, $id){
       
        $validated = $request->validate([
            'title' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['listing_id'] = $id;
        $data['feature_id'] = 0;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Listing_Feature::insert($data);
        $type = 'car';
        $page_data['listing'] = CarListing::where('id', $id)->first();
        $page_data['type'] = $type;
        $page_data['tab'] = 'feature';
        
        Toastr::success(get_phrase('Listing feature add successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'feature']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'feature']);
        }
    }

    public function listing_feature_update(Request $request, $prefix, $id, $feature_id){
        $validated = $request->validate([
            'title' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['updated_at'] = Carbon::now();
        Listing_Feature::where('id', $feature_id)->update($data);
        Toastr::success(get_phrase('Listing feature update successful!'), get_phrase('Success'));

        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'feature']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'feature']);
        }
    }

    public function listing_feature_delete($prefix, $id, $feature_id){
        Listing_Feature::where('id', $feature_id)->delete();
        Toastr::success(get_phrase('Listing feature delete successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'feature']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'feature']);
        }
    }

    public function listing_sub_feature_add($prefix, $id, $feature_id){
        $page_data['id'] = $id;
        $page_data['feature_id'] = $feature_id;
        $page_data['page'] = 'sub_add';
        return view('admin.listing.feature', $page_data);
    }

    public function listing_sub_feature_store(Request $request, $prefix, $id, $feature_id){
        $validated = $request->validate([
            'title' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['listing_id'] = $id;
        $data['feature_id'] = $feature_id;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Listing_Feature::insert($data);
        Toastr::success(get_phrase('Listing sub feature add successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'feature']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'feature']);
        }
    }

    public function listing_specification_add($prefix, $id){
        $page_data['id'] = $id;
        $page_data['page'] = 'add';
        return view('admin.listing.specification', $page_data);
    }

    public function listing_specification_store(Request $request, $prefix, $id){
        $validated = $request->validate([
            'title' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['listing_id'] = $id;
        $data['specification_id'] = 0;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Listing_Specification::insert($data);
        Toastr::success(get_phrase('Listing specification add successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'specification']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'specification']);
        }
    }

    public function listing_specification_edit($prefix, $id, $specification_id){
        $page_data['id'] = $id;
        $page_data['specification_id'] = $specification_id;
        $page_data['specification'] = Listing_Specification::where('id', $specification_id)->first();
        $page_data['page'] = 'edit';
        return view('admin.listing.specification', $page_data);
    }

    public function listing_specification_update(Request $request, $prefix, $id, $specification_id){
        $validated = $request->validate([
            'title' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['updated_at'] = Carbon::now();
        Listing_Specification::where('id', $specification_id)->update($data);
        Toastr::success(get_phrase('Listing specification update successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'specification']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'specification']);
        }
    }

    public function listing_specification_delete($prefix, $id, $specification_id){
        Listing_Specification::where('id', $specification_id)->delete();
        Toastr::success(get_phrase('Listing specification delete successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'specification']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'specification']);
        }    }

    public function listing_sub_specification_add($prefix, $id, $specification_id){
        $page_data['id'] = $id;
        $page_data['specification_id'] = $specification_id;
        $page_data['page'] = 'sub_add';
        return view('admin.listing.specification', $page_data);
    }

    public function listing_sub_specification_update(Request $request, $prefix, $id, $specification_id, $parent) {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'value' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['value'] = $request->value;
        $data['listing_id'] = $id;
        $data['specification_id'] = $parent;
        $data['updated_at'] = Carbon::now();

        Listing_Specification::where('id', $specification_id)->update($data);
        Toastr::success(get_phrase('Listing specification update successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'specification']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'specification']);
        }
    }

    public function listing_sub_specification_edit($prefix, $id, $specification_id, $parent){
        $page_data['id'] = $id;
        $page_data['specification_id'] = $specification_id;
        $page_data['parent'] = $parent;
        $page_data['page'] = 'sub_edit';
        $page_data['specification'] = Listing_Specification::where('id',$specification_id)->first();
        return view('admin.listing.specification', $page_data);
    }

    public function listing_sub_specification_store(Request $request, $prefix, $id, $specification_id){
        $validated = $request->validate([
            'title' => 'required|max:50',
            'value' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['value'] = $request->value;
        $data['listing_id'] = $id;
        $data['specification_id'] = $specification_id;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Listing_Specification::insert($data);
        Toastr::success(get_phrase('Listing specification add successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'car', 'id' => $id, 'tab'=>'specification']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'car','tab'=>'specification']);
        }
    }

    public function listing_add_room($prefix, $id, $room_id, $action){
        $page_data['id'] = $id;
        $page_data['action'] = $action;
        if($action == 'edit'){
            $page_data['room'] = Room::where('id', $room_id)->first();
        }
        $page_data['page'] = 'room';
        return view('admin.listing.room', $page_data);
    }

    public function listing_store_room(Request $request, $prefix, $id){
        $validated = $request->validate([
            'title' => 'required|max:50',
            'person' => 'required|max:100',
            'price' => 'required|max:50',
            'feature' => 'required',
            'image' => 'required',
        ]);
        $data['title'] = $request->title;
        $data['person'] = $request->person;
        $data['listing_id'] = $id;
        $data['user_id'] = user('id');
        $data['price'] = $request->price;
        $data['feature'] = json_encode($request->feature);
        $room_image = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $image) {
                $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/room-images', $imageName);
                array_push($room_image, $imageName);
            }
        }
        $data['image'] = json_encode($room_image);
        Room::insert($data);
        Toastr::success(get_phrase('Hotel room create successful!'), get_phrase('Success'));
        if(user('role') == 2) {
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'hotel','tab'=>'room']);
        }else{
            return redirect()->route('admin.listing.edit', ['type' => 'hotel', 'id' => $id, 'tab'=>'room']);
        }
    }

    public function listing_update_room(Request $request, $prefix, $id, $room_id){
        $validated = $request->validate([
            'title' => 'required|max:50',
            'person' => 'required|max:100',
            'price' => 'required|max:50',
            'feature' => 'required',
        ]);
        $data['title'] = $request->title;
        $data['person'] = $request->person;
        $data['listing_id'] = $id;
        $data['price'] = $request->price;
        $data['feature'] = json_encode($request->feature);
        $room_image = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $image) {
                $imageName = $key.'-'.time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/room-images', $imageName);
                array_push($room_image, $imageName);
            }
            $data['image'] = json_encode($room_image);
        }
        Room::where('id', $room_id)->update($data);
        Toastr::success(get_phrase('Hotel room create successful!'), get_phrase('Success'));
        if(user('role') == 2) {
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'hotel','tab'=>'room']);
        }else{
            return redirect()->route('admin.listing.edit', ['type' => 'hotel', 'id' => $id, 'tab'=>'feature']);
        }
    }

    public function listing_room($prefix, $id, $listing_id){
        Room::where('id', $id)->delete();
        Toastr::success(get_phrase('Listing room delete successful!'), get_phrase('Success'));
        if(user('role') == 2) {
            return redirect()->route('user.listing.edit',['id'=>$listing_id, 'type'=>'hotel','tab'=>'room']);
        }else{
            return redirect()->route('admin.listing.edit', ['type' => 'hotel', 'id' => $listing_id, 'tab'=>'feature']);
        }
    }

    public function listing_menu_add($prefix, $id){
        $page_data['id'] = $id;
        $page_data['page'] = 'add';
        return view('admin.listing.menu', $page_data);
    }

    public function listing_menu_store(Request $request, $prefix, $id) {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'sub_title' => 'required|max:100',
            'price' => 'required|max:50',
            'image' => 'required',
        ]);
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['price'] = $request->price;
        $data['listing_id'] = $id;
        $data['user_id'] = user('id');
        $data['dis_price'] = $request->dis_price;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/menu', $imageName);
            $data['image'] = $imageName;
        }
        Menu::insert($data);
        Toastr::success(get_phrase('Listing menu create successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'restaurant', 'id' => $id, 'tab'=>'menu']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$id, 'type'=>'restaurant','tab'=>'menu']);
        }
    }

    public function listing_menu_edit($prefix, $id, $listing_id, $page){
        $page_data['id'] = $id;
        $page_data['page'] = $page;
        $page_data['listing_id'] = $listing_id;
        $page_data['menu'] = Menu::where('id', $id)->first();
        return view('admin.listing.menu', $page_data);
    }

    public function listing_menu_update(Request $request, $prefix, $id, $listing_id){
        $validated = $request->validate([
            'title' => 'required|max:50',
            'sub_title' => 'required|max:100',
            'price' => 'required|max:50',
        ]);
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['price'] = $request->price;
        $data['listing_id'] = $listing_id;
        $data['dis_price'] = $request->dis_price;
        $menu = Menu::where('id', $id);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('public/menu', $imageName);
            $data['image'] = $imageName;
            if(file_exists('public/storage/menu/'.$menu->first()->image)){
                unlink('public/storage/menu/'.$menu->first()->image);
            }
        }
        $menu->update($data);
        Toastr::success(get_phrase('Listing menu update successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'restaurant', 'id' => $listing_id, 'tab'=>'menu']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$listing_id, 'type'=>'restaurant','tab'=>'menu']);
        }
    }

    public function listing_menu_delete($prefix, $id, $listing_id){
        $menu = Menu::where('id', $id);
        if(file_exists('public/storage/menu/'.$menu->first()->image)){
            unlink('public/storage/menu/'.$menu->first()->image);
        }
        $menu->delete();
        Toastr::success(get_phrase('Listing menu delete successful!'), get_phrase('Success'));
        if(user('role') == 1){
            return redirect()->route('admin.listing.edit', ['type' => 'restaurant', 'id' => $listing_id, 'tab'=>'menu']);
        }else{
            return redirect()->route('user.listing.edit',['id'=>$listing_id, 'type'=>'restaurant','tab'=>'menu']);
        }
    }

    public function claimed_listings()
    {
        $page_data['claimed_listings'] = ReportedListing::all();
        return view('admin.listing.claimed_listings', $page_data);
    }

    public function reported_listings()
    {
        $page_data['reported_listings'] = ReportedListing::all();
        return view('admin.listing.reported_listings', $page_data);
    }
}
