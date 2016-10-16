<?php

namespace App\Http\Controllers;
use File;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;

class ApplicationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
    }

    public function contact() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $index_content = view('admin.pages.contact_us');
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function category() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $category_info = DB::table('tbl_category')
              
                ->get();

        $index_content = view('admin.pages.category')->with('all_category_info', $category_info);
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function unpublished_category($category_id) {
        DB::table('tbl_category')
                ->where('category_id', $category_id)
                ->update(['publication_status' => 0]);
        return Redirect::to('/category');
    }

    public function published_category($category_id) {
        DB::table('tbl_category')
                ->where('category_id', $category_id)
                ->update(['publication_status' => 1]);
        return Redirect::to('/category');
    }

    public function edit_category($category_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }

        $edit_category = DB::table('tbl_category')
                        ->where('category_id', $category_id)->first();


        $index_content = view('admin.pages.edit_category')->with('category_info', $edit_category);
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function update_category(Request $request) {

        $data = array();
        $category_id = $request->category_id;
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;
        DB::table('tbl_category')
                ->where('category_id', $category_id)
                ->update($data);

        Session::put('message_success', 'Category Information Updated Successfully');
        return Redirect::to('/edit-category/' . $category_id);
    }

    public function add_category() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $index_content = view('admin.pages.add_category');
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function save_category_info(Request $request) {

//
//        $validator = Validator::make($request->all(), [
//                    'category_name' => 'required|unique:connection.tbl_category,category_name',
//                    'category_description' => 'required',
//                    'publication_status' => 'required',
//        ]);
//        if ($validator->fails()) {
//            return redirect('add_category')
//                            ->withErrors($validator)
//                            ->withInput();
//        }
// 
//              $data = array();
//            $data['category_name'] = $request->category_name;
//            $data['category_description'] = $request->category_description;
//            $data['publication_status'] = $request->publication_status;
//
//            DB::table('tbl_category')->insert($data);
//            Session::put('message_success', 'Category Information Saved Successfully');
//            return Redirect::to('add_category');
//     
//
//        $v1 = Validator::make(Input::all(), $validation);
//        if ($v1->fails()) {
//            return Redirect::to('add_category')->withErrors($v1);
//        } else {
//            $data = array();
//            $data['category_name'] = $request->category_name;
//            $data['category_description'] = $request->category_description;
//            $data['publication_status'] = $request->publication_status;
//
//            DB::table('tbl_category')->insert($data);
//            Session::put('message_success', 'Category Information Saved Successfully');
//            return Redirect::to('add_category');
//        }
    }

    public function delete_category($category_id) {
        DB::table('tbl_category')->where('category_id', $category_id)->delete();
        return Redirect::to('/category');
    }

    public function news() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $news_info = DB::table('tbl_blog')->get();

        $index_content = view('admin.pages.news')->with('all_news_info', $news_info);
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function add_news() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $category_info = DB::table('tbl_category')
                ->where('publication_status', 1)
                ->get();
        $index_content = view('admin.pages.add_news')->with('category_info', $category_info);
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function save_news(Request $request) {
//        $this->validate($request, [
//            'blog_title' => 'required|unique:connection.tbl_blog,blog_title',
//            'blog_short_description' => 'required',
//            'blog_long_description' => 'required',
//            'publication_status' => 'required',
//        ]);
        $data = array();
        $data['blog_title'] = $request->blog_title;
        $data['blog_short_description'] = $request->blog_short_description;
        $data['blog_long_description'] = $request->blog_long_description;
        $data['category_id'] = $request->category_id;
        $data['publication_status'] = $request->publication_status;

        $image = $request->file('blog_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'uploads/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['blog_image'] = $image_url;

                DB::table('tbl_blog')->insert($data);
                Session::put('message_success', 'News Saved Successfully');
                return Redirect::to('add_news');
            }
        }
    }

    public function delete_news($news_id) {
        echo $news_id;

        $category_info = DB::table('tbl_blog')
                ->select('blog_image')
                ->where('blog_id', $news_id)
                ->get();
        foreach ($category_info as $obj) {
            $iamge = $obj->blog_image;
        }
        \File::Delete($iamge);
        
        DB::table('tbl_blog')->where('blog_id', $news_id)->delete();
        return Redirect::to('/news');
    }
    public function news_view($news_id) {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $news_info = DB::table('tbl_blog')->where('blog_id', $news_id)->get();

        $index_content = view('admin.pages.news_view')->with('all_news_info', $news_info);
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
