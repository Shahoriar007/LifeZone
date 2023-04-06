@extends('admin.adminMaster')
@section('courseCategoryList')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Course Category LIST</h4>
                
            </div>
            <div class="page-btn">
                <a href="" class="btn btn-added">
                    <img src="frontendAdmin/assets/img/icons/plus.svg" alt="img">Add New Category
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">

                    
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                        src="frontendAdmin/assets/img/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                        src="frontendAdmin/assets/img/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                        src="frontendAdmin/assets/img/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew" id="example">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks">Select</span>
                                    </label>
                                </th>
                                <th>Category Name</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($courseCategorys as $courseCategory)

                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="text-bolds">{{ $courseCategory->category_name }}</td>
                                
                               
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection