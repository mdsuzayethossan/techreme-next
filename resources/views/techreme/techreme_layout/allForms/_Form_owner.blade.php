<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('owner.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                    @if(@$editData)
                        Update Owner
                    @else
                        Add New Owner
                    @endif
                </h3>
            </div>
            <div class="box-body">
                <div class="row mbn-20">

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <p><span style="color: #a71d2a">*</span> Owner</p>
                            <select class="form-control select2 @error('owner_name') is-invalid @enderror" name="owner_name">
                                <optgroup label="Please Select">
                                    <option>Select Owner</option>
                                    @foreach($users as $owner)
                                        <option value="{{($owner->name)}}" {{(@$editData->owner_name == $owner->name)?"selected":""}}>{{$owner->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('owner_name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div><br>
                        <div class="row mbn-15">
                            <p><span style="color: #a71d2a">*</span> Product</p>
                            <select class="form-control select2 @error('product_name') is-invalid @enderror" name="product_name">
                                <optgroup label="Please Select">
                                    <option>Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{($product->name)}}" {{(@$editData->product_name == $product->name)?"selected":""}}>{{$product->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('product_name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div><br>
                        <div class="row mbn-15">
                            <p><span style="color: #a71d2a">*</span> Service</p>
                            <select class="form-control select2 @error('service_name') is-invalid @enderror" name="service_name">
                                <optgroup label="Please Select">
                                    <option>Select Service</option>
                                    @foreach($services as $service)
                                        <option value="{{($service->name)}}" {{(@$editData->service_name == $service->name)?"selected":""}}>{{$service->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('service_name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div><br>
                        <!--Single Date Picker-->
                            <p>Started From</p>
                            <input type="text" name="started_from" value="{{@$editData->started_from}}" class="form-control input-date-single @error('started_from') is-invalid @enderror">
                            @error('started_from')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        <!--Single Date <Picker--><br>
                        <!--Single Date Picker-->
                        <p>Expiry Date</p>
                        <input type="text" name="expiry_date" value="{{@$editData->expiry_date}}" class="form-control input-date-single @error('expiry_date') is-invalid @enderror">
                        @error('expiry_date')
                        <div class=" text-danger">{{ $message }}</div>
                    @enderror
                    <!--Single Date <Picker--><br>
                        <!--Single Date Picker-->
                        <p>Renew Date</p>
                        <input type="text" name="renew_date" value="{{@$editData->renew_date}}" class="form-control input-date-single @error('renew_date') is-invalid @enderror">
                        @error('renew_date')
                        <div class=" text-danger">{{ $message }}</div>
                    @enderror
                    <!--Single Date <Picker--><br>
                        <div class="row mbn-15">
                            @php
                                if(old("agreement_type")){
                                    $agreement_type = old('agreement_type');
                                }elseif (isset($editData)){
                                    $agreement_type = $editData->agreement_type;
                                }else{
                                    $agreement_type = null;
                                }
                            @endphp
                            <h class="mb-15"><span style="color: #a71d2a">*</span> Agreement Type</h>
                            <div class="form-control form-control-sm @error('agreement_type') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($agreement_type=='long_term') checked @endif name="agreement_type" value="long_term" id="long_term"> <i class="icon"></i> Long Term</label><br>
                                <label class="adomx-radio"><input type="radio" @if($agreement_type=='short_term') checked @endif name="agreement_type" value="short_term" id="short_term"> <i class="icon"></i> Short Term</label><br>
                                <label class="adomx-radio"><input type="radio" @if($agreement_type=='yearly') checked @endif name="agreement_type" value="yearly" id="yearly"> <i class="icon"></i> Yearly</label><br>
                                <label class="adomx-radio"><input type="radio" @if($agreement_type=='customize') checked @endif name="agreement_type" value="customize" id="customize"> <i class="icon"></i> Customize</label><br>
                                <label class="adomx-radio"><input type="radio" @if($agreement_type=='others') checked @endif name="agreement_type" value="others" id="others"> <i class="icon"></i> Others</label><br>
                            </div>
                            @error('agreement_type')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div><br>

                        <div class="row mbn-15">
                            @php
                                if(old("status")){
                                    $status = old('status');
                                }elseif (isset($editData)){
                                    $status = $editData->status;
                                }else{
                                    $status = null;
                                }
                            @endphp
                            <h class="mb-15"><span style="color: #a71d2a">*</span> User Status</h>
                            <div class="form-control form-control-sm @error('status') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($status=='active') checked @endif name="status" value="active" id="active"> <i class="icon"></i> Active</label><br>
                                <label class="adomx-radio"><input type="radio" @if($status=='inactive') checked @endif name="status" value="inactive" id="inactive"> <i class="icon"></i> Inactive</label><br>
                            </div>
                            @error('status')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Summernote Start-->
                    <div class="col-8 mb-30">
                        <div class="box">
                            <div class="box-body">
                                <p>Description</p>
                                <textarea name="description" class="summernote @error('description') is-invalid @enderror">{{@$editData->description}}</textarea>
                            </div>
                            @error('description')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Summernote End-->
                </div>
            </div>
        </div>
    </div>
    <!--Form Size End-->
</div>


