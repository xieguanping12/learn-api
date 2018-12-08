<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Transformer\LessonTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class LessonsController extends ApiController
{
    protected $lessonTransformer;

    /**
     * LessonsController constructor.
     *
     * @param $lessonTransformer
     */
    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $lessons = Lesson::all();

        return $this->responseSuccess($this->lessonTransformer->transformCollection($lessons->toArray()));
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
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            return $this->responseNotFound('lesson not found');
        }

        return $this->responseSuccess($this->lessonTransformer->transform($lesson));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




}
