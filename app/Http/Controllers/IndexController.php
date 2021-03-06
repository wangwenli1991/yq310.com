<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //前台首页

        $menus=DB::table('menus')->get();

        return view('hunli.home',compact('menus'));
    }


    public function about()
    {
        //前台首页
        $menus=DB::table('menus')->get();

        return view('hunli.about',compact('menus'));
    }

    public function gallery()
    {
        //前台首页
        $menus=DB::table('menus')->get();

        return view('hunli.gallery',compact('menus'));
    }

    public function stories()
    {
        //前台首页
        $menus=DB::table('menus')->get();

        return view('hunli.stories',compact('menus'));
    }

    public function typography()
    {
        //前台首页
        $menus=DB::table('menus')->get();

        return view('hunli.typography',compact('menus'));
    }

    public function contact()
    {
        //前台首页
        $menus=DB::table('menus')->get();

        return view('hunli.contact',compact('menus'));
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
