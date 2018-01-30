@extends('layouts.app')

@section('script')
<script type="text/javascript">

</script>
@endsection

@section('content')
<body style="background-color: #63e9ab">
    <div class="container">
        <h2 style="text-align: center;">Review Question</strong></h2>
  		@foreach($questions as $question)
            <div class="">
                <form method="get" action="/makequestion/{{$question->id}}/edit" class="ansform">
                	{{ csrf_field() }}
                    <div class="">
                    	<!-- <p>{{$question->id}}</p> -->
                    	<input type="hidden" name="questionId" id="question" value="{{$question->id}}">

                        <input type="hidden" name="true_answer"  value="{{$question->answer}}">

                        <table class="table bg-success">
                          <tbody>
                            <div class="form-group">
                            <tr class="danger">
                              <td><strong>Question : </strong></td>
                              <td><input type="text" class="form-control" name="question" value="{{$question->question}}" readonly></td>

                            </tr>
                            </div>

                            <div class="form-group">
                            <tr class="bg-success">
                              <td><strong>Choice1 : </strong></td>
                              <td><input name="choice1" class="form-control"  value="{{$question->choice1}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="danger">
                              <td><strong>Choice2 : </strong></td>
                              <td><input name="choice2" class="form-control" value="{{$question->choice2}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="bg-success">
                              <td><strong>Choice3 : </strong></td>
                              <td><input name="choice3" class="form-control" value="{{$question->choice3}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="warning">
                              <td><strong>Choice4 : </strong></td>
                              <td><input name="choice4" class="form-control" value="{{$question->choice4}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="bg-success">
                              <td><strong>Answer : </strong></td>
                              <td><input name="answer" class="form-control" value="{{$question->answer}}" type="text" readonly></td>
                            </tr>
                          </div>
                          </tbody>
                        </table>
                    </div>
                    <button type="submit" name="submitFromEditPage" class="btn btn-warning btn-md edit_data  btn-lg align-center btn-block">Edit</button>
                 </form>
            </div><br>
         @endforeach






<a href="/"><button type="button" name="ReviewDone" class="btn btn-primary btn-block">Review Done</button></a><br><br>

</body>




@endsection
