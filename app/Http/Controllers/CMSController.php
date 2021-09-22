<?php

namespace App\Http\Controllers;

use App\Models\CMS;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cms.listing_cms');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.cms.add_cms');
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
     * @param  \App\Models\CMS  $cMS
     * @return \Illuminate\Http\Response
     */
    public function show(CMS $cMS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CMS  $cMS
     * @return \Illuminate\Http\Response
     */
    public function edit(CMS $cMS)
    {
        $cMS = CMS::all();
       
    	return view('admin.cms.edit_cms',compact('cMS'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CMS  $cMS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMS $cMS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CMS  $cMS
     * @return \Illuminate\Http\Response
     */
    public function destroy(CMS $cMS)
    {
        //
    }
}
