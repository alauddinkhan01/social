<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img style="max-width: 100px" class="logo-light logo-img" src="{{ asset('adminpanel/images/windowshoping.png') }}" srcset="{{ asset('adminpanel/images/windowshoping.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('adminpanel/images/windowshoping.png') }}" srcset="{{ asset('adminpanel/images/windowshoping.png 2x') }}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('adminpanel/images/windowshoping.png') }}" srcset="{{ asset('adminpanel/images/windowshoping.png 2x') }}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    {{-- <li class="nk-menu-item">
                        <a href="{{ route('sales') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-alt"></em></span>
                            <span class="nk-menu-text">Sales</span>
                        </a>
                    </li><!-- .nk-menu-item --> --}}
                    <li class="nk-menu-item">
                        <a href="{{ route('categories') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-network"></em></span>
                            <span class="nk-menu-text">Categories</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2"></em></span>
                            <span class="nk-menu-text">Orders</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('orders') }}" class="nk-menu-link"><span class="nk-menu-text">Aall Orders</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('pendingorders') }}" class="nk-menu-link"><span class="nk-menu-text">Pending Orders</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('deliveredorders') }}" class="nk-menu-link"><span class="nk-menu-text">delivered Orders</span></a></li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('brands') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tags"></em></span>
                            <span class="nk-menu-text">Brands</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('product') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-gift"></em></span>
                            <span class="nk-menu-text">Products</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('pendingproducts') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-clock"></em></span>
                            <span class="nk-menu-text">Pending Products</span>
                        </a>
                    </li>
                    {{-- <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-gift"></em></span>
                            <span class="nk-menu-text">Our Products</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('categories') }}" class="nk-menu-link"><span class="nk-menu-text">Categories</span></a></li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Clothes</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-text">MEN'S</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">WOMEN'S</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">KID'S</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Cell Phones</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">IPHONE</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">SAMSUNG</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">HUAWEI</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">OPPO</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">VIVO</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('accessories') }}" class="nk-menu-link"><span class="nk-menu-text">Accessories</span></a>
                            </li><li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Jewellery</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">GOLD</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">DAIMOND</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item --> --}}
                    <li class="nk-menu-item">
                        <a href="{{ route('analytics') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-trend-up"></em></span>
                            <span class="nk-menu-text">Business Analytics</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Products and Users</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                            <span class="nk-menu-text">User Management</span>
                        </a>
                        <ul class="nk-menu-sub">
                            {{-- <li class="nk-menu-item">
                                <a href="html/user-list-default.html" class="nk-menu-link"><span class="nk-menu-text">Super Admin</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">Super Vendors</span></a>
                            </li> --}}
                            <li class="nk-menu-item">
                                <a href="{{ route('vendors') }}" class="nk-menu-link"><span class="nk-menu-text">Vendors</span></a>
                            </li>
                            {{-- <li class="nk-menu-item">
                                <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">Super Customers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">Customers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">Online Customers</span></a>
                            </li> --}}
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>