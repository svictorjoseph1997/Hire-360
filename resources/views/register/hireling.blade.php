@extends('layouts.master')


@section('content')


	
<div class="fre-page-wrapper">
	<div class="fre-page-section">
		<div class="container">
			<div class="fre-authen-wrapper">
				<div class="fre-authen-register">
					<h2>Sign Up Hireling Account</h2>
					<form action="/hireling/store" method="POST">
						@csrf
						<div class="fre-input-field">
							<input type="text" name="name" id="name" placeholder="Full Name">
						</div>
						<div class="fre-input-field">
							<input type="text" name="email" id="email" placeholder="Email">
						</div>
						<!-- <div class="fre-input-field">
							<input type="text" name="login" id="login" placeholder="Username">
						</div> -->
						<div class="fre-input-field">
							<input type="password" name="password" id="password" placeholder="Password">
						</div>
						<!-- <div class="fre-input-field">
							<input type="password" name="repeat_password" id="repeat_password" placeholder="Confirm Your Password">
						</div> -->
						<div class="fre-input-field">
							<input type="Submit" class="fre-btn btn-submit primary-bg-color" value="Sign Up">
						</div>
					</form>
					<p>By signing up to create an account I accept the 
						<a href="https://freelanceengine.enginethemes.com/terms-of-service/" class="secondary-color" rel="noopener noreferrer" target="_Blank">Term of Use and Privacy policy</a>
					</p>
					<div class="fre-authen-footer">
						<p>Already have an account? 
							<a href="https://freelanceengine.enginethemes.com/login/" class="secondary-color">Log In</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection