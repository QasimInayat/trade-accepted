@extends('admin.layout.admin-scaffold')
@push('title')
User List
@endpush
@section('content')
<div class="layout-page">
    <div class="content-wrapper">
       <div class="container-xxl flex-grow-1 container-p-y">
          <div class="card">
              <div class="row">
                  <div class="col-md-6">
                      <h2 class="card-header">Users</h2>
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>E-mail</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Leorm</td>
                            <td>Ipusm</td>
                            <td>ipsume321@gmail.com</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jhon</td>
                            <td>Divid</td>
                            <td>jhondivid68@gmail.com</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Willsom</td>
                            <td>Clark</td>
                            <td>clarkkal98@gmail.com</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Adam</td>
                            <td>Duck</td>
                            <td>adamduck@gmail.com</td>
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
