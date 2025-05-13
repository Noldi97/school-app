<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Enseignant;

class EnseignantSearch extends Component
{
    public $search = '';

    // Le modèle wire:model.live se charge déjà de la mise à jour
    // Nous n'avons pas besoin de la méthode updatedSearch() ou l'événement

    public function render()
    {
        $query = Enseignant::query();

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('nom', 'like', '%' . $this->search . '%')
                  ->orWhere('prenom', 'like', '%' . $this->search . '%')
                  ->orWhere('specialite', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%');
            });
        }

        $enseignants = $query->paginate();

        return view('livewire.enseignant-search', [
            'enseignants' => $enseignants
        ]);
    }
}
