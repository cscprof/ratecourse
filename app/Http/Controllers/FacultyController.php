<?php

namespace App\Http\Controllers;

use App\Models\Faculty as Faculty;
use App\Models\Review;
use App\Models\Review as Reviews;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultyList = Faculty::get();

        return $facultyList->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        $facultyList = Faculty::with('courses')->find($faculty->id);

        return $facultyList->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        //
    }

    public function showReviews($id)
    {
        $reviewList = Faculty::with('reviews')->find($id);

        return $reviewList->toJson();
    }

    /**
     * Update the overall review score for a faculty member
     *
     * @param $facultyId
     * @return void
     */
    public static function updateRating($facultyId){
        Faculty::where('id', $facultyId)->update(['rating' => Review::where( 'faculty_id', $facultyId)->avg('overall_score') ]);
    }

}
