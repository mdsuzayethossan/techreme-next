<?php

namespace App\Http\Controllers\techreme;

use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function view()
    {
        $data['title'] = 'Product List';
        $data['products'] = product::orderBy('id', 'desc')->get();
        $data['serial'] = 1;
        return  view('techreme.techreme_pages.Product.product_list', $data);
    }

    public function create()
    {
        $data['title'] = 'Add New';
        $data['products'] = product::all();
        return view('techreme.techreme_pages.Product.Add_&_Edit_product', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products,name',
            'status' => 'required'
        ]);

        $data = new product();
        $data->creator              = auth()->user()->name;
        $data->name                 = $request->name;
        $data->category             = $request->category;
        $data->version              = $request->version;
        $data->description          = $request->description;
        $data->requirement          = $request->requirement;
        $data->customize_scope      = $request->customize_scope;
        $data->upgradation_scope    = $request->upgradation_scope;
        $data->biz_type             = $request->biz_type;
        $data->soft_type            = $request->soft_type;
        $data->db_type              = $request->db_type;
        $data->status               = $request->status;

        if ($request->file('image')) {
            $file = $request->file('image');
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'TRP_' . $file->getClientOriginalName();
            $file->move(public_path('Tech_image/Product/'), $file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        $notification = array(
            'message' => 'Product Created successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('product.view')->with($notification);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Product';
        $data['editData'] = product::findOrFail($id);
        return  view('techreme.techreme_pages.Product.Add_&_Edit_product', $data);
    }

    public function update(productRequest $request, $id)
    {

        $data = product::find($id);
        $data->updater              = auth()->user()->name;
        $data->name                 = $request->name;
        $data->category             = $request->category;
        $data->version              = $request->version;
        $data->description          = $request->description;
        $data->requirement          = $request->requirement;
        $data->customize_scope      = $request->customize_scope;
        $data->upgradation_scope    = $request->upgradation_scope;
        $data->biz_type             = $request->biz_type;
        $data->soft_type            = $request->soft_type;
        $data->db_type              = $request->db_type;
        $data->status               = $request->status;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('Tech_image/Product/' . $data->image));
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'TRP_' . $file->getClientOriginalName();
            $file->move(public_path('Tech_image/Product/'), $file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        $notification = array(
            'message' => 'Product updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('product.view')->with($notification);
    }

    public function delete($id)
    {
        $product = product::findOrFail($id);

        if (file_exists('public/Tech_image/Product/' . $product->image) and !empty($product->image)) {
            unlink('public/Tech_image/Product/' . $product->image);
        }

        $product->delete();

        $notification = array(
            'message' => 'Product Info has been deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('product.view')->with($notification);
    }

    public function details($id)
    {
        $data['title'] = 'Product Details';
        $data['product'] = product::findOrFail($id);
        return view('techreme.techreme_pages.Product.product_details', $data);
    }
}
