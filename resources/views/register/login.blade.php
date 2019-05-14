@extends('layouts.master')


@section('content')


    
<div class="fre-page-wrapper">
	<div class="fre-page-section">
		<div class="container">
			<div class="fre-authen-wrapper">
				<div class="fre-authen-login">
					<h2>Log into Your Account</h2>
					<form role="form" id="signin_form" class="" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="fre-input-field">
							<input id="email" name="email"type="text" placeholder="Username or Email" required>
						</div>
						<div class="fre-input-field">
							<input id="password" type="password" name="password" placeholder="Password" required>
						</div>
						<div class="fre-input-field">
							<button class="btn-submit fre-submit-btn primary-bg-color">Log In</button>
						</div>
						<div class="fre-input-field">
							<label class="fre-checkbox login-remember" for="remember">
							<input id="remember" name="remember" type="checkbox">
									Remember me                                
							</label>
						</div>
					</form>
					<ul class="alert alert-error">
					@foreach($errors->all() as $error)

					<li>{{ $error }}</li>

					@endforeach
					</ul>
					
					<div class="fre-authen-footer">
						<div class="not-yet-register">
							<a href="https://freelanceengine.enginethemes.com/register/"
	                       class="">Not yet register?</a>
						</div>
						<div class="forgot-password">
							<a href="https://freelanceengine.enginethemes.com/forgot-password/"
	                   class="">Forgot password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection