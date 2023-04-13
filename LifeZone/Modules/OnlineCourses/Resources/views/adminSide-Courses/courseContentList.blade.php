@extends('admin.adminMaster')
@section('courseContentList')

@section('contentList_Style')

<style>
button.accordion {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    border: none;
    border-bottom: 1px solid #ddd;
    outline: none;
    transition: background-color 0.2s ease-out;
}

button.accordion:hover {
    background-color: #ddd;
}

button.accordion span:first-child {
    flex-grow: 1;
}

button.accordion span.icon {
    margin-left: 10px;
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>

@endsection

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Course Content LIST</h4>

            </div>



            <div class="page-btn">
                <a href="{{ route('add_course_summary_view', ['id' => $id] ) }}" class="btn btn-added">
                    <img src="{{ asset('frontendAdmin/assets/img/icons/plus.svg')}}" alt="img">Add New Course Summary
                </a>
            </div>


        </div>

        <div class="card">
            <div class="card-body">

                @if(!empty($contents[0]))

                @foreach($contents as $summary)

                <button class="accordion">
                    <span>{{ $summary->summary_title }}</span>
                    <span class="icon">


                        <a href="{{ route('delete_course_summary', ['id' => $summary->id] ) }}"><i
                                class="fa fa-trash"></i></a>


                    </span>
                </button>

                @php

                $videos = Modules\OnlineCourses\Entities\CourseContent::where('content_summary_id', '=', $summary->id)->get();

                @endphp



                <div class="panel">

                    @foreach($videos as $video)

                    <a href="{{ $video->video_link }}" class="video-btn popup-youtube button">

                        <h4>{{ $video->video_title }} </h4>
                    </a>

                    <a href="{{ route('delete_course_content', ['id' => $video->id]) }}">
                        <i class="fa fa-trash"></i>
                    </a>



                    <hr>




                    @endforeach

                    <a href="{{ url('/add-course-content/' . $summary->id) }}"> Add <i class="fa fa-plus"></i></a>

                </div>



                @endforeach

                @endif

            </div>
        </div>

    </div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

@endsection