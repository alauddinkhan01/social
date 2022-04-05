@extends('layouts.adminpanel.app');
@section('content') 
<div class=" col-sm-12 col-md-12 col-lg-12 col-xxl-12"> 
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Products</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <a href="{{ route('addproduct') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                    <a href="{{ route('addproduct') }}" class="btn btn-outline-info d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Product</span></a>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8">
            <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="puid">
                                <label class="custom-control-label" for="puid"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span>Product Name</span></th>
                        <th class="nk-tb-col"><span>Image</span></th>
                        <th class="nk-tb-col tb-col-md"><span>Brand</span></th>
                        <th class="nk-tb-col tb-col-md"><span>Price</span></th>
                        <th class="nk-tb-col tb-col-md"><span>Colors</span></th>
                        <th class="nk-tb-col tb-col-md"><span>Status</span></th>
                        <th class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></th>
                        <th class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 my-n1">
                                <li class="mr-n1">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    </div>
                                </li>
                            </ul>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="puid1">
                                    <label class="custom-control-label" for="puid1"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub">{{ $product->productname }}</span>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-product">
                                    <img src="{{ asset('products/'.$product->image) }}" alt="" class="thumb">
                                </span>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub">{{ $product->brand ? $product->brand->brand : ""}}</span>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub">{{ $product->unitprice }}</span>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub">{{ $product->color }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="tb-status text-success">{{ $product->status }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <div class="asterisk tb-asterisk">
                                    <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                </div>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1 my-n1">
                                    <li class="mr-n1">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('editproduct',$product->id) }}"><em class="icon ni ni-edit"></em><span>Update Product</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                    <li>
                                                        <a href="{{ route('deleteproduct',$product->id) }}"><em class="icon ni ni-trash"></em><span>Remove Product</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    @endforeach
                    
                </tbody>
            </table><!-- .nk-tb-list -->
        </div>
    </div> <!-- nk-block -->
</div>

@endsection