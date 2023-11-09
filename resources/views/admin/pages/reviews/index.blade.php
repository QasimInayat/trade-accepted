@extends('admin.layout.admin-scaffold')
@push('title')
Reviews
@endpush
@section('content')
<div class="layout-page">
    <div class="content-wrapper">
       <div class="container-xxl flex-grow-1 container-p-y">
          <div class="card">
              <div class="row">
                  <div class="col-md-6">
                      <h2 class="card-header">Reviews</h2>
                    </div>
                    <div class="col-md-6">
                        <div style="float: right; margin-right: 15px;" class="mt-4">
                        </div>
                    </div>
                </div>
             <div class="card-body">
                <div class="table-responsive ">
                   <table class="table table-striped table-bordered" id="table">
                      <thead>
                         <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Reviews</th>
                            <th>Description</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Leorm</td>
                            <td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </td>
                            <td>Reference site about Lorem Ipsum, giving information generator.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jhon</td>
                            <td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </td>
                            <td>Reference site about Lorem Ipsum, giving information generator.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Willsom</td>
                            <td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> </td>
                            <td>Reference site about Lorem Ipsum, giving information generator.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Adam</td>
                            <td> <i class="fa fa-star text-warning"></i> <i class="fa fa-star"></i>  <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></td>
                            <td>Reference site about Lorem Ipsum, giving information generator.</td>
                        </tr>
                      </tbody>
                   </table>
                   </div>
             </div>
          </div>
       </div>
    </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script>
   $(document).ready(function () {
       $('#table').DataTable();
   });
</script>
@endpush
