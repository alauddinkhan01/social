@extends('layouts.vendorpanel.app')
@section('content')
<div class="mt-4 col-md-6">
    @include('layouts.alerts')
</div>
<div class="row col-md-12 col-sm-12 col-lg-12 col-xxl-12 mt-2" style="margin-left: 0.1rem">
    <div class="col-xxl-3 col-md-6 col-sm-12" style="margin-top: 2rem">
        <div class="card card-full overflow-hidden">
            <div class="nk-ecwg nk-ecwg7 h-100">
                <div class="card-inner flex-grow-1">
                    <div class="card-title-group mb-4">
                        <div class="card-title">
                            <h6 class="title">Order Statistics</h6>
                        </div>
                    </div>
                    <div class="nk-ecwg7-ck">
                        <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                    </div>
                    <ul class="nk-ecwg7-legends">
                        <li>
                            <div class="title">
                                <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                <span>Completed</span>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <span class="dot dot-lg sq" data-bg="#13c9f2"></span>
                                <span>Processing</span>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <span class="dot dot-lg sq" data-bg="#ff82b7"></span>
                                <span>Canclled</span>
                            </div>
                        </li>
                    </ul>
                </div><!-- .card-inner -->
            </div>
        </div><!-- .card -->
    </div>
    <div class="col-xxl-3 col-md-6 col-sm-12" style="margin-top: 2rem">
        <div class="card card-full">
            <div class="nk-ecwg nk-ecwg8 h-100">
                <div class="card-inner">
                    <div class="card-title-group mb-3">
                        <div class="card-title">
                            <h6 class="title">Sales Statistics</h6>
                        </div>
                        <div class="card-tools">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-toggle="dropdown">Weekly</a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><span>Daily</span></a></li>
                                        <li><a href="#" class="active"><span>Weekly</span></a></li>
                                        <li><a href="#"><span>Monthly</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nk-ecwg8-legends">
                        <li>
                            <div class="title">
                                <span class="dot dot-lg sq" data-bg="#6576ff"></span>
                                <span>Total Order</span>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <span class="dot dot-lg sq" data-bg="#eb6459"></span>
                                <span>Canceled Order</span>
                            </div>
                        </li>
                    </ul>
                    <div class="nk-ecwg8-ck">
                        <canvas class="ecommerce-line-chart-s4" id="salesStatistics"></canvas>
                    </div>
                    <div class="chart-label-group pl-5">
                        <div class="chart-label">01 Jul, 2020</div>
                        <div class="chart-label">30 Jul, 2020</div>
                    </div>
                </div><!-- .card-inner -->
            </div>
        </div><!-- .card -->
    </div>
    <div class="col-xxl-6" style="padding-top: 1rem">
        <div class="card h-100">
            <div class="card-inner">
                <div class="card-title-group align-start gx-3 mb-3">
                    <div class="card-title">
                        <h6 class="title">Sales Overview</h6>
                        <p>In 30 days sales of product subscription. <a href="#">See Details</a></p>
                    </div>
                    <div class="card-tools">
                        <div class="dropdown">
                            <a href="#" class="btn btn-primary btn-dim d-none d-sm-inline-flex" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em><span><span class="d-none d-md-inline">Download</span> Report</span></a>
                            <a href="#" class="btn btn-icon btn-primary btn-dim d-sm-none" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Download Mini Version</span></a></li>
                                    <li><a href="#"><span>Download Full Version</span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><em class="icon ni ni-opt-alt"></em><span>More Options</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
                    <div class="nk-sale-data">
                        <span class="amount">$82,944.60</span>
                    </div>
                    <div class="nk-sale-data">
                        <span class="amount sm">1,937 <small>Subscribers</small></span>
                    </div>
                </div>
                <div class="nk-sales-ck large pt-4">
                    <canvas class="sales-overview-chart" id="salesOverview"></canvas>
                </div>
            </div>
        </div><!-- .card -->
    </div><!-- .col -->
</div> 
@endsection