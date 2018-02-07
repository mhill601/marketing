@extends('layouts.main')

@section('content')

<form>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="medium-12 cell">
				<label>Company Name
					<input type="text" name="company_name" placeholder="">
				</label>
			</div>
			<div class="medium-12 cell">
				<label>Industry
					<select name="industry">
						<option value="realestate">Real Estate</option>
						<option value="automotive">Automotive</option>
						<option value="products">Products</option>
					</select>
				</label>
			</div>
			<div class="medium-12 cell">
				<label>E-mail Address
					<input type="text" name="company_name" placeholder="">
				</label>
			</div>
			<div class="medium-12 cell">
				<label>Password
					<input type="password" name="company_name" placeholder="">
				</label>
			</div>
		</div>
	</div>
</form>

@endsection