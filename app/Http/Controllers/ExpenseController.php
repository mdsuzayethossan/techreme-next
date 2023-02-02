<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\ExpenseType;
use App\owner;
use App\product;
use App\service;
use App\User;

class ExpenseController extends Controller
{
    public function view()
    {
        $data['title'] = 'Add New';
        $data['expenses'] = Expense::all();
        return view('expense.expense', $data);
    }
    public function create()
    {
        $data['title'] = 'Add New';
        $data['types'] = ExpenseType::all();
        $data['owners'] = owner::all();
        $data['users'] = User::wherein('user_type', ['client', 'dealer'])->get();
        $data['products'] = product::all();
        $data['services'] = service::all();
        return view('expense.expense_add_edit', $data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $data = new Expense();
        $data->name             = $request->name;
        $data->save();
        return back()->with('expense_added', 'Expense type added successfully');
    }
    public function edit($id)
    {
        $data['editData'] = Expense::findOrFail($id);
        return  view('expense.Expense_edit', $data);
    }
    public function update(Expense $request, $id)
    {
        dd($request->name);
        $data = Expense::find($id);
        $data->name             = $request->name;
        $data->save();
        return back()->with('expense_updated', 'Expense type updated successfully');
    }

    public function delete($id)
    {
        $Expense = Expense::findOrFail($id);

        $Expense->delete();

        return back()->with('expense_deleted', 'Expense type deleted successfully');
    }
}
