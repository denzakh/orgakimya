@php
	$menu = config('menu');
@endphp

<nav class="nav">
	<ul class="nav__list">
		@each('layouts.partials.nav-item', $menu, 'item', 'empty')
	</ul>
</nav>