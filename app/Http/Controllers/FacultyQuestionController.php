<?php

namespace App\Http\Controllers;

use App\Models\FacultyQuestion;
use Illuminate\Http\Request;

class FacultyQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FacultyQuestion::get();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacultyQuestion  $facultyQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyQuestion $facultyQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacultyQuestion  $facultyQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultyQuestion $facultyQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacultyQuestion  $facultyQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacultyQuestion $facultyQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacultyQuestion  $facultyQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyQuestion $facultyQuestion)
    {
        //
    }
}
