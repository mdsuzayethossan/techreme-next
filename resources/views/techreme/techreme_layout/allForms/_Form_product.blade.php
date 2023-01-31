<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('product.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                    @if(@$editData)
                        Update Product
                    @else
                        Add New Product
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
                            <div class="col-12 mb-15"><input type="text" name="upgradation_scope" value="{{@$editData->upgradation_scope}}" class="form-control form-control-sm @error('upgradation_scope') is-invalid @enderror" placeholder="Upgradation Scope" ></div>
                            @error('upgradation_scope')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

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
                                if(old("biz_type")){
                                    $biz_type = old('biz_type');
                                }elseif (isset($editData)){
                                    $biz_type = $editData->biz_type;
                                }else{
                                    $biz_type = null;
                                }
                            @endphp
                            <h class="mb-15">Business Type</h>
                            <div class="form-control form-control-sm @error('biz_type') is-invalid @enderror"><span style="color: #a71d2a">*</span>
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='small') checked @endif name="biz_type" value="small" id="small"> <i class="icon"></i> Small</label><br>
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='medium') checked @endif name="biz_type" value="medium" id="medium"> <i class="icon"></i> Medium</label><br>
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='large') checked @endif name="biz_type" value="large" id="large"> <i class="icon"></i> Large</label><br>
                            </div>
                            @error('biz_type')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-6-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            @php
                                if(old("soft_type")){
                                    $soft_type = old('soft_type');
                                }elseif (isset($editData)){
                                    $soft_type = $editData->soft_type;
                                }else{
                                    $soft_type = null;
                                }
                            @endphp
                            <h class="mb-15">Software Type</h>
                            <div class="form-control form-control-sm @error('soft_type') is-invalid @enderror"><span style="color: #a71d2a">*</span>
                                <label class="adomx-radio"><input type="radio" @if($soft_type=='erp') checked @endif name="soft_type" value="erp" id="erp"> <i class="icon"></i> ERP</label><br>
                                <label class="adomx-radio"><input type="radio" @if($soft_type=='ecommerce') checked @endif name="soft_type" value="ecommerce" id="ecommerce"> <i class="icon"></i> Ecommerce</label><br>
                                <label class="adomx-radio"><input type="radio" @if($soft_type=='inventory') checked @endif name="soft_type" value="inventory" id="inventory"> <i class="icon"></i> inventory</label><br>
                                <label class="adomx-radio"><input type="radio" @if($soft_type=='pos') checked @endif name="soft_type" value="pos" id="pos"> <i class="icon"></i> POS</label><br>
                                <label class="adomx-radio"><input type="radio" @if($soft_type=='mobile_app') checked @endif name="soft_type" value="mobile_app" id="mobile_app"> <i class="icon"></i> Mobile_app</label><br>
                                <label class="adomx-radio"><input type="radio" @if($soft_type=='pay_role') checked @endif name="soft_type" value="pay_role" id="pay_role"> <i class="icon"></i> Pay Role</label><br>
                            </div>
                            @error('soft_type')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-6-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            @php
                                if(old("db_type")){
                                    $db_type = old('db_type');
                                }elseif (isset($editData)){
                                    $db_type = $editData->db_type;
                                }else{
                                    $db_type = null;
                                }
                            @endphp
                            <h class="mb-15">Database Type</h>
                            <div class="form-control form-control-sm @error('db_type') is-invalid @enderror"><span style="color: #a71d2a">*</span>
                                <label class="adomx-radio"><input type="radio" @if($db_type=='mysql') checked @endif name="db_type" value="mysql" id="mysql"> <i class="icon"></i> MYSQL</label><br>
                                <label class="adomx-radio"><input type="radio" @if($db_type=='oracle') checked @endif name="db_type" value="oracle" id="oracle"> <i class="icon"></i> Oracle</label><br>
                                <label class="adomx-radio"><input type="radio" @if($db_type=='mongodb') checked @endif name="db_type" value="mongodb" id="mongodb"> <i class="icon"></i> Mongodb</label><br>
                                <label class="adomx-radio"><input type="radio" @if($db_type=='cassandra') checked @endif name="db_type" value="cassandra" id="cassandra"> <i class="icon"></i> Cassandra</label><br>
                                <label class="adomx-radio"><input type="radio" @if($db_type=='sqlite') checked @endif name="db_type" value="sqlite" id="sqlite"> <i class="icon"></i> Sqlite</label><br>
                                <label class="adomx-radio"><input type="radio" @if($db_type=='mariadb') checked @endif name="db_type" value="mariadb" id="mariadb"> <i class="icon"></i> Mariadb</label><br>
                            </div>
                            @error('db_type')
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
                            <h class="mb-15">User Status</h>
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

                    <!--Image Upload-->
                    <div class="col-lg-12 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <img src="{{(@$editData->image)?url('public/Tech_image/Product/'.@$editData->image):url('public/Tech_image/Product/noimage.jpg')}}"  alt="" class="product-image rounded-circle">
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


