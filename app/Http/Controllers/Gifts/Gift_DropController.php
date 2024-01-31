<?php

namespace App\Http\Controllers\Gifts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGift_DropRequest;
use App\Http\Requests\UpdateGift_DropRequest;
use App\Models\Gift_Drop;

class Gift_DropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.Gifts.Drop');
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
     * @param  \App\Http\Requests\StoreGift_DropRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGift_DropRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift_Drop  $gift_Drop
     * @return \Illuminate\Http\Response
     */
    public function show(Gift_Drop $gift_Drop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift_Drop  $gift_Drop
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift_Drop $gift_Drop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGift_DropRequest  $request
     * @param  \App\Models\Gift_Drop  $gift_Drop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGift_DropRequest $request, Gift_Drop $gift_Drop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gift_Drop  $gift_Drop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift_Drop $gift_Drop)
    {
        //
    }
}
