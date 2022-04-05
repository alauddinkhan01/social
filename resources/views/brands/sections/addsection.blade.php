@extends('layouts.adminpanel.app');
@section('content')
<div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12">
    <div class="nk-block-head-content nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
        <h3 class="nk-block-title page-title">Add Section</h3>
    </div><!-- .nk-block-head-content -->
    <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8">
        <form action="{{ route('newsection') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card card-preview">
                <div class="card-inner">
                    <div class="preview-block">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-network"></em>                                    
                                        </div>
                                        <input required type="text" name="section" class="form-control form-control-xl form-control-outlined" id="section">
                                        <label class="form-label-outlined" for="section">Section Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="status" class="form-select form-control form-control-xl" data-ui="xl" id="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">In Active</option>
                                        </select>
                                        <label class="form-label-outlined" for="status">Status</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="brand_id" class="form-select form-control form-control-xl" data-ui="xl" id="brand_id">
                                            <option selected disabled>Category</option>
                                            @foreach ($brand as $brand)
                                            <option value="{{ $brand->id }}" >{{ $brand->brand }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label-outlined" for="category_id">Select Brand</label>
                                        {{-- {!! F::select('category',$category,null) !!} --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                {{-- <label class="form-label" for="customFileLabel">Image</label>     --}}
                                <div class="form-control-wrap">
                                    <div class="custom-file">            
                                       <input required type="file" class="custom-file-input" name="image" id="customFile">            
                                       <label class="custom-file-label" for="customFile">Section Image</label>        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid  d-md-flex justify-content-md-end mt-2">
                        <button type="submit" class="btn btn-outline-info">Add Section</button>
                    </div>
                </div>
            </div><!-- .card-preview -->
        </form>
    </div>
</div>
@endsection