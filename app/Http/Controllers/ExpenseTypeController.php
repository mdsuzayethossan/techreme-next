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
        $notification = array(
            'message' => 'Expense type added successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('expense.view')->with($notification);
    }
    public function edit($id)
    {
        $data['editData'] = ExpenseType::findOrFail($id);
        return  view('expense_type.expensetype_edit', $data);
    }
    public function update(Request $request, $id)
    {
        // dd($request->name);
        $data = ExpenseType::find($id);
        $data->name             = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Expense type updated successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('expense.view')->with($notification);
    }

    public function delete($id)
    {
        $expensetype = ExpenseType::findOrFail($id);

        $expensetype->delete();
        $notification = array(
            'message' => 'Expense type deleted successfully',
            'alert-type' => 'error'
        );
        return redirect()->route('expense.view')->with($notification);
    }
}
