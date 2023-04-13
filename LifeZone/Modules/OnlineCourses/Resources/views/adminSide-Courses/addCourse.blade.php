@extends('admin.adminMaster')
@section('addCourse')

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Course Inputs</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Course Inputs</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Course Information Inputs</h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('add_course') }}">
                            @csrf
                            
                            <div class="form-group mb-0 row">
                                <label class="col-form-label col-md-2">Input Course Information</label>
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Course Title"
                                            aria-label="Course Title" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Course Slug"
                                            aria-label="Course Slug" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="textarea"  name="description" id="description" class="form-control" placeholder="Course Description"
                                            aria-label="Course Description" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="text" name="price" id="price" class="form-control" placeholder="Course Price"
                                            aria-label="Course Price" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="text" name="instructor" id="instructor" class="form-control" placeholder="Course Instructor"
                                            aria-label="Course Instructor" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="text" name="offer_price" id="offer_price" class="form-control" placeholder="Course Offer Price"
                                            aria-label="Course Offer Price" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="text" name="validity" id="validity" class="form-control" placeholder="Course Validity"
                                            aria-label="Course Validity" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="file" name="thumbnails" id="thumbnails" class="form-control" placeholder="Course Thumbnails"
                                            aria-label="Course Thumbnails" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="input-group mb-3">

                                        <select class="form-select" name="course_categories" id="course_categories">

                                        @foreach($courseCategorys as $courseCategory)
                                            
                                            <option value="{{ $courseCategory->id }}">{{ $courseCategory->category_name }}</option>

                                        @endforeach
                                               
                                        </select>

                                        
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


@section('ck-editor')

<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection