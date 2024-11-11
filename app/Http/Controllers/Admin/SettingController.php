<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\FrontendSettings;
use App\Models\HomePageSetting;
use App\Models\Review;
use App\Models\User;
use App\Models\System_setting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function system_setting(){
        return view('admin.setting.system_setting');
    }

    public function system_settings_update(Request $request) {
        $data = $request->all();
        if(System_setting::where('key', 'system_title')->get()->count() > 0) {
            System_setting::where('key', 'system_title')->update(['key' => 'system_title','value' => $data['system_title']]);
        } else {
            System_setting::create([
                'key' => 'system_title',
                'value' => $data['system_title'],
            ]);
        }
        if(System_setting::where('key', 'system_email')->get()->count() > 0) {
            System_setting::where('key', 'system_email')->update([
                'key' => 'system_email',
                'value' => $data['system_email'],
            ]);
        } else {
            System_setting::create([
                'key' => 'system_email',
                'value' => $data['system_email'],
            ]);
        }
        
        if(System_setting::where('key', 'address')->get()->count() > 0) {
            System_setting::where('key', 'address')->update([
                'key' => 'address',
                'value' => $data['address'],
            ]);
        } else {
            System_setting::create([
                'key' => 'address',
                'value' => $data['address'],
            ]);
        }
        if(System_setting::where('key', 'phone')->get()->count() > 0) {
            System_setting::where('key', 'phone')->update([
                'key' => 'phone',
                'value' => $data['phone'],
            ]);
        } else {
            System_setting::create([
                'key' => 'phone',
                'value' => $data['phone'],
            ]);
        }
        if(System_setting::where('key', 'language')->get()->count() > 0) {
            System_setting::where('key', 'language')->update([
                'key' => 'language',
                'value' => $data['language'],
            ]);
        } else {
            System_setting::create([
                'key' => 'language',
                'value' => $data['language'],
            ]);
        }
        if(System_setting::where('key', 'country_id')->get()->count() > 0) {
            System_setting::where('key', 'country_id')->update([
                'key' => 'country_id',
                'value' => $data['country'],
            ]);
        } else {
            System_setting::create([
                'key' => 'country_id',
                'value' => $data['country'],
            ]);
        }
        if(System_setting::where('key', 'purchase_code')->get()->count() > 0) {
            System_setting::where('key', 'purchase_code')->update([ 'key' => 'purchase_code', 'value' => $data['purchase_code']]);
        } else {
            System_setting::create([ 'key' => 'purchase_code', 'value' => $data['purchase_code']]);
        }
        if(System_setting::where('key', 'signup_email_verification')->get()->count() > 0) {
            System_setting::where('key', 'signup_email_verification')->update([
                'key' => 'signup_email_verification',
                'value' => $data['signup_email_verification'],
            ]);
        } else {
            System_setting::create([
                'key' => 'signup_email_verification',
                'value' => $data['signup_email_verification'],
            ]);
        }
        if(System_setting::where('key', 'map_access_token')->get()->count() > 0) {
            System_setting::where('key', 'map_access_token')->update([
                'key' => 'map_access_token',
                'value' => $data['map_access_token'],
            ]);
        } else {
            System_setting::create([
                'key' => 'map_access_token',
                'value' => $data['map_access_token'],
            ]);
        }
        if(System_setting::where('key', 'max_zoom_level')->get()->count() > 0) {
            System_setting::where('key', 'max_zoom_level')->update([
                'key' => 'max_zoom_level',
                'value' => $data['max_zoom_level'],
            ]);
        } else {
            System_setting::create([
                'key' => 'max_zoom_level',
                'value' => $data['max_zoom_level'],
            ]);
        }
        if(System_setting::where('key', 'default_location')->get()->count() > 0) {
            System_setting::where('key', 'default_location')->update([
                'key' => 'default_location',
                'value' => $data['default_location'],
            ]);
        } else {
            System_setting::create([
                'key' => 'default_location',
                'value' => $data['default_location'],
            ]);
        }
        if(System_setting::where('key', 'system_currency')->get()->count() > 0) {
            System_setting::where('key', 'system_currency')->update([
                'key' => 'system_currency',
                'value' => $data['system_currency'],
            ]);
        } else {
            System_setting::create([
                'key' => 'system_currency',
                'value' => $data['system_currency'],
            ]);
        }
        if(System_setting::where('key', 'currency_position')->get()->count() > 0) {
            System_setting::where('key', 'currency_position')->update([
                'key' => 'currency_position',
                'value' => $data['currency_position'],
            ]);
        } else {
            System_setting::create([
                'key' => 'currency_position',
                'value' => $data['currency_position'],
            ]);
        }
        if(System_setting::where('key', 'footer_text')->get()->count() > 0) {
            System_setting::where('key', 'footer_text')->update([
                'key' => 'footer_text',
                'value' => $data['footer_text'],
            ]);
        } else {
            System_setting::create([
                'key' => 'footer_text',
                'value' => $data['footer_text'],
            ]);
        }
        Toastr::success(get_phrase('Setting update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    function system_settings_update_social(Request $request){
        $data = $request->all();
        if(System_setting::where('key', 'facebook')->get()->count() > 0) {
            System_setting::where('key', 'facebook')->update([
                'key' => 'facebook',
                'value' => $data['facebook'],
            ]);
        } else {
            System_setting::create([
                'key' => 'facebook',
                'value' => $data['facebook'],
            ]);
        }
        if(System_setting::where('key', 'twitter')->get()->count() > 0) {
            System_setting::where('key', 'twitter')->update([
                'key' => 'twitter',
                'value' => $data['twitter'],
            ]);
        } else {
            System_setting::create([
                'key' => 'twitter',
                'value' => $data['twitter'],
            ]);
        }
        if(System_setting::where('key', 'linkedin')->get()->count() > 0) {
            System_setting::where('key', 'linkedin')->update([
                'key' => 'linkedin',
                'value' => $data['linkedin'],
            ]);
        } else {
            System_setting::create([
                'key' => 'linkedin',
                'value' => $data['linkedin'],
            ]);
        }
        Toastr::success(get_phrase('Setting update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function language_setting(){
        $page_data['languages'] = Language::select('name')->groupBy('name')->get();
        return view('admin.setting.languages', $page_data);
    }
    public function language_create(){
        $page_data['page'] = 'add';
        return view('admin.setting.create_languages', $page_data);
    }
    public function language_store(Request $request){
       
        $data['name'] = strtolower($request->name);  
        $data['phrase'] = $request->name;  
        $data['translated'] = $request->name;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Language::insert($data);
        Toastr::success(get_phrase('Language Created Successfully'), get_phrase('Success'));
        return redirect()->back();
    }
    public function language_edit($language){
        $page_data['page'] = 'edit';
        $page_data['language'] = Language::where('name', $language)->select('name')->groupBy('name')->first();
        return view('admin.setting.create_languages', $page_data);
    }
    public function language_update(Request $request, $language){
        Language::where('name', $language)->update(['name' => strtolower($request->name)]);
        Toastr::success(get_phrase('Language updated successfully.'), get_phrase('Success'));
        return redirect()->back();
    }
    public function language_phrase($language){
        $page_data['phrases'] = Language::where('name', $language)->get();
        return view('admin.setting.phrase', $page_data);
    }
    public function language_delete($language){
        $delete = Language::where('name', $language)->delete();
        if($delete){
            Toastr::success(get_phrase('Language Deleted Successfully'), get_phrase('Success'));
            return redirect()->back();
        }else{
            Toastr::error(get_phrase('Somthing Wrong'), get_phrase('Retry'));
            return redirect()->back(); 
        }
    }

    public function update_phrase(Request $request,$id){
        Language::where('id', $id)->update(['translated' => $request->phrase]);
        return 1;
    }

    public function email_settings(){
        return view('admin.setting.email_settings');
    }

    public function update_email_settings(Request $request){
        $data = $request->all();
        if(System_setting::where('key', 'smtp_protocol')->get()->count() > 0) {
            System_setting::where('key', 'smtp_protocol')->update([
                'key' => 'smtp_protocol',
                'value' => $data['smtp_protocol'],
            ]);
        } else {
            System_setting::create([
                'key' => 'smtp_protocol',
                'value' => $data['smtp_protocol'],
            ]);
        }
        if(System_setting::where('key', 'smtp_crypto')->get()->count() > 0) {
            System_setting::where('key', 'smtp_crypto')->update([
                'key' => 'smtp_crypto',
                'value' => $data['smtp_crypto'],
            ]);
        } else {
            System_setting::create([
                'key' => 'smtp_crypto',
                'value' => $data['smtp_crypto'],
            ]);
        }
        if(System_setting::where('key', 'smtp_host')->get()->count() > 0) {
            System_setting::where('key', 'smtp_host')->update([
                'key' => 'smtp_host',
                'value' => $data['smtp_host'],
            ]);
        } else {
            System_setting::create([
                'key' => 'smtp_host',
                'value' => $data['smtp_host'],
            ]);
        }
        if(System_setting::where('key', 'smtp_port')->get()->count() > 0) {
            System_setting::where('key', 'smtp_port')->update([
                'key' => 'smtp_port',
                'value' => $data['smtp_port'],
            ]);
        } else {
            System_setting::create([
                'key' => 'smtp_port',
                'value' => $data['smtp_port'],
            ]);
        }
        if(System_setting::where('key', 'smtp_username')->get()->count() > 0) {
            System_setting::where('key', 'smtp_username')->update([
                'key' => 'smtp_username',
                'value' => $data['smtp_username'],
            ]);
        } else {
            System_setting::create([
                'key' => 'smtp_username',
                'value' => $data['smtp_username'],
            ]);
        }
        if(System_setting::where('key', 'smtp_password')->get()->count() > 0) {
            System_setting::where('key', 'smtp_password')->update([
                'key' => 'smtp_password',
                'value' => $data['smtp_password'],
            ]);
        } else {
            System_setting::create([
                'key' => 'smtp_password',
                'value' => $data['smtp_password'],
            ]);
        }
        Toastr::success(get_phrase('Setting update successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function website_setting() {
        return view('admin.setting.website_setting');
    }

    public function website_setting_update(Request $request)
{
    $data = $request->all();

    if ($request->type == 'frontend_settings') {
        if (FrontendSettings::where('key', 'map_position')->exists()) {
            FrontendSettings::where('key', 'map_position')->update([
                'key' => 'map_position',
                'value' => $data['map_position'],
            ]);
        } else {
            FrontendSettings::create([
                'key' => 'map_position',
                'value' => $data['map_position'],
            ]);
        }
        Toastr::success(get_phrase('Setting updated successfully!'), get_phrase('Success'));
    }

    if ($request->type == 'mother_homepage_banner') {
        $existingData = FrontendSettings::where('key', 'mother_homepage_banner')->first();
        $mother_homepage_banner = $existingData && isset($existingData->value)
            ? json_decode($existingData->value, true) ?? []
            : []; 
    
        $images = [];
        foreach (array_filter($data['titles']) as $key => $title) {
            $bannerId = !empty($mother_homepage_banner) ? max(array_column($mother_homepage_banner, 'id')) + 1 : 1;
    
            $banner = [
                'id' => $bannerId,
                'title' => $title,
                'description' => $data['descriptions'][$key] ?? '',
            ];
    
            if (!empty($data['images'][$key])) {
                $imageName = time() . '_' . uniqid() . '.' . $data['images'][$key]->getClientOriginalExtension();
                $data['images'][$key]->move(public_path('uploads/mother_homepage_banner/'), $imageName);
                $banner['image'] = $imageName;
            } else {
                $banner['image'] = $data['previous_images'][$key] ?? '';
            }
    
            $images[] = $banner['image'];
            $mother_homepage_banner[] = $banner; 
        }
        FrontendSettings::updateOrCreate(
            ['key' => 'mother_homepage_banner'],
            ['value' => json_encode($mother_homepage_banner)]
        );
    
        Toastr::success(get_phrase('Setting updated successfully!'), get_phrase('Success'));
    }

    if ($request->type == 'company_images') {
        $existingData = FrontendSettings::where('key', 'company_images')->first();
        $company_images = $existingData && isset($existingData->value)
            ? json_decode($existingData->value, true) ?? []
            : [];
        
        $data = $request->all();
        $newCompanyImages = [];
        
        foreach ($data['images'] as $key => $image) {
            $bannerId = !empty($company_images) ? max(array_column($company_images, 'id')) + 1 : 1;
            $banner = ['id' => $bannerId];
            if (!empty($data['images'][$key])) {
                $imageName = time() . '_' . uniqid() . '.' . $data['images'][$key]->getClientOriginalExtension();
                $data['images'][$key]->move(public_path('uploads/company_logo/'), $imageName);
                $banner['image'] = $imageName;
            } else {
                $banner['image'] = $data['previous_images'][$key] ?? '';
            }
    
            $newCompanyImages[] = $banner;
        }
        $updatedCompanyImages = array_merge($company_images, $newCompanyImages);
        FrontendSettings::updateOrCreate(
            ['key' => 'company_images'],
            ['value' => json_encode($updatedCompanyImages)]
        );
    
        // Success message
        Toastr::success(get_phrase('Company Logos updated successfully!'), get_phrase('Success'));
        return back();
    }
    
    
  
    if ($request->type == 'light_logo') {
        if ($request->hasFile('light_logo')) {
            $existing_logo = get_frontend_settings('light_logo');
            if ($existing_logo && file_exists(public_path('uploads/logo/' . $existing_logo))) {
                unlink(public_path('uploads/logo/' . $existing_logo));
            }
                $upload_path = public_path('uploads/logo/');
                $file = $request->file('light_logo');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'light_logo')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Lite Logo updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Dark Logo!'), get_phrase('Error'));
        }
    }
    if ($request->type == 'dark_logo') {
        if ($request->hasFile('dark_logo')) {
            $existing_logo = get_frontend_settings('dark_logo');
            if ($existing_logo && file_exists(public_path('uploads/logo/' . $existing_logo))) {
                unlink(public_path('uploads/logo/' . $existing_logo));
            }
    
            $upload_path = public_path('uploads/logo/');
            $file = $request->file('dark_logo');
            $logo_filename = time() . '_' . $file->getClientOriginalName();
            $file->move($upload_path, $logo_filename);
            FrontendSettings::where('key', 'dark_logo')->update(['value' => $logo_filename]);
            Toastr::success(get_phrase('Dark Logo updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Dark Logo!'), get_phrase('Error'));
        }
    }
    
    if ($request->type == 'favicon_logo') {
        if ($request->hasFile('favicon_logo')) {
            $existing_logo = get_frontend_settings('favicon_logo');
            if ($existing_logo && file_exists(public_path('uploads/logo/' . $existing_logo))) {
                unlink(public_path('uploads/logo/' . $existing_logo));
            }
                $upload_path = public_path('uploads/logo/');
                $file = $request->file('favicon_logo');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'favicon_logo')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Favicon updated successfully!'), get_phrase('Success'));
            } else {
            Toastr::error(get_phrase('No file uploaded for Dark Logo!'), get_phrase('Error'));
        }
    }

    if ($request->type == 'hotel') {
        if ($request->hasFile('hotel')) {
            $existing_logo = get_frontend_settings('hotel');
            if ($existing_logo && file_exists(public_path('uploads/category_type/' . $existing_logo))) {
                unlink(public_path('uploads/category_type/' . $existing_logo));
            }
                $upload_path = public_path('uploads/category_type/');
                $file = $request->file('hotel');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'hotel')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Hotel image updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Hotel!'), get_phrase('Error'));
        }
    }
    if ($request->type == 'doctors') {
        if ($request->hasFile('doctors')) {
            $existing_logo = get_frontend_settings('doctors');
            if ($existing_logo && file_exists(public_path('uploads/category_type/' . $existing_logo))) {
                unlink(public_path('uploads/category_type/' . $existing_logo));
            }
                $upload_path = public_path('uploads/category_type/');
                $file = $request->file('doctors');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'doctors')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Doctors image updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Doctors!'), get_phrase('Error'));
        }
    }
    if ($request->type == 'car') {
        if ($request->hasFile('car')) {
            $existing_logo = get_frontend_settings('car');
            if ($existing_logo && file_exists(public_path('uploads/category_type/' . $existing_logo))) {
                unlink(public_path('uploads/category_type/' . $existing_logo));
            }
                $upload_path = public_path('uploads/category_type/');
                $file = $request->file('car');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'car')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Car image updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Car!'), get_phrase('Error'));
        }
    }
    if ($request->type == 'beauty') {
        if ($request->hasFile('beauty')) {
            $existing_logo = get_frontend_settings('beauty');
            if ($existing_logo && file_exists(public_path('uploads/category_type/' . $existing_logo))) {
                unlink(public_path('uploads/category_type/' . $existing_logo));
            }
                $upload_path = public_path('uploads/category_type/');
                $file = $request->file('beauty');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'beauty')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Beauty image updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Beauty!'), get_phrase('Error'));
        }
    }
    if ($request->type == 'real_estate') {
        if ($request->hasFile('real_estate')) {
            $existing_logo = get_frontend_settings('real_estate');
            if ($existing_logo && file_exists(public_path('uploads/category_type/' . $existing_logo))) {
                unlink(public_path('uploads/category_type/' . $existing_logo));
            }
                $upload_path = public_path('uploads/category_type/');
                $file = $request->file('real_estate');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'real_estate')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Real Estate image updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Real Estate!'), get_phrase('Error'));
        }
    }
    if ($request->type == 'restaurent') {
        if ($request->hasFile('restaurent')) {
            $existing_logo = get_frontend_settings('restaurent');
            if ($existing_logo && file_exists(public_path('uploads/category_type/' . $existing_logo))) {
                unlink(public_path('uploads/category_type/' . $existing_logo));
            }
                $upload_path = public_path('uploads/category_type/');
                $file = $request->file('restaurent');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move($upload_path, $logo_filename);
                FrontendSettings::where('key', 'restaurent')->update(['value' => $logo_filename]);
                Toastr::success(get_phrase('Restaurent image updated successfully!'), get_phrase('Success'));
        } else {
            Toastr::error(get_phrase('No file uploaded for Restaurent!'), get_phrase('Error'));
        }
    }

    return redirect()->back();
}

 //Mother Home Page Banner Load View Page
 public function MotherBanner(){
    return view('admin.setting.mother_home_banner.add');
 } 

 public function MotherBannerEdit($id)
 {
     $motherHomepageBanner = json_decode(get_frontend_settings('mother_homepage_banner'), true);
     $bannerToEdit = collect($motherHomepageBanner)->firstWhere('id', $id);
     return view('admin.setting.mother_home_banner.edit', compact('bannerToEdit'));
 }
 
 public function MotherBannerUpdate(Request $request, $id)
 {
  
     $existingData = FrontendSettings::where('key', 'mother_homepage_banner')->first();
     $mother_homepage_banner = $existingData ? json_decode($existingData->value, true) : [];

     foreach ($mother_homepage_banner as &$banner) {
         if ($banner['id'] == $id) {
             $banner['title'] = $request->titles[0]; 
             $banner['description'] = $request->descriptions[0] ?? '';

             if ($request->hasFile('images') && $request->images[0]) {
                 $oldImagePath = public_path('uploads/mother_homepage_banner/' . $banner['image']);
                 if (file_exists($oldImagePath)) {
                     unlink($oldImagePath); 
                 }
                 $imageName = time() . '_' . uniqid() . '.' . $request->images[0]->getClientOriginalExtension();
                 $request->images[0]->move(public_path('uploads/mother_homepage_banner/'), $imageName);
                 $banner['image'] = $imageName; 
             }
             break;
         }
     }

     FrontendSettings::updateOrCreate(
         ['key' => 'mother_homepage_banner'],
         ['value' => json_encode($mother_homepage_banner)]
     );
 
     Toastr::success(get_phrase('Setting updated successfully!'), get_phrase('Success'));
     return redirect()->back(); 
 }
 
 public function DeleteMotherbanner($id)
 {
     $existingData = FrontendSettings::where('key', 'mother_homepage_banner')->first();
     if ($existingData) {
         $mother_homepage_banner = json_decode($existingData->value, true);
         $index = array_search($id, array_column($mother_homepage_banner, 'id'));
         
         if ($index !== false) {
             $imagePath = public_path('uploads/mother_homepage_banner/' . $mother_homepage_banner[$index]['image']);
             if (file_exists($imagePath)) {
                 unlink($imagePath);
             }
             
             unset($mother_homepage_banner[$index]);
             
             $mother_homepage_banner = array_values($mother_homepage_banner);
             FrontendSettings::updateOrCreate(
                 ['key' => 'mother_homepage_banner'],
                 ['value' => json_encode($mother_homepage_banner)]
             );
 
             Toastr::success(get_phrase('Setting updated successfully!'), get_phrase('Success'));
         } else {
             Toastr::error(get_phrase('Banner not found!'), get_phrase('Error'));
         }
     } else {
         Toastr::error(get_phrase('No existing banners found!'), get_phrase('Error'));
     }
 
     return redirect()->back();
 }
 


//  Company Logo
public function CompanyLogo(){
    return view('admin.setting.company_logo_add');
 } 
 public function CompanyLogoEdit($id)
 {
     $CompanyLogoEdit = json_decode(get_frontend_settings('company_images'), true);
     $logoEdit = collect($CompanyLogoEdit)->firstWhere('id', $id);
     return view('admin.setting.company_logo_edit', compact('logoEdit'));
 }
 
 public function companylogoUpdate(Request $request, $id)
 {
     $existingData = FrontendSettings::where('key', 'company_images')->first();
     $company_images = $existingData ? json_decode($existingData->value, true) : [];
 
     foreach ($company_images as &$banner) {
         if ($banner['id'] == $id) {
             if ($request->hasFile('images') && $request->images[0]) {
                 $oldImagePath = public_path('uploads/company_logo/' . $banner['image']);
                 if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                     unlink($oldImagePath); 
                 }
                 $imageName = time() . '_' . uniqid() . '.' . $request->images[0]->getClientOriginalExtension();
                 $request->images[0]->move(public_path('uploads/company_logo/'), $imageName);
                 $banner['image'] = $imageName; 
             }
             break;
         }
     }
     FrontendSettings::updateOrCreate(
         ['key' => 'company_images'],
         ['value' => json_encode($company_images)]
     );
     Toastr::success(get_phrase('Company logo updated successfully!'), get_phrase('Success'));
     return redirect()->back();
 }
 


 public function Deletecompanylogo($id)
 {
     $existingData = FrontendSettings::where('key', 'company_images')->first();
     if ($existingData) {
         $company_images = json_decode($existingData->value, true);
         $index = array_search($id, array_column($company_images, 'id'));
         
         if ($index !== false) {
             $imagePath = public_path('uploads/company_logo/' . $company_images[$index]['image']);
             if (file_exists($imagePath)) {
                 unlink($imagePath);
             }
             
             unset($company_images[$index]);
             
             $company_images = array_values($company_images);
             FrontendSettings::updateOrCreate(
                 ['key' => 'company_images'],
                 ['value' => json_encode($company_images)]
             );
 
             Toastr::success(get_phrase('Company Logo Delete successfully!'), get_phrase('Success'));
         } else {
             Toastr::error(get_phrase('Banner not found!'), get_phrase('Error'));
         }
     } else {
         Toastr::error(get_phrase('No existing banners found!'), get_phrase('Error'));
     }
 
     return redirect()->back();
 }





    //  Homepage 6type Settings Update
    public function homepage_setting_update(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        
        if ($request->type == 'BeautyBanner') {
            $title = $request->input('beauty_banner_title');
            $description = $request->input('beauty_banner_description');
            $video_url = $request->input('video_url');
            $homePageSetting = HomePageSetting::where('type', 'BeautyBanner')->where('key', 'BeautyBanner')->first();
            $beauty_banner_data = $homePageSetting ? json_decode($homePageSetting->value) : null;
            $beauty_banner = $beauty_banner_data ? $beauty_banner_data->image : null;
            if ($request->hasFile('beauty_banner')) {
                if ($beauty_banner && file_exists(public_path('uploads/homepage/beauty/' . $beauty_banner))) {
                    unlink(public_path('uploads/homepage/beauty/' . $beauty_banner));
                }
                $file = $request->file('beauty_banner');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/homepage/beauty'), $logo_filename);
            } else {
                $logo_filename = $beauty_banner;
            }
            $value = json_encode([
                'title' => $title,
                'description' => $description,
                'video_url' => $video_url,
                'image' => $logo_filename
            ]);
            $data['type'] = $request->type;
            $data['key'] = 'BeautyBanner';
            $data['value'] = $value;
            if ($homePageSetting) {
                $homePageSetting->update($data);
            } else {
                HomePageSetting::create($data);
            }
            Toastr::success('Beauty Banner updated successfully!', 'Success');
        }

        if ($request->type == 'BeautyFacial') {
            $title = $request->input('beauty_Facial_title');
            $description = $request->input('beauty_facial_discount');
            $homePageSetting = HomePageSetting::where('type', 'BeautyFacial')->where('key', 'BeautyFacial')->first();
            $beauty_banner_data = $homePageSetting ? json_decode($homePageSetting->value) : null;
            $beauty_banner = $beauty_banner_data ? $beauty_banner_data->image : null;
            if ($request->hasFile('beauty_facial_image')) {
                if ($beauty_banner && file_exists(public_path('uploads/homepage/beauty/' . $beauty_banner))) {
                    unlink(public_path('uploads/homepage/beauty/' . $beauty_banner));
                }
                $file = $request->file('beauty_facial_image');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/homepage/beauty'), $logo_filename);
            } else {
                $logo_filename = $beauty_banner;
            }
            $value = json_encode([
                'title' => $title,
                'description' => $description,
                'image' => $logo_filename
            ]);
            $data['type'] = $request->type;
            $data['key'] = 'BeautyFacial';
            $data['value'] = $value;
            if ($homePageSetting) {
                $homePageSetting->update($data);
            } else {
                HomePageSetting::create($data);
            }
            Toastr::success('Beauty Facial Image updated successfully!', 'Success');
        }
        if ($request->type == 'BeautyMassage') {
            $title = $request->input('beauty_massage_title');
            $description = $request->input('beauty_massage_discount');
            $homePageSetting = HomePageSetting::where('type', 'BeautyMassage')->where('key', 'BeautyMassage')->first();
            $beauty_banner_data = $homePageSetting ? json_decode($homePageSetting->value) : null;
            $beauty_banner = $beauty_banner_data ? $beauty_banner_data->image : null;
            if ($request->hasFile('beauty_massage_banner')) {
                if ($beauty_banner && file_exists(public_path('uploads/homepage/beauty/' . $beauty_banner))) {
                    unlink(public_path('uploads/homepage/beauty/' . $beauty_banner));
                }
                $file = $request->file('beauty_massage_banner');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/homepage/beauty'), $logo_filename);
            } else {
                $logo_filename = $beauty_banner;
            }
            $value = json_encode([
                'title' => $title,
                'description' => $description,
                'image' => $logo_filename
            ]);
            $data['type'] = $request->type;
            $data['key'] = 'BeautyMassage';
            $data['value'] = $value;
            if ($homePageSetting) {
                $homePageSetting->update($data);
            } else {
                HomePageSetting::create($data);
            }
            Toastr::success('Beauty Massage Image updated successfully!', 'Success');
        }
        if ($request->type == 'BeautyMotion') {
            $title = $request->input('beauty_motion_title');
            $description = $request->input('beauty_motion_description');
            $homePageSetting = HomePageSetting::where('type', 'BeautyMotion')->where('key', 'BeautyMotion')->first();
            $beauty_banner_data = $homePageSetting ? json_decode($homePageSetting->value) : null;
            $beauty_banner = $beauty_banner_data ? $beauty_banner_data->image : null;
            if ($request->hasFile('beauty_motion_banner')) {
                if ($beauty_banner && file_exists(public_path('uploads/homepage/beauty/' . $beauty_banner))) {
                    unlink(public_path('uploads/homepage/beauty/' . $beauty_banner));
                }
                $file = $request->file('beauty_motion_banner');
                $logo_filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/homepage/beauty'), $logo_filename);
            } else {
                $logo_filename = $beauty_banner;
            }
            $value = json_encode([
                'title' => $title,
                'description' => $description,
                'image' => $logo_filename
            ]);
            $data['type'] = $request->type;
            $data['key'] = 'BeautyMotion';
            $data['value'] = $value;
            if ($homePageSetting) {
                $homePageSetting->update($data);
            } else {
                HomePageSetting::create($data);
            }
            Toastr::success('Beauty Motion Image updated successfully!', 'Success');
        }
    
        return redirect()->back();
    }
    
    
    







   //User Review Add 
   public function user_review_add(){
    $page_data['userList'] = User::where('role', 2)->get();
    return view('admin.setting.user_review_create',$page_data);
  }
  public function user_review_stor(Request $request){
        $data=$request->all();
        $reviewAdd = new Review;
        $reviewAdd['user_id']=$data['user_id'];
        $reviewAdd['rating']=$data['rating'];
        $reviewAdd['review']=$data['review'];
        $reviewAdd->save();
        Toastr::success(get_phrase('Review added successfull!'), get_phrase('Success'));
        return redirect()->back();
  }

  public function review_edit($id)
  {
      $page_data["review_data"] = Review::find($id);
      $page_data['userList'] = User::where('role', 2)->get();
      return view("admin.setting.user_review_edit", $page_data);
  }
  public function review_update(Request $request, $id)
  {
    $data = $request->all();
    unset($data['_token']);
    Review::where('id', $id)->update($data);    
    Toastr::success(get_phrase('Review Update successfull!'), get_phrase('Success'));
    return redirect()->route('admin.website.settings');
  }

  public function review_delete($id)
  {
      $query = Review::where("id", $id);
      $query->delete();
      Toastr::success(get_phrase('Review Delete successfull!'), get_phrase('Success'));
      return redirect()->back();
  }







    public function about()
    {

        $purchase_code    = get_settings('purchase_code');
        $returnable_array = array(
            'purchase_code_status' => get_phrase('Not found'),
            'support_expiry_date'  => get_phrase('Not found'),
            'customer_name'        => get_phrase('Not found'),
        );

        $personal_token = "gC0J1ZpY53kRpynNe4g2rWT5s4MW56Zg";
        $url            = "https://api.envato.com/v3/market/author/sale?code=" . $purchase_code;
        $curl           = curl_init($url);

        //setting the header for the rest of the api
        $bearer   = 'bearer ' . $personal_token;
        $header   = array();
        $header[] = 'Content-length: 0';
        $header[] = 'Content-type: application/json; charset=utf-8';
        $header[] = 'Authorization: ' . $bearer;

        $verify_url = 'https://api.envato.com/v1/market/private/user/verify-purchase:' . $purchase_code . '.json';
        $ch_verify  = curl_init($verify_url . '?code=' . $purchase_code);

        curl_setopt($ch_verify, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch_verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch_verify, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch_verify, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch_verify, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        $cinit_verify_data = curl_exec($ch_verify);
        curl_close($ch_verify);

        $response = json_decode($cinit_verify_data, true);

        if (is_array($response) && isset($response['verify-purchase']) && count($response['verify-purchase']) > 0) {

            $item_name     = $response['verify-purchase']['item_name'];
            $purchase_time = $response['verify-purchase']['created_at'];
            $customer      = $response['verify-purchase']['buyer'];
            $licence_type  = $response['verify-purchase']['licence'];
            $support_until = $response['verify-purchase']['supported_until'];
            $customer      = $response['verify-purchase']['buyer'];

            $purchase_date = date("d M, Y", strtotime($purchase_time));

            $todays_timestamp         = strtotime(date("d M, Y"));
            $support_expiry_timestamp = strtotime($support_until);

            $support_expiry_date = date("d M, Y", $support_expiry_timestamp);

            if ($todays_timestamp > $support_expiry_timestamp) {
                $support_status = 'expired';
            } else {
                $support_status = 'valid';
            }

            $returnable_array = array(
                'purchase_code_status' => $support_status,
                'support_expiry_date'  => $support_expiry_date,
                'customer_name'        => $customer,
                'product_license'      => 'valid',
                'license_type'         => $licence_type,
            );
        } else {
            $returnable_array = array(
                'purchase_code_status' => 'invalid',
                'support_expiry_date'  => 'invalid',
                'customer_name'        => 'invalid',
                'product_license'      => 'invalid',
                'license_type'         => 'invalid',
            );
        }

        $data['application_details'] = $returnable_array;
        return view('admin.setting.about', $data);
    }

    function save_valid_purchase_code($action_type, Request $request)
    {
        if ($action_type == 'update') {
            $data['description'] = $request->purchase_code;

            $status = $this->curl_request($data['description']);
            if ($status) {
                Setting::where('type', 'purchase_code')->update($data);
                session()->flash('success', get_phrase('Purchase code has been updated'));
                echo 1;
            } else {
                echo 0;
            }
        } else {
            return view('admin.setting.save_purchase_code');
        }
    }

    public function notification_settings()
    {
        return view('admin.setting.notification_setting');
    }

    public function notification_settings_store(Request $request, $param1 = '', $id = '')
    {
        $data = $request->all();

        if ($param1 == 'smtp_settings') {
            array_shift($data);

            foreach ($data as $key => $item) {
                Setting::where('type', $key)->update(['description' => $item]);
            }

            if (isset($_GET['tab'])) {
                $page_data['tab'] = $_GET['tab'];
            } else {
                $page_data['tab'] = 'smtp-settings';
            }
            Session::flash('success', get_phrase('SMTP setting update successfully'));
        }
        if ($param1 == 'edit_email_template') {
            array_shift($data);
            unset($data['files']);
            $data['subject']  = json_encode($request->subject);
            $data['template'] = json_encode($request->template);
            NotificationSetting::where('id', $id)->update($data);

            if (isset($_GET['tab'])) {
                $page_data['tab'] = $_GET['tab'];
            } else {
                $page_data['tab'] = 'edit_email_template';
            }
            Session::flash('success', get_phrase('Email template update successfully'));
        }

        if ($param1 == 'notification_enable_disable') {

            $id                       = $request->id;
            $user_type                = $request->user_types;
            $notification_type        = $request->notification_type;
            $input_val                = $request->input_val;
            $notification_setting_row = NotificationSetting::where('id', $id)->first();
            if ($notification_type == 'system') {
                $json_to_arr                 = json_decode($notification_setting_row->system_notification, true);
                $json_to_arr[$user_type]     = $input_val;
                $data['system_notification'] = json_encode($json_to_arr);
            }
            if ($notification_type == 'email') {
                $json_to_arr                = json_decode($notification_setting_row->email_notification, true);
                $json_to_arr[$user_type]    = $input_val;
                $data['email_notification'] = json_encode($json_to_arr);
            }
            if ($notification_setting_row->is_editable == 1) {
                unset($data['notification_type']);
                unset($data['input_val']);
                unset($data['user_types']);
                NotificationSetting::where('id', $id)->update($data);

                if ($input_val == 1) {
                    $msg = 'Successfully enabled';
                } else {
                    $msg = 'Successfully disabled';
                }
            }
        }

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'msg'    => $msg,
            ]);
        } else {
            return redirect()->back();
        }
    }
}
