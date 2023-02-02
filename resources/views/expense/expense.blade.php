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
                    <button href="{{ route('owner.create') }}" data-toggle="modal" data-target="#expensetypeModal"
                        class="btn btn-sm btn-primary">Add New</button>

                    <table class="table table-bordered data-table data-table-export table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expensetypes as $expensetype)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $expensetype->id }}</td>
                                    <td>{{ $expensetype->name }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="row">
                                            <a title="Edit" class="edit button button-box button-xs button-primary"
                                                href="{{ route('expensetype.edit', $expensetype->id) }}"><i
                                                    class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a title="Details" class="edit button button-box button-xs button-success"
                                                href="{{ route('owner.details', $expensetype->id) }}"><i
                                                    class="zmdi zmdi-more"></i></a>
                                            <form action="{{ route('expense.delete', $expensetype->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete"
                                                    class="delete button button-box button-xs button-danger"
                                                    onclick="return confirm('Are you confirm to delete this expense type')"><i
                                                        class="zmdi zmdi-delete"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Export Data Table End-->
    </div>
@endsection
