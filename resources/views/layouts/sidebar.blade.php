@section('sidebar')
<!-- main menu-->
        <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
        <div class="app-sidebar menu-fixed" data-background-color="man-of-steel" data-image="../../../app-assets/img/sidebar-bg/01.jpg" data-scroll-to-active="true">
            <!-- main menu header-->
            <!-- Sidebar Header starts-->
            <div class="sidebar-header">
                <div class="logo clearfix"><a class="logo-text float-left" href="index.html">
                        <div class="logo-img"><img src="../../../app-assets/img/logo.png" alt="Apex Logo" /></div><span class="text">MyBudget</span>
                    </a><a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;"><i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose" href="javascript:;"><i class="ft-x"></i></a></div>
            </div>
            <!-- Sidebar Header Ends-->
            <!-- / main menu header-->
            <!-- main menu content-->
            <div class="sidebar-content main-menu-content">
                <div class="nav-container">
                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                        <!-- <li class="nav-item"><a href="javascript:;"><i class="ft-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                        </li> -->
                       
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-aperture"></i><span class="menu-title" data-i18n="UI Kit">Product</span></a>
                            <ul class="menu-content">
                                <li <?php if(Route::current()->getName() == 'products.create'){echo 'class="active"';}?> ><a href="/products/create"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Grid">Add Product</span></a>
                                </li>
                                <li <?php if(Route::current()->getName() == 'products.index'){echo 'class="active"';}?>><a href="/products"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Typography">Product List</span></a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-layout"></i><span class="menu-title" data-i18n="Data Tables">Category</span></a>
                            <ul class="menu-content">
                                <li <?php if(Route::current()->getName() == 'category.create'){echo 'class="active"';}?>><a href="/category/create"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Grid">Add Category</span></a>
                                </li>
                                <li <?php if(Route::current()->getName() == 'category.index'){echo 'class="active"';}?>><a href="/category"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Typography">Category List</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-layout"></i><span class="menu-title" data-i18n="Data Tables">Tag</span></a>
                            <ul class="menu-content">
                                <li <?php if(Route::current()->getName() == 'tag.create'){echo 'class="active"';}?>><a href="/tag/create"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Grid">Add Tag</span></a>
                                </li>
                                <li <?php if(Route::current()->getName() == 'tag.index'){echo 'class="active"';}?>><a href="/tag"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Typography">Tag List</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item"><a href="javascript:;"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="Charts">Sales</span></a> -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- main menu content-->
            <div class="sidebar-background"></div>
            <!-- main menu footer-->
            <!-- include includes/menu-footer-->
            <!-- main menu footer-->
            <!-- / main menu-->
        </div>
@endsection