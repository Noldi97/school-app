<x-layouts.app :title="__('Classes')">
    <div
    class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-4 pb-3 pt-4 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6"
    >
    <div class="flex flex-col gap-2 mb-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                Liste des Classes
            </h3>
        </div>
    </div>

    <!-- Intégration du composant Livewire pour la recherche -->
    @livewire('classe-search')

    <!-- Message de succès -->
    @if(session('success'))
        <div class="mt-4 px-4 py-3 text-sm rounded-lg bg-green-100 text-green-800 dark:bg-green-800/20 dark:text-green-400">
            {{ session('success') }}
        </div>
    @endif

    </div>
</x-layouts.app>
