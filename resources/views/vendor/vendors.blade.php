@extends('layouts.adminpanel.app');
@section('content') 
<div class="col-md-12 col-sm-12 col-xxl-12">
    <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">VENDORS</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total 2,595 users.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                            <li class="nk-block-tools-opt">
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="{{ route('newvendor') }}"><span>Add Vendor</span></a></li>
                                            <li><a href="{{ route('vendorpanel') }}"><span>Vendor Panel</span></a></li>
                                            <li><a href="#"><span>Import User</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .toggle-wrap -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8">
        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
            <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col nk-tb-col-check">
                        <div class="custom-control custom-control-sm custom-checkbox notext">
                            <input type="checkbox" class="custom-control-input" id="uid">
                            <label class="custom-control-label" for="uid"></label>
                        </div>
                    </th>
                    <th class="nk-tb-col"><span class="sub-text">Vendor</span></th>
                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Shop Name</span></th>
                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                    <th class="nk-tb-col nk-tb-col-tools text-right">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendors as $vendors)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col nk-tb-col-check">
                        <div class="custom-control custom-control-sm custom-checkbox notext">
                            <input type="checkbox" class="custom-control-input" id="uid1">
                            <label class="custom-control-label" for="uid1"></label>
                        </div>
                    </td>
                    <td class="nk-tb-col">
                        <div class="user-card">
                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                <img src="{{ asset('vendor/'.$vendors->image) }}" alt="">
                            </div>
                            <div class="user-info">
                                <span class="tb-lead">{{ $vendors->name }} <span class="dot dot-success d-md-none ml-1"></span></span>
                                <span>{{ $vendors->email }}</span>
                            </div>
                        </div>
                    </td>
                    <td class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">{{ $vendors->businessname }}</span>
                    </td>
                    <td class="nk-tb-col tb-col-md">
                        <span>{{ $vendors->phonenumber }}</span>
                    </td>
                    <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                        <ul class="list-status">
                            <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                            <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                        </ul>
                    </td>
                    <td class="nk-tb-col tb-col-lg">
                        <span>05 Oct 2019</span>
                    </td>
                    <td class="nk-tb-col tb-col-md">
                        <span class="tb-status text-success">{{ $vendors->status }}</span>
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li class="nk-tb-action-hidden">
                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Wallet">
                                    <em class="icon ni ni-wallet-fill"></em>
                                </a>
                            </li>
                            <li class="nk-tb-action-hidden">
                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                    <em class="icon ni ni-mail-fill"></em>
                                </a>
                            </li>
                            <li class="nk-tb-action-hidden">
                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                    <em class="icon ni ni-user-cross-fill"></em>
                                </a>
                            </li>
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="{{ route('editvendor',$vendors->id) }}"><em class="icon ni ni-edit"></em><span>Update Vendor</span></a></li>
                                            <li><a href="{{ route('deletevendor',$vendors->id) }}"><em class="icon ni ni-trash"></em><span>Delete Vendor</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li> 
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr><!-- .nk-tb-item  -->
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection