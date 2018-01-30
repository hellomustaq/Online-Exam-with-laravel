@extends('layouts.app')
@section('content')

<form method="get" action="{{route('result.create')}}">
	{{ csrf_field() }}

	<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
		<h1>Search Your Result</h1>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput">Student ID</label>
	    <input type="text" name="student_id" class="form-control " id="formGroupExampleInput" placeholder="E.g. 11122333">
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Exam Code</label>
	    <input type="text" name="exam_code" class="form-control" id="formGroupExampleInput2" placeholder="E.g. A6xgP">
	  </div>
	  <button type="Submit" class="btn btn-success btn-block">Search</button>
	</div>

</form>

@endsection