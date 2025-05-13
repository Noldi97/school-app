<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Validator;

class EtudiantController extends Controller
{
     public function index()
    {
        // Nous n'avons plus besoin de passer les enseignants à la vue
        // car ils seront gérés par le composant Livewire
        $totalEtudiants = Etudiant::count();
        return view('etudiant.index', compact('totalEtudiants'));
    }

    public function create()
    {
        return view('etudiant.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:enseignants',
        ]);

        Etudiant::create($validated);

        return redirect()->route('etudiant.index')->with('success', 'Etudiant ajouté.');
    }

    public function edit($id)
    {
        $etudiants = Etudiant::findOrFail($id);
        return view('etudiant.edit', compact('etudiants'));
    }


    public function update(Request $request, $id)
    {
        $etudiants = Etudiant::findOrFail($id);

        // Validation
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email,' . $etudiants->id,
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // Update
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email,' . $etudiants->id,
        ]);
        // Update the enseignant
        $etudiants->nom = $validated['nom'];
        $etudiants->prenom = $validated['prenom'];
        $etudiants->email = $validated['email'];
        // Save the enseignant
        $etudiants->save();
        // Redirect to the enseignant index page with success message
        return redirect()->route('etudiant.index')->with('success', 'Etudiant mis à jour.');
    }

    public function destroy($id)
    {
        Etudiant::destroy($id);
        return redirect()->route('etudiant.index')->with('success', 'Etudiant supprimé.');
    }
}
