<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($type, $action){
        $page_data['type'] = $type;
        $page_data['users'] = User::where('type', $type)->get();
        if($action == 'all'){
            return view('admin.user.index', $page_data);
        }elseif($action == 'add'){
            return view('admin.user.create', $page_data);
        }
    }

    public function user_create(Request $request, $type){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:50',
            'gender' => 'required|max:50',
            'country' => 'required|max:50',
            'city' => 'required|max:50',
            'password' => 'required|max:50',
            'confirm_password' => 'required|same:password',
        ]);

        $address['country'] = $request->country;
        $address['city'] = $request->city;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/users', $imageName);
            $data['image'] = $imageName;
        }

        $data['type'] = $type;
        $data['role'] = 2;
        $data['status'] = 1;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['gender'] = $request->gender;
        $data['address'] = json_encode($address);
        $data['password'] = Hash::make($request->password);
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['linkedin'] = $request->linkedin;

        User::insert($data);
        Toastr::success(get_phrase('User Created successfully!'), get_phrase('Success'));
        return redirect(route('admin.user',['type'=>$type,'action'=>'all']));
    }

    public function user_delete($id){
        $user = User::where('id', $id);
        if(is_file('public/storage/users/'.$user->first()->image)){
            unlink('public/storage/users/'.$user->first()->image);
        }
        $user->delete();
        Toastr::success(get_phrase('User deleted successful!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function user_status($id, $status){
        User::where('id',$id)->update(['status'=>$status]);
        Toastr::success(get_phrase('User status change successful!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function user_edit($type, $id){
        $page_data['user'] = User::where('id', $id)->first();
        $page_data['type'] = $type;
        return view('admin.user.edit',$page_data);
    }

    public function user_update(Request $request, $type, $id){
        $user = User::where('id', $id);
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:50',
            'gender' => 'required|max:50',
            'country' => 'required|max:50',
            'city' => 'required|max:50',
        ]);
        $address['country'] = $request->country;
        $address['city'] = $request->city;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/users', $imageName);
            $data['image'] = $imageName;
            if(is_file('public/storage/users/'.$user->first()->image)){
                unlink('public/storage/users/'.$user->first()->image);
            }
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['gender'] = $request->gender;
        $data['address'] = json_encode($address);
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['linkedin'] = $request->linkedin;

        $user->update($data);
        Toastr::success(get_phrase('User updated successfully!'), get_phrase('Success'));
        return redirect(route('admin.user',['type'=>$type,'action'=>'all']));
    }
}
