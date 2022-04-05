@extends('layouts.vendorpanel.app');
@section('content')
<div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12">
    <div class="nk-block-head-content nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
        <h3 class="nk-block-title page-title">Update Product</h3>
    </div><!-- .nk-block-head-content -->
    <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8">
        <form action="{{ route('updatevendorproduct',$product->id) }}" method="post" enctype="multipart/form-data">
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
                                        <input required value="{{ $product->productname }}" type="text" name="procuctname" class="form-control form-control-xl form-control-outlined" id="name">
                                        <label class="form-label-outlined" for="productname">Product Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="category_id" class=" form-control category_id form-control-xl" data-ui="xl" id="category_id">
                                            <option value="" selected disabled  >Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"{{ $product->category_id==$category->id? 'selected':''}} >{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label-outlined" for="category_id">Select Category</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="subcategory_id" class="form-select form-control form-control-xl" data-ui="xl" id="subcategory_id">
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"{{ $product->sub_category_id == $subcategory->id ? 'selected':''}} >{{ $subcategory->subcategory }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label-outlined" for="subcategory_id">Select Sub Category</label>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="vendor_id" class="form-select form-control form-control-xl" data-ui="xl" id="vendor_id">
                                            <option value="" selected disabled >Select Vendor</option>
                                            @foreach ($vendors as $vendor)
                                                <option value="{{ $vendor->id }}"{{ $product->vendor_id ==$vendor->id ? 'selected':''}} >{{ $vendor->name }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label-outlined" for="vendor_id">Select Vendor</label>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <input type="hidden" name="vendor_id" id="vendor_id" value="{{ Auth::user()->vendor->id }}"> --}}
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        {{-- <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-user"></em>
                                        </div> --}}
                                        <input value="{{ $product->quantity }}" type="number" class="form-control form-control-xl form-control-outlined" id="quantity" name="quantity" min="1" max="200">
                                        <label class="form-label-outlined" for="quantity">Quantity</label> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-money"></em>                                        
                                        </div>
                                        <input value="{{ $product->unitprice }}" required type="number" name="unitprice" class="form-control form-control-xl form-control-outlined" id="unitprice">
                                        <label class="form-label-outlined" for="unitprice">Unit Price</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-coins"></em>                                        
                                        </div>
                                        <input value="{{ $product->discount }}"  type="number" name="discount" class="form-control form-control-xl form-control-outlined" id="discount">
                                        <label class="form-label-outlined" for="discount">Discount</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        {{-- <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-coins"></em>                                        
                                        </div> --}}
                                        <input value="{{ $product->color }}"  type="color" class="form-control form-control-xl form-control-outlined" id="color" name="color" value="">
                                        <label class="form-label-outlined" for="color">Color</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="brand_id" class="form-select form-control form-control-xl" data-ui="xl" id="brand_id">
                                            <option value=" " selected disabled>Select Brand</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $product->brand_id==$brand->id ? 'selected':'' }}>{{ $brand->brand }}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label-outlined" for="brand_id">Select Brand</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="status" class="form-select form-control form-control-xl" data-ui="xl" id="vendortype">
                                            <option value="active"{{ $product->status=='active' ? 'selected':'' }} >Active</option>
                                            <option value="inactive"{{ $product->status=='inactive' ? 'selected':'' }}>In Active</option>
                                            
                                        </select>
                                        <label class="form-label-outlined" for="country">Status</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                {{-- <label class="form-label" for="customFileLabel">Image</label>     --}}
                                <div class="form-control-wrap">
                                    <div class="custom-file">            
                                       <input  type="file" class="custom-file-input" name="image" id="customFile">            
                                       <label class="custom-file-label" for="customFile">Product Image</label>        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                            <img src="{{ asset('products/'.$product->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="description">Product Description</label>
                                    <div class="form-control-wrap">
                                        <textarea name="description" class="form-control form-control-sm" id="description" placeholder="Product Description">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="d-grid  d-md-flex justify-content-md-end mt-2" >
                        <button type="submit" class="btn btn-outline-info">Update Product</button>
                    </div>
                </div>
                
            </div><!-- .card-preview -->
        </form>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        // A $( document ).ready() block.
        $( document ).ready(function() {
            $("#category_id").change(function() {
                let value = $(this).val();
                var url = '{{ route("vendorgetsubcategories", ":id") }}';
                url = url.replace(':id', value);
                
                $.ajax({
                    type: "get",
                    url: url,
                    success: function(data) {
                        if(data){
                            $('#subcategory_id').empty();
                            $.each(data, function(key, value) {
                                $('#subcategory_id').append(`<option value="${value.id}">${value.subcategory}</option>`);
                            });
                        }else{
                            $('#subcategory_id').empty();
                        }

                    },

                });
            })
        });
    </script>
@endsection