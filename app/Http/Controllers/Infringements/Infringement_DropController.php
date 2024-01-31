<?php

namespace App\Http\Controllers\Infringements;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfringement_DropRequest;
use App\Http\Requests\UpdateInfringement_DropRequest;
use App\Models\Infringement_Drop;

class Infringement_DropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.Infringements.Drop');

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
     * @param  \App\Http\Requests\StoreInfringement_DropRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInfringement_DropRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infringement_Drop  $infringement_Drop
     * @return \Illuminate\Http\Response
     */
    public function show(Infringement_Drop $infringement_Drop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infringement_Drop  $infringement_Drop
     * @return \Illuminate\Http\Response
     */
    public function edit(Infringement_Drop $infringement_Drop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfringement_DropRequest  $request
     * @param  \App\Models\Infringement_Drop  $infringement_Drop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfringement_DropRequest $request, Infringement_Drop $infringement_Drop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infringement_Drop  $infringement_Drop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infringement_Drop $infringement_Drop)
    {
        //
    }
}
