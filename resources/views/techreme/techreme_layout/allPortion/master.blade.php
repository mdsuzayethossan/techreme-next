<!doctype html>
<html class="no-js" lang="en">

{{-- start java head--}}
<head>
    @include('techreme.techreme_layout.allPortion._head')
</head>
{{-- End java head--}}

<body class="skin-dark">

<div class="main-wrapper">


    <!-- Header Section Start -->
@include('techreme.techreme_layout.allPortion._header')
<!-- Header Section End -->

    <!-- Side Header Start -->
@include('techreme.techreme_layout.allPortion._side_header')
<!-- Side Header End -->

    <!-- Content Body Start -->
    <div class="content-body">
        <!-- Top Report Wrap Start -->
        <!-- Top Report Wrap End -->
        @yield('content')
    </div>
    <!-- Content Body End -->

    <!-- Footer Section Start -->
@include('techreme.techreme_layout.allPortion._footer')
<!-- Footer Section End -->

</div>

{{-- start java script--}}
@include('techreme.techreme_layout.allPortion._script')
{{-- End java script--}}

</body>

</html>
