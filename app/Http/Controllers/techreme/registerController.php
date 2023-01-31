<?php

namespace App\Http\Controllers\techreme;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function client_view()
    {
        $data['title']='Clients';
        $data['users']=User::wherein('user_type',['client','dealer'])->orderBy('id','desc')->get();
        $data['serial']=1;
        return view('techreme.techreme_pages.Register.Clients',$data);
    }

    public function stuff_view()
    {
        $data['title']='Stuff';
        $data['users']=User::wherein('user_type',['admin','manager','supervisor','operator'])->orderBy('id','desc')->get();
        $data['serial']=1;
        return view('techreme.techreme_pages.Register.Stuff',$data);
    }

    public function create()
    {
        $data['title']='Add New';
        $data['users'] = User::all();
        return view('techreme.techreme_pages.Register.Add_&_Edit_User_Reg',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    =>'required|email|unique:users,email',
            'mobile'    => 'required',
            'status'   => 'required',
            'password' => 'min:3|required_with:password_confirmation|same:password_confirmation','password_confirmation' => 'min:3'
        ]);

        $data = new User();
        $data->creator              = 'admin';
        $data->name                 = $request->name;
        $data->com_name             = $request->com_name;
        $data->email                = $request->email;
        $data->mobile               = $request->mobile;
        $data->telephone            = $request->telephone;
        $data->emergency_contact    = $request->emergency_contact;
        $data->mailing_address      = $request->mailing_address;
        $data->biz_address          = $request->biz_address;
        $data->biz_url              = $request->biz_url;
        $data->biz_type             = $request->biz_type;
        $data->user_type            = $request->user_type;
        $data->status               = $request->status;
        $data->password             = bcrypt($request -> password);

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'TECHREME_' . $file->getClientOriginalName();
            $file->move(public_path('Tech_image/user_image/'), $file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        $notification = array
        (
            'message' => 'User Created successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('Register.stuff.view')->with($notification);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit User';
        $data['editData'] = User::findOrFail($id);
        return  view('techreme.techreme_pages.Register.Add_&_Edit_User_Reg',$data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'email'    =>"required|email|unique:users,email,$id"
        ]);

        $data = User::find($id);
        $data->updater              = 'admin';
        $data->name                 = $request->name;
        $data->com_name             = $request->com_name;
        $data->email                = $request->email;
        $data->mobile               = $request->mobile;
        $data->telephone            = $request->telephone;
        $data->emergency_contact    = $request->emergency_contact;
        $data->mailing_address      = $request->mailing_address;
        $data->biz_address          = $request->biz_address;
        $data->biz_url              = $request->biz_url;
        $data->biz_type             = $request->biz_type;
        $data->user_type            = $request->user_type;
        $data->status               = $request->status;

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('Tech_image/user_image/'.$data->image));
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'TECHREME_'.$file->getClientOriginalName();
            $file->move(public_path('Tech_image/user_image/'),$file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        $notification = array
        (
            'message' => 'User updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('Register.stuff.view')->with($notification);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if(file_exists('public/Tech_image/user_image/'.$user->image) AND !empty($user->image))
        {
            unlink('public/Tech_image/user_image/'.$user->image);
        }

        $user->delete();

        $notification = array
        (
            'message' => 'User Info has been deleted permanently',
            'alert-type' => 'error'
        );

        return redirect()->route('Register.stuff.view')->with($notification);
    }

    public function details_client($id)
    {
        $user['title'] = 'Client Details';
        $user['detail'] = User::findOrFail($id);
        return view('techreme.techreme_pages.Register.Client_details',$user);
    }

    public function details_stuff($id)
    {
        $user['title'] = 'Stuff Details';
        $user['detail'] = User::findOrFail($id);
        return view('techreme.techreme_pages.Register.Stuff_details',$user);
    }
}
