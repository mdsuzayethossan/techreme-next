@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <form method="post" action="{{ route('expensetype.update', $editData->id) }}">
        @csrf
        <div class="row">
            <!--Form Size Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">
                            <a title="Back to Mail Menu" class="edit button button-box button-xs button-info"
                                href="{{ route('expensetype.view') }}"><i class="zmdi zmdi-mail-reply-all"></i></a><br>
                            Expense Type
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="row mbn-20">
                            <!--Small Field-2-->
                            <div class="col-lg-4 col-12 mb-20">
                                <div class="row mbn-15">
                                    <div class="col-12 mb-15"><span style="color: #a71d2a">*</span>
                                        <input type="text" name="name" value="{{ $editData->name }}"
                                            class="form-control form-control-sm @error('name') is-invalid @enderror"
                                            placeholder="Expense type name">
                                    </div>
                                    @error('name')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--Small Field-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Form Size End-->
        </div>
        <div class="col-12 mt-10"><button class="button button-primary button-outline">Submit</button></div>
    </form>
@endsection
