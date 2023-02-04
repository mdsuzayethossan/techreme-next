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
            'owner_id' => 'required',
            'product_id' => 'required',
            'service_id' => 'required',
            'type' => 'required',
            'name' => 'required',
            'amount' => 'required',
            'date' => 'required',
        ]);

        $data = new Expense();
        $data->owner_id             = $request->owner_id;
        $data->product_id             = $request->product_id;
        $data->service_id             = $request->service_id;
        $data->type             = $request->type;
        $data->name             = $request->name;
        $data->amount             = $request->amount;
        $data->date             = $request->date;
        $data->notes             = $request->notes;
        $data->save();
        $notification = array(
            'message' => 'Expense Created successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('expense.view')->with($notification);
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
