@extends('layouts.auth')

<!-- Main Content -->
@section('content')
<div class="columns">
	<div class="column is-one-third is-offset-one-third">
		<h1 class="title">Reset Password</h1>

			@if (session('status'))
				<div class="notification is-primary">
					{{ session('status') }}
				</div>
			@endif

		<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
			{{ csrf_field() }}

			<div class="login-form">

				<p class="control has-icon has-icon-right">
					<input id="email" type="email" class="input email-input" name="email" value="{{ old('email') }}" placeholder="dev@livenetworks.mk" required>

					<span class="icon user">
						<i class="fa fa-user"></i>
					</span>

					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</p>
			</div>

			<p class="control login">
				<button class="button is-success is-outlined is-large is-fullwidth" type="submit">Send Password Reset Link</button>
			</p>

		</form>
	</div>
</div>
@endsection
