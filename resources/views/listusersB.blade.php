@extends ('layouts.main')

@section ('content')

	<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>id</th>
		      <th>Name</th>
		      <th>Email</th>
		      <th>Created date</th>
		      <th><span class="glyphicon glyphicon-wrench"></span></th>
		    </tr>
		  </thead>

		  <tbody>
				@foreach ($users as $user)
				    <tr class="active">
				      <td>{{$user->id}}</td>
				      <td>{{$user->name}}</td>
				      <td>{{$user->email}}</td>
				      <td>{{$user->created_at}}</td>
				      <td>

				      <ul class="list-inline list-unstyled">
				      	<li>
				      		<form action="/users/{{$user->id}}/edit" method = 'GET'>
				      			{!! csrf_field() !!}
								<button class="btn btn-success">
									<span class="glyphicon glyphicon-cog"></span>
								</button>

							</form>
						</li>
				      	<li>
				      		<form action="/users/{{$user->id}}/edit" method = 'GET'>
				      			{!! csrf_field() !!}
								<button class="btn btn-warning">
									<span class="glyphicon glyphicon-search"></span>
								</button>

							</form>
						</li>
				      	<li>
				      		<form action="/users/{{$user->id}}" method = 'POST'>
				      			{!! csrf_field() !!}
				      			<input type="hidden" name = '_method' value = 'DELETE'>
				      			<input type="hidden" name = 'id' value = '{{$user->id}}'>
								<button type = 'submit' class="btn btn-danger">
									<span class="glyphicon glyphicon-trash">
										
									</span>
								</button>

							</form>
						</li>
				      </ul>
							

				      </td>
				    </tr>
			    @endforeach
		  </tbody>
	</table> 

@endsection