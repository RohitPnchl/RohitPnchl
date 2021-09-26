@extends('layouts.main')

@section('content')
<div class="container-fluid">
	<div class="container">
		@if (session('error'))
			<div class="alert alert-danger mt-5">
				{{ session('error') }}
			</div>
		@endif
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form action="{{ route('index') }}" class="form-horizontal" enctype="multipart/form-data" method="get" style="padding: 10px; box-shadow: 3px 4px 7px #888888; margin: 25px 0 25px 0;">
					<input type="hidden" name="login" value="login">
					<fieldset>

						<!-- Form Name -->
						<legend>Login</legend>

						<!-- Email text-->
						<div class="form-group">
							<label class="col-md-1 control-label" for="textinput"><!-- Email --></label>
							<div class="col-md-10">
								<input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
								@error('email')
								<div class="text-danger">
									Email is not valid
								</div>
								@enderror
							</div>
						</div>

						<!-- Password text-->
						<div class="form-group">
							<label class="col-md-1 control-label" for="textinput"><!-- Password --></label>
							<div class="col-md-10">
								<input id="textinput" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
								{{--<a href="forgotpswd.php" style="color: #545ED7;">Forgot Password?</a>--}}
								@error('password')
								<div class="text-danger">
									Password is incorrect
								</div>
								@enderror
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-1 control-label" for="button1id"></label>
							<div class="col-md-10">
								<button id="button1id" name="submit" class="btn btn-success" style="width: 100%;">Login</button>
							<!-- 	<button id="button2id" name="button2id" class="btn btn-danger">Reset</button> -->
							</div>
						</div>

						<hr style="width: 90%;">

						<div class="form-group">
							<label class="col-md-1 control-label"></label>
							<div class="col-md-10">
								<p>Don’t have an account?&ensp;<a href="{{ route('register') }}" style="text-decoration: underline; color: #444FDA ;">SignUp</a></p>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection