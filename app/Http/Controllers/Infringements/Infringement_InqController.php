<?php

namespace App\Http\Controllers\Infringements;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfringement_InqRequest;
use App\Http\Requests\UpdateInfringement_InqRequest;
use App\Models\Infringement_Inq;

class Infringement_InqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.Infringements.Inq');
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
     * @param  \App\Http\Requests\StoreInfringement_InqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInfringement_InqRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infringement_Inq  $infringement_Inq
     * @return \Illuminate\Http\Response
     */
    public function show(Infringement_Inq $infringement_Inq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infringement_Inq  $infringement_Inq
     * @return \Illuminate\Http\Response
     */
    public function edit(Infringement_Inq $infringement_Inq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfringement_InqRequest  $request
     * @param  \App\Models\Infringement_Inq  $infringement_Inq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfringement_InqRequest $request, Infringement_Inq $infringement_Inq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infringement_Inq  $infringement_Inq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infringement_Inq $infringement_Inq)
    {
        //
    }
}
