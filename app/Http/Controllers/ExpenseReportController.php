<?php

namespace App\Http\Controllers;
use App\Models\ExpenseReport;
use Illuminate\Http\Request;
use App\Http\Requests\StoreExpenseReports;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('expenseReport.index',['expenseReports' => ExpenseReport::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * StoreBlogPost  $request
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseReports $request)
    {   
        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();
        return redirect('/expense_reports');
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
       $report = ExpenseReport::find($id);
       return view('expenseReport.edit',[
        'report' => $report
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreExpenseReports $request, string $id)
    {   
    $report = ExpenseReport::findOrFail($id);
    $report->title = $request->get('title');
    $report->save();
    return redirect('/expense_reports');

    }
 /**
     * Confirrm delete the specified resource from storage.
     */
    public function confirmDelete(string $id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.confirmDelete',[
         'report' => $report
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();
        return redirect('/expense_reports');
    }
}
