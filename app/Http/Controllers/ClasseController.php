<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;


class ClasseController extends Controller
{
     public function index()
    {
        $totalClasses = Classe::count();
        return view('classe.index', compact('totalClasses'));
    }

    public function create()
    {
        return view('classe.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_classe' => 'required|string|max:255',
        ]);

        Classe::create([
            'nom_classe' => $request->nom_classe,
     ]);

        return redirect()->route('classe.index')->with('success', 'Classe créée avec succès.');
    }

    public function edit($id)
    {
        $classe = Classe::findOrFail($id);
        return view('classe.edit', compact('classe'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_classe' => 'required|string|max:255',
        ]);

        $classe = Classe::findOrFail($id);
        $classe->update([
            'nom_classe' => $request->nom_classe,
        ]);

        return redirect()->route('classe.index')->with('success', 'Classe mise à jour avec succès.');
    }

    // Supprime une classe
    public function destroy($id)
    {
        $classe = Classe::findOrFail($id);
        $classe->delete();

        return redirect()->route('classe.index')->with('success', 'Classe supprimée avec succès.');
    }
}


// namespace App\Http\Controllers;

// use App\Models\Classe;
// use Illuminate\Http\Request;

// class ClasseController extends Controller
// {
//     // Affiche toutes les classes
//     public function index()
//     {
//         $classes = Classe::all();
//         return view('classe.index', compact('classes'));
//     }

//     // Affiche le formulaire de création
//     public function create()
//     {
//         return view('classe.create');
//     }

//     // Enregistre une nouvelle classe
//     public function store(Request $request)
//     {
//         $request->validate([
//             'nom_classe' => 'required|string|max:255',
//         ]);

//         Classe::create([
//             'nom_classe' => $request->nom_classe,
//         ]);

//         return redirect()->route('classe.index')->with('success', 'Classe créée avec succès.');
//     }

//     // Affiche le formulaire de modification d'une classe
//     public function edit($id)
//     {
//         $classe = Classe::findOrFail($id);
//         return view('classe.edit', compact('classe'));
//     }

//     // Met à jour une classe existante
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'nom_classe' => 'required|string|max:255',
//         ]);

//         $classe = Classe::findOrFail($id);
//         $classe->update([
//             'nom_classe' => $request->nom_classe,
//         ]);

//         return redirect()->route('classe.index')->with('success', 'Classe mise à jour avec succès.');
//     }

//     // Supprime une classe
//     public function destroy($id)
//     {
//         $classe = Classe::findOrFail($id);
//         $classe->delete();

//         return redirect()->route('classe.index')->with('success', 'Classe supprimée avec succès.');
//     }
// }

