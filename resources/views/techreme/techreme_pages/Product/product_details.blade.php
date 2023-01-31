@extends('techreme.techreme_layout.allPortion.master')
@section('content')

    <div class="row justify-content-between align-items-center mb-10">
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3><a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('product.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a> &nbsp; Product Details Page</h3>
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
                <h3 class="title">Details of {{$product->name}}</h3>
            </div>

            <div class="box-body">

                <div class="timeline-wrap row mbn-50">
                    <div class="col-12 mb-50">
                        <ul class="timeline-list">
                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="{{ route('product.view')}}">{{$product->name}}</a></h5>
                                    <div class="gallery">
                                        <div class="row mbn-30">
                                            <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="{{(!empty($product->image))?url('public/Tech_image/Product/'.$product->image):url('public/Tech_image/Product/noimage.jpg')}}" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="{{ route('product.view')}}">Description of {{$product->name}}</a></h5>
                                    <div class="content">
                                        <!--Accordion Color Start-->
                                        <!--Accordion Start-->
                                        <div class="accordion accordion-icon primary" id="accordionExampleThree">

                                            <!--Card Start-->
                                            <div class="card">

                                                <!--Card Header Start-->
                                                <div class="card-header">
                                                    <h2><button data-toggle="collapse" data-target="#collapse3One">Description</button></h2>
                                                </div>
                                                <!--Card Header End-->

                                                <!--Collapse Start-->
                                                <div id="collapse3One" class="collapse show" data-parent="#accordionExampleThree">
                                                    <div class="card-body">
                                                        <p>{!! $product->description !!}</p>
                                                    </div>
                                                </div>
                                                <!--Collapse End-->

                                            </div>
                                            <!--Card End-->

                                        </div>
                                        <!--Accordion End-->
                                        <!--Accordion Color End-->
                                    </div>
                                </div>
                            </li>

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="{{ route('product.view')}}">{{$product->name}} Details</a></h5>
                                    <div class="content">
                                        @if($product->status == 'active')
                                            <div class="alert alert-success" role="alert">
                                                Status: <a class="alert-link" href="#"> Active</a>
                                            </div>
                                        @else
                                            <div class="alert alert-danger" role="alert">
                                                Status: <a class="alert-link" href="#"> Inactive</a>
                                            </div>
                                        @endif
                                        <div class="alert alert-primary" role="alert">
                                            ID: <a class="alert-link" href="#"> {{$product->custom_id}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Category: <a class="alert-link" href="#"> {{$product->category}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Version:  <a class="alert-link" href="#"> {{$product->version}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Requirement: <a class="alert-link" href="#"> {{$product->requirement}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Customize Scope: <a class="alert-link" href="#"> {{$product->customize_scope}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Upgradation Scope: <a class="alert-link" href="#"> {{$product->upgradation_scope}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Business Type: <a class="alert-link" href="#"> {{$product->biz_type}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Software Type: <a class="alert-link" href="#"> {{$product->soft_type}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Database Type: <a class="alert-link" href="#"> {{$product->db_type}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Creator: <a class="alert-link" href="#"> {{$product->creator}}</a>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            Updater: <a class="alert-link" href="#"> {{$product->updater}}</a>
                                        </div>
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

