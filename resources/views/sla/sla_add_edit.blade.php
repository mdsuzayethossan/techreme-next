@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <form method="post" action="{{ @$editData ? route('sla.update', $editData->id) : route('sla.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="row">

            <!--Form Size Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">
                            <a title="Back to Mail Menu" class="edit button button-box button-xs button-info"
                                href="{{ route('sla.view') }}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                            @if (@$editData)
                                Update Sla
                            @else
                                Add New Sla
                            @endif
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="row mbn-20">
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p><span style="color: #a71d2a">*</span> Service</p>
                                <select class="form-control select2 @error('service_id') is-invalid @enderror"
                                    name="service_id">
                                    <option>Select Service</option>
                                    @foreach ($services as $service)
                                        <option value="{{ @$service->id }}"
                                            {{ @$editData->service_id == $service->id ? 'selected' : '' }}>
                                            {{ $service->name }}</option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p><span style="color: #a71d2a">*</span>Cost</p><input type="number" name="cost"
                                    value="{{ @$editData->cost }}" class="form-control @error('cost') is-invalid @enderror"
                                    placeholder="Expense cost">
                                @error('cost')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p><span style="color: #a71d2a">*</span>Start_date</p><input type="date"
                                    name="start_date" value="{{ @$editData->start_date }}"
                                    class="form-control @error('amount') is-invalid @enderror" placeholder="Start_date">
                                @error('start_date')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p>End_date</p>
                                <input type="date" name="end_date" value="{{ @$editData->end_date }}"
                                    class="form-control @error('end_date') is-invalid @enderror">
                                @error('end_date')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                                <!--Single Date <Picker--><br>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p>Renewal_clauses</p>
                                <input type="text" name="renewal_clauses" value="{{ @$editData->renewal_clauses }}"
                                    class="form-control @error('renewal_clauses') is-invalid @enderror">
                                @error('renewal_clauses')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                                <!--Single Date <Picker--><br>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p>Termination</p>
                                <input type="text" name="termination" value="{{ @$editData->termination }}"
                                    class="form-control @error('termination') is-invalid @enderror">
                                @error('termination')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                                <!--Single Date <Picker--><br>
                            </div>
                            <!--Summernote Start-->
                            <div class="col-12 mb-30">
                                <p>Description</p>
                                <textarea name="description" class="summernote @error('description') is-invalid @enderror">{{ @$editData->description }}</textarea>
                                @error('description')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--Summernote End-->
                        </div>

                    </div>
                    <!--Form Size End-->
                </div>
                <div class="col-12 mt-10">
                    <button class="button button-primary button-outline">{{ @$editData ? 'Update' : 'Submit' }}</button>
                </div>
            </div>
        </div>
    </form>
@endsection
