<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tableData = [
        //     'heading' => [
        //         'date','category','amount'
        //     ],
        //     'data' => [
        //         ['12/12/2012','salary','2500'],
        //         ['12/01/2013','salary','2500'],
        //         ['12/02/2013','salary','2550']
        //     ]

        // ]; 
        //$tableData = Income::all();

        //dump($tableData);
        $firstIncome = Income::with('category')->first();
        dump($firstIncome);
        dump($firstIncome->category);
        dump($firstIncome);
        dump($firstIncome->category->name);
        //Aquí la lógica de negocio para el index
        //return view('income.index',['title' => 'My incomes','tableData' => $tableData]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $categories = Category::all();
        return view('income.create', ['title' => 'New income','categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        //Validación
        
        $validated = $request->validate([
            'amount' => 'required|min:0.01|decimal:2',
            'category_id' => 'required|exists:categories,id'
        ]);
        Income::create($validated);
        
        redirect('income.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
