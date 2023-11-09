@extends('admin.layout.admin-scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
      <div class="card">
          <div class="row">
              <div class="col-md-6">
                  <h4 class="card-header">{{ $title ?? '' }}</h4>
                </div>
                <div class="col-md-6">
                    <div style="float: right; margin-right: 15px;" class="mt-4">
                    </div>
                </div>
            </div>
         <div class="card-body">
            <div class="table-responsive ">
               <table class="table table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>User</th>
                        <th>Purchasing Date</th>
                        <th>Chasis #</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Year</th>
                        <th>Selling Price</th>
                        <th>Country</th>
                        <th>Port</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rywajur</td>
                            <td>2018-06-26</td>
                            <td>123456789</td>
                            <td>Adara William</td>
                            <td>Leonard Humphrey</td>
                            <td>2018</td>
                            <td>Black</td>
                            <td>$500k</td>
                            <td>USA</td>
                            <td>San Francisco</td>
                            <td><i class="fa fa-edit text-info"></i>&nbsp;|&nbsp;<i class="text-danger fa fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>xinonet</td>
                            <td>2004-06-27</td>
                            <td>1234567</td>
                            <td>Holmes Beasley</td>
                            <td>Leonard Humphrey</td>
                            <td>2015</td>
                            <td>White</td>
                            <td>$900k</td>
                            <td>USA</td>
                            <td>Hollywood</td>
                            <td><i class="fa fa-edit text-info"></i>&nbsp;|&nbsp;<i class="text-danger fa fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ruhelugu</td>
                            <td>2014-06-25</td>
                            <td>12345678</td>
                            <td>Holmes Beasley</td>
                            <td>Leonard Humphrey</td>
                            <td>2013</td>
                            <td>Grey</td>
                            <td>$700k</td>
                            <td>USA</td>
                            <td>Atlanta</td>
                            <td><i class="fa fa-edit text-info"></i>&nbsp;|&nbsp;<i class="text-danger fa fa-trash"></i></td>
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
