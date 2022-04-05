@extends('layouts.frontend.app')
@section('content')
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
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                            <div class="col-12 col-xl-8">
                                <div class="checkout-payment">
                                    <div class="card bg-transparent rounded-0 shadow-none">
                                        <div class="card-body">
                                            <div class="steps steps-light">
                                                <a class="step-item active" href="shop-cart.html">
                                                    <div class="step-progress"><span class="step-count">1</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-cart'></i>Cart</div>
                                                </a>
                                                <a class="step-item active" href="checkout-details.html">
                                                    <div class="step-progress"><span class="step-count">2</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-user-circle'></i>Details</div>
                                                </a>
                                                <a class="step-item active" href="checkout-shipping.html">
                                                    <div class="step-progress"><span class="step-count">3</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-cube'></i>Shipping</div>
                                                </a>
                                                <a class="step-item active current" href="checkout-payment.html">
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
                                    <div class="card rounded-0 shadow-none">
                                        <div class="card-header border-bottom">
                                            <h2 class="h5 my-2">Choose Payment Method</h2>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-pills mb-3 border p-3" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active rounded-0" data-bs-toggle="pill" href="#credit-card" role="tab" aria-selected="true">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon"><i class='bx bx-credit-card font-18 me-1'></i>
                                                            </div>
                                                            <div class="tab-title">Credit Card</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                {{-- <li class="nav-item" role="presentation">
                                                    <a class="nav-link rounded-0" data-bs-toggle="pill" href="#paypal-payment" role="tab" aria-selected="false">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon"><i class='bx bxl-paypal font-18 me-1'></i>
                                                            </div>
                                                            <div class="tab-title">Paypal</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link rounded-0" data-bs-toggle="pill" href="#net-banking" role="tab" aria-selected="false">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon"><i class='bx bx-mobile font-18 me-1'></i>
                                                            </div>
                                                            <div class="tab-title">Net Banking</div>
                                                        </div>
                                                    </a>
                                                </li> --}}
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="credit-card" role="tabpanel">
                                                    <div class="p-3 border">
                                                        <div class="panel-heading display-table" >
                                                            <div class="row display-tr" >
                                                               <h3 class="panel-title display-td" >Payment Details</h3>
                                                               <div class="display-td" >                            
                                                                  {{-- <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png"> --}}
                                                               </div>
                                                            </div>
                                                         </div>
                                                        @if (Session::has('success'))
                                                        <div class="alert alert-success text-center">
                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                            <p>{{ Session::get('success') }}</p>
                                                        </div>
                                                        @endif
                                                        <form 
                                                            role="form"
                                                            action="{{ route('stripe.post') }}"
                                                            method="post"
                                                            class="require-validation"
                                                            data-cc-on-file="false"
                                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                            id="payment-form">
                                                            @csrf
                                                            <div class='form-row row'>
                                                                <div class='col-xs-12 form-group required'>
                                                                   <label class='control-label'>Name on Card</label> 
                                                                   <input class='form-control' size='4' type='text'>
                                                                </div>
                                                             </div>
                                                             <div class='form-row row mt-3'>
                                                                <div class='col-xs-12 form-group required'>
                                                                   <label class='control-label'>Card Number</label> 
                                                                   <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                                                </div>
                                                             </div>
                                                             <div class='form-row row mt-3'>
                                                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                                   <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                      class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                      type='text'>
                                                                </div>
                                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                   <label class='control-label'>Expiration Month</label> <input
                                                                      class='form-control card-expiry-month' placeholder='MM' size='2'
                                                                      type='text'>
                                                                </div>
                                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                   <label class='control-label'>Expiration Year</label> <input
                                                                      class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                                      type='text'>
                                                                </div>
                                                             </div>
                                                             {{-- @foreach ($pay as $pay)
                                                                @php
                                                                     $netprice += $pay->product->unitprice*$pay->quantity 
                                                                @endphp
                                                             @endforeach --}}
                                                             <div class="row mt-3">
                                                                <div class="col-xs-12">
                                                                   <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now($100) </button>
                                                                </div>
                                                             </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- <div class="tab-pane fade" id="paypal-payment" role="tabpanel">
                                                    <div class="p-3 border">
                                                        <div class="mb-3">
                                                            <p>Select your Paypal Account type</p>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Domestic</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">International</label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="d-block">	<a href="javscript:;" class="btn btn-light rounded-0"><i class='bx bxl-paypal'></i>Login to my Paypal</a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="net-banking" role="tabpanel">
                                                    <div class="p-3 border">
                                                        <div class="mb-3">
                                                            <p>Select your Bank</p>
                                                            <select class="form-select rounded-0" aria-label="Default select example">
                                                                <option selected>--Please Select Your Bank--</option>
                                                                <option value="1">Bank Name 1</option>
                                                                <option value="2">Bank Name 2</option>
                                                                <option value="3">Bank Name 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="d-block"> <a href="javscript:;" class="btn btn-light rounded-0"><i class='bx bxl-paypal'></i>Login to my Paypal</a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 shadow-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-grid">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-chevron-left"></i>Back to Shipping</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <form action="">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="">
                                                        <div class="d-grid">
                                                            <a href="{{ route('placeorder') }}" class="btn btn-white btn-ecomm">Buy Now<i class="bx bx-chevron-right"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="order-summary">
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="card rounded-0 border bg-transparent shadow-none">
                                                <div class="card-body">
                                                    <p class="fs-5 text-white">Apply Discount Code</p>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control rounded-0" placeholder="Enter discount code">
                                                        <button class="btn btn-light btn-ecomm" type="button">Apply Discount</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded-0 border bg-transparent shadow-none">
                                                <div class="card-body">
                                                    <p class="fs-5 text-white">Order summary</p>
                                                    @php
                                                        $total = 0;
                                                    @endphp
                                                    @foreach ($cart as $cart)
                                                        <div class="my-3 border-top"></div>
                                                        <div class="d-flex align-items-center">
                                                            <a class="d-block flex-shrink-0" href="javascript:;">
                                                                <img src="{{ asset('products/'.$cart->product->image) }}" width="75" alt="Product">
                                                            </a>
                                                            <div class="ps-2">
                                                                <h6 class="mb-1"><a href="javascript:;">{{ $cart->product->productname }}</a></h6>
                                                                <div class="widget-product-meta"><span class="me-2">{{ $cart->product->unitprice }}</span><span class="">x {{ $cart->quantity }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $total += $cart->product->unitprice*$cart->quantity
                                                        @endphp
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                            <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                                <div class="card-body">
                                                    <p class="mb-2">Subtotal: <span class="float-end">{{ $total }}</span>
                                                    </p>
                                                    <p class="mb-2">Shipping: <span class="float-end">--</span>
                                                    </p>
                                                    <p class="mb-2">Taxes: <span class="float-end">$14.00</span>
                                                    </p>
                                                    <p class="mb-0">Discount: <span class="float-end">--</span>
                                                    </p>
                                                    <div class="my-3 border-top"></div>
                                                    <h5 class="mb-0">Order Total: <span class="float-end">{{ $total }}</span></h5>
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
@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
   $(function() {
 var $form = $(".require-validation");
 $('form.require-validation').bind('submit', function(e) {
     var $form = $(".require-validation"),
         inputSelector = ['input[type=email]', 'input[type=password]',
             'input[type=text]', 'input[type=file]',
             'textarea'
         ].join(', '),
         $inputs = $form.find('.required').find(inputSelector),
         $errorMessage = $form.find('div.error'),
         valid = true;
     $errorMessage.addClass('hide');
     $('.has-error').removeClass('has-error');
     $inputs.each(function(i, el) {
         var $input = $(el);
         if ($input.val() === '') {
             $input.parent().addClass('has-error');
             $errorMessage.removeClass('hide');
             e.preventDefault();
         }
     });
     if (!$form.data('cc-on-file')) {
         e.preventDefault();
         Stripe.setPublishableKey($form.data('stripe-publishable-key'));
         Stripe.createToken({
             number: $('.card-number').val(),
             cvc: $('.card-cvc').val(),
             exp_month: $('.card-expiry-month').val(),
             exp_year: $('.card-expiry-year').val()
         }, stripeResponseHandler);
     }
 });
 function stripeResponseHandler(status, response) {
     if (response.error) {
         $('.error')
             .removeClass('hide')
             .find('.alert')
             .text(response.error.message);
     } else {
         /* token contains id, last4, and card type */
         var token = response['id'];
         $form.find('input[type=text]').empty();
         $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
         $form.get(0).submit();
     }
 }
});
</script>
@endsection