@extends('layouts.adminpanel.app')
@section('content')
<div class="col-sm-12 col-md-12 col-lg-12 col-xxl-12">
    <div class="col-md-12 col-sm-12 col-xxl-12 ">
        <div class="card  nk-block-head nk-block-head-sm nk-block col-xxl-8" style="margin-top: 3rem">
            <div  class="card-inner nk-block">
                <div class="team ">
                    <div class="user-card user-card-s2">
                        <div class="user-avatar md bg-primary">
                            <img src="{{ asset('users/'.$profile->image) }}" alt="">
                            <div class="status dot dot-lg dot-success"></div>
                        </div>
                        <div class="user-info">
                            <h6>{{ $profile->name }}</h6>
                            @if ($profile->role==1)
                                <span class="sub-text">Super Admin</span>
                            @endif
                        </div>
                        <div class="nk-block-head nk-block-head-sm nk-block col-xxl-8">
                            <form action="{{ route('updateprofile',$profile->id) }}" method="post" enctype="multipart/form-data">
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
                                                            <input required value="{{ $profile->name }}" type="text" name="name" class="form-control form-control-xl form-control-outlined" id="name">
                                                            <label class="form-label-outlined" for="name">Your Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-mail"></em>
                                                            </div>
                                                            <input value="{{ $profile->email }}" readonly type="email" name="email" class="form-control form-control-xl form-control-outlined" id="email">
                                                            <label class="form-label-outlined" for="email">E-Mail</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    {{-- <label class="form-label" for="customFileLabel">Image</label>     --}}
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">            
                                                           <input type="file" class="custom-file-input" name="image" id="customFile">            
                                                           <label class="custom-file-label" for="customFile">Your Picture</label>        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select name="status" class="form-select form-control form-control-xl" data-ui="xl" id="country">
                                                                <option value="Active">Active</option>
                                                                <option value="Inactive">Inactive</option>
                                                            </select>
                                                            <label class="form-label-outlined" for="status">Status</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid  d-md-flex justify-content-md-end mt-2">
                                                <button type="submit" class="btn btn-outline-info">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection