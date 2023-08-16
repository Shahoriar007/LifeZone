@extends('admin.adminMaster')
@section('addCourseContent')

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Content Inputs</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Content Inputs</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Content Inputs</h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('add_course_content') }}">
                            @csrf

                            <div class="form-group mb-0 row">
                                <label class="col-form-label col-md-2">Input Content Information</label>
                                <div class="col-md-10">

                                    <div class="input-group mb-3">

                                        <input type="text" name="video_title" id="video_title" class="form-control" placeholder="Video Title"
                                            aria-label="Video Title" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="text" name="video_link" id="video_link" class="form-control" placeholder="Video Link"
                                            aria-label="Video Link" aria-describedby="basic-addon1">

                                    </div>

                                    {{-- <div class="input-group mb-3">

                                        <input type="text" name="course_id" id="course_id" value="1" class="form-control" placeholder="course_id"
                                            aria-label="course_id" aria-describedby="basic-addon1" hidden>

                                    </div> --}}

                                    <div class="input-group mb-3">

                                        <input type="text" name="content_summary_id" id="content_summary_id" value="{{ $id }}" class="form-control" placeholder="{{ $id }}"
                                            aria-label="content_summary_id" aria-describedby="basic-addon1" hidden>

                                    </div>

                                    <button class="btn btn-primary" type="submit">Save</button>

                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
