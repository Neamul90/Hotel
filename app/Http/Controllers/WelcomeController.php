<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index_content=  view('pages.index');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');        
        return view('index')
                ->with('header', $header_content)
                ->with('content', $index_content)
                ->with('footer', $footer_content);
            
    }
    public function accomodation()
    {
        $index_contents=  view('pages.accomodation');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $index_contents)
                ->with('footer', $footer_content);
            
    }
    public function gallery()
    {
        $index_contents=  view('pages.gallery');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $index_contents)
                ->with('footer', $footer_content);
            
    }
    public function about()
    {
        $index_contents=  view('pages.about_us');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $index_contents)
                ->with('footer', $footer_content);
            
    }
    
    public function room_details()
    {
        $index_contents=  view('pages.room_details');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $index_contents)
                ->with('footer', $footer_content);
            
    }
    
    public function staffs()
    {
        $index_contents=  view('pages.our_staff');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $index_contents)
                ->with('footer', $footer_content);
            
    }
    public function error()
    {
        $error_contents=  view('pages.error');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $error_contents)
                ->with('footer', $footer_content);
            
    }
    public function blog()
    {
        $blog_contents=  view('pages.blog');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $blog_contents)
                ->with('footer', $footer_content);
            
    }
    public function single_blog()
    {
        $blog_contents=  view('pages.single_blog');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $blog_contents)
                ->with('footer', $footer_content);
        
    }
    public function contact_us()
    {
        $blog_contents=  view('pages.contact_us');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $blog_contents)
                ->with('footer', $footer_content);
        
    }
     public function booking()
    {
        $blog_contents=  view('pages.booking');
        $footer_content=  view('pages.footer');
        $header_content=  view('pages.header');
        return view('index')
                ->with('header', $header_content)
                ->with('content', $blog_contents)
                ->with('footer', $footer_content);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
