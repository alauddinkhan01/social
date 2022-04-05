@extends('layouts.adminpanel.app')
@section('content')
    {{-- {{ $product }} --}}
    <div  class=" col-sm-12 col-md-12 col-lg-12 col-xxl-12">
        <div  class="nk-block nk-block-lg">
            <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 3rem">
                <div class="card rounded mx-auto d-block" style="max-width: 40rem;">
                    <img src="{{ asset('products/'.$product->image) }}" class="card-img-top" height="500px" alt="">
                    <div class="card-inner">
                        <h5 class="card-title"><strong>Brand: </strong>{{ $product->brand->brand }}</h5>
                        <h6 class="card-title"><strong>Product Name: </strong>{{ $product->productname }}</h6>
                        <p class="card-text">{{ $product->description }}</p>
                        <div class="d-grid  d-md-flex justify-content-md-end mt-2">
                            <form action="{{ route('approvedproduct',$product->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="status" value="Active">
                                <button type="submit" class="btn btn-success mr-1" style="margin-top: 0.4rem">Approve</button>
                            </form>
                            <form action="{{ route('rejectedproduct',$product->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="status" value="Rejected">
                                <button type="submit" class="btn btn-danger mt-1">Reject</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection