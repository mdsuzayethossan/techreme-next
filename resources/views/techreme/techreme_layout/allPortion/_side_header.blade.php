{{-- @php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp --}}
<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large"
                            aria-hidden="true"></i> <span>Dashboard</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('techreme') }}"><i class="fa fa-square"
                                    aria-hidden="true"></i><span>Home</span></a></li>
                    </ul>
                </li>

                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-lock"
                            aria-hidden="true"></i> <span>Registration</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('Register.stuff.view') }}"><i
                                    class="fa fa-square" aria-hidden="true"></i><span>Stuff List</span></a></li>
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('Register.client.view') }}"><i
                                    class="fa fa-square" aria-hidden="true"></i><span>Client List</span></a></li>
                    </ul>
                </li>

                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i
                            class="fa fa-product-hunt" aria-hidden="true"></i> <span>Product</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('product.view') }}"><i
                                    class="fa fa-square" aria-hidden="true"></i><span>Product List</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-cog"
                            aria-hidden="true"></i> <span>Services</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('service.view') }}"><i
                                    class="fa fa-square" aria-hidden="true"></i><span>Service List</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-users"
                            aria-hidden="true"></i> <span>Owner</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('owner.view') }}"><i
                                    class="fa fa-square" aria-hidden="true"></i><span>Owner List</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-usd"
                            aria-hidden="true"></i> <span>Expense</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('expensetype.view') }}"><i
                                    class="fa fa-square" aria-hidden="true"></i><span>Expense Types</span></a></li>
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('expense.view') }}"><i
                                    class="fa fa-square" aria-hidden="true"></i><span>Expenses</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-usd"
                            aria-hidden="true"></i> <span>Service Level Agreement</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{ route('sla.view') }}"><i class="fa fa-square"
                                    aria-hidden="true"></i><span>SLA</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
<!-- Side Header End -->
