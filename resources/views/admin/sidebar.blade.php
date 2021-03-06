<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">لوحة التحكم</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>

            </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-graph"></i>
                    <span class="title">المنتجات</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start">
                        <a href="{{url('/admin/products')}}" class="nav-link ">
                            <i class="icon-eye"></i>
                            <span class="title">عرض الكل</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ url('/admin/products/create') }}" class="nav-link ">
                            <i class="icon-note"></i>
                            <span class="title">إضافة</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-book-open"></i>
                    <span class="title">التصنيفات</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start">
                        <a href="{{url('/admin/categories')}}" class="nav-link ">
                            <i class="icon-eye"></i>
                            <span class="title">عرض الكل</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ url('/admin/categories/create') }}" class="nav-link ">
                            <i class="icon-note"></i>
                            <span class="title">إضافة</span>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
