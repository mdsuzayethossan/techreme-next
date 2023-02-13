@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Service Level Agreement</h3>
                </div>
                <div class="box-body">
                    <a href="{{ route('sla.create') }}" class="btn btn-sm btn-primary">Add New</a>

                    <table class="table table-bordered data-table data-table-export table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>SL#</th>
                                <th>ID</th>
                                <th>Service Name</th>
                                <th>Cost</th>
                                <th>Start_date</th>
                                <th>End_date</th>
                                <th>Renewal_clauses</th>
                                <th>Termination</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slas as $sla)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $sla->id }}</td>
                                    <td>{{ $sla->service_id }}</td>
                                    <td>{{ $sla->cost }}</td>
                                    <td>{{ $sla->start_date }}</td>
                                    <td>{{ $sla->end_date }}</td>
                                    <td>{{ $sla->renewal_clauses }}</td>
                                    <td>{{ $sla->termination }}</td>
                                    <td>{!! $sla->description !!}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="row">
                                            <a title="Edit" class="edit button button-box button-xs button-primary"
                                                href="{{ route('sla.edit', $sla->id) }}"><i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a title="Details" class="edit button button-box button-xs button-success"
                                                href="{{ route('owner.details', $sla->id) }}"><i
                                                    class="zmdi zmdi-more"></i></a>
                                            <form action="{{ route('sla.delete', $sla->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete"
                                                    class="delete button button-box button-xs button-danger"
                                                    onclick="return confirm('Are you confirm to delete this ser_agreement item.')"><i
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
