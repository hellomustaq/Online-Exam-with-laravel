<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Answer;
use App\Examinfo;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('result.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $var)
    {
        //
        $getId=$var->input('student_id');
        $getExamCode=$var->input('exam_code');
        $getCourseName=Examinfo::where('uniqueid',$getExamCode)->value('Course');

        $getScore=Student::where(
            ['student_id'=>$getId,
             'uniqueid'=>$getExamCode
        ])->value('score');
        $findStudentIdForAnswerSheet=Student::where(
            ['student_id'=>$getId,
             'uniqueid'=>$getExamCode
        ])->value('id');
        $answeredQuestion=Answer::where('stu_id',$findStudentIdForAnswerSheet)->get();
        return view('result.showall')->with('answeredQuestion',$answeredQuestion)->with('getScore',$getScore)->with('studentId',$getId)->with('course',$getCourseName);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
