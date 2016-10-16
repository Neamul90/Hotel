<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;

class SuperAdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }


        $index_content = view('admin.pages.admin_master');
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function logout() {
        Session::put('firstname', null);
        Session::put('admin_id', null);
        Session::put('Success', 'You Are Successfully Logout');
        return Redirect::to('admin');
    }

    public function add_admin() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $index_content = view('admin.pages.add_admin');
        $sidebar = view('admin.pages.admin_sidebar');
        return view('admin.admin_master')
                        ->with('sidebar', $sidebar)
                        ->with('content', $index_content);
    }

    public function save_admin(Request $request) {
              $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move('uploads', $file->getClientOriginalName());
            $dir = 'uploads/';
            $name = $file->getClientOriginalName();
            $image = $dir . $name;
        }


        $data = array();
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['country'] = $request->country;
        $data['occupation'] = $request->occupation;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['skype'] = $request->skype;
        $data['facebook'] = $request->facebook;
        $data['website'] = $request->website;
        $data['address'] = $request->address;
        $data['about'] = $request->about;
        $data['mobile'] = $request->mobile;
        $data['image'] = $image;
        $data['publication_status'] = $request->publication_status;
       
        DB::table('tbl_admin')->insert($data);
                return Redirect::to('add_admin');

    }

    public function save_staff(Request $request) {
        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move('uploads', $file->getClientOriginalName());
            $dir = 'uploads/';
            $name = $file->getClientOriginalName();
            $image = $dir . $name;
        }

        $data = array();
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['country'] = $request->country;
        $data['occupation'] = $request->occupation;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        $data['skype'] = $request->skype;
        $data['facebook'] = $request->facebook;
        $data['website'] = $request->website;
        $data['address'] = $request->address;
        $data['about'] = $request->about;
        $data['mobile'] = $request->mobile;
        $data['image'] = $image;
        $data['publication_status'] = $request->publication_status;
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'occupation' => 'required',
            'address' => 'required',
            'about' => 'required',
            'mobile' => 'required',
            'publication_status' => 'required',
            'email'=>'required|unique:connection.tbl_staff,email',
            'image' => 'required|mimes:jpeg,bmp,png',
            'password'=>'required',
            
        ]);
        echo '<pre>';
        print_r($data);

     //   DB::table('tbl_staff')->insert($data);
//          return Redirect::to('add_staff');

        
    }
    public function add_staff() {
        $admin_id = Session::get('admin_id');
        if ($admin_id == Null) {
            return Redirect::to('admin')->send();
        }
        $index_content = view('admin.pages.add_staff');
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
