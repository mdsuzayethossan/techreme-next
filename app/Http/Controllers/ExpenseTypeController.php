<?php

namespace App\Http\Controllers;

use App\ExpenseType;
use Illuminate\Http\Request;

class ExpenseTypeController extends Controller
{
    public function view()
    {
        $data['title'] = 'Add New';
        $data['expensetypes'] = ExpenseType::all();
        return view('expense_type.expense_type', $data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $data = new ExpenseType();
        $data->name             = $request->name;
        $data->save();
        return back()->with('expense_type_added', 'Expense type added successfully');
    }
    public function edit($id)
    {
        $data['editData'] = ExpenseType::findOrFail($id);
        return  view('expense_type.expensetype_edit', $data);
    }
    public function update(ExpenseType $request, $id)
    {
        dd($request->name);
        $data = ExpenseType::find($id);
        $data->name             = $request->name;
        $data->save();
        return back()->with('expense_type_updated', 'Expense type updated successfully');
    }

    public function delete($id)
    {
        $expensetype = ExpenseType::findOrFail($id);

        $expensetype->delete();

        return back()->with('expense_type_deleted', 'Expense type deleted successfully');
    }
}
