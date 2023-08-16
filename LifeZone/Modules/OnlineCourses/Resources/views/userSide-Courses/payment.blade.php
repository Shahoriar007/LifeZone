@extends('user.master')
@section('payment')

<section class="pt-70 pb-70">
           <div class="container">
            <div class="col-lg-12 d-flex  align-items-center">
                <span style="color: #212529; font-size: 25px; font-weight: 700;">My Cart</span>
              </div>
           </div>
         </section>
        <!-- Start Courses Details Area -->
        <section class="courses-details-area pt-50 pb-70">
            <div class="container">

              <div class="row">
                <div class="col-lg-6 ">
                    <div class="card mb-3" style="max-width: 540px;">

                            <div class="card-body">

                            <div class="d-flex justify-content-between border-dash">
                                <h5 class="card-text">Product Price</h5>
                              <p class="card-text"><small class="text-muted" style="font-size: 20px;">৳ {{ $courseData->price }} </small></p>
                            </div>

                            <div class="d-flex justify-content-between border-dash mt-3 ">
                                <h5 class="card-text">Offered Total</h5>
                              <p class="card-text"><small class="text-muted" style="font-size: 20px;">৳ {{ $courseData->offer_price }} </small></p>
                            </div>
                            <div class="d-flex justify-content-between mt-3 ">
                                <h5 class="card-text">Total (Including VAT)</h5>
                                <p class="card-text"><small class="text-muted" style="font-size: 20px;font-weight: 700;color: black !important;">৳ {{ $courseData->offer_price }} </small></p>
                            </div>



                            </div>

                      </div>
                   </div>
                   <div class="col-lg-6 ">
                    <div class="card mb-3" style="max-width: 540px;">

                            <div class="card-body">

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                      <div class="col-md-3 col-3 d-flex justify-content-center align-items-center">
                                        <i class="bx bx-phone-call" style="font-size: 60px; color: green;"></i>
                                      </div>
                                      <div class="col-md-9 col-9">
                                        <div class="card-body">
                                          <p class="card-text" style="font-size: 20px;">To get agent helped</p>
                                          <h5 class="card-text">Call 16910</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                            <div class="text-center ">

                                    {{-- <div class="d-flex  justify-content-between align-items-center">
                                        <h4 style="color:white">Payment</h4>
                                        <h4 style="color:white">৳ {{ $courseData->offer_price }}</h4>
                                    </div> --}}


                                <form action="{{ route('confirm-course-payment', ['id' => $courseData->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="course_id" value="{{ $courseData->id }}">
                                    <input type="text" name="tr_id" placeholder="Transaction ID">
                                    <input type="hidden" name="offer_price" value="{{ $courseData->offer_price }}">
                                    <button type="submit" class="default-btn4 mt-1">Submit</button>
                                </form>
                            </div>

                            </div>

                      </div>
                   </div>
              </div>

            </div>
        </section>
        <!-- End Courses Details Area -->

@endsection
