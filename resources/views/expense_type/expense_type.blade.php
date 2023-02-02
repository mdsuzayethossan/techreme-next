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
                                            <form action="{{ route('expensetype.delete', $expensetype->id) }}"
                                                method="post">
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

        <!-- Add Expense Type Modal -->
        <div class="modal fade" id="expensetypeModal" tabindex="-1" aria-labelledby="expensetypeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="expensetypeModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Small Field-2-->
                        <form method="post" action="{{ route('expensetype.store') }}">
                            @csrf
                            <div class="row mb-20">
                                <div class="col-12 mb-15">
                                    <input type="text" name="name" required value=""
                                        class="form-control form-control-sm @error('name') is-invalid @enderror"
                                        placeholder="Expense Name">
                                </div>
                                @error('name')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-12 mt-10"><button
                                        class="button button-primary button-outline">Submit</button></div>
                            </div>
                        </form>
                        <!--Small Field-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
