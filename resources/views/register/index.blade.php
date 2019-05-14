@extends('layouts.master')


@section('content')


<div class="fre-page-wrapper">
	<div class="fre-page-section">
		<div class="container">
			<div class="fre-authen-wrapper">
				<div class="fre-register-default">
					<h2>Sign Up Free Account</h2>
					<div class="fre-register-wrap">
						<div class="row">
							<div class="col-sm-6">
								<div class="register-employer">
									<h3>Hirer</h3>
									<p>Post project, find freelancers and hire favorite to work.</p>
									<a class="fre-small-btn primary-bg-color" href="/register/hirer">Sign Up</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="register-freelancer">
									<h3>Hireling</h3>
									<p>Create professional profile and find freelance jobs to work.</p>
									<a class="fre-small-btn primary-bg-color" href="/register/hireling">Sign Up</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection