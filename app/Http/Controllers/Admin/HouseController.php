<?php

namespace App\Http\Controllers\Admin;

use App\HouseAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.houses-admin.index');
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
     * @param  \App\HouseAdmin  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(HouseAdmin $houseAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HouseAdmin  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseAdmin $houseAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HouseAdmin  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HouseAdmin $houseAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HouseAdmin  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(HouseAdmin $houseAdmin)
    {
        //
    }
}
