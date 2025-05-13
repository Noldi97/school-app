<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
use Illuminate\Support\Facades\Validator;

class EnseignantController extends Controller
{
     public function index()
    {
        // Nous n'avons plus besoin de passer les enseignants à la vue
        // car ils seront gérés par le composant Livewire
        $totalEnseignants = Enseignant::count();
        return view('enseignant.index', compact('totalEnseignants'));
    }

    public function create()
    {
        return view('enseignant.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'specialite' => 'required',
            'email' => 'required|email|unique:enseignants',
        ]);

        Enseignant::create($validated);

        return redirect()->route('enseignant.index')->with('success', 'Enseignant ajouté.');
    }

    public function edit($id)
    {
        $enseignants = Enseignant::findOrFail($id);
        return view('enseignant.edit', compact('enseignants'));
    }


    public function update(Request $request, $id)
    {
        $enseignants = Enseignant::findOrFail($id);

        // Validation
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email,' . $enseignants->id,
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
            'specialite' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email,' . $enseignants->id,
        ]);
        // Update the enseignant
        $enseignants->nom = $validated['nom'];
        $enseignants->prenom = $validated['prenom'];
        $enseignants->specialite = $validated['specialite'];
        $enseignants->email = $validated['email'];
        // Save the enseignant
        $enseignants->save();
        // Redirect to the enseignant index page with success message
        return redirect()->route('enseignant.index')->with('success', 'Enseignant mis à jour.');
    }

    public function destroy($id)
    {
        Enseignant::destroy($id);
        return redirect()->route('enseignant.index')->with('success', 'Enseignant supprimé.');
    }
}
