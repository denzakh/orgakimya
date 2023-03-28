<x-site-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            111
        </h2>
    </x-slot>

	<div>
		<h1>{{ $post->title }}</h1>	
		<div>
			{{ $post->text }}
		</div>
	</div>

</x-site-layout>




