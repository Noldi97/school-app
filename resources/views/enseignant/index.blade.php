<x-layouts.app :title="__('Enseignants')">
    <div
    class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-4 pb-3 pt-4 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6"
    >
    <div class="flex flex-col gap-2 mb-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                Liste des enseignants
            </h3>
        </div>
    </div>

    <!-- Intégration du composant Livewire pour la recherche -->
    @livewire('enseignant-search')

    <!-- Message de succès -->
    @if(session('success'))
        <div class="mt-4 px-4 py-3 text-sm rounded-lg bg-green-100 text-green-800 dark:bg-green-800/20 dark:text-green-400">
            {{ session('success') }}
        </div>
    @endif

    </div>
</x-layouts.app>

{{-- <x-layouts.app :title="__('Dashboard')">

    <div
    class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-4 pb-3 pt-4 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6"
    >
    <div
    class="flex flex-col gap-2 mb-4 sm:flex-row sm:items-center sm:justify-between"
    >
    <div>
      <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
        Liste des enseignants
      </h3>
    </div>

    <div class="flex items-center gap-3">

        <a href="{{ route('enseignant.create') }}"
            class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600"
        >
            Ajouter enseignant
        </a>
    </div>
  </div>

    <div class="w-full overflow-x-auto">
        <table class="min-w-full">
            <!-- table header start -->
            <thead>
                <tr class="border-gray-100 border-y dark:border-gray-800">
                <th class="py-3">
                    <div class="flex items-center">
                    <p
                        class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                        Nom
                    </p>
                    </div>
                </th class="py-3">
                <th class="py-3">
                    <div class="flex items-center">
                    <p
                        class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                        Prenom
                    </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center col-span-2">
                    <p
                        class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                        Specialite
                    </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center col-span-2">
                    <p
                        class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                        Email
                    </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center col-span-2">
                    <p
                        class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                        Classe
                    </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center col-span-2">
                    <p
                        class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                        Action
                    </p>
                    </div>
                </th>
                </tr>
            </thead>
            <!-- table header end -->

            <!-- table body start -->
            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">

                @foreach ($enseignants as $enseignant)
                    <tr class="border-t">
                        <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->nom }}</td>
                        <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->prenom }}</td>
                        <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->specialite }}</td>
                        <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->email }}</td>
                        <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->classe->nom_classe ?? 'Non attribuée' }}</td>
                        <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                            <a href="{{ route('enseignant.edit', $enseignant->id) }}" class="text-blue-600">Modifier</a>
                            <form action="{{ route('enseignant.destroy', $enseignant->id) }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
  </div>
</x-layouts.app> --}}
