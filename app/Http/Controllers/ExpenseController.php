<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense.create', [
            'report' => $expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpenseReport $expenseReport, Request $request)
{
    $request->validate([
        'description' => [
            'required',
            'min:3',
            'regex:/^[A-Za-z0-9\s]+/', // Permite letras, números y espacios en blanco
        ],
        'amount' => [
            'required',
            'min:1',
            'regex:/^[0-9]+$/'
        ],
    ]);

    // Resto del código...

    $expense = new Expense();
    $expense->description = $request->input('description');
    $expense->amount = $request->input('amount');
    $expense->expense_report_id = $expenseReport->id;
    $expense->save();

    return redirect('/expense_reports/'.$expenseReport->id);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
