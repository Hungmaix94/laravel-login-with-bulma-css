@extends('layouts.auth')
@section('content')
<div class="columns">
	<div class="column is-one-third is-offset-one-third"> 
		<h1 class="title">Reset Password</h1>
			@if (session('status'))
				<div class="notification is-primary">
					{{ session('status') }}
				</div>
			@endif

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
				{{ csrf_field() }}

				<input type="hidden" name="token" value="{{ $token }}">

				<div class="login-form">

					<p class="control has-icon has-icon-right">
						<input id="email" type="email" class="input email-input" name="email" value="{{ $email or old('email') }}" placeholder="dev@livenetworks.mk" required autofocus>

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

					<p class="control has-icon has-icon-right">
						<input id="password-confirm" type="password" class="input password-input" placeholder="confirm password" name="password_confirmation" required>

						<span class="icon user">
							<i class="fa fa-pencil"></i>
						</span>
						
						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif

					</p>

					<p class="control login">
						<button class="button is-success is-outlined is-large is-fullwidth" type="submit">
						Reset Password
						</button>
					</p>
				</div>
			</form>
	</div>
</div>
@endsection
