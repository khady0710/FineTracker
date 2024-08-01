<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Revenue;
class RevenuesController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $revenues = Revenue::where('user_id', $userId)->get();
        return view('revenues.index', compact('revenues'));
    }



    public function create()
    {
        // Afficher le formulaire de création de revenu
        return view('revenues.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'is_recurrent' => 'boolean',
            'revenue_date' => 'required|date',
        ]);

        Revenue::create([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'is_recurrent' => $request->input('is_recurrent', false),
            'revenue_date' => $request->input('revenue_date'),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('revenues.index')->with('success', 'Revenu ajouté avec succès');
    }

    public function show($id)
    {
        // Afficher un revenu spécifique
        $revenue = Revenue::findOrFail($id);
        return view('revenues.show', compact('revenue'));
    }

    public function edit($id)
    {
        // Afficher le formulaire d'édition pour un revenu spécifique
        $revenue = Revenue::findOrFail($id);
        return view('revenues.edit', compact('revenue'));
    }

    public function update(Request $request, $id)
    {
        // Valider et mettre à jour un revenu existant
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'is_recurrent' => 'boolean',
            'revenue_date' => 'required|date',
        ]);

        $revenue = Revenue::findOrFail($id);
        $revenue->update([
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'is_recurrent' => $request->input('is_recurrent', false),
            'revenue_date' => $request->input('revenue_date'),
        ]);

        return redirect()->route('revenues.index');
    }

    public function destroy($id)
    {
        // Supprimer un revenu spécifique
        $revenue = Revenue::findOrFail($id);
        $revenue->delete();

        return redirect()->route('revenues.index');
    }


}
