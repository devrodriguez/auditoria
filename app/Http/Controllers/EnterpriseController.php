<?php

namespace App\Http\Controllers;

use App\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::all();
        return $enterprises;
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
     * @param  \App\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        return $enterprise;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $enterprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        //
    }
}
