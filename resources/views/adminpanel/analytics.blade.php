@extends('layouts.adminpanel.app');
@section('content')
<div class="row" style="margin-top: 1rem">
    <div class="col-md-6 col-xxl-3">
        <div class="card h-100">
            <div class="card-inner">
                <div class="card-title-group">
                    <div class="card-title card-title-sm">
                        <h6 class="title">Traffic Channel</h6>
                    </div>
                    <div class="card-tools">
                        <div class="drodown">
                            <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>7 Days</span></a></li>
                                    <li><a href="#"><span>15 Days</span></a></li>
                                    <li><a href="#"><span>30 Days</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="traffic-channel">
                    <div class="traffic-channel-doughnut-ck">
                        <canvas class="analytics-doughnut" id="TrafficChannelDoughnutData"></canvas>
                    </div>
                    <div class="traffic-channel-group g-2">
                        <div class="traffic-channel-data">
                            <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Organic Search</span></div>
                            <div class="amount">4,305 <small>58.63%</small></div>
                        </div>
                        <div class="traffic-channel-data">
                            <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff"></span><span>Social Media</span></div>
                            <div class="amount">859 <small>23.94%</small></div>
                        </div>
                        <div class="traffic-channel-data">
                            <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce"></span><span>Referrals</span></div>
                            <div class="amount">482 <small>12.94%</small></div>
                        </div>
                        <div class="traffic-channel-data">
                            <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b"></span><span>Others</span></div>
                            <div class="amount">138 <small>4.49%</small></div>
                        </div>
                    </div><!-- .traffic-channel-group -->
                </div><!-- .traffic-channel -->
            </div>
        </div><!-- .card -->
    </div><!-- .col -->
    <div class="col-md-6 col-xxl-3">
        <div class="card h-100">
            <div class="card-inner">
                <div class="card-title-group">
                    <div class="card-title card-title-sm">
                        <h6 class="title">Users by Country</h6>
                    </div>
                    <div class="card-tools">
                        <div class="drodown">
                            <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>7 Days</span></a></li>
                                    <li><a href="#"><span>15 Days</span></a></li>
                                    <li><a href="#"><span>30 Days</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="analytics-map">
                    <div class="vector-map" id="worldMap"></div>
                    <table class="analytics-map-data-list">
                        <tr class="analytics-map-data">
                            <td class="country">United States</td>
                            <td class="amount">12,094</td>
                            <td class="percent">23.54%</td>
                        </tr>
                        <tr class="analytics-map-data">
                            <td class="country">India</td>
                            <td class="amount">7,984</td>
                            <td class="percent">7.16%</td>
                        </tr>
                        <tr class="analytics-map-data">
                            <td class="country">Turkey</td>
                            <td class="amount">6,338</td>
                            <td class="percent">6.54%</td>
                        </tr>
                        <tr class="analytics-map-data">
                            <td class="country">Bangladesh</td>
                            <td class="amount">4,749</td>
                            <td class="percent">5.29%</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div><!-- .card -->
    </div><!-- .col -->
</div>
<div class="row" style="margin-top: 1rem">
    <div class="col-md-12 col-lg-12 col-xxl-12">
        <div class="card h-100">
            <div class="card-inner">
                <div class="card-title-group align-start pb-3 g-2">
                    <div class="card-title card-title-sm">
                        <h6 class="title">Active Users</h6>
                        <p>How do your users visited in the time.</p>
                    </div>
                    <div class="card-tools">
                        <em class="card-hint icon ni ni-help" data-toggle="tooltip" data-placement="left" title="Users of this month"></em>
                    </div>
                </div>
                <div class="analytic-au">
                    <div class="analytic-data-group analytic-au-group g-3">
                        <div class="analytic-data analytic-au-data">
                            <div class="title">Monthly</div>
                            <div class="amount">9.28K</div>
                            <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                        </div>
                        <div class="analytic-data analytic-au-data">
                            <div class="title">Weekly</div>
                            <div class="amount">2.69K</div>
                            <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                        </div>
                        <div class="analytic-data analytic-au-data">
                            <div class="title">Daily (Avg)</div>
                            <div class="amount">0.94K</div>
                            <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                        </div>
                    </div>
                    <div class="analytic-au-ck">
                        <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                    </div>
                    <div class="chart-label-group">
                        <div class="chart-label">01 Jan, 2020</div>
                        <div class="chart-label">30 Jan, 2020</div>
                    </div>
                </div>
            </div>
        </div><!-- .card -->
    </div><!-- .col -->
</div>


@endsection