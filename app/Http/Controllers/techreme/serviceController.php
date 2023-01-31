<?php

namespace App\Http\Controllers\techreme;

use App\Http\Controllers\Controller;
use App\Http\Requests\serviceRequest;
use App\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function view()
    {
        $data['title'] = 'Service List';
        $data['services'] = service::orderBy('id','desc')->get();
        $data['serial'] = 1;
        return  view('techreme.techreme_pages.Service.service_list',$data);
    }

    public function create()
    {
        $data['title']='Add New';
        $data['services'] = service::all();
        return view('techreme.techreme_pages.Service.Add_&_Edit_service',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:services,name',
            'status' => 'required'
        ]);

        $data = new service();
        $data->creator              = auth()->user()->name;
        $data->name                 = $request->name;
        $data->category             = $request->category;
        $data->version              = $request->version;
        $data->description          = $request->description;
        $data->requirement          = $request->requirement;
        $data->customize_scope      = $request->customize_scope;
        $data->privilege            = $request->privilege;
        $data->opportunity          = $request->opportunity;
        $data->renew_date           = $request->renew_date;
        $data->expiry_date          = $request->expiry_date;
        $data->service_type         = $request->service_type;
        $data->status               = $request->status;

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'TRS_' . $file->getClientOriginalName();
            $file->move(public_path('Tech_image/service/'), $file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        $notification = array
        (
            'message' => 'Service Created successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('service.view')->with($notification);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Service';
        $data['editData'] = service::findOrFail($id);
        return  view('techreme.techreme_pages.Service.Add_&_Edit_service',$data);
    }

    public function update(serviceRequest $request, $id)
    {

        $data = service::find($id);
        $data->updater              = auth()->user()->name;
        $data->name                 = $request->name;
        $data->category             = $request->category;
        $data->version              = $request->version;
        $data->description          = $request->description;
        $data->requirement          = $request->requirement;
        $data->customize_scope      = $request->customize_scope;
        $data->privilege            = $request->privilege;
        $data->opportunity          = $request->opportunity;
        $data->renew_date           = $request->renew_date;
        $data->expiry_date          = $request->expiry_date;
        $data->service_type         = $request->service_type;
        $data->status               = $request->status;

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('Tech_image/service/'.$data->image));
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'TRS_'.$file->getClientOriginalName();
            $file->move(public_path('Tech_image/service/'),$file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        $notification = array
        (
            'message' => 'Service updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('service.view')->with($notification);
    }

    public function delete($id)
    {
        $product = service::findOrFail($id);

        if(file_exists('public/Tech_image/service/'.$product->image) AND !empty($product->image))
        {
            unlink('public/Tech_image/service/'.$product->image);
        }

        $product->delete();

        $notification = array
        (
            'message' => 'Service Info has been deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('service.view')->with($notification);
    }

    public function details($id)
    {
        $data['title'] = 'Service Details';
        $data['service'] = service::findOrFail($id);
        return view('techreme.techreme_pages.Service.service_details',$data);
    }
}
