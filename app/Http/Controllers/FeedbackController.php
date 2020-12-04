<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Feedback::select()->get();
        // error_log($data);
        return view('index', ["data" => $data]);
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
        error_log("Insert karre he bhai!");
        unset($request['_token']);
        $res = Feedback::create($request->all());
        // error_log($res);

        return \Redirect::route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackModel  $feedbackModel
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackModel $feedbackModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedbackModel  $feedbackModel
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackModel $feedbackModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeedbackModel  $feedbackModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackModel $feedbackModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedbackModel  $feedbackModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackModel $feedbackModel)
    {
        //
    }
}
