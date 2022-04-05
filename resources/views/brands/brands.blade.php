@extends('layouts.adminpanel.app');
@section('content') 
@include('layouts.alerts')
<div class=" col-sm-12 col-md-12 col-lg-12 col-xxl-12">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Brands</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <a href="{{ route('newbrand') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                    <a href="" class="btn btn-outline-info d-none d-md-inline-flex" data-bs-toggle="modal" data-bs-target="#exampleModal"><em class="icon ni ni-plus"></em><span>Add Brand</span></a>
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
                        <th class="nk-tb-col"><span>Brand Name</span></th>
                        <th class="nk-tb-col"><span>Image</span></th>
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
                    @foreach ($brands as $brands)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="puid1">
                                    <label class="custom-control-label" for="puid1"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub">{{ $brands->brand }}</span>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-product">
                                    <img src="{{ asset('brands/'.$brands->image) }}" alt="" class="thumb">
                                </span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="tb-status text-success">{{ $brands->status }}</span>
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
                                                    <li><a href="{{ route('editbrand',$brands->id) }}"><em class="icon ni ni-edit"></em><span>Update Brand</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                    <li><a href="{{ route('sections',$brands->id) }}"><em class="icon ni ni-network"></em><span>Sections</span></a></li>
                                                    <li>
                                                        <a href="{{ route('deletebrand',$brands->id) }}"><em class="icon ni ni-trash"></em><span>Remove Brand</span></a>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12">
            <div class="nk-block-head-content nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
            <h3 class="nk-block-title page-title ml-2">Add Brand</h3>
            </div><!-- .nk-block-head-content -->
            <form action="{{ route('addbrand') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card card-preview">
                    <div class="card-inner">
                        <div class="preview-block">
                            <div class="row gy-4">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-user"></em>
                                            </div>
                                            <input required type="text" name="brand" class="form-control form-control-xl form-control-outlined" id="brand">
                                            <label class="form-label-outlined" for="brand">Brand Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <select name="status" class="form-select form-control form-control-xl" data-ui="xl" id="vendortype">
                                                <option value="active" >Active</option>
                                                <option value="inactive">In Active</option>
                                                
                                            </select>
                                            <label class="form-label-outlined" for="country">Status</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    {{-- <label class="form-label" for="customFileLabel">Image</label>     --}}
                                    <div class="form-control-wrap">
                                        <div class="custom-file">            
                                        <input required type="file" class="custom-file-input" name="image" id="customFile">            
                                        <label class="custom-file-label" for="customFile">Brand Image</label>        
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        <div class="d-grid  d-md-flex justify-content-md-end mt-2" >
                            <button type="submit" class="btn btn-outline-info ml-5">Add Brand</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close" >Close</button>
                        </div>
                    </div>
                    
                </div><!-- .card-preview -->
            </form>
        </div>
        
        {{-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div> --}}
    </div>
  </div>
@endsection