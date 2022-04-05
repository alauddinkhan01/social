@extends('layouts.adminpanel.app');
@section('content')
<div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12">
    <div class="nk-block-head-content nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
        <h3 class="nk-block-title page-title">Add Sub Category</h3>
    </div><!-- .nk-block-head-content -->
    <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8">
        <form action="{{ route('addsubcategories') }}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="card card-preview">
                <div class="card-inner">
                    <div class="preview-block">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-network"></em>                                    </div>
                                        <input required type="text" name="subcategory" class="form-control form-control-xl form-control-outlined" id="name">
                                        <label class="form-label-outlined" for="category">Sub Category Name</label>
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
                                        <select name="category_id" class="form-select form-control form-control-xl" data-ui="xl" id="category_id">
                                            <option selected disabled>Category</option>
                                            @foreach ($category as $category)
                                            <option value="{{ $category->id }}" >{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label-outlined" for="category_id">Select Category</label>
                                        {{-- {!! F::select('category',$category,null) !!} --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                {{-- <label class="form-label" for="customFileLabel">Image</label>     --}}
                                <div class="form-control-wrap">
                                    <div class="custom-file">            
                                       <input required type="file" class="custom-file-input" name="image" id="customFile">            
                                       <label class="custom-file-label" for="customFile">Sub Category Image</label>        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid  d-md-flex justify-content-md-end mt-2">
                        <button type="submit" class="btn btn-outline-info">Add Sub Category</button>
                    </div>
                </div>
            </div><!-- .card-preview -->
        </form>
    </div>
</div>
@endsection