<?php

namespace App\Http\Controllers\Admin;
use App\House;

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
        return view('Admin.houses-admin.index', ['houses' => House::paginate(3)]);
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
    public function show($id)
    {   $house = House::find($id);
        return view('admin.houses-admin.show',['house' => $house]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\House  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(House $houseAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $houseAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $houseAdmin)
    {
        //
    }
}
