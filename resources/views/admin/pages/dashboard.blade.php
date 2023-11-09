@extends('admin.layout.admin-scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Website Analytics -->
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <small class="d-block mb-1 text-muted">No Of Users</small>
                </div>
            </div>
            <div div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title mb-1">20</h4>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <div class="progress w-100" style="height: 8px;">
                    <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <small class="d-block mb-1 text-muted">No of Active Listings</small>
                </div>
            </div>
            <div div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title mb-1">02</h4>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <div class="progress w-100" style="height: 8px;">
                    <div class="progress-bar bg-primary" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card p-3">
                <div class="card-title">
                    <h4><b>RECENT USERS</b></h4>
                </div>
                <table class="table table-striped table-bordered" >
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

             </table>
          </div>

        <!--/ Website Analytics -->

        <div class="col-md-12 mt-3">
            <div class="card p-3">
                <div class="card-title">
                    <h4><b>RECENT VEHICLES</b></h4>
                </div>
                <div class="table-responsive ">
                    <table class="table table-striped table-bordered">
                         <thead>
                             <th>ID</th>
                             <th>User</th>
                             <th>Image</th>
                             <th>Purchasing Date</th>
                             <th>Chasis #</th>
                             <th>Make</th>
                             <th>Model</th>
                             <th>Color</th>
                             <th>Year</th>
                             <th>Selling Price</th>
                             <th>Country</th>
                             <th>Port</th>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>Rywajur</td>
                                 <td><img style="height: 80px; width: 90px;" class="rounded" src="{{ asset('admin/assets/img/vehicle/toyota.jpg') }}" alt=""></td>
                                 <td>2018-06-26</td>
                                 <td>123456789</td>
                                 <td>Adara William</td>
                                 <td>Leonard Humphrey</td>
                                 <td>2018</td>
                                 <td>Black</td>
                                 <td>$500k</td>
                                 <td>USA</td>
                                 <td>San Francisco</td>
                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>xinonet</td>
                                 <td><img style="height: 80px; width: 90px;" class="rounded" src="{{ asset('admin/assets/img/vehicle/honda.jpg') }}" alt=""></td>
                                 <td>2004-06-27</td>
                                 <td>1234567</td>
                                 <td>Holmes Beasley</td>
                                 <td>Leonard Humphrey</td>
                                 <td>2015</td>
                                 <td>White</td>
                                 <td>$900k</td>
                                 <td>USA</td>
                                 <td>Hollywood</td>
                             </tr>
                             <tr>
                                 <td>3</td>
                                 <td>ruhelugu</td>
                                 <td><img style="height: 80px; width: 90px;" class="rounded" src="{{ asset('admin/assets/img/vehicle/auddi.jpg') }}" alt=""></td>
                                 <td>2014-06-25</td>
                                 <td>12345678</td>
                                 <td>Holmes Beasley</td>
                                 <td>Leonard Humphrey</td>
                                 <td>2013</td>
                                 <td>Grey</td>
                                 <td>$700k</td>
                                 <td>USA</td>
                                 <td>Atlanta</td>
                             </tr>
                         </tbody>
                    </table>
                 </div>
            </div>
        </div>





      </div>
   </div>
</div>
</div>
@endsection
