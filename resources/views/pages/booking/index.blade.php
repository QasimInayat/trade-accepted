@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<div class="layout-page mb-5" style="margin-top:130px; margin-left:100px;">
    <div class="content-wrapper">
       <div class="container">
      <div class="card">
        <div class="card-header text-white" style="background-color:red;">
            <a href="{{ route('index') }}"><i style="font-size: 13px;" class="fa fa-chevron-left"></i>  <span><b>Back</b></span></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                   <div class="card shadow-lg p-3">
                      <div class="row">
                         <div class="col-md-12">
                            <h2 class="mt-3 text-danger text-center"><b>{{ $title ?? '' }}</b></h2>
                         </div>
                         <div class="col-md-12">
                         </div>
                      </div>
                <div class="table-responsive mt-4">
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
                             <td><span class="badge bg-warning">0 Days left</span></td>
                             <td><span class="badge bg-danger">Expired</span></td>
                             <td>06-4-2032</td>
                             <td><a target="blank"  href="{{route('booking.detail')}}"><button class="btn btn-danger btn-sm"> <i style="margin-right:5px" class="fa fa-dollar"></i>Detail </button></a></td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>Harry</td>
                              <td>5</td>
                              <td>Cell</td>
                              <td>1500</td>
                              <td><span class="badge bg-warning">10 Days left</span></td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>05-6-2032</td>
                              <td><a target="blank"  href="{{route('booking.detail')}}"><button class="btn btn-danger btn-sm"> <i style="margin-right:5px" class="fa fa-dollar"></i>Detail </button></a></td>
                            </tr>
                           <tr>
                              <td>3</td>
                              <td>Jack</td>
                              <td>2</td>
                              <td>Apple</td>
                              <td>2000</td>
                              <td><span class="badge bg-warning">0 Days left</span></td>
                              <td><span class="badge bg-danger">Expired</span></td>
                              <td>12-6-2032</td>
                              <td><a target="blank"  href="{{route('booking.detail')}}"><button class="btn btn-danger btn-sm"> <i style="margin-right:5px" class="fa fa-dollar"></i>Detail </button></a></td>
                            </tr>
                           <tr>
                              <td>4</td>
                              <td>Roy</td>
                              <td>5</td>
                              <td>Pro</td>
                              <td>1700</td>
                              <td><span class="badge bg-warning">32 Days left</span></td>
                              <td><span class="badge bg-success">Active</span></td>
                              <td>11-1-2032</td>
                              <td><a target="blank"  href="{{route('booking.detail')}}"><button class="btn btn-danger btn-sm"> <i style="margin-right:5px" class="fa fa-dollar"></i>Detail </button></a></td>
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
    </div>
</div>

</div>
@endsection

