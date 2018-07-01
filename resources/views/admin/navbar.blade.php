<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">

                <div class="menu-toggler sidebar-toggler">

            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN PAGE TOP -->
        <div class="page-top">

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">



                    {{--<li class="dropdown dropdown-user">--}}
                        {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                            {{--<img alt="" class="img-circle" src="../assets/layouts/layout2/img/avatar3_small.jpg" />--}}
                            {{--<span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>--}}
                            {{--<i class="fa fa-angle-down"></i>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu dropdown-menu-default">--}}
                            {{--<li>--}}
                                {{--<a href="{{ url('/admin/users/'.Auth::id().'/edit') }}">--}}
                                    {{--<i class="icon-user"></i>  تعديل الصفحة الشخصية--}}
                                {{--</a>--}}
                            {{--</li>--}}


                            {{--<li>--}}
                                {{--<a href="{{url('/admin/users/change_password/'.Auth::id())}}">--}}
                                    {{--<i class="icon-rocket"></i> تغيير كلمة السر--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="divider"> </li>--}}

                            {{--<li>--}}
                                {{--<a href="{{ route('user.logout') }}"--}}
                                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    {{--<i class="icon-key"></i> تسجيل الخروج--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">--}}
                                    {{--{{ csrf_field() }}--}}
                                {{--</form>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>