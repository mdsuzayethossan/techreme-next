<?php

namespace App\Http\Controllers\techreme;

use App\Http\Controllers\Controller;
use App\Http\Requests\ownerRequest;
use App\owner;
use App\product;
use App\service;
use App\User;
use Illuminate\Http\Request;

class ownerController extends Controller
{
    public function view()
    {
        $data['title'] = 'Owner List';
        $data['owners'] = owner::orderBy('id','desc')->get();
        $data['serial'] = 1;
        return  view('techreme.techreme_pages.Owner.owner_list',$data);
    }

    public function create()
    {
        $data['title']='Add New';
        $data['owners'] = owner::all();
        $data['users'] = User::wherein('user_type',['client','dealer'])->get();
        $data['products'] = product::all();
        $data['services'] = service::all();
        return view('techreme.techreme_pages.Owner.Add_&_Edit_owner',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'owner_name' => 'required|unique:owners,owner_name',
            'status' => 'required'
        ]);

        $data = new owner();
        $data->creator              = auth()->user()->name;
        $data->owner_name           = $request->owner_name;
        $data->product_name         = $request->product_name;
        $data->service_name         = $request->service_name;
        $data->description          = $request->description;
        $data->agreement_type       = $request->agreement_type;
        $data->started_from         = $request->started_from;
        $data->renew_date           = $request->renew_date;
        $data->expiry_date          = $request->expiry_date;
        $data->status               = $request->status;

        $data->save();

        $notification = array
        (
            'message' => 'Owner Created successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('owner.view')->with($notification);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Service';
        $data['editData'] = owner::findOrFail($id);
        $data['users'] = User::wherein('user_type',['client','dealer'])->get();
        $data['products'] = product::all();
        $data['services'] = service::all();
        return  view('techreme.techreme_pages.Owner.Add_&_Edit_owner',$data);
    }

    public function update(ownerRequest $request, $id)
    {

        $data = owner::find($id);
        $data->updater              = auth()->user()->name;
        $data->owner_name           = $request->owner_name;
        $data->product_name         = $request->product_name;
        $data->service_name         = $request->service_name;
        $data->description          = $request->description;
        $data->agreement_type       = $request->agreement_type;
        $data->started_from         = $request->started_from;
        $data->renew_date           = $request->renew_date;
        $data->expiry_date          = $request->expiry_date;
        $data->status               = $request->status;

        $data->save();

        $notification = array
        (
            'message' => 'Owner updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('owner.view')->with($notification);
    }

    public function delete($id)
    {
        $owner = owner::findOrFail($id);

        $owner->delete();

        $notification = array
        (
            'message' => 'Owner Info has been deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('owner.view')->with($notification);
    }

    public function details($id)
    {
        $data['title'] = 'Owner Details';
        $data['owner'] = owner::findOrFail($id);
        return view('techreme.techreme_pages.Owner.owner_details',$data);
    }
}
