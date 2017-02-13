@extends('layouts.main')

@section('content')

	<h3>Edit profile for {{$user->name}}</h3>

<form class="form-horizontal" action = '/users/{{$user->id}}' method = 'POST'>
	{!! csrf_field() !!}
	<input type="hidden" name = '_method' value = 'PUT'>
	  <fieldset>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name ="name" placeholder="{{$user->name}}">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input type="email" class="form-control" name ="email" placeholder="{{$user->email}}">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
	      <div class="col-lg-10">
	        <input type="password" class="form-control" name ="password" placeholder="password">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="reset" class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </fieldset>
</form>

@endsection