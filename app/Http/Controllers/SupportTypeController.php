<?php

namespace App\Http\Controllers;

use App\SupportType;
use Illuminate\Http\Request;

class SupportTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $support_type = SupportType::all();
        return $support_type;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        SupportType::create($data);

        return [
            'support_type' => $support_type,
            'url' => '/api/support_types'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupportType  $supportType
     * @return \Illuminate\Http\Response
     */
    public function show(SupportType $supportType)
    {
        return $supportType;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupportType  $supportType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupportType $supportType)
    {
        $data = $request->all();
        $supportType->update($data);
        return $supportType;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupportType  $supportType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportType $supportType)
    {
        $supportType->delete();
        return [
            'url' => '/api/support_types'
        ];
    }
}
