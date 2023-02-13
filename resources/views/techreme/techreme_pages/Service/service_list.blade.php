@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Service List</h3>
                </div>
                <div class="box-body">
                    <a href="{{ route('service.create') }}" class="btn btn-sm btn-primary">Add New</a>
                    <table class="table table-bordered data-table data-table-export table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Amount</th>
                                <th>Creator</th>
                                <th>Updater</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $service->custom_id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->category }}</td>
                                    <td>{{ $service->amount }}</td>
                                    <td>{{ $service->creator }}</td>
                                    <td>{{ $service->updater }}</td>
                                    <td>
                                        @if ($service->status == 'active')
                                            <span class="badge badge-success" title="user active">Active</span>
                                        @else
                                            <span class="badge badge-danger" title="user inactive">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <div class="row">
                                            <a title="Edit" class="edit button button-box button-xs button-primary"
                                                href="{{ route('service.edit', $service->id) }}"><i
                                                    class="zmdi zmdi-edit"></i></a>
                                            <a title="Details" class="edit button button-box button-xs button-success"
                                                href="{{ route('service.details', $service->id) }}"><i
                                                    class="zmdi zmdi-more"></i></a>
                                            <form action="{{ route('service.delete', $service->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete"
                                                    class="delete button button-box button-xs button-danger"
                                                    onclick="return confirm('Are you confirm to delete this Category')"><i
                                                        class="zmdi zmdi-delete"></i></button>
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
                                <th>Amount</th>
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
