@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Product List</h3>
                </div>
                <div class="box-body">
                    <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">Add New</a>
                    <table class="table table-bordered data-table data-table-export table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>SL#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Version</th>
                            <th>Creator</th>
                            <th>Updater</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{$product->custom_id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->version}}</td>
                                <td>{{$product->creator}}</td>
                                <td>{{$product->updater}}</td>
                                <td>
                                    @if($product->status == 'active')
                                        <span class="badge badge-success" title="user active">Active</span>
                                    @else
                                        <span class="badge badge-danger" title="user inactive">Inactive</span>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-center">
                                    <div class="row">
                                        <a title="Edit" class="edit button button-box button-xs button-primary" href="{{ route('product.edit',$product->id) }}"><i class="zmdi zmdi-edit"></i></a>
                                        <a title="Details" class="edit button button-box button-xs button-success" href="{{ route('product.details',$product->id) }}"><i class="zmdi zmdi-more"></i></a>
                                        <form  action="{{ route('product.delete',$product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button title="Delete" class="delete button button-box button-xs button-danger" onclick="return confirm('Are you confirm to delete this Category')"><i class="zmdi zmdi-delete"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Version</th>
                            <th>Creator</th>
                            <th>Updater</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--Export Data Table End-->
    </div>
@endsection


