<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examinfo;

class ExaminfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('examinfo.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('examinfo.create');
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
         $examinfo= new Examinfo;

        $examinfo = Examinfo::create([
                'Teacher_id' => $request->input('Teacher_id'),
                'Course' => $request->input('Course'),
                'question_lenth' => $request->input('question_lenth'),
                'uniqueid' => $request->input('uniqueid'),
                'time' => $request->input('time')
            ]);

        return view('makequestion.create', ['examinfo' => $examinfo]);

        // $examinfo->Teacher_id = $request->Teacher_id;
        // $examinfo->Course = $request->Course;
        // $examinfo->question_lenth = $request->question_lenth;

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
