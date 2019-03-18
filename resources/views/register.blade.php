@extends('common')

@section('content')

<div class="panel panel-default col-md-offset-1">
	<form method="post" action="{{url('/register')}}">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<div class="panel-heading">
			<h3 class="panel-title">Login</h3>
		</div>
		<div class="panel-body">
			
			<div>
				<label>Name</label>
				<input type="text" name="name">
			</div>

			<div>
				<label>Email</label>
				<input type="email" name="email">
			</div>

			<div>
				<label>Password</label>
				<input type="password" name="password">
			</div>

			<div>
				<label>Confirm Password</label>
				<input type="password" name="confirm_password">
			</div>

			<button type="submit" value="submit" name="register" class="btn btn-primary" >Register</button>

		</div>
	</form>
</div>
@endsection