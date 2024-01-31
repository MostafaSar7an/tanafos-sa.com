<?php

namespace App\Http\Controllers\Gifts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGift_CreateRequest;
use App\Http\Requests\UpdateGift_CreateRequest;
use App\Models\Gift_Create;

class Gift_CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.Gifts.Create');
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
     * @param  \App\Http\Requests\StoreGift_CreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGift_CreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift_Create  $gift_Create
     * @return \Illuminate\Http\Response
     */
    public function show(Gift_Create $gift_Create)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift_Create  $gift_Create
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift_Create $gift_Create)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGift_CreateRequest  $request
     * @param  \App\Models\Gift_Create  $gift_Create
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGift_CreateRequest $request, Gift_Create $gift_Create)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gift_Create  $gift_Create
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift_Create $gift_Create)
    {
        //
    }
}
