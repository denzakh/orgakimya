<x-layout>
    <div class="container">
        <h1>{{ __('Menu: Services') }}</h1>

        @forelse ($services as $service)
            <div>


                {{ $service->img }}


                <h2>{{ $service->title }}</h2>

                <div>
                    {{ $service->text }}
                </div>                        
            </div>

        @empty

        @endforelse        
    </div>
</x-layout>

