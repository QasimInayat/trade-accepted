@extends('admin.layout.admin-scaffold')
@push('title')
Transaction
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
    @if(Session::has('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <span class="alert-icon text-success me-2">
          <i class="fa fa-check"></i>
        </span>
        {{Session::get('success')}}
      </div>
      @endif
      <div class="card">
          <div class="row">
              <div class="col-md-6">
                  <h2 class="card-header">Transaction</h2>
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
                     <tr>
                        <th>ID</th>
                        <th>User </th>
                        <th>Order ID</th>
                        <th>Package</th>
                        <th>Subtotal</th>
                        <th>Expiry</th>
                        <th>Status</th>
                        <th>Purchased At</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                    <tr>
                       <td>1</td>
                       <td>John</td>
                       <td>9</td>
                       <td>Mac</td>
                       <td>1000</td>
                       <td><span class="badge bg-label-warning">12 Days left</span></td>
                       <td><span class="badge bg-label-danger">Expired</span></td>
                       <td>06-4-2032</td>
                       <td><a target="blank" class="btn btn-primary btn-sm" href="{{ route('admin.transaction.detail') }}"><i style="margin-right:5px" class="fa fa-dollar"></i> Detail</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Harry</td>
                        <td>5</td>
                        <td>Cell</td>
                        <td>1500</td>
                        <td><span class="badge bg-label-warning">10 Days left</span></td>
                        <td><span class="badge bg-label-success">Active</span></td>
                        <td>05-6-2032</td>
                        <td><a target="blank" class="btn btn-primary btn-sm" href="{{ route('admin.transaction.detail') }}"><i style="margin-right:5px" class="fa fa-dollar"></i> Detail</a></td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>Jack</td>
                        <td>2</td>
                        <td>Apple</td>
                        <td>2000</td>
                        <td><span class="badge bg-label-warning">22 Days left</span></td>
                        <td><span class="badge bg-label-danger">Expired</span></td>
                        <td>12-6-2032</td>
                        <td><a target="blank" class="btn btn-primary btn-sm" href="{{ route('admin.transaction.detail') }}"><i style="margin-right:5px" class="fa fa-dollar"></i> Detail</a></td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>Roy</td>
                        <td>5</td>
                        <td>Pro</td>
                        <td>1700</td>
                        <td><span class="badge bg-label-warning">32 Days left</span></td>
                        <td><span class="badge bg-label-success">Active</span></td>
                        <td>11-1-2032</td>
                        <td><a target="blank" class="btn btn-primary btn-sm" href="{{ route('admin.transaction.detail') }}"><i style="margin-right:5px" class="fa fa-dollar"></i> Detail</a></td>
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
