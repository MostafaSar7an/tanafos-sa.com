<?php

namespace App\Http\Controllers\BalanceAndCards;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudent_ShowRequest;
use App\Http\Requests\UpdateStudent_ShowRequest;
use App\Models\Student_Show;

class Student_ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.BalanceAndCards.Students_Show');
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
     * @param  \App\Http\Requests\StoreStudent_ShowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudent_ShowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student_Show  $student_Show
     * @return \Illuminate\Http\Response
     */
    public function show(Student_Show $student_Show)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student_Show  $student_Show
     * @return \Illuminate\Http\Response
     */
    public function edit(Student_Show $student_Show)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudent_ShowRequest  $request
     * @param  \App\Models\Student_Show  $student_Show
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudent_ShowRequest $request, Student_Show $student_Show)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student_Show  $student_Show
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student_Show $student_Show)
    {
        //
    }
}
