@extends('layouts.main')

@section('content')
<div class="container-fluid" style="background: url(Images/login-bg.png); background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<form action="{{ route('index') }}" class="form-horizontal" enctype="multipart/form-data" method="get" style="padding: 10px; box-shadow: 3px 10px 7px #888888; margin: 50px 390px 90px 390px;">
		<fieldset>

			<!-- Form Name -->
			<legend style="color: white;">Login</legend>

			<!-- Email text-->
			<div class="form-group">
				<label class="col-md-1 control-label" for="textinput"><!-- Email --></label>
				<div class="col-md-10">
					<input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
				</div>
			</div>

			<!-- Password text-->
			<div class="form-group">
				<label class="col-md-1 control-label" for="textinput"><!-- Password --></label>
				<div class="col-md-10">
					<input id="textinput" name="password" type="password" placeholder="Password" class="form-control input-md" required=""> 
					{{--<a href="forgotpswd.php" style="color: #545ED7;">Forgot Password?</a>--}}
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
					<p style="color: white;">Don’t have an account?&ensp;<a href="{{ route('register') }}" style="text-decoration: underline; color: #444FDA ;">SignUp</a></p>
				</div>
			</div>
		</fieldset>
	</form>
</div>
</div>
@endsection