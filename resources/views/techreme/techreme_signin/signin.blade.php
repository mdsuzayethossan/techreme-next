@extends('techreme.techreme_signin.master')
@section('content')
    <div class="login-register-form-wrap">

        <div class="content">
            <h1>Sign in</h1>
        </div>
        <div class="login-register-form">
            <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    @include('techreme.techreme_signin._form_signIn')
                    <div class="col-12 mt-10"><button type="submit" name="submit" value="sign in" class="button button-primary button-outline">sign in</button></div>
                </div>
            </form>
        </div>
    </div>
@endsection
