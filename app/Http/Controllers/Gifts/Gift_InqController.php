<?php

namespace App\Http\Controllers\Gifts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGift_InqRequest;
use App\Http\Requests\UpdateGift_InqRequest;
use App\Models\Gift_Inq;

class Gift_InqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.Gifts.Inq');
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
     * @param  \App\Http\Requests\StoreGift_InqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGift_InqRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift_Inq  $gift_Inq
     * @return \Illuminate\Http\Response
     */
    public function show(Gift_Inq $gift_Inq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift_Inq  $gift_Inq
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift_Inq $gift_Inq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGift_InqRequest  $request
     * @param  \App\Models\Gift_Inq  $gift_Inq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGift_InqRequest $request, Gift_Inq $gift_Inq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gift_Inq  $gift_Inq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift_Inq $gift_Inq)
    {
        //
    }
}
