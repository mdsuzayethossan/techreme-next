<div class="row">
    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    <a title="Back to Mail Menu" class="edit button button-box button-xs button-info"
                        href="{{ route('owner.view') }}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                    @if (@$editData)
                        Update Owner
                    @else
                        Add New Owner
                    @endif
                </h3>
            </div>
            <div class="box-body">
                <div class="row mbn-20">

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <p><span style="color: #a71d2a">*</span> Owner</p>
                        <select class="form-control select2 @error('owner_name') is-invalid @enderror"
                            name="owner_name">
                            <optgroup label="Please Select">
                                <option>Select Owner</option>
                                @foreach ($users as $owner)
                                    <option value="{{ $owner->name }}"
                                        {{ @$editData->owner_name == $owner->name ? 'selected' : '' }}>
                                        {{ $owner->name }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('owner_name')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <p><span style="color: #a71d2a">*</span> Product</p>
                        <select class="form-control select2 @error('product_name') is-invalid @enderror"
                            name="product_name">
                            <optgroup label="Please Select">
                                <option>Select Product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->name }}"
                                        {{ @$editData->product_name == $product->name ? 'selected' : '' }}>
                                        {{ $product->name }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('product_name')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <p><span style="color: #a71d2a">*</span> Service</p>
                        <select class="form-control select2 @error('service_name') is-invalid @enderror"
                            name="service_name">
                            <optgroup label="Please Select">
                                <option>Select Service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->name }}"
                                        {{ @$editData->service_name == $service->name ? 'selected' : '' }}>
                                        {{ $service->name }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('service_name')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <p>Started From</p>
                        <input type="text" name="started_from" value="{{ @$editData->started_from }}"
                            class="form-control input-date-single @error('started_from') is-invalid @enderror">
                        @error('started_from')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <p>Expiry Date</p>
                        <input type="text" name="expiry_date" value="{{ @$editData->expiry_date }}"
                            class="form-control input-date-single @error('expiry_date') is-invalid @enderror">
                        @error('expiry_date')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-20">
                        <p>Renew Date</p>
                        <input type="text" name="renew_date" value="{{ @$editData->renew_date }}"
                            class="form-control input-date-single @error('renew_date') is-invalid @enderror">
                        @error('renew_date')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
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
        </div>
        <!--Form Size End-->
    </div>
