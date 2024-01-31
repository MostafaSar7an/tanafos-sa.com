<?php

namespace App\Http\Controllers\BalanceAndCards;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBalance_EditeRequest;
use App\Http\Requests\UpdateBalance_EditeRequest;
use App\Models\Balance_Edite;

class Balance_EditeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        return view('pages.BalanceAndCards.Student_BalanceEdite');
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
     * @param  \App\Http\Requests\StoreBalance_EditeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBalance_EditeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balance_Edite  $balance_Edite
     * @return \Illuminate\Http\Response
     */
    public function show(Balance_Edite $balance_Edite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balance_Edite  $balance_Edite
     * @return \Illuminate\Http\Response
     */
    public function edit(Balance_Edite $balance_Edite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBalance_EditeRequest  $request
     * @param  \App\Models\Balance_Edite  $balance_Edite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBalance_EditeRequest $request, Balance_Edite $balance_Edite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balance_Edite  $balance_Edite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balance_Edite $balance_Edite)
    {
        //
    }
}
