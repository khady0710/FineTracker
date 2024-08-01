<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use App\Models\Revenue;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{   public function index()
    {
        $userId = auth()->id();
        $expenses = Expense::where('user_id', $userId)->get();
        return view('expenses.index', compact('expenses'));
    }
    public function create()
    {
        // Récupérer toutes les catégories pour le formulaire
        $categories = Category::all();
        return view('expenses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Valider les données entrantes
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'is_recurrent' => 'boolean',
            'expense_date' => 'required|date',
        ]);

        // Créer une nouvelle dépense
        Expense::create([
            'category_id' => $request->input('category_id'),
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'is_recurrent' => $request->input('is_recurrent', false),
            'expense_date' => $request->input('expense_date'),
            'user_id' => auth()->id(), // Assurez-vous que l'utilisateur est connecté
        ]);

        return redirect()->route('expenses.index');
    }

public function show($id)
    {
        // Afficher une dépense spécifique
        $expense = Expense::findOrFail($id);
        return view('expenses.show', compact('expense'));
    }

    public function edit($id)
    {
        // Afficher le formulaire d'édition pour une dépense spécifique
        $expense = Expense::findOrFail($id);
        return view('expenses.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        // Valider et mettre à jour une dépense existante
        $request->validate([
            'category_id' => 'required|integer',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'is_recurrent' => 'boolean',
            'expense_date' => 'required|date',
        ]);

        $expense = Expense::findOrFail($id);
        $expense->update([
            'category_id' => $request->input('category_id'),
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'is_recurrent' => $request->input('is_recurrent', false),
            'expense_date' => $request->input('expense_date'),
        ]);

        return redirect()->route('expenses.index');
    }

    public function destroy($id)
    {
        // Supprimer une dépense spécifique
        $expense = Expense::findOrFail($id);
        $expense->delete();

        return redirect()->route('expenses.index');
    }

    public function dashboard()
    {
        $userId = auth()->id();

        // Calculer le montant total des revenus
        $totalRevenues = Revenue::where('user_id', $userId)->sum('amount');

        // Calculer le montant total des dépenses
        $totalExpenses = Expense::where('user_id', $userId)->sum('amount');

        // Calculer le solde
        $balance = $totalRevenues - $totalExpenses;

        // Récupérer les 5 dernières dépenses
        $latestExpenses = Expense::where('user_id', $userId)
            ->orderBy('expense_date', 'desc')
            ->limit(5)
            ->get();

        // Passer les données à la vue
        return view('welcome', compact('totalRevenues', 'totalExpenses', 'balance', 'latestExpenses'));
    }
}

