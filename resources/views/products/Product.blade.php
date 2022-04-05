@extends('layouts.adminpanel.app');
@section('content')
<div class="col-md-12 col-sm-12 col-xxl-12">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">ACCESSORIES</h3>
        <div class="nk-block-des text-soft">
            <p>You have total 2,595 Accessories.</p>
        </div>
    </div>
    <div class="nk-block">
        <div class="nk-tb-list is-separate mb-3">
            <div class="nk-tb-item nk-tb-head">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid">
                        <label class="custom-control-label" for="uid"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm"><span>Name</span></div>
                <div class="nk-tb-col"><span>SKU</span></div>
                <div class="nk-tb-col"><span>Price</span></div>
                <div class="nk-tb-col"><span>Stock</span></div>
                <div class="nk-tb-col tb-col-md"><span>Category</span></div>
                <div class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update Stock</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-invest"></em><span>Update Price</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/a.png') }}" alt="" class="thumb">
                        <span class="title">Pink Fitness Tracker</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3749</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 99.49</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">49</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Fitbit, Tracker</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/b.png') }}" alt="" class="thumb">
                        <span class="title">Purple Smartwatch</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3750</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 89.49</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">103</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Gadgets, Fitbit, Tracker</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/c.png') }}" alt="" class="thumb">
                        <span class="title">Black Mi Band Smartwatch</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3751</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 299.49</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">68</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Smartwatch, Tracker</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#" class="active"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/d.png') }}" alt="" class="thumb">
                        <span class="title">Black Headphones</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3752</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 99.49</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">77</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Headphone, Gadgets</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/e.png') }}" alt="" class="thumb">
                        <span class="title">iPhone 7 Headphones</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3753</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 129.49</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">81</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Headphone, Gadgets</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/f.png') }}" alt="" class="thumb">
                        <span class="title">Purple Blue Gradient iPhone Case</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3754</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 29.00</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">28</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Case, Gadgets</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/g.png') }}" alt="" class="thumb">
                        <span class="title">Plug In Speaker</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3755</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 19.49</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">62</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Gadgets, Speaker</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/h.png') }}" alt="" class="thumb">
                        <span class="title">Wireless Waterproof Speaker</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3756</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 59.00</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">37</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Speaker, Gadgets</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/j.png') }}/images/product/j.png" alt="" class="thumb">
                        <span class="title">AliExpress Fitness Trackers</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3758</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 35.99</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">145</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Fitbit, Tracker</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-sm">
                    <span class="tb-product">
                        <img src="{{ asset('adminpanel/images/product/i.png') }}" alt="" class="thumb">
                        <span class="title">Pool Party Drink Holder</span>
                    </span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">UY3757</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-lead">$ 9.49</span>
                </div>
                <div class="nk-tb-col">
                    <span class="tb-sub">73</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="tb-sub">Men, Holder</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <div class="asterisk tb-asterisk">
                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                    </div>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <li class="mr-n1">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .nk-tb-item -->
        </div><!-- .nk-tb-list -->
        <div class="card">
            <div class="card-inner">
                <div class="nk-block-between-md g-3">
                    <div class="g">
                        <ul class="pagination justify-content-center justify-content-md-start">
                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                        </ul><!-- .pagination -->
                    </div>
                    <div class="g">
                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                            <div>Page</div>
                            <div>
                                <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                    <option value="page-1">1</option>
                                    <option value="page-2">2</option>
                                    <option value="page-4">4</option>
                                    <option value="page-5">5</option>
                                    <option value="page-6">6</option>
                                    <option value="page-7">7</option>
                                    <option value="page-8">8</option>
                                    <option value="page-9">9</option>
                                    <option value="page-10">10</option>
                                    <option value="page-11">11</option>
                                    <option value="page-12">12</option>
                                    <option value="page-13">13</option>
                                    <option value="page-14">14</option>
                                    <option value="page-15">15</option>
                                    <option value="page-16">16</option>
                                    <option value="page-17">17</option>
                                    <option value="page-18">18</option>
                                    <option value="page-19">19</option>
                                    <option value="page-20">20</option>
                                </select>
                            </div>
                            <div>OF 102</div>
                        </div>
                    </div><!-- .pagination-goto -->
                </div><!-- .nk-block-between -->
            </div>
        </div>
    </div><!-- .nk-block -->
</div>
@endsection