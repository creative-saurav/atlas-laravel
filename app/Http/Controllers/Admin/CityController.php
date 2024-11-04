<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $page_data['cities'] = City::get();

        $uniqueCountryIds = City::distinct()->pluck('country');

        $page_data['countries'] = Country::whereIn('id', $uniqueCountryIds)->get();

        return view('admin.city.index', $page_data);
    }

    public function add_city(){
        $page_data['countries'] = Country::get();
        return view('admin.city.create', $page_data);
    }

    public function store_city(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required|max:255',
        ]);
        $data['name'] = $request->name;
        $data['country'] = $request->country;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        City::insert($data);
        Toastr::success(get_phrase('City added successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function edit_city($id){
        $page_data['city_details'] = City::where('id', $id)->first();
        $page_data['countries'] = Country::get();
        return view('admin.city.edit', $page_data);
    }

    public function update_city(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required|max:255',
        ]);
        $data['name'] = $request->name;
        $data['country'] = $request->country;
        $data['created_at'] = Carbon::now();
        City::where('id', $id)->update($data);
        Toastr::success(get_phrase('City Update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function delete_city($id){
        City::where('id', $id)->delete();
        Toastr::success(get_phrase('City deleted successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function country_city($id){
        $cities = City::where('country', $id)->get();
        return response()->json($cities);
    }

    public function edit_country($id){
        $page_data['country_details'] = Country::where('id', $id)->first();
        return view('admin.city.edit_country', $page_data);
    }

    public function update_country(Request $request, $id){

        $query = Country::where('id', $id);
        $pre_data = Country::where('id', $id)->first();

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->storeAs('public/country-thumbnails', $thumbnailName);
            $data['thumbnail'] = $thumbnailName;
            if(is_file('storage/app/public/country-thumbnails/'.$pre_data->thumbnail)){
                unlink('storage/app/public/country-thumbnails/'.$pre_data->thumbnail);
            } 
        }

        $query->update($data);

        Toastr::success(get_phrase('Country thumbnail update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

}
