<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('service.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                    @if(@$editData)
                        Update Service
                    @else
                        Add New Service
                    @endif
                </h3>
            </div>
            <div class="box-body">
                <div class="row mbn-20">
                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><span style="color: #a71d2a">*</span><input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Product Name" ></div>
                            @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="category" value="{{@$editData->category}}" class="form-control form-control-sm @error('category') is-invalid @enderror" placeholder="Category Name" ></div>
                            @error('category')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="version" value="{{@$editData->version}}" class="form-control form-control-sm @error('version') is-invalid @enderror" placeholder="Version" ></div>
                            @error('version')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="requirement" value="{{@$editData->requirement}}" class="form-control form-control-sm @error('requirement') is-invalid @enderror" placeholder="Requirement" ></div>
                            @error('requirement')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="customize_scope" value="{{@$editData->customize_scope}}" class="form-control form-control-sm @error('customize_scope') is-invalid @enderror" placeholder="Customize Scope" ></div>
                            @error('customize_scope')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="privilege" value="{{@$editData->privilege}}" class="form-control form-control-sm @error('privilege') is-invalid @enderror" placeholder="privilege" ></div>
                            @error('privilege')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="opportunity" value="{{@$editData->opportunity}}" class="form-control form-control-sm @error('opportunity') is-invalid @enderror" placeholder="opportunity" ></div>
                            @error('opportunity')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Single Date Picker-->
                    <div class="col-lg-4 col-12 mb-20">
                        <h6 class="mb-15">Renew Date</h6>
                        <input type="text" name="renew_date" value="{{@$editData->renew_date}}" class="form-control input-date-single @error('renew_date') is-invalid @enderror">
                        @error('renew_date')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Single Date Picker-->

                    <!--Single Date Picker-->
                    <div class="col-lg-4 col-12 mb-20">
                        <h6 class="mb-15">Expiry Date</h6>
                        <input type="text" name="expiry_date" value="{{@$editData->expiry_date}}" class="form-control input-date-single @error('expiry_date') is-invalid @enderror">
                        @error('expiry_date')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Single Date Picker-->

                    <!--Summernote Start-->
                    <div class="col-12 mb-30">
                        <div class="box">
                            <div class="box-head">
                                <h3 class="title">Description</h3>
                            </div>
                            <div class="box-body">
                                <textarea name="description" class="summernote @error('description') is-invalid @enderror">{{@$editData->description}}</textarea>
                            </div>
                            @error('description')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Summernote End-->

                    <!--Small Field-6-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            @php
                                if(old("service_type")){
                                    $service_type = old('service_type');
                                }elseif (isset($editData)){
                                    $service_type = $editData->service_type;
                                }else{
                                    $service_type = null;
                                }
                            @endphp
                            <h class="mb-15">Service Type</h>
                            <div class="form-control form-control-sm @error('service_type') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($service_type=='gift') checked @endif name="service_type" value="gift" id="gift"> <i class="icon"></i> Gift</label><br>
                                <label class="adomx-radio"><input type="radio" @if($service_type=='loyalty_card') checked @endif name="service_type" value="loyalty_card" id="loyalty_card"> <i class="icon"></i> Loyalty Card</label><br>
                                <label class="adomx-radio"><input type="radio" @if($service_type=='silver') checked @endif name="service_type" value="silver" id="silver"> <i class="icon"></i> Silver</label><br>
                                <label class="adomx-radio"><input type="radio" @if($service_type=='gold') checked @endif name="service_type" value="gold" id="gold"> <i class="icon"></i> Gold</label><br>
                                <label class="adomx-radio"><input type="radio" @if($service_type=='platinum') checked @endif name="service_type" value="platinum" id="platinum"> <i class="icon"></i> Platinum</label><br>
                                <label class="adomx-radio"><input type="radio" @if($service_type=='diamond') checked @endif name="service_type" value="diamond" id="diamond"> <i class="icon"></i> Diamond</label><br>
                                <label class="adomx-radio"><input type="radio" @if($service_type=='premium') checked @endif name="service_type" value="premium" id="premium"> <i class="icon"></i> Premium</label><br>
                            </div>
                            @error('service_type')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-6-->
                    <div class="col-lg-4 col-12 mb-20">
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
                            <h class="mb-15">Status</h>
                            <div class="form-control form-control-sm @error('status') is-invalid @enderror"><span style="color: #a71d2a">*</span>
                                <label class="adomx-radio"><input type="radio" @if($status=='active') checked @endif name="status" value="active" id="active"> <i class="icon"></i> Active</label><br>
                                <label class="adomx-radio"><input type="radio" @if($status=='inactive') checked @endif name="status" value="inactive" id="inactive"> <i class="icon"></i> Inactive</label><br>
                            </div>
                            @error('status')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Image Upload-->
                    <div class="col-lg-12 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <img src="{{(@$editData->image)?url('public/Tech_image/service/'.@$editData->image):url('public/Tech_image/service/noimage.jpg')}}"  alt="" class="product-image rounded-circle">
                                <h6 class="mb-15">Image Upload</h6>
                                <input class="dropify @error('image') is-invalid @enderror" name="image" type="file">
                            </div>
                            @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <p style="color: #828282">Preferable image dimension should be 500pix X 500pix.</p>
                    </div>
                    <!--Small Field-->

                </div>
            </div>
        </div>
    </div>
    <!--Form Size End-->
</div>


