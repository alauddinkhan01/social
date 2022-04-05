@extends('layouts.frontend.app')
@section('content')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Checkout</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Shop</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">User Details</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-4">
					<div class="container">
						<div class="shop-cart">
							<div class="row">
								<div class="col-12 col-xl-12">
									<div class="checkout-details">
										<div class="card bg-transparent rounded-0 shadow-none">
											<div class="card-body">
												<div class="steps steps-light">
													<a class="step-item active" href="shop-cart.html">
														<div class="step-progress"><span class="step-count">1</span>
														</div>
														<div class="step-label"><i class='bx bx-cart'></i>Cart</div>
													</a>
													<a class="step-item active current" href="checkout-details.html">
														<div class="step-progress"><span class="step-count">2</span>
														</div>
														<div class="step-label"><i class='bx bx-user-circle'></i>Details</div>
													</a>
													<a class="step-item" href="checkout-shipping.html">
														<div class="step-progress"><span class="step-count">3</span>
														</div>
														<div class="step-label"><i class='bx bx-cube'></i>Shipping</div>
													</a>
													<a class="step-item" href="checkout-payment.html">
														<div class="step-progress"><span class="step-count">4</span>
														</div>
														<div class="step-label"><i class='bx bx-credit-card'></i>Payment</div>
													</a>
													<a class="step-item" href="checkout-review.html">
														<div class="step-progress"><span class="step-count">5</span>
														</div>
														<div class="step-label"><i class='bx bx-check-circle'></i>Review</div>
													</a>
												</div>
											</div>
										</div>
										<div class="card rounded-0">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div class="">
														<img src="{{ asset('users/'.$user->image) }}" width="90" alt="" class="rounded-circle p-1 border">
													</div>
													<div class="ms-2">
														<h6 class="mb-0">{{ $user->name }}</h6>
														<p class="mb-0">{{ $user->email }}</p>
													</div>
													<div class="ms-auto">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-edit'></i> Edit Profile</a>
													</div>
												</div>
											</div>
										</div>
										<div class="card rounded-0">
											<div class="card-body">
												<div class="border p-3">
													<h2 class="h5 mb-0">Shipping Address</h2>
													<div class="my-3 border-bottom"></div>
													<div class="form-body">
														<form action="{{ route('useraddress') }}" method="post" enctype="multipart/form-data" class="row g-3">
                                                            @csrf
															<div class="col-md-6">
																<label class="form-label" >Name</label>
																<input required type="text" name="name" value="{{ $user->name }}" class="form-control rounded-0">
															</div>
															<input type="hidden" name="user_id" value="">
                                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
															<div class="col-md-6">
																<label class="form-label">E-mail</label>
																<input required type="text" name="email" value="{{ $user->email }}" class="form-control rounded-0">
															</div>
															<div class="col-md-6">
																<label class="form-label">Phone Number</label>
																<input required type="text" name="phonenumber" value="{{$user->userdetail ? $user->userdetail->phonenumber : '' }}" class="form-control rounded-0">
															</div>
															<div class="col-md-6">
																<label class="form-label">Country</label>
																{{-- <input type="text"  class="form-control rounded-0"> --}}
                                                                <select required class="form-select rounded-0" name="country" id="">
                                                                    <option value="" selected disabled>Country</option>
																	@if ($user->userdetail)
																		<option value="Pakistan"{{ $user->userdetail->country=="Pakistan"?'selected':'' }}>Pakistan</option>
																		<option value="China"{{ $user->userdetail->country=="China"?'selected':'' }}>China</option>
																		<option value="Canada"{{ $user->userdetail->country=="Canad"?'selected':'' }}>Canada</option>
																		<option value="Germany"{{ $user->userdetail->country=="Germany"?'selected':'' }}>Germany</option>
																		<option value="UK"{{ $user->userdetail->country=="UK"?'selected':'' }}>UK</option>
																		<option value="Poland"{{ $user->userdetail->country=="Poland"?'selected':'' }}>Poland</option>
																	@else
																	<option value="Pakistan">Pakistan</option>
																	<option value="China">China</option>
																	<option value="Canada">Canada</option>
																	<option value="Germany">Germany</option>
																	<option value="UK">UK</option>
																	<option value="Poland">Poland</option>
																	@endif
                                                                    
                                                                </select>
															</div>
															<div class="col-md-6">
																<label class="form-label">State/Province</label>
																<input required class="form-control rounded-0" value="{{$user->userdetail ? $user->userdetail->provience :''}}" type="text" name="provience" >
															</div>
                                                            <div class="col-md-6">
																<label class="form-label">District</label>
																<input required class="form-control rounded-0" value="{{$user->userdetail ? $user->userdetail->district:'' }}" type="text" name="district" >
															</div>
                                                            <div class="col-md-6">
																<label class="form-label">City</label>
																<input required class="form-control rounded-0" value="{{$user->userdetail ? $user->userdetail->city :'' }}" type="text" name="city" >
															</div>
                                                            <div class="col-md-6">
																<label class="form-label">Town</label>
																<input required class="form-control rounded-0" value="{{$user->userdetail ?  $user->userdetail->town :'' }}" type="text" name="town" >
															</div>
															<div class="col-md-6">
																<label class="form-label">Zip/Postal Code</label>
																<input required type="text"  value="{{$user->userdetail ?  $user->userdetail->zipcode :'' }}" name="zipcode" class="form-control rounded-0">
															</div>
															<div class="col-md-6">
																<label class="form-label">Address 1</label>
																<textarea required name="address1" class="form-control rounded-0" >{{$user->userdetail ?  $user->userdetail->address1 :'' }}</textarea>
															</div>
															<div class="col-md-6">
																<label class="form-label">Address 2</label>
																<textarea name="address2" class="form-control rounded-0" >{{$user->userdetail ? $user->userdetail->address2 :''}}</textarea>
															</div>
															<div class="col-md-12">
																<div class="my-3 border-bottom"></div>
																<div class="form-check">
																</div>
															</div>
															<div class="col-md-6">
																<div class="d-grid">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-chevron-left'></i>Back to Cart</a>
																</div>
															</div>
															<div class="col-md-6">
																<div class="d-grid">
                                                                    <button type="submit" class="btn btn-white btn-ecomm">Proceed to Pay<i class='bx bx-chevron-right'></i></button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end row-->
						</div>
					</div>
				</section>
				<!--end shop cart-->
			</div>
		</div>
		<!--end page wrapper -->
@endsection