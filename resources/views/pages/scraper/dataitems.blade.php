@extends('layouts.main')

@section('content')
<style>
.sortable ul {
	padding: 5px;
}
</style>

<ol class="sortable">
	<li class="sortable-item"><div class="data-item">Sortable item A</div></li>
	<li class="sortable-item"><div class="data-item">Sortable item B</div></li>
	<li class="sortable-item"><div class="data-item">Sortable item C</div></li>
</ol>

<script>
$('.sortable').nestedSortable({
			handle: 'div',
			items: 'li',
			toleranceElement: '> div'
});
</script>
@endsection
