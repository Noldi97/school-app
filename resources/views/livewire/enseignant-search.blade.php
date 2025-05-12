<div>
    <div class="mb-4">
        <div class="flex items-center gap-3">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500 dark:text-gray-400">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                </div>
                <input
                    wire:model.live="search"
                    type="text"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Rechercher un enseignant..."
                />
            </div>
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
                </th>
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
                @if($enseignants->count() > 0)
                    @foreach ($enseignants as $enseignant)
                        <tr class="border-t">
                            <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->nom }}</td>
                            <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->prenom }}</td>
                            <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->specialite }}</td>
                            <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->email }}</td>
                            <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">{{ $enseignant->classe->nom_classe ?? 'Non attribuée' }}</td>
                            <td class="py-3 font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                <div class="flex items-center space-x-3">
                                    <a href="{{ route('enseignant.edit', $enseignant->id) }}" class="text-blue-600 hover:text-blue-800 transition-colors" title="Modifier">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
                                    <form action="{{ route('enseignant.destroy', $enseignant->id) }}" method="post" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 transition-colors" onclick="return confirm('Confirmer la suppression ?')" title="Supprimer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="py-6 text-center text-gray-500 dark:text-gray-400">
                            Aucun enseignant trouvé
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>

        @if ($enseignants->count() > 0)
            <div class="my-5">
                {{$enseignants->links()}}
            </div>
        @endif
    </div>
</div>
