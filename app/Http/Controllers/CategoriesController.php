<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
class CategoriesController extends Controller
{
    public function index()
    {
        $userId = auth()->id(); // Obtenez l'ID de l'utilisateur connecté
        $categories = Category::where('user_id', $userId)->get(); // Récupérez les catégories associées à l'utilisateur

        return view('categories.index', compact('categories'));
    }

    public function store (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->input('name'),
            'user_id' => auth()->id()
        ]);

        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }


    public function edit ($id) {
        $category =Category::findOrFail($id);
        return view('categories.edit', compact('category'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }

}
