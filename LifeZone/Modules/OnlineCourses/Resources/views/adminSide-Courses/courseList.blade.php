@extends('admin.adminMaster')
@section('courseList')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Course Category LIST</h4>
                
            </div>
            <div class="page-btn">
                <a href="{{ route('add_course_view') }}" class="btn btn-added">
                    <img src="frontendAdmin/assets/img/icons/plus.svg" alt="img">Add New Course
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
                                <th>Course Title</th>
                                <th>Course Category</th>
                                <th>Instructor</th>
                                <th>Price</th>
                                <th>Offer Price</th>
                                <th>Validity</th>
                                <th>Course Contents</th>

                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($courses as $item)

                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>

                                <td class="text-bolds">{{ $item->title }}</td>
                                <td class="text-bolds">{{ $item->courseCategoryName }}</td>
                                <td class="text-bolds">{{ $item->instructor }}</td>
                                <td class="text-bolds">{{ $item->price }}</td>
                                <td class="text-bolds">{{ $item->offer_price }}</td>
                                <td class="text-bolds">{{ $item->validity }}</td>

                                <td>
                                    <a class="me-3 btn btn-outline-info" href="{{ url('/course-content-list/' . $item->id) }}">
                                        Content
                                    </a>
                                </td>


                                <td>
                                    <a class="me-3" href="editpurchase.html">
                                        <img src="frontendAdmin/assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="{{ route('delete_course', ['id' => $item->id] ) }}">
                                        <img src="frontendAdmin/assets/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                                
                               
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
        document.addEventListener("DOMContentLoaded", function() {
      // Add a text input to each header cell for columns with indices 0, 2, and 3
      var table = document.querySelector("#example");
      var headerRow = table.querySelector("thead tr");
      var filterRow = headerRow.cloneNode(true);
      filterRow.classList.add("filters");
      headerRow.after(filterRow);
    
      var dataTable = new DataTable("#example", {
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function() {
          var api = this.api();
    
          // For each column with indices 0, 2, and 3
          api.columns([1, 2, 3,4,5,6,7,8]).eq(0).each(function(colIdx) {
            // Set the header cell to contain the input element
            var cell = filterRow.querySelectorAll("th")[colIdx];
            var title = cell.textContent;
            cell.innerHTML = '<input type="text" placeholder="' + title + '" />';
    
            // On every keypress in this input
            var input = cell.querySelector("input");
            input.addEventListener("change", function(e) {
              // Get the search value
              var value = this.value;
              this.setAttribute("title", value);
              var regexr = "({search})";
              var searchValue = value != "" ? regexr.replace("{search}", "(((" + value + ")))") : "";
    
              // Search the column for that value
              api.column(colIdx).search(searchValue, true, false).draw();
            });
    
            input.addEventListener("keyup", function(e) {
              e.stopPropagation();
              input.dispatchEvent(new Event("change"));
              input.setSelectionRange(cursorPosition, cursorPosition);
            });
          });
          
          // Hide the header cells for columns other than 0, 2, and 3
          var headerCells = filterRow.querySelectorAll("th");
          for (var i = 0; i < headerCells.length; i++) {
            if (![1, 2, 3,4,5,6,8].includes(i)) {
              headerCells[i].innerHTML = "<th></th>";
            }
          }
        }
      });
    });
    
       </script>

@endsection