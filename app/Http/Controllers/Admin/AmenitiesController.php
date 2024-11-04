<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    public function amenities_list($type){
        $page_data['type'] = $type;
        $page_data['amenities'] = Amenities::where('type', $type)->get();
        return view('admin.amenities.index', $page_data);
    }

    public function amenities_item($type, $item){
        $page_data['type'] = $type;
        $page_data['item'] = $item;
        if($item == 'service'){
            $page_data['amenities'] = Amenities::where('type', $type)->where('identifier', 'service')->get();
        }elseif($item == 'real-estate' || $item == 'hotel'){
            $page_data['amenities'] = Amenities::where('type', $type)->where('identifier', 'feature')->get();
        }else{
            $page_data['amenities'] = Amenities::where('type', $type)->get();
        }
        return view('admin.amenities.index', $page_data);
    }

    public function amenities_create(Request $request, $type){
        $data['type'] = $type;
        if($type == 'car' || $type == 'real-estate' || $type == 'hotel' || $type == 'restaurant'){
            $validated = $request->validate([
                'name' => 'required|max:50',
                'icon' => 'required|max:50',
            ]);
            $data['icon'] = $request->icon;
            $data['name'] = $request->name;
            $data['identifier'] = $request->item;
        }elseif($type == 'beauty'){
            if($request->item == 'service'){
                $validated = $request->validate([
                    'name' => 'required|max:50',
                    'time' => 'required|max:50',
                    'price' => 'required|max:50',
                ]);
                $data['name'] = $request->name;
                $data['time'] = $request->time;
                $data['price'] = $request->price;
                $data['identifier'] = 'service';
            }else{
                $validated = $request->validate([
                    'name' => 'required|max:50',
                    'designation' => 'required|max:50',
                    'image' => 'required',
                    'rating' => 'required|max:50',
                ]);
                $data['identifier'] = 'team';
                $data['name'] = $request->name;
                $data['designation'] = $request->designation;
                $data['rating'] = $request->rating;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/team', $imageName);
                    $data['image'] = $imageName;
                }
            }
        }

        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Amenities::insert($data);
        if($request->page == 'listing'){
            Toastr::success(get_phrase('Listing '.$request->item.' create successful!'), get_phrase('Success'));
            return redirect()->route('admin.listing.edit', ['type' => $type, 'id' => $request->listing_id, 'tab'=>$request->item]);
        }else{
            Toastr::success(get_phrase('Amenities Created Successful!'), get_phrase('Success'));
            return redirect()->back();
        }
    }

    public function amenities_add($prefix, $type, $item="", $page="", $listing_id=""){
        $page_data['type'] = $type;
        $page_data['item'] = $item;
        $page_data['page'] = $page;
        $page_data['listing_id'] = $listing_id;
        return view('admin.amenities.create', $page_data);
    }

    public function amenities_edit($id){
        $page_data['amenities'] = Amenities::where('id', $id)->first();
        return view('admin.amenities.edit', $page_data);
    }

    public function amenities_update(Request $request, $id){

        $amenities =  Amenities::where('id', $id);
        if($amenities->first()->type == 'beauty'){
            $beauty = $amenities->first();
            $data['name'] = $request->name;
            if($beauty->identifier == 'service'){
                $data['time'] = $request->time;
                $data['price'] = $request->price;
            }else{
                $validated = $request->validate([
                    'name' => 'required|max:50',
                    'designation' => 'required|max:50',
                    'rating' => 'required|max:50',
                ]);
                $data['designation'] = $request->designation;
                $data['rating'] = $request->rating;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/team', $imageName);
                    $data['image'] = $imageName;
                    if(is_file('public/storage/team/'.$beauty->image)){
                        unlink('public/storage/team/'.$beauty->image);
                    }
                }
            }
        }elseif($amenities->first()->type == 'car' || $amenities->first()->type == 'real-estate' || $amenities->first()->type == 'hotel' || $amenities->first()->type == 'restaurant'){
            $validated = $request->validate([
                'name' => 'required|max:50',
                'icon' => 'required|max:50',
            ]);
            $data['icon'] = $request->icon;
            $data['type'] = $request->type;
            $data['name'] = $request->name;
            $data['identifier'] = $request->item;
        }
        $data['updated_at'] = Carbon::now();
        $amenities->update($data);
        Toastr::success(get_phrase('Amenities Updated Successful!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function amenities_delete($id){
        $amenities = Amenities::where('id', $id);
        if($amenities->first()->type == 'beauty'){
            $beauty = $amenities->first();
            if(is_file('public/storage/team/'.$beauty->image)){
                unlink('public/storage/team/'.$beauty->image);
            }
        }
        $amenities->delete();
        Toastr::success(get_phrase('Amenities Deleted Successful!'), get_phrase('Success'));
        return redirect()->back();
    }
}
