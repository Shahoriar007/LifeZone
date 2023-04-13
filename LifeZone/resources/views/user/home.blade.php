@extends('user.master')
@section('home')

    <!--Start Banner Slider-->
    <section>


        <div class="col-lg-12">
            <div class="banner-slides owl-carousel owl-theme">
                <div class="banner1">
                    <img src="{{ asset('assets/img/1755.jpg')}}" alt="">

                </div>
                <div class="banner1">
                    <img src="{{ asset('assets/img/1755.jpg')}}" alt="">

                </div>
                <div class="banner1">
                    <img src="{{ asset('assets/img/1755.jpg')}}" alt="">

                </div>
                <div class="banner1">
                    <img src="{{ asset('assets/img/1755.jpg')}}" alt="">

                </div>
            </div>

        </div>


    </section>
    <!--End Banner Slider -->


    <!--S-->
    <section class="all-courses   pt-3 pb-50">
        <div class="container px-4">
            <div class="row">
                <div class="section-title courses-arrow mt-5">
                    <h2>Student Life Counselling Workshop” এ রেজিষ্ট্রেশন চলছে!</h2>

                    <a href="#">
                        <button class="btn btn-outline-success">
                            <span class="sub-title">স্টুডেন্ট লাইফের যাবতীয় সমস্যা ও তার প্রতিকার নিয়ে সাইকোলজিক্যাল
                                কাউন্সেলিং মূলক স্পেশাল কোচিং প্রোগ্রাম!
                                (স্কুল-কলেজ-ইউনিভার্সিটি-মাদ্রাসা) <i class='bx bx-chevron-right'></i></span>
                        </button>


                    </a>


                </div>
                <div class="section-title text-left">
                    <h4>সার্ভিস লিস্ট:</h4>
                    <a href="service.html" class="default-btn">View All</a>
                </div>

            </div>

            <div class="row  justify-content-center">
                <div class="col-4">
                    <div class="card mb-4 color1">
                        <i class='bx bxl-discourse'></i>
                        <div class="card-body text-center">
                            <div class="card-title">Our Courses</div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="{{ route('courses') }}"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4 color2">
                        <i class='bx bxs-virus'></i>
                        <div class="card-body text-center">
                            <div class="card-title">Problem/Dieseas base Psychological Counselling</div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="category-courses.html"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4 color3">
                        <i class="fa-solid fa-school"></i>
                        <div class="card-body text-center">
                            <div class="card-title">Student Psychological Workshop</div>
                            <div class="card-text">School/college/university</div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="category-courses.html"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4 color4">
                        <i class="fa-solid fa-mosque"></i>
                        <div class="card-body text-center">
                            <div class="card-title">Student Psychological Workshop</div>
                            <div class="card-text">Madresha</div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="category-courses.html"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4 color5">
                        <i class="fa-solid fa-person-chalkboard"></i>
                        <div class="card-body text-center">
                            <div class="card-title">Teacher Psychological Workshop</div>
                            <div class="card-text">School/college/university</div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="category-courses.html"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4 color6">
                        <i class="fa-solid fa-user-nurse"></i>
                        <div class="card-body text-center">
                            <div class="card-title">Corporate Psychological Workshop</div>
                            <div class="card-text">For Staff/Employee</div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a href="category-courses.html"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--e-->


    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Courses</h2>
                <a href="{{ route('courses') }}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="courses-slides owl-carousel owl-theme">

                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}')}}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4..jpg') }}'2)}}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- End Courses Area -->




    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Courses</h2>
                <a href="courses.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="courses-slides owl-carousel owl-theme">

                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- End Courses Area -->

    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Courses</h2>
                <a href="courses.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="courses-slides owl-carousel owl-theme">

                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- End Courses Area -->
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Courses</h2>
                <a href="courses.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="courses-slides owl-carousel owl-theme">

                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- End Courses Area -->
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Courses</h2>
                <a href="courses.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="courses-slides owl-carousel owl-theme">

                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- End Courses Area -->
    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Courses</h2>
                <a href="courses.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="courses-slides owl-carousel owl-theme">

                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="courses-image">
                        <a href="single-courses.html" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                alt="image"></a>
                        <div class="percentage"><span>-20</span>%</div>

                    </div>

                    <div class="courses-content">


                        <h3><a href="single-courses.html" class="d-inline-block">Emotional Selfcare</a></h3>

                    </div>

                    <div class="courses-box-footer">
                        <ul>
                            <li class="students-number">
                                <i class='bx bx-time'></i> 16 hours
                            </li>

                            <li class="courses-lesson">
                                <i class='bx bx-book-open'></i> 6 lessons
                            </li>

                            <li class="courses-price">
                                <span>৳200</span>
                                ৳195
                            </li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- End Courses Area -->



    <!-- Start Team Area -->
    <section class="ateam-are courses-area pt1-100   pb-70">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Doctor</h2>
                <a href="doctor.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="team-slides owl-carousel owl-theme">
                <div class="single-instructor-box mb-30">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/img/team/1.jpg') }}" alt="image"></a>
                        <div class="prof-cat">Psychiatrist</div>
                    </div>

                    <div class="content">
                        <h3><a href="#">Mst. Hasina Khatun</a></h3>
                        <span>MBBS,MD</span>
                    </div>
                    <a href="https://doctorappointment.aveenirit.com/admin/appointment/page " class="default-btn1 mt-1">Book an Appointment</a>
                </div>
                <div class="single-instructor-box mb-30">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/img/team/1.jpg') }}" alt="image"></a>
                        <div class="prof-cat">Psychiatrist</div>
                    </div>

                    <div class="content">
                        <h3><a href="#">Mst. Hasina Khatun</a></h3>
                        <span>MBBS,MD</span>
                    </div>
                    <a href="https://doctorappointment.aveenirit.com/admin/appointment/page " class="default-btn1 mt-1">Book an Appointment</a>
                </div>
                <div class="single-instructor-box mb-30">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/img/team/1.jpg') }}" alt="image"></a>
                        <div class="prof-cat">Psychiatrist</div>
                    </div>

                    <div class="content">
                        <h3><a href="#">Mst. Hasina Khatun</a></h3>
                        <span>MBBS,MD</span>
                    </div>
                    <a href="https://doctorappointment.aveenirit.com/admin/appointment/page " class="default-btn1 mt-1">Book an Appointment</a>
                </div>
                <div class="single-instructor-box mb-30">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/img/team/1.jpg') }}" alt="image"></a>
                        <div class="prof-cat">Psychiatrist</div>
                    </div>

                    <div class="content">
                        <h3><a href="#">Mst. Hasina Khatun</a></h3>
                        <span>MBBS,MD</span>
                    </div>
                    <a href="https://doctorappointment.aveenirit.com/admin/appointment/page " class="default-btn1 mt-1">Book an Appointment</a>
                </div>
                <div class="single-instructor-box mb-30">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/img/team/1.jpg') }}" alt="image"></a>
                        <div class="prof-cat">Psychiatrist</div>
                    </div>

                    <div class="content">
                        <h3><a href="#">Mst. Hasina Khatun</a></h3>
                        <span>MBBS,MD</span>
                    </div>
                    <a href="https://doctorappointment.aveenirit.com/admin/appointment/page " class="default-btn1 mt-1">Book an Appointment</a>
                </div>


            </div>
        </div>

        <div id="particles-js-circle-bubble-3"></div>
    </section>
    <!-- End Team Area -->



    <!-- Start Testimonials Area -->
    <section class="testimonials-area pt1-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Clients Feedback </span>
                <h2>What Clients Says</h2>
            </div>

            <div class="testimonials-slides owl-carousel owl-theme">
                <div class="single-testimonials-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>

                    <div class="info">
                        <img src="{{ asset('assets/img/user1.jpg') }}" class="shadow rounded-circle" alt="image">
                        <h3>John Smith</h3>
                        <span>Patient of DR. MUNMUN JAHAN</span>
                    </div>
                </div>
                <div class="single-testimonials-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>

                    <div class="info">
                        <img src="{{ asset('assets/img/user1.jpg') }}" class="shadow rounded-circle" alt="image">
                        <h3>John Smith</h3>
                        <span>Patient of DR. MUNMUN JAHAN</span>
                    </div>
                </div>
                <div class="single-testimonials-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>

                    <div class="info">
                        <img src="{{ asset('assets/img/user1.jpg') }}" class="shadow rounded-circle" alt="image">
                        <h3>John Smith</h3>
                        <span>Patient of DR. MUNMUN JAHAN</span>
                    </div>
                </div>
                <div class="single-testimonials-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>

                    <div class="info">
                        <img src="{{ asset('assets/img/user1.jpg') }}" class="shadow rounded-circle" alt="image">
                        <h3>John Smith</h3>
                        <span>Patient of DR. MUNMUN JAHAN</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->


    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-left">
                <span class="sub-title">Health Blog</span>
                <h2>Our Latest Insights</h2>
                <a href="blog.html" class="default-btn"><i class='bx bx-book-reader icon-arrow before'></i><span
                        class="label">Read All</span><i class="bx bx-book-reader icon-arrow after"></i></a>
            </div>

            <div class="blog-slides owl-carousel owl-theme">

                <div class="single-blog-post mb-30">
                    <div class="post-image">
                        <a href="single-blog.html" class="d-block">
                            <img src="{{ asset('assets/img/blog/1.1.jpg') }}" alt="image">
                        </a>

                    </div>

                    <div class="post-content">
                        <h3><a href="single-blog.html" class="d-inline-block">Common Mental Health Changes Among
                                Adolescents In BD</a></h3>
                        <p class="textAlignment">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                            Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i
                                class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
                <div class="single-blog-post mb-30">
                    <div class="post-image">
                        <a href="single-blog.html" class="d-block">
                            <img src="{{ asset('assets/img/blog/1.1.jpg') }}" alt="image">
                        </a>

                    </div>

                    <div class="post-content">
                        <h3><a href="single-blog.html" class="d-inline-block">Common Mental Health Changes Among
                                Adolescents In BD</a></h3>
                        <p class="textAlignment">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                            Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i
                                class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
                <div class="single-blog-post mb-30">
                    <div class="post-image">
                        <a href="single-blog.html" class="d-block">
                            <img src="{{ asset('assets/img/blog/1.1.jpg') }}" alt="image">
                        </a>

                    </div>

                    <div class="post-content">
                        <h3><a href="single-blog.html" class="d-inline-block">Common Mental Health Changes Among
                                Adolescents In BD</a></h3>
                        <p class="textAlignment">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                            Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i
                                class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
                <div class="single-blog-post mb-30">
                    <div class="post-image">
                        <a href="single-blog.html" class="d-block">
                            <img src="{{ asset('assets/img/blog/1.1.jpg') }}" alt="image">
                        </a>

                    </div>

                    <div class="post-content">
                        <h3><a href="single-blog.html" class="d-inline-block">Common Mental Health Changes Among
                                Adolescents In BD</a></h3>
                        <p class="textAlignment">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                            Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i
                                class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
                <div class="single-blog-post mb-30">
                    <div class="post-image">
                        <a href="single-blog.html" class="d-block">
                            <img src="{{ asset('assets/img/blog/1.1.jpg') }}" alt="image">
                        </a>

                    </div>

                    <div class="post-content">
                        <h3><a href="single-blog.html" class="d-inline-block">Common Mental Health Changes Among
                                Adolescents In BD</a></h3>
                        <p class="textAlignment">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                            Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i
                                class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog Area -->




    <!-- Start video Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>Our Videos</h2>
                <a href="media.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">More Videos</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="courses-slides owl-carousel owl-theme">

                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="faq-video">
                        <img src="{{ asset('assets/img/courses/4.2.jpg') }}" alt="image">

                        <a href="https://www.youtube.com/watch?v=Le5GAGg-ZlA" class="video-btn popup-youtube"><i
                                class="bx bx-play"></i></a>
                    </div>


                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="faq-video">
                        <img src="{{ asset('assets/img/courses/4.2.jpg') }}" alt="image">

                        <a href="https://www.youtube.com/watch?v=Le5GAGg-ZlA" class="video-btn popup-youtube"><i
                                class="bx bx-play"></i></a>
                    </div>
                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="faq-video">
                        <img src="{{ asset('assets/img/courses/4.2.jpg') }}" alt="image">

                        <a href="https://www.youtube.com/watch?v=Le5GAGg-ZlA" class="video-btn popup-youtube"><i
                                class="bx bx-play"></i></a>
                    </div>


                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="faq-video">
                        <img src="{{ asset('assets/img/courses/4.2.jpg') }}" alt="image">

                        <a href="https://www.youtube.com/watch?v=Le5GAGg-ZlA" class="video-btn popup-youtube"><i
                                class="bx bx-play"></i></a>
                    </div>


                </div>
                <div class="single-courses-box without-box-shadow mb-30">
                    <div class="faq-video">
                        <img src="{{ asset('assets/img/courses/4.2.jpg') }}" alt="image">

                        <a href="https://www.youtube.com/watch?v=Le5GAGg-ZlA" class="video-btn popup-youtube"><i
                                class="bx bx-play"></i></a>
                    </div>


                </div>









            </div>
        </div>
    </section>
    <!-- End Video Area -->


    <!-- Start Partner Area -->
    <section class="partner-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Clients and Partners</h2>
            </div>

            <div class="partner-slides owl-carousel owl-theme">
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block">
                        <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                    </a>
                </div>


            </div>
        </div>
    </section>
    <!-- End Partner Area -->
 

@endsection