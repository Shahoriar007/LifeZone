@extends('user.master')
@section('allCourses')

<!-- Start Page Title Area -->
<div class="page-title-area  jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(frontend/assets/img/page-title/1.jpg);">
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Courses</li>
                    </ul>
                    <h2>Our Popular Online Courses</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

<!-- Start Courses Area -->
<section class="courses-area pt-100 pb-70">
    <div class="container">


        <div class="shorting-menu">

            <button class="filter" data-filter="all">All</button>

            @foreach($courseCategorys as $category)

            <button class="filter" data-filter=".{{$category->category_name}}">{{$category->category_name}}</button>

            @endforeach


        </div>

        <div class="shorting">
            <div class="row">


                @foreach($courses as $course)

                <div class="col-lg-4 col-md-6 mix Django">
                    <div class="single-courses-box without-box-shadow mb-30 ">
                        <div class="courses-image">
                            <a href="{{ route('course-details', ['id' => $course->id] ) }}" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                    alt="image"></a>
                            <!-- <div class="percentage"><span>-20</span>%</div> -->

                        </div>

                        <div class="courses-content">


                            <h3><a href="{{ route('course-details', ['id' => $course->id]) }}" class="d-inline-block">{{ $course->title }}</a></h3>
                            <p>{{ $course->description }}</p>
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
                                    <span>৳{{ $course->price }}</span>
                                    ৳{{ $course->offer_price }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach







                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="page-numbers">5</a>
                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- End Courses Area -->


@endsection