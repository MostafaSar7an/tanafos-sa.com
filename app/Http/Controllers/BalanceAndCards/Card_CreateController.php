<?php

namespace App\Http\Controllers\BalanceAndCards;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCard_CreateRequest;
use App\Http\Requests\UpdateCard_CreateRequest;
use App\Models\Card_Create;

class Card_CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.BalanceAndCards.Create');
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
     * @param  \App\Http\Requests\StoreCard_CreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCard_CreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card_Create  $card_Create
     * @return \Illuminate\Http\Response
     */
    public function show(Card_Create $card_Create)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card_Create  $card_Create
     * @return \Illuminate\Http\Response
     */
    public function edit(Card_Create $card_Create)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCard_CreateRequest  $request
     * @param  \App\Models\Card_Create  $card_Create
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCard_CreateRequest $request, Card_Create $card_Create)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card_Create  $card_Create
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card_Create $card_Create)
    {
        //
    }
}
