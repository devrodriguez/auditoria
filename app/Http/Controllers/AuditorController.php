<?php

namespace App\Http\Controllers;

use App\Auditor;
use Illuminate\Http\Request;

class AuditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auditors = Auditor::all();
        return $auditors;
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

        $auditor = Auditor::create($data);

        return [
            'auditor' => $auditor,
            'url' => '/api/auditors/'.$auditor->id
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auditor  $auditor
     * @return \Illuminate\Http\Response
     */
    public function show(Auditor $auditor)
    {
        return $auditor;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auditor  $auditor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auditor $auditor)
    {
        $data = $request->all();
        $auditor->update($data);
        return $auditor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auditor  $auditor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auditor $auditor)
    {
        $auditor->delete();
        return [
            'url' => '/api/auditors'
        ];
    }
}
