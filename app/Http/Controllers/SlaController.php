<?php

namespace App\Http\Controllers;

use App\service;
use App\Sla;
use App\User;
use Illuminate\Http\Request;

class SlaController extends Controller
{
    public function view()
    {
        $data['title'] = 'Add New';
        $data['slas'] = Sla::all();
        return view('sla.sla', $data);
    }
    public function create()
    {
        $data['title'] = 'Add New';
        $data['users'] = User::wherein('user_type', ['client', 'dealer'])->get();
        $data['services'] = service::all();
        return view('sla.sla_add_edit', $data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'service_id' => 'required',
            'cost' => 'required',
            'start_date' => 'required',
        ]);

        $data = new Sla();
        $data->service_id       = $request->service_id;
        $data->cost             = $request->cost;
        $data->start_date       = $request->start_date;
        $data->end_date         = $request->end_date;
        $data->renewal_clauses  = $request->renewal_clauses;
        $data->termination      = $request->termination;
        $data->description      = $request->description;
        $data->save();
        $notification = array(
            'message' => 'Sla Created successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('sla.view')->with($notification);
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Service';
        $data['editData'] = Sla::findOrFail($id);
        $data['services'] = service::all();
        return  view('sla.sla_add_edit', $data);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'service_id' => 'required',
            'cost' => 'required',
            'start_date' => 'required',
        ]);
        $data = Sla::find($id);
        $data->service_id       = $request->service_id;
        $data->cost             = $request->cost;
        $data->start_date       = $request->start_date;
        $data->end_date         = $request->end_date;
        $data->renewal_clauses  = $request->renewal_clauses;
        $data->termination      = $request->termination;
        $data->description      = $request->description;
        $data->save();
        $notification = array(
            'message' => 'Sla updated successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('sla.view')->with($notification);
    }

    public function delete($id)
    {
        $Expense = Sla::findOrFail($id);

        $Expense->delete();
        $notification = array(
            'message' => 'Sla Info has been deleted Successfully',
            'alert-type' => 'error'
        );

        return back()->with($notification);
    }
}
