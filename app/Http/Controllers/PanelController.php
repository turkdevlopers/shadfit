<?php

namespace App\Http\Controllers;

use App\Models\panel;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.dashboard');
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
     * @param  \App\Models\panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function show(panel $panel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function edit(panel $panel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, panel $panel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function destroy(panel $panel)
    {
        //
    }
}
