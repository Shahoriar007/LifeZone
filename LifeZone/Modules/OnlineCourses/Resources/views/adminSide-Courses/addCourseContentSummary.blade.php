@extends('admin.adminMaster')
@section('addCourseContentSummary')

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Course Content Summary Inputs</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Summary Name Inputs</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Course Summary Name Inputs</h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('add_course_summary') }}">
                            @csrf
                            
                            <div class="form-group mb-0 row">
                                <label class="col-form-label col-md-2">Input Course Summary </label>
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        
                                        <input type="text" name="summary_title" id="summary_title" class="form-control" placeholder="Summary Title"
                                            aria-label="Summary Title" aria-describedby="basic-addon1">

                                        <input type="text" name="course_id" id="course_id" value="{{ $id }}" class="form-control" placeholder="Course Id"
                                            aria-label="Course Id" aria-describedby="basic-addon1" hidden>

                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
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