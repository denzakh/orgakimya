<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Contacts') }}</h1>
            </div>

            @foreach ($settings as $inputName => $inputValue)
                <div style="display: inline-block; width: 300px; padding-right: 20px; margin-bottom: 10px;">
                    {{ $inputName }}: {{ $inputValue }}
                </div>
            @endforeach
            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>
