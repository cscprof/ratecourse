<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Comment;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //"responses": [
        //    {"1": 5},
        //    {"2": 3},
        //    {"3": 2},
        //    {"4": 1},
        //    {"5": 4},
        //    {"6": 1},
        //    {"7": 4},
        //    {"8": 2},
        //    {"9": 2},
        //    {"10": 4},
        //    {"11": 3},
        //    {"12": 5},
        //    {"13": 5},
        //    {"14": 1}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facultyId = $request->input('faculty_id');
        $courseId = $request->input('course_id');
        $termId = $request->input('term_id');
        $userId = $request->input('user_id');

        $responses = $request->input('responses');

        foreach( $responses as $q_id => $response)
        {
            Review::create([
               'faculty_id' => $facultyId,
                'course_id' => $courseId,
                'term_id' => $termId,
                'user_id' => $userId,
                'question_id' => $q_id,
                'response' => $response
            ]);
        }

        // Add comments
        Comment::create([
            'faculty_id' => $facultyId,
            'course_id' => $courseId,
            'term_id' => $termId,
            'user_id' => $userId,
            'comment' => $request->input('comment')
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseQuestionCourse  $courseQuestionCourse
     * @return \Illuminate\Http\Response
     */
    public function show(CourseQuestionCourse $courseQuestionCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseQuestionCourse  $courseQuestionCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseQuestionCourse $courseQuestionCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseQuestionCourse  $courseQuestionCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseQuestionCourse $courseQuestionCourse)
    {
        //
    }
}
