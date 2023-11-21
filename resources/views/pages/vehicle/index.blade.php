@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<div class="layout-page mb-5" style="margin-top:130px; margin-left:100px;">
    <div class="content-wrapper">
       <div class="container">
         <div class="card shadow-lg p-3">
          <div class="row">
              <div class="col-md-6">
                  <h2 class="mt-3">My Listing</h2>
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
                        <th>Title</th>
                        <th>Price</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Mileage</th>
                        <th>Transmission</th>
                        <th>ExteriorColor</th>
                        <th>Interior Color</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Trim</th>
                        <th>Fuel</th>
                        <th>Year</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse($vehicles as $index=>$item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->title }}</td>
                            <td>${{ $item->price }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->country_id }}</td>
                            <td>{{ $item->city_id }}</td>
                            <td>{{ $item->mileage }}</td>
                            <td>{{ $item->transmission }}</td>
                            <td>{{ $item->exterior_color }}</td>
                            <td>{{ $item->interior_color }}</td>
                            <td>{{ $item->make->name }}</td>
                            <td>{{ $item->model_id }}</td>
                            <td>{{ $item->trim }}</td>
                            <td>{{ $item->fuel }}</td>
                            <td>{{ $item->year }}</td>
                            <td>
                                <a href="{{ route('vehicle.edit',$item->slug) }}"><i class="fa fa-edit text-info"></i></a>&nbsp;|&nbsp;
                                <a href="{{ route('vehicle.delete',$item->slug) }}"><i class="fa fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                        @empty
                        <td colspan="17" class="text-center">No Data Available </td>
                        @endforelse
                    </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
