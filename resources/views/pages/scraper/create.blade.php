@extends('layouts.main')

@section('content')

<style>
.inventory-type{
	text-align:center;
}
.inventory-type i{
	font-size: 60px;
    color: grey;
	padding:20px;
	margin: 0px 20px;
	transition: all .2s ease-in-out;
	cursor:pointer;
}
.inventory-type i:hover{
	transform: scale(1.1);
}
.inventory-type-input:checked + i{
	border-style: solid;;
	border-radius:10px;
	border-width:2px;
	border-color:grey;
}
.inventory-type-input{
	visibility:hidden;
	position:absolute;
}
</style>

<h1>Lets Get Going!</h1>
<form>
	<div class="grid-container">
		<h3 style="text-align:center;">Business Type</h3>
		<!-- Inventory Type Selection -->
		<div class="grid-x grid-padding-x">
			<div class="medium-8 medium-offset-2 large-6 large-offset-3 cell">
				<div class="grid-x grid-padding-x">
					<div class="medium-4 cell inventory-type">
						<label>
							<input class="inventory-type-input" type="radio" name="fb" value="small" />
							<i class="material-icons">&#xE84F;</i>
							<span>Real Estate</span>
						</label>
					</div>
					<div class="medium-4 cell inventory-type">
						<label>
							<input class="inventory-type-input" type="radio" name="fb" value="big"/>
							<i class="material-icons">&#xE8D1;</i>
							<span>Store</span>
						</label>
					</div>
					<div class="medium-4 cell inventory-type">
						<label>
							<input class="inventory-type-input" type="radio" name="fb" value="med" />
							<i class="material-icons">&#xE531;</i>
							<span>Automotive</span>
						</label>
					</div>
				</div>
			</div>
			<div class="medium-12 cell">
				<label>Name
					<input type="text" name="testing-url-1"/>
				</label>
			</div>
			<div class="medium-12 cell">
				<label>Example Inventory Pages
					<input type="text" name="testing-url-1"/>
					<input type="text" name="testing-url-2"/>
					<input type="text" name="testing-url-3"/>
					<input type="text" name="testing-url-4"/>
				</label>
			</div>
		</div>
	</div>
</form>
@endsection
