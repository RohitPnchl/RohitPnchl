@extends('layouts.main')

@section('content')

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form action="{{ route('register.save') }}" class="form-horizontal" method="POST" style="padding: 10px; box-shadow: 3px 10px 7px #888888; margin: 25px 0 25px 0;">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<fieldset>
						<!-- Form Name -->
						<legend>SignUp</legend>

						<!-- Username  text-->
						<div class="form-group">
							<label class="col-md-1 control-label" for="textinput"><!-- Name --></label>
							<div class="col-md-10">
								<input id="textinput" name="name" type="text" placeholder="UserName" class="form-control input-md" required="">
							</div>
						</div>

						<!-- Email  text-->
						<div class="form-group">
							<label class="col-md-1 control-label" for="textinput"><!-- Email --></label>
							<div class="col-md-10">
								<input id="textinput" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" class="form-control input-md" required=""> 
								@error('email')
								<div class="text-danger">
									Email is already been taken
								</div>
								@enderror
							</div>
						</div>

						<!-- Password input-->
						<div class="form-group">
							<label class="col-md-1 control-label" for="passwordinput"><!-- Password --></label>
							<div class="col-md-10">
								<input id="passwordinput" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
							</div>
						</div>

						<!--Signup Type-->
						{{--<div class="form-group">
											<label class="col-md-1 control-label" for="selectbasic"><!-- UserType --></label>
											<div class="col-md-10">
												<select id="selectbasic" name="user" class="form-control" required="">
													<option value="" disabled selected hidden>UserType....</option>
													<option value="Client">Client</option>
													<option value="Freelancer">Freelancer</option>
												</select>
											</div>
										</div>--}}

						<!-- Button (Double) -->
						<div class="form-group">
							<label class="col-md-1 control-label" for="button1id"></label>
							<div class="col-md-10">
								<button id="button1id" name="submit" class="btn btn-success" style="width: 100%;">Sign Up</button>
							<!-- 	<button id="button2id" name="button2id" class="btn btn-danger">Reset</button> -->
							</div>
						</div>


						<!-- <center>
						<div class="col-md-5">
							<hr>
						</div>
						<div class="col-md-2 pt-3 ">
							or
						</div>
						<div class="col-md-5"> -->
							<hr style="width: 90%;">
						<!-- </div>
						</center>-->

						<div class="form-group">
							<label class="col-md-1 control-label"></label>
							<div class="col-md-10">
								<p>Already have an account?&ensp;<a href="{{ route('login') }}" style="text-decoration: underline; color: #444FDA;">Log In</a></p>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection