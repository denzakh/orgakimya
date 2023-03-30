<x-layout>
    <div class="container">
        <h1>{{ __('Menu: Contacts') }}</h1>

        @foreach($settings as $inputName => $inputValue)
		    <div style="display: inline-block; width: 300px; padding-right: 20px; margin-bottom: 10px;">
			    {{ $inputName }}: {{ $inputValue }}
			</div>
		@endforeach
    </div>
</x-layout>