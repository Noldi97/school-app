<x-layouts.app :title="__('Dashboard')">
    <div class="grid grid-cols-1 gap-6 >
        <div class="space-y-6">
            <div
            class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
            >
            <div class="px-5 py-4 sm:px-6 sm:py-5">
                <h3
                class="text-base font-medium text-gray-800 dark:text-white/90"
                >
                Informations Etudiants
                </h3>
            </div>
            <div
                class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800"
            >
            <!-- Elements -->

            <form action="{{ route('etudiant.store') }}" method="post">
                @csrf
                <div>
                    <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                    >
                        Nom
                    </label>
                    <input
                        type="text"  name="nom" required
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                    />
                </div>

                <!-- Elements -->
                <div>
                    <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                    >
                        Prenom
                    </label>
                    <input
                        type="text" name="prenom" required
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                    />
                </div>

                <!-- Elements -->

                <!-- Elements -->
                <div>
                    <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                    >
                        Email
                    </label>
                    <input
                        type="text" name="email" required
                        placeholder="info@gmail.com"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                    />
                </div>

                <!-- Elements -->

                <button type="submit" class="inline-flex items-center gap-2 my-3 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-green-500 shadow-theme-xs hover:bg-green-500">Enregistrer</button>
            </form>

            <!-- Elements -->

            {{-- <div class="flex items-center gap-3">
                <a href="{{ route('enseignant.create') }}"
                    class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600"
                >
                    Enregistrer
                </a>
            </div> --}}
        </div>
    </div>
</x-layouts.app>
