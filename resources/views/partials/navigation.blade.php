<div class="multilevel-offcanvas off-canvas position-right" id="offCanvasRight" data-off-canvas>

	<ul class="vertical menu" data-accordion-menu>
		<li>
			<a href="#">Inventory Feed</a>
			<ul class="menu vertical nested">
				<li><a href="/data-items">Data Items</a></li>
				<li><a href="#">Selections</a></li>
				<li><a href="#">Exports</a></li>
			</ul>
		</li>
	</ul>

	<ul class="vertical menu" data-accordion-menu>
		<li>
			<a href="#">Integrations</a>
			<ul class="menu vertical nested">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Merchant Center</a></li>
				<li><a href="#">Mailchimp</a></li>
			</ul>
		</li>
	</ul>

	<ul class="vertical menu">
		<li class="off-canvas-menu-item"><a href="#">Tour</a></li>
		<li><a href="{{ url('/logout') }}">Logout</a></li>
		<li><a href="#">Support</a></li>
	</ul>

</div>

<div class="off-canvas-content" data-off-canvas-content>
	<div class="nav-bar">
		<div class="nav-bar-left">
			<a class="nav-bar-logo"><img class="logo" src="https://placehold.it/150x30"></a>
		</div>
		<div class="nav-bar-right">
			<ul class="menu">
				<li><a href="#">Inventory</a></li>
				<li><a href="#">Analytics</a></li>
				<li class="settings-toggle" data-open="offCanvasRight"><i class="material-icons">&#xE8B8;</i></li>
			</ul>
		</div>
	</div>
</div>
