<?php

namespace App\Http\Controllers\Gifts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGift_ItemRequest;
use App\Http\Requests\UpdateGift_ItemRequest;
use App\Models\Gift_Item;

class Gift_ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.Gifts.Item');
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
     * @param  \App\Http\Requests\StoreGift_ItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGift_ItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift_Item  $gift_Item
     * @return \Illuminate\Http\Response
     */
    public function show(Gift_Item $gift_Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift_Item  $gift_Item
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift_Item $gift_Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGift_ItemRequest  $request
     * @param  \App\Models\Gift_Item  $gift_Item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGift_ItemRequest $request, Gift_Item $gift_Item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gift_Item  $gift_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift_Item $gift_Item)
    {
        //
    }
}
