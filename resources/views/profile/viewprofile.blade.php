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
                    </div>
                    <div class="team-details">
                        <p> {{$profile->email }}</p>
                    </div>
                    <ul class="team-statistics">
                        <li><span>{{ $profile->created_at->format('Y-m-d') }}</span><span>Registered On</span></li>
                        <li><span>87.5%</span><span>Your Performance</span></li>
                        {{-- <li><span>587</span><span>Tasks</span></li> --}}
                    </ul>
                    <div class="team-view">
                        <a href="{{ route('editprofile',$profile->id) }}" class="btn btn-round btn-outline-light w-150px"><span>Edit Profile</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- {{ $profile }} --}}
@endsection