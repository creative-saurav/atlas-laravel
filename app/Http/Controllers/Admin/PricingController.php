<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        $page_data['pricing'] = Pricing::get();
        return view('admin.pricing.index', $page_data);
    }

    public function create(){
        return view('admin.pricing.create');
    }

    public function package_store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:50',
            'icon' => 'required|max:50',
            'sub_title' => 'required|max:50',
            'price' => 'required|max:50',
            'period' => 'required|max:50',
            'listing' => 'required|max:50',
            'category' => 'required|max:50',
            'feature' => 'required|max:50',
            'contact' => 'required|max:50',
            'video' => 'required|max:50',
            'choice' => 'required|max:50',
        ]);
        $data['name'] = $request->name;
        $data['icon'] = $request->icon;
        $data['sub_title'] = $request->sub_title;
        $data['price'] = $request->price;
        $data['period'] = $request->period;
        $data['listing'] = $request->listing;
        $data['category'] = $request->category;
        $data['feature'] = $request->feature;
        $data['contact'] = $request->contact;
        $data['video'] = $request->video;
        $data['choice'] = $request->choice;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Pricing::insert($data);
        Toastr::success(get_phrase('Package create successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function package_delete($id){
        Pricing::where('id',$id)->delete();
        Toastr::success(get_phrase('Package delete successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function package_edit($id){
        $data['package'] = Pricing::where('id', $id)->first();
        return view('admin.pricing.edit', $data);
    }

    public function package_update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|max:50',
            'icon' => 'required|max:50',
            'sub_title' => 'required|max:50',
            'price' => 'required|max:50',
            'period' => 'required|max:50',
            'listing' => 'required|max:50',
            'category' => 'required|max:50',
            'feature' => 'required|max:50',
            'contact' => 'required|max:50',
            'video' => 'required|max:50',
            'choice' => 'required|max:50',
        ]);
        $data['name'] = $request->name;
        $data['icon'] = $request->icon;
        $data['sub_title'] = $request->sub_title;
        $data['price'] = $request->price;
        $data['period'] = $request->period;
        $data['listing'] = $request->listing;
        $data['category'] = $request->category;
        $data['feature'] = $request->feature;
        $data['contact'] = $request->contact;
        $data['video'] = $request->video;
        $data['choice'] = $request->choice;
        $data['updated_at'] = Carbon::now();
        Pricing::where('id', $id)->update($data);
        Toastr::success(get_phrase('Package update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }
}
