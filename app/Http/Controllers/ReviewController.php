<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\QuestionReview;
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
        return Review::with('responses')
            ->with('faculty')
            ->with('course')
            ->with('user')
            ->with('comment')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facultyId = $request->input('faculty_id');
        $courseId = $request->input('course_id');
        $termId = $request->input('term_id');
        $userId = $request->input('user_id');

        $responses = $request->input('responses');

        $responseTotal = 0;
        $count = 0;
        foreach ($responses as $q_id => $response) {
            $responseTotal += $response;
            $count = $response > 0 ? $count++ : $count;
        }
        $overallScore = $responseTotal / $count;
        
        // Create the review record
        $review = Review::create([
            'faculty_id' => $facultyId,
            'course_id' => $courseId,
            'term_id' => $termId,
            'user_id' => $userId,
            'overall_score' => $overallScore,
        ]);

        $review_id = $review->id;

        // Create responses
        foreach ($responses as $q_id => $response) {
            QuestionReview::create([
                'review_id' => $review_id,
                'question_id' => $q_id,
                'response' => $response
            ]);
        }

        // Add comments - if any
        if ($request->input('comment')) {

            Comment::create([
                'review_id' => $review_id,
                'comment' => $request->input('comment')
            ]);
        }

        return response(json_encode($review_id), 200)->header('Content-Type', 'text/json');

    }

    /**
     * Get a specific review by review ID
     * @param Review $review
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function show(Review $review)
    {
        return Review::with('responses')
            ->with('faculty')
            ->with('course')
            ->with('user')
            ->find($review->id);
    }

    public function showFacultyReviews($id)
    {
        return Review::with('responses')
            ->with('faculty')
            ->with('course')
            ->with('user')
            ->with('comment')
            ->where('faculty_id', $id)
            ->get();
    }

    public function showCourseReviews($id)
    {
        return Review::with('responses')
            ->with('faculty')
            ->with('course')
            ->with('user')
            ->with('comment')
            ->where('course_id', $id)
            ->get();
    }
}
