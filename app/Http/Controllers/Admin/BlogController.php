<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blog_category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($type){
        $page_data['type'] = $type;
        $type = ($type == 'all')?1:0;
        $page_data['blogs'] = Blog::where('status', $type)->get();
        return view('admin.blog.index', $page_data);
    }

    public function blog_create(){
        $page_data['categories'] = Blog_category::get();
        return view('admin.blog.blog_create', $page_data);
    }

    public function blog_store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:125',
            'category' => 'required|max:125',
            'description' => 'required',
            'keyword' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/blog-images', $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = 0; 
        }

        $data['title'] = $request->title;
        $data['time'] = time();
        $data['user_id'] = auth()->user()->id;
        $data['category'] = $request->category;
        $data['description'] = $request->description;
        $data['keyword'] = $request->keyword;
        $data['status'] = (auth()->user()->role == 1)? 1 : 0 ;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $data['is_popular'] = $request->is_popular;
        Blog::insert($data);
        Toastr::success(get_phrase('Blog Create successfully!'), get_phrase('Success'));
        if($request->is_agent){
            return redirect('agent/blogs');
        }else{
            return redirect('admin/blogs/all');
        }
    }

    public function blog_edit($id){
        $page_data['blog'] = Blog::where('id', $id)->first();
        $page_data['categories'] = Blog_category::get();
        return view('admin.blog.blog_edit', $page_data);
    }

    public function blog_update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|max:125',
            'category' => 'required|max:125',
            'description' => 'required',
            'keyword' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/blog-images', $imageName);
            $data['image'] = $imageName;
            $blog = Blog::where('id', $id)->first();
            if(is_file('public/storage/blog-images/'.$blog->image)){
                unlink('public/storage/blog-images/'.$blog->image);
            } 
        }

        $data['title'] = $request->title;
        $data['time'] = time();
        $data['category'] = $request->category;
        $data['description'] = $request->description;
        $data['keyword'] = $request->keyword;
        $data['is_popular'] = $request->is_popular;
        $data['updated_at'] = Carbon::now();
        Blog::where('id', $id)->update($data);
        Toastr::success(get_phrase('Blog Update successfully!'), get_phrase('Success'));
        if($request->is_agent){
            return redirect('agent/blogs');
        }else{
            return redirect('admin/blogs/all');
        }
    }

    public function blog_status($id, $status){
        if($status == 1){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        Blog::where('id', $id)->update($data);
        Toastr::success(get_phrase('Status successful!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function blog_delete($id){
        $blog = Blog::where('id', $id)->first();
        if(file_exists('public/storage/blog-images/'.$blog->image)){
            unlink('public/storage/blog-images/'.$blog->image);
        }
        Blog::where('id', $id)->delete();
        Toastr::success(get_phrase('Blog deleted successful!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function blog_category(){
        $page_data['categories'] = Blog_category::get();
        return view('admin.blog.blog_category', $page_data);
    }

    public function blog_category_create(){
        return view('admin.blog.category_create');
    }

    public function blog_category_store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $data['name'] = $request->name;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        Blog_category::insert($data);
        Toastr::success(get_phrase('Category added successfully!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function blog_category_edit($id){
        $page_data['category'] = Blog_category::where('id', $id)->first();
        return view('admin.blog.category_edit', $page_data);
    }

    public function blog_category_update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $data['name'] = $request->name;
        $data['updated_at'] = Carbon::now();
        Blog_category::where('id', $id)->update($data);
        Toastr::success(get_phrase('Category update successful!'), get_phrase('Success'));
        return redirect()->back();
    }

    public function blog_category_delete($id){
        Blog_category::where('id', $id)->delete();
        Toastr::success(get_phrase('Category deleted successfully!'), get_phrase('Success'));   
        return redirect()->back();
    }

    public function user_blogs() {
        $page_data['active'] = 'blogs';
        $page_data['categories'] = Blog_category::get();
        $page_data['blogs'] = Blog::where('user_id', user('id'))->get();
        return view('user.agent.blogs.index', $page_data);
    }

    public function user_create_blog() {
        $page_data['active'] = 'blogs';
        $page_data['categories'] = Blog_category::get();
        return view('user.agent.blogs.create', $page_data);
    }

    function user_store_blog(Request $request) {
        echo 'test';
    }

    function user_blog_delete($id){
        $blog = Blog::where('id', $id)->first();
        if(file_exists('public/storage/blog-images/'.$blog->image)){
            unlink('public/storage/blog-images/'.$blog->image);
        }
        Blog::where('id', $id)->delete();
        Toastr::success(get_phrase('Blog deleted successfully!'), get_phrase('Success'));   
        return redirect()->back();
    }

    function user_blog_edit($id) {
        $page_data['active'] = 'blogs';
        $page_data['blog'] = Blog::where('id', $id)->first();
        $page_data['categories'] = Blog_category::get();
        return view('user.agent.blogs.edit', $page_data);
    }



}
