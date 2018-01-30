@extends('layouts.app')

@section('content')

@foreach($questions as $question)
	
<body style="background-color: #63e9ab">
	<div class="">
<form  method="post" action="{{route('makequestion.update', [$question->id])}}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="quiz_id" value="{{$question->quiz_id}}">
		<div class="col-md-8 col-md-offset-2">
	 <table class="table col-lg-6">
                  <tbody>
                    <div class="form-group">
                    <tr class="danger">
                      <td><strong>Question : </strong></td>
                      <td><input type="text" class="form-control" name="question" value="{{$question->question}}" required></td>
                      
                    </tr>

                    </div>  

                    <div class="form-group">    
                    <tr class="bg-success">
                      <td><strong>Choice1 : </strong></td>
                      <td><input name="choice1" class="form-control"  value="{{$question->choice1}}" type="text" required></td>
                    </tr>
                  </div>

                  <div class="form-group">
                    <tr class="danger">
                      <td><strong>Choice2 : </strong></td>
                      <td><input name="choice2" class="form-control" value="{{$question->choice2}}" type="text" required></td>
                    </tr>
                  </div>

                  <div class="form-group">
                    <tr class="bg-success">
                      <td><strong>Choice3 : </strong></td>
                      <td><input name="choice3" class="form-control" value="{{$question->choice3}}" type="text" required></td>
                    </tr>
                  </div>

                  <div class="form-group">
                    <tr class="danger">
                      <td><strong>Choice4 : </strong></td>
                      <td><input name="choice4" class="form-control" value="{{$question->choice4}}" type="text" required></td>
                    </tr>
                  </div>

                  <div class="form-group">
                    <tr class="bg-success">
                      <td><strong>Answer : </strong></td>
                      <td><input name="answer" class="form-control" value="{{$question->answer}}" type="text" required></td>
                    </tr>
                  </div>
                  </tbody>
                </table>
                <input type="submit" class="btn btn-success btn-block" name="update" value="update">
            </div>
         
</form>
</div>
</body>
@endforeach
@endsection