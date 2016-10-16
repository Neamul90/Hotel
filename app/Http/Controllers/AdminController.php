<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $admin_id= Session::get('admin_id');
        if($admin_id!=null)
        {
            return Redirect::to('/dashboard')->send();
            echo $admin_id;
        }
        return view('admin.login');
    }
    

    public function login_check(Request $request) {

        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('tbl_admin')
                ->where('email', $email)
                ->where('password', $password)
                ->first();
        $result_tbl = DB::table('tbl_staff')
                ->where('email', $email)
                ->where('password', $password)
                ->first();
        if ($result) {
            Session::put('firstname',$result->firstname);
            Session::put('admin_id',$result->admin_id);
            Session::put('image',$result->image);
            return Redirect::to('/dashboard');
        } elseif ($result_tbl) {
            return Redirect::to('/dashboard');
        } else {
            Session::put('Error_message','Username and Password Invalid');
            return Redirect::to('admin');
            
        }
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
