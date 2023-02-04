@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Expense Lists</h3>
                </div>
                <div class="box-body">
                    <a href="{{ route('expense.create') }}" class="btn btn-sm btn-primary">Add New</a>

                    <table class="table table-bordered data-table data-table-export table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>ID</th>
                                <th>Owner Name</th>
                                <th>Product Name</th>
                                <th>Service Name</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Notes</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $expense->id }}</td>
                                    <td>{{ $expense->owner_id }}</td>
                                    <td>{{ $expense->product_id }}</td>
                                    <td>{{ $expense->service_id }}</td>
                                    <td>{{ $expense->type }}</td>
                                    <td>{{ $expense->name }}</td>
                                    <td>{{ $expense->amount }}</td>
                                    <td>{{ $expense->date }}</td>
                                    <td>{!! $expense->notes !!}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="row">
                                            <a title="Edit" class="edit button button-box button-xs button-primary"
                                                href="{{ route('expense.edit', $expense->id) }}"><i
                                                    class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a title="Details" class="edit button button-box button-xs button-success"
                                                href="{{ route('owner.details', $expense->id) }}"><i
                                                    class="zmdi zmdi-more"></i></a>
                                            <form action="{{ route('expense.delete', $expense->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete"
                                                    class="delete button button-box button-xs button-danger"
                                                    onclick="return confirm('Are you confirm to delete this expense item.')"><i
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
