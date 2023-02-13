@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <form method="post" action="{{ @$editData ? route('expense.update', $editData->id) : route('expense.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="row">

            <!--Form Size Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">
                            <a title="Back to Mail Menu" class="edit button button-box button-xs button-info"
                                href="{{ route('expense.view') }}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                            @if (@$editData)
                                Update Expense
                            @else
                                Add New Expense
                            @endif
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="row mbn-20">
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p><span style="color: #a71d2a">*</span> Owner</p>
                                <select class="form-control select2 @error('owner_id') is-invalid @enderror"
                                    name="owner_id">
                                    <option>Select Owner</option>
                                    @foreach ($owners as $owner)
                                        <option value="{{ @$owner->id }}"
                                            {{ @$editData->owner_id == $owner->id ? 'selected' : '' }}>
                                            {{ $owner->owner_name }}</option>
                                    @endforeach
                                </select>
                                @error('owner_id')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p><span style="color: #a71d2a">*</span> Product</p>
                                <select class="form-control select2 @error('product_id') is-invalid @enderror"
                                    name="product_id">
                                    <option>Select Product</option>
                                    @foreach ($products as $product)
                                        <option value="{{ @$product->id }}"
                                            {{ @$editData->product_id == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}</option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
                                <p><span style="color: #a71d2a">*</span>Expense types</p>
                                <select class="form-control select2 @error('type') is-invalid @enderror" name="type">
                                    <option value="">Select expense type</option>
                                    @foreach ($types as $type)
                                        <option value="{{ @$type->id }}"
                                            {{ @$editData->type == $type->id ? 'selected' : '' }}>
                                            {{ $type->name }}</option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p><span style="color: #a71d2a">*</span>Expense name</p><input type="text" name="name"
                                    value="{{ @$editData->name }}" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Expense Name">
                                @error('name')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p><span style="color: #a71d2a">*</span>Amount</p><input type="number" name="amount"
                                    value="{{ @$editData->amount }}"
                                    class="form-control @error('amount') is-invalid @enderror" placeholder="Expense amount">
                                @error('amount')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <p>Date</p>
                                <input type="date" name="date" value="{{ @$editData->date }}"
                                    class="form-control @error('date') is-invalid @enderror">
                                @error('date')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                                <!--Single Date <Picker--><br>
                            </div>
                        </div>
                        <div class="row mbn-20">

                            <!--Summernote Start-->
                            <div class="col-12 mb-30">
                                <p>Notes</p>
                                <textarea name="notes" class="summernote @error('notes') is-invalid @enderror">{{ @$editData->notes }}</textarea>
                                @error('notes')
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
