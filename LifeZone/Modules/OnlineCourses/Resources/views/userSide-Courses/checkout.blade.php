@extends('user.master')
@section('checkout')

<section class="pt-70 pb-70">
    <div class="container">
        <div class="col-lg-12 d-flex  align-items-center">
            <a href="single-courses.html">
                <i class="bx bx-arrow-back me-2" style="color: green; font-size: 30px;"></i>
                <span style="color: #212529; font-size: 25px; font-weight: 700;">Back</span>
            </a>
        </div>
    </div>
</section>

<!-- Start Courses Details Area -->
<section class="courses-details-area pt-50 pb-70">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('frontend/assets/img/courses/4.2.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $courseData->title }}</h5>
                                <p class="card-text">Main Price: <small class="text-muted" style="font-size: 20px;">৳ {{ $courseData->price }} </small>
                                </p>
                                <p class="card-text">Offer Price: <small class="text-muted" style="font-size: 20px;">৳ {{ $courseData->offer_price }} </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card mb-3" style="max-width: 540px;">

                    <div class="card-body">

                        <div class="d-flex justify-content-between ">
                            <h5 class="card-title">Product Price</h5>
                            <p class="card-text"><small class="text-muted" style="font-size: 20px;">৳ {{ $courseData->offer_price }} </small></p>
                        </div>

                        <div class="border-dash">
                            <div class="toggle_info  mt-3 mb-3">
                                <span><i class="bx bx-purchase-tag me-2" style="color: green;"></i><span
                                        style="color: gray;">Have a coupon?</span> <a data-bs-toggle="collapse"
                                        href="#collapseExample" role="button" aria-expanded="false"
                                        aria-controls="collapseExample">Click here to enter your code</a></span>
                            </div>
                            <div class="collapse mb-2" id="collapseExample">
                                <div class="card card-body">
                                    <form>
                                        <div class="form-group align-middle ">
                                            <div class="input-group "> <input type="text" class="form-control coupon"
                                                    name="" placeholder="Coupon code"> <span
                                                    class="input-group-append "> <button
                                                        class="btn btn-success btn-apply coupon ms-2 ">Apply</button>
                                                </span> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>




                        <div class="d-flex justify-content-between pt-3 ">
                            <h5 class="card-title">Total (Including VAT)</h5>
                            <p class="card-text"><small class="text-muted"
                                    style="font-size: 20px;font-weight: 700;color: black !important;">৳ {{ $courseData->offer_price }} </small>
                            </p>
                        </div>
                        <div class="text-center ">
                            <a href="{{ route('course-payment', ['id' =>$courseData->id ] ) }}" class="default-btn3 mt-1">Start Now</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Courses Details Area -->

@endsection