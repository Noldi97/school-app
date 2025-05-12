<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Classe;

class ClasseSearch extends Component
{
    public $search = '';

    public function render()
    {
        $query = Classe::query();

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('nom_classe', 'like', '%' . $this->search . '%');
            });
        }

        $classes = $query->paginate();

        return view('livewire.classe-search', [
            'classes' => $classes
        ]);
    }
}
