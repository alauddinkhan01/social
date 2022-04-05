@extends('layouts.adminpanel.app');
@section('content')
<div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12">
    <div class="nk-block-head-content nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 1.5rem">
        <h3 class="nk-block-title page-title">Update Vendor</h3>
    </div><!-- .nk-block-head-content -->
    <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8">
        <form action="{{ route('updatevendor',$vendor->id) }}" method="post" enctype="multipart/form-data">
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
                                        <input required type="text" value="{{ $vendor->name }}" name="name" class="form-control form-control-xl form-control-outlined" id="name">
                                        <label class="form-label-outlined" for="name">Your Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-cc"></em>                                    </div>
                                        <input required type="text" value="{{ $vendor->nicnumber }}" name="nicnumber" class="form-control form-control-xl form-control-outlined" id="nicnumber">
                                        <label class="form-label-outlined" for="nicnumber">NIC Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="country" class="form-select form-control form-group form-control-xl" data-ui="xl" id="country">
                                            <option value="default-option">COUNTRY</option>
                                            <option value="Pakistan"{{ $vendor->country== 'Pakistan'?'selected':''}}>Pakistan</option>
                                            <option value="China"{{ $vendor->country== 'China'?'selected':''}}>China</option>
                                            <option value="Uk"{{ $vendor->country== 'Uk'?'selected':''}}>Uk</option>
                                            <option value="Saudi Arabia"{{ $vendor->country== 'Saudi Arabia'?'selected':''}}>Saudi Arabia</option>
                                            <option value="UAE"{{ $vendor->country== 'UAE'?'selected':''}}>UAE</option>
                                        </select>
                                        <label class="form-label-outlined" for="country">Country</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-location"></em>
                                        </div>
                                        <input required type="text" value="{{ $vendor->provience }}" name="provience" class="form-control form-control-xl form-control-outlined" id="provience">
                                        <label class="form-label-outlined" for="provience">Provience Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-map-pin"></em>
                                        </div>
                                        <input required type="text" value="{{ $vendor->city }}" name="city" class="form-control form-control-xl form-control-outlined" id="city">
                                        <label class="form-label-outlined" for="city">City</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-map"></em>
                                        </div>
                                        <input required type="text" value="{{ $vendor->postalcode }}" name="postalcode" class="form-control form-control-xl form-control-outlined" id="postalcode">
                                        <label class="form-label-outlined" for="postalcode">Postal Code</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-mail"></em>
                                        </div>
                                        <input required type="email" value="{{ $vendor->email }}" name="email" class="form-control form-control-xl form-control-outlined" id="email">
                                        <label class="form-label-outlined" for="email">E-Mail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-call-alt"></em>                                    
                                        </div>
                                        <input required type="tel" value="{{ $vendor->phonenumber }}" name="phonenumber" class="form-control form-control-xl form-control-outlined" id="phonenumber">
                                        <label class="form-label-outlined" for="phonenumber">Phone Number</label>
                                    </div>
                                </div>
                            </div><div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-building"></em>                                    </div>
                                        <input type="text" value="{{ $vendor->businessname }}" name="businessname" class="form-control form-control-xl form-control-outlined" id="businessname">
                                        <label required class="form-label-outlined" for="businessname">Business Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="businesstype" class="form-select form-control form-control-xl" data-ui="xl" id="businesstype">
                                            <option value="default_option" >Your Business Type</option>
                                            <option value="Clothe"{{ $vendor->businesstype=='Clothe'?'selected':'' }}>Clothe</option>
                                            <option value="Accessories"{{ $vendor->businesstype=='Accessories'?'selected':'' }}>Accessories</option>
                                            <option value="Mobiles"{{ $vendor->businesstype=='Mobiles'?'selected':'' }}>Mobiles</option>
                                            <option value="Jewellery"{{ $vendor->businesstype=='Jewellery'?'selected':'' }}>Jewellery</option>
                                            <option value="Shoes"{{ $vendor->businesstype=='Shoes'?'selected':'' }}>Shoes</option>
    
                                        </select>
                                        <label class="form-label-outlined" for="businesstype">Business Type</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-map-pin"></em>                                    
                                        </div>
                                        <input required type="text" value="{{ $vendor->businessaddress }}" name="businessaddress" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon">
                                        <label class="form-label-outlined" for="businessaddress">Business Address</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-sm-6">
                                {{-- <label class="form-label" for="customFileLabel">Image</label>     --}}
                                <div class="form-control-wrap">
                                    <div class="custom-file">            
                                       <input  type="file" class="custom-file-input" name="image" id="customFile">            
                                       <label class="custom-file-label" for="customFile">Shop Logo</label>        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="status" class="form-select form-control form-control-xl" data-ui="xl" id="country">
                                            <option value="default-option" selected disabled>Status</option>
                                            <option value="Active" {{ $vendor->status=='Active'?'selected':'' }}>Active</option>
                                            <option value="Inactive"{{ $vendor->status=='Inactive'?'selected':'' }}>Inactive</option>
                                        </select>
                                        <label class="form-label-outlined" for="status">Status</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                            <img src="{{ asset('vendor/'.$vendor->image) }}" alt="{{ $vendor->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid  d-md-flex justify-content-md-end mt-2">
                            <button type="submit" class="btn btn-outline-info">Update</button>
                        </div>
                    </div>
                </div>
            </div><!-- .card-preview -->
        </form>
    </div>
</div>
@endsection