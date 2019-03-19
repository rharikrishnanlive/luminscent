@extends('common')

@section('content')

<div class="panel panel-default col-md-offset-1">
	<form method="post" action="{{url('/login')}}">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<div class="panel-heading">
			<h3 class="panel-title">Login</h3>
		</div>
		<div class="panel-body">
			<div>
				<label>Email</label>
				<input type="email" name="email">
			</div>

			<div>
				<label>Password</label>
				<input type="password" name="password">
			</div>

			<button type="submit" value="submit" name="login" class="btn btn-primary" >Login</button>

		</div>
	</form>
</div>

@endsection