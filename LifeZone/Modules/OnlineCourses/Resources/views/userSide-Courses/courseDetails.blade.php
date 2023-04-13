@extends('user.master')
@section('courseDetails')

<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="courses-2-columns-style-1.html">Courses</a></li>
                <li>{{ $courseDetails[0]->title }}</li>
            </ul>
            <h2>{{ $courseDetails[0]->title }}</h2>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Courses Details Area -->
<section class="courses-details-area pt-100 pb-70">
    <div class="container">


        <div class="row">
            <div class="col-lg-8 courses-content">
                <div class="courses-details-desc">

                    <div>
                        <p>{{ $courseDetails[0]->description }}</p>
                    </div>

                    @if(!empty($content[0])) 
                       <h3>Summaries</h3>
                    @endif
                    

                    <div class="faq-accordion faq-accordion-style-two">
                        <ul class="accordion">

                            @foreach($content as $contentSummary)

                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ $contentSummary->summary_title }}
                                </a>

                                <div class="accordion-content">

                                @php

                                    $videos = Modules\OnlineCourses\Entities\CourseContent::where('content_summary_id', '=', $contentSummary->id)->get();

                                @endphp

                                    @foreach($videos as $video)

                                    <div class="course-curriculum-content d-sm-flex justify-content-between align-items-center">
                                        <div class="course-curriculum-info">
                                            <i class="bx bxl-youtube play-btn"></i>
                                            <h4>{{ $video->video_title }} </h4>
                                        </div>
                                        <div class="course-curriculum-meta">
                                            
                                            <span class="time"><a href="{{ $video->video_link }}"
                                                    class="video-btn popup-youtube button">
                                                    Preview
                                                </a>
                                            </span>
                                        </div>

                                    </div>

                                    @endforeach

                                </div>
                            </li>

                            @endforeach


                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 courses-content-video">
                <div class="courses-sidebar-information ">
                    <div class="faq-video">
                        <img src="{{asset('assets/img/courses/4.2.jpg')}}" alt="image">

                        <a href="https://www.youtube.com/watch?v=Le5GAGg-ZlA" class="video-btn popup-youtube"><i
                                class="bx bx-play"></i></a>
                    </div>
                    <div class="content text">
                        <div class="courses-price1 my-3">
                            <span>৳{{ $courseDetails[0]->price }}</span>
                            ৳{{ $courseDetails[0]->offer_price }}
                        </div>
                        <div class="text-center">
                            <a href="{{ route('course-checkout', ['id' => $courseDetails[0]->id] ) }}" class="default-btn2 mt-1">Enroll Now</a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <ul>
                            <li>
                                <span> Category:</span>
                                {{ $courseDetails[0]->courseCategoryName }}
                            </li>
                            <li>
                                <span> Enrollment Validity:</span>
                                {{ $courseDetails[0]->validity }}
                            </li>

                        </ul>
                    </div>

                </div>


            </div>

        </div>
    </div>
</section>
<!-- End Courses Details Area -->

@endsection