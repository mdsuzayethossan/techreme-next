<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('Register.stuff.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                    @if(@$editData)
                        Update User
                    @else
                        Add New User
                    @endif
                </h3>
            </div>
            <div class="box-body">
                <div class="row mbn-20">
                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><span style="color: #a71d2a">*</span><input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="User Name" ></div>
                            @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="com_name" value="{{@$editData->com_name}}" class="form-control form-control-sm @error('com_name') is-invalid @enderror" placeholder="Company Name"></div>
                            @error('com_name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><span style="color: #a71d2a">*</span><input type="email" name="email" value="{{@$editData->email}}" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Email"></div>
                            @error('email')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><span style="color: #a71d2a">*</span><input type="text" name="mobile" value="{{@$editData->mobile}}" class="form-control form-control-sm @error('mobile') is-invalid @enderror" placeholder="Mobile"></div>
                            @error('mobile')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="telephone" value="{{@$editData->telephone}}" class="form-control form-control-sm @error('telephone') is-invalid @enderror" placeholder="Telephone"></div>
                            @error('telephone')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="emergency_contact" value="{{@$editData->emergency_contact}}" class="form-control form-control-sm @error('emergency_contact') is-invalid @enderror" placeholder="Emergency Contact"></div>
                            @error('emergency_contact')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="mailing_address" value="{{@$editData->mailing_address}}" class="form-control form-control-sm @error('mailing_address') is-invalid @enderror" placeholder="Mailing Address"></div>
                            @error('mailing_address')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="biz_address" value="{{@$editData->biz_address}}" class="form-control form-control-sm @error('biz_address') is-invalid @enderror" placeholder="Business Address"></div>
                            @error('biz_address')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="biz_url" value="{{@$editData->biz_url}}" class="form-control form-control-sm @error('biz_url') is-invalid @enderror" placeholder="Business URL"></div>
                            @error('biz_url')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            @if(@$editData)
                            @else
                            <div class="col-12 mb-15"><span style="color: #a71d2a">*</span><input id="password" type="password" name="password"  class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="Password"></div>
                            @error('password')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><span style="color: #a71d2a">*</span><input id="password_confirm" type="password" name="password_confirmation" class="form-control form-control-sm" placeholder="Retype Password"></div>
                            @endif
                        </div>
                    </div>
                    <!--Small Field-->

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
                            <div class="form-control form-control-sm @error('biz_type') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='individual') checked @endif name="biz_type" value="individual" id="individual"> <i class="icon"></i> Individual</label><br>
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='small') checked @endif name="biz_type" value="small" id="small"> <i class="icon"></i> Small</label><br>
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='medium') checked @endif name="biz_type" value="medium" id="medium"> <i class="icon"></i> Medium</label><br>
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='large') checked @endif name="biz_type" value="large" id="large"> <i class="icon"></i> Large</label><br>
                                <label class="adomx-radio"><input type="radio" @if($biz_type=='trading') checked @endif name="biz_type" value="trading" id="trading"> <i class="icon"></i> Trading</label><br>
                            </div>
                            @error('biz_type')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror

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

                    <!--Small Field-6-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            @php
                                if(old("user_type")){
                                    $user_type = old('user_type');
                                }elseif (isset($editData)){
                                    $user_type = $editData->user_type;
                                }else{
                                    $user_type = null;
                                }
                            @endphp
                            <h class="mb-15">User Type</h>
                            <div class="form-control form-control-sm @error('user_type') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($user_type=='admin') checked @endif name="user_type" value="admin" id="admin"> <i class="icon"></i> Admin</label><br>
                                <label class="adomx-radio"><input type="radio" @if($user_type=='manager') checked @endif name="user_type" value="manager" id="manager"> <i class="icon"></i> Manager</label><br>
                                <label class="adomx-radio"><input type="radio" @if($user_type=='supervisor') checked @endif name="user_type" value="supervisor" id="supervisor"> <i class="icon"></i> Supervisor</label><br>
                                <label class="adomx-radio"><input type="radio" @if($user_type=='operator') checked @endif name="user_type" value="operator" id="operator"> <i class="icon"></i> Operator</label><br>
                                <label class="adomx-radio"><input type="radio" @if($user_type=='client') checked @endif name="user_type" value="client" id="client"> <i class="icon"></i> Client</label><br>
                                <label class="adomx-radio"><input type="radio" @if($user_type=='dealer') checked @endif name="user_type" value="dealer" id="dealer"> <i class="icon"></i> Dealer</label><br>
                            </div>
                            @error('user_type')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->


                    <!--Image Upload-->
                    <div class="col-lg-12 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <img src="{{(@$editData->image)?url('public/Tech_image/user_image/'.@$editData->image):url('public/Tech_image/user_image/noimage.jpg')}}"  alt="" class="product-image rounded-circle">
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


