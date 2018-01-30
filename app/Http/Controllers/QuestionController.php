<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Examinfo;
class questionController extends Controller
{

    public function index()
    {
        //
        //$trapleSelect=Examinfo::find();



        return view('makequestion.create');
    }


    public function create()
    {
        //
        return view('makequestion.create');
    }


    public function store(Request $request)
    {
        //
        $question= new Question;

        $question = Question::create([
                'quiz_id' => $request->input('quizid'),
                'question' => $request->input('question'),
                'choice1' => $request->input('option1'),
                'choice2' => $request->input('option2'),
                'choice3' => $request->input('option3'),
                'choice4' => $request->input('option4'),
                'answer' => $request->input('answer')

            ]);

        $id = $request->input('quizid');

        $qustionCount=Question::where('quiz_id','=', $id)->count();

        $selectLenth=Examinfo::where('id','=',$id)->value('question_lenth');
        //return $selectLenth;

        if ($qustionCount < $selectLenth ) {
            $examinfo = Examinfo::find($id);
            return view('makequestion.create', ['examinfo' => $examinfo]);
        }else{
            $uniqueId=Examinfo::where('id','=',$id)->value('uniqueid');
            return view('makequestion.index',['uniqueid' =>$uniqueId]);

        }

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        if (isset($_GET['submitFromEditPage'])) {
            $questionid=$id;
            $selectAll=Question::where('id',$questionid)->get();
            return view('makequestion.editone')->with('questions',$selectAll);
        }else{
        //this is for review teacher question
        $selectIdForQuestion=Examinfo::where('uniqueid',$id)->value('id');
        $selectQuestions=Question::where('quiz_id',$selectIdForQuestion)->get();
        return view('makequestion.edit')->with('questions',$selectQuestions);
        }
    }


    public function update(Request $request, $id)
    {
        $quiz_id=$request->input('quiz_id');
        $update=Question::where('id',$id)->update([
                           'question' => $request->input('question'),
                           'choice1' => $request->input('choice1'),
                           'choice2' => $request->input('choice2'),
                           'choice3' => $request->input('choice3'),
                           'choice4' => $request->input('choice4'),
                           'answer' => $request->input('answer')

                        ]);
        $selectQuestions=Question::where('quiz_id',$quiz_id)->get();
        return view('makequestion.edit')->with('questions',$selectQuestions)->with('success', 'update success');
    }


    public function destroy($id)
    {
        //
    }
}
