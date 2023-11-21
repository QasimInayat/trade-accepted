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
                            <p class=" text-center">My Vehicle Listing</p>
                         </div>
                      </div>
                <div class="table-responsive ">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse($vehicles as $index=>$item)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $item->title }}</td>
                                <td><img style="border-radius:10px;" height="70px" width="100px" src="{{ asset('upload/vehicle/'.mainImage($item->id)) }}" alt=""></td>
                                <td>${{ $item->price }}</td>
                                <td>{{ $item->make->name }}</td>
                                <td>{{ $item->model_id }}</td>
                                <td>
                                    <a href="{{ route('vehicle.edit',$item->slug) }}"><i class="fa fa-edit text-info"></i></a>&nbsp;|&nbsp;
                                    <a href="{{ route('vehicle.delete',$item->slug) }}"><i class="fa fa-trash text-danger"></i></a>&nbsp;|&nbsp;
                                    <a href="{{ route('detail',$item->slug) }}"><i class="fa fa-eye text-success"></i></a>
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
       </div>
    </div>
</div>

</div>
@endsection
