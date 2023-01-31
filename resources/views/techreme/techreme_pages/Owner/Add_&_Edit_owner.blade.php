@extends('techreme.techreme_layout.allPortion.master')
@section('content')
    <form method="post" action="{{(@$editData)?route('owner.update',$editData->id):route('owner.store')}}" enctype="multipart/form-data">
        @csrf
        @include('techreme.techreme_layout.allForms._Form_owner')
        <div class="col-12 mt-10"><button class="button button-primary button-outline">{{(@$editData)?"Update":"Submit"}}</button></div>
    </form>
@endsection
