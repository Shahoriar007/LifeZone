@extends('user.master')
@section('allProblemCounselling')

<!-- Start Page Title Area -->
<div class="page-title-area  jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(frontend/assets/img/page-title/1.jpg);">
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Courses</li>
                    </ul>
                    <h2>Problem/Dieseas Base Psychological Counselling</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

<!-- Start Courses Area -->
<section class="courses-area pt-100 pb-70">
    <div class="container">


        <div class="shorting">
            <div class="row">

            @foreach($posts as $post)

                <div class="col-lg-4 col-md-6 mix Django">
                    <div class="single-courses-box without-box-shadow mb-30 ">
                    <div class="courses-image">
                            <a href="" class="d-block"><img src="{{ asset('assets/img/courses/4.2.jpg') }}"
                                    alt="image"></a>
                            <!-- <div class="percentage"><span>-20</span>%</div> -->

                        </div>

                        <div class="courses-content">


                            <h3><a href="{{ route('problem_counselling_details') }}" class="d-inline-block">{{ $post->pc_title }}</a></h3>
                            <p>{{ Str::limit($post->pc_description, 100) }}</p>
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
