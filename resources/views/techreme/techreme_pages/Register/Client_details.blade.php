@extends('techreme.techreme_layout.allPortion.master')
@section('content')

    <div class="row justify-content-between align-items-center mb-10">
        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3><a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('Register.client.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a> &nbsp; Client Details Page</h3>
                </div>
            </div><!-- Page Heading End -->

        </div>
        <!-- Page Headings End -->
    </div>

    <div class="row mbn-50">
        <!--Timeline / Activities Start-->
        <div class="col-xlg-12 col-12 mb-50">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Details of {{$detail->name}}</h3>
                </div>

                <div class="box-body">

                    <div class="timeline-wrap row mbn-50">
                        <div class="col-12 mb-50">
                            <ul class="timeline-list">
                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="{{ route('Register.client.view')}}">{{$detail->name}}</a></h5>
                                        <div class="gallery">
                                            <div class="row mbn-30">
                                                <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="{{(@$detail->image)?url('public/Tech_image/user_image/'.$detail->image):url('public/Tech_image/user_image/noimage.jpg')}}" alt=""></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="{{ route('Register.client.view')}}">{{$detail->name}} Details</a></h5>
                                        <div class="content">
                                            @if($detail->status == 'active')
                                                <div class="alert alert-success" role="alert">
                                                    Status: <a class="alert-link" href="#"> Active</a>
                                                </div>
                                            @else
                                                <div class="alert alert-danger" role="alert">
                                                    Status: <a class="alert-link" href="#"> Inactive</a>
                                                </div>
                                            @endif
                                            <div class="alert alert-warning" role="alert">
                                                 Role: <a class="alert-link" href="#"> {{ucfirst($detail->user_type)}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                ID: <a class="alert-link" href="#"> {{$detail->custom_id}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Company Name: <a class="alert-link" href="#"> {{$detail->com_name}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Email: <a class="alert-link" href="#"> {{$detail->email}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Mobile:  <a class="alert-link" href="#"> {{$detail->mobile}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Telephone: <a class="alert-link" href="#"> {{$detail->telephone}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Emergency Contact: <a class="alert-link" href="#"> {{$detail->emergency_contact}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Mailing Address: <a class="alert-link" href="#"> {{$detail->mailing_address}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Business Address: <a class="alert-link" href="#"> {{$detail->biz_address}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Business URL: <a class="alert-link" href="#"> {{$detail->biz_url}}</a>
                                            </div>
                                            <div class="alert alert-primary" role="alert">
                                                Business Type: <a class="alert-link" href="#"> {{$detail->biz_type}}</a>
                                            </div>
                                                @if($detail->updater)
                                                    <div class="alert alert-primary" role="alert">
                                                        Updater: <a class="alert-link" href="#"> {{$detail->updater}}</a>
                                                    </div>
                                                @endif
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--Timeline / Activities End-->
    </div>

@endsection
