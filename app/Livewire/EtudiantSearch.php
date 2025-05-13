<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Etudiant;

class EtudiantSearch extends Component
{
    public $search = '';

    public function render()
    {
        $query = Etudiant::query();

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('nom', 'like', '%' . $this->search . '%')
                  ->orWhere('prenom', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%');
            });
        }

        $etudiants = $query->paginate();

        return view('livewire.etudiant-search', [
            'etudiants' => $etudiants
        ]);
    }
}
