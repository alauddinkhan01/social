@extends('layouts.adminpanel.app')
@section('content')
<div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12" style="margin-top:3rem">
    <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8" >
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Pendig Orders</h3>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                <a href="{{ route('exportorder') }}" class="btn btn-outline-primary d-none d-md-inline-flex"><em class="icon ni ni-file-xls"></em><span>Export</span></a>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block col-xxl-8" >
        <div class="card card-stretch">
            <div class="card-inner-group">
                <div class="card-inner">
                    <div class="card-title-group">
                        <div class="card-title">
                            <h5 class="title">Pending Orders</h5>
                        </div>
                        <div class="card-tools mr-n1">
                            <ul class="btn-toolbar gx-1">
                                <li>
                                    <a href="#" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                </li><!-- li -->
                                <li class="btn-toolbar-sep"></li><!-- li -->
                                <li>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                            <div class="badge badge-circle badge-primary">4</div>
                                            <em class="icon ni ni-filter-alt"></em>
                                        </a>
                                        <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-head">
                                                <span class="sub-title dropdown-title">Advance Filter</span>
                                                <div class="dropdown">
                                                    <a href="#" class="link link-light">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown-body dropdown-body-rg">
                                                <form action="{{ route('filterorder') }}" method="get" id="search-form">
                                                    <div class="row gx-6 gy-4">
                                                        <div class="col-6" >
                                                        <div class="form-group">
                                                            <label class="overline-title overline-title-alt">Tracking Number</label>
                                                            <input type="text" value="{{old('order_sr')}}" name="order_sr" class="form-control" id="">
                                                        </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-outline-info">Filter</button>
                                                            </div>
                                                        </div>
                                                
                                                    </div>
                                                </form> 
                                            </div>
                                            <div class="dropdown-foot between">
                                                <a class="clickable" href="#">Reset Filter</a>
                                                <a href="#savedFilter" data-toggle="modal">Save Filter</a>
                                            </div>
                                        </div><!-- .filter-wg -->
                                    </div><!-- .dropdown -->
                                </li><!-- li -->
                                <li>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                            <em class="icon ni ni-setting"></em>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                            <ul class="link-check">
                                                <li><span>Show</span></li>
                                                <li class="active"><a href="#">10</a></li>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#">50</a></li>
                                            </ul>
                                            <ul class="link-check">
                                                <li><span>Order</span></li>
                                                <li class="active"><a href="#">DESC</a></li>
                                                <li><a href="#">ASC</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- .dropdown -->
                                </li><!-- li -->
                            </ul><!-- .btn-toolbar -->
                        </div><!-- .card-tools -->
                        <div class="card-search search-wrap" data-search="search">
                            <div class="search-content">
                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Quick search by transaction">
                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                            </div>
                        </div><!-- .card-search -->
                    </div><!-- .card-title-group -->
                </div><!-- .card-inner -->
                <div class="card-inner p-0">
                    <div class="nk-tb-list nk-tb-tnx">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col"><span>Tracking Number</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                            <div class="nk-tb-col"><span class="d-none d-mb-block">Status</span></div>
                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Purchased</span></div>
                            <div class="nk-tb-col"><span>Total</span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1 my-n1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Update Status</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Orders</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($orders as $order)
                            <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">{{ $order->order_sr }}</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">{{ $order->created_at }}</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="dot bg-warning d-mb-none"></span>
                                <span class="tb-sub">{{ $order->status}}</span>

                                {{-- <span class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex">On Hold</span> --}}
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <span class="tb-sub">{{ $order->user->name }}</span>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub text-primary">{{ $order->total_products }}</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-lead">{{ $order->total_price }}PKR</span>
                            </div>
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Delivered" data-toggle="dropdown">
                                            <em class="icon ni ni-truck"></em></a></li>
                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="View Order" data-toggle="dropdown">
                                            <em class="icon ni ni-eye"></em></a></li>
                                    <li>
                                        <div class="drodown mr-n1">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('userorders',$order->id) }}"><em class="icon ni ni-eye"></em><span>Order Details</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Order</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @endforeach
                        
                    </div><!-- .nk-tb-list -->
                </div><!-- .card-inner -->
                <div class="card-inner">
                    <ul class="pagination justify-content-center justify-content-md-start">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div><!-- .card-inner -->
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('#filter-button').click(function(){
                $('search-form').attr('action',"{{ route('filterorder') }}");
            });
        });
    </script>
@endsection
