@extends('layouts.auth')

@section('content')
	<div class="columns">
		<div class="column is-one-third is-offset-one-third">		
			<h1 class="title ">Login</h1>

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
				{{ csrf_field() }}

				<div class="login-form">
					<p class="control has-icon has-icon-right">
						<input id="email" type="email" class="input email-input" name="email" type="text" placeholder="dev@livenetworks.mk" value="{{ old('email') }}" required autofocus>
					
						<span class="icon user">
							<i class="fa fa-user"></i>
						</span>

						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</p>

					<p class="control has-icon has-icon-right">
						<input id="password" type="password" class="input password-input" type="password" placeholder="password" name="password" required>
						
						<span class="icon user">
							<i class="fa fa-lock"></i>
						</span>
						
						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</p>

					<p class="control login">
					<button class="button is-success is-outlined is-large is-fullwidth" type="submit">Login</button>
					</p>
				</div>

				<div class="section forgot-password">
					<p class="has-text-centered">
					<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot password</a>
					</p>
				</div>
			</form>
		</div>
	</div>
@endsection
