@extends('layouts.main')

@section('content')
<div class="grid-x">
	<div class="large-4 large-offset-4 cell">
		<h1>Login</h1>

		<form method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}

			<div class="grid-x">
				<div class="medium-12 cell">
					<label>E-Mail Address
						<input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
					</label>

					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>

				<div class="medium-12 cell">
					<label>Password
						<input id="password" type="password" name="password" required>
					</label>

					@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					@endif
				</div>

				<div class="medium-12 cell">
					<label>
						<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
					</label>
				</div>

				<div class="medium-12 cell">
					<button type="submit" class="button">Login</button>
					<a class="button secondary" href="{{ route('password.request') }}">Forgot Your Password?</a>
				</div>
			</div>
		</form>

	</div>
</div>
@endsection
