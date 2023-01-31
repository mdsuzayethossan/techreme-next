<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('techreme.techreme_signin._head')
</head>

<body class="skin-dark">

<div class="main-wrapper">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap">
            <div class="row">

                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    @include('techreme.techreme_signin._messages')
                    @yield('content')
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">

                    <img src="{{asset('public/techreme/assets/images/bg/techreme.png')}}" alt="">

                    <div class="content">

                    </div>
                </div>

            </div>
        </div>

    </div><!-- Content Body End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
@include('techreme.techreme_signin._script')

</body>

</html>

