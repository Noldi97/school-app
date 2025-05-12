<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>



{{-- <x-layouts.app.sidebar :title="$title ?? null">
    @once
        <x-slot:head>
            @livewireStyles
        </x-slot:head>
    @endonce

    <flux:main>
        {{ $slot }}
    </flux:main>

    @once
        <x-slot:scripts>
            @livewireScripts
        </x-slot:scripts>
    @endonce
</x-layouts.app.sidebar> --}}
