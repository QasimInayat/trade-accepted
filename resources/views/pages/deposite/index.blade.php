@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<div class="layout-page mb-5" style="margin-top:130px; margin-left: 20px;">
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
                              <th>Order ID</th>
                              <th>User </th>
                              <th>Vehicle</th>
                              <th>Images</th>
                              <th>Amount</th>
                              <th>Purchased At</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $index=>$transaction)
                          <tr>
                              <td>{{ ++$index }}</td>
                              <td>{{ 'OR-'.($transaction->id + 10000) }}</td>
                              <td>{{ isset($transaction->user) ? $transaction->user->full_name : '-' }}</td>
                              <td><a href="{{ route('detail',$transaction->vehicle->slug) }}">{{ isset($transaction->vehicle) ? $transaction->vehicle->title : '-' }}</a></td>
                             <td><a href="{{ route('detail',$transaction->vehicle->slug) }}"><img style="border-radius:10px;" height="70px" width="100px" src="{{ asset('upload/vehicle/'.mainImage($transaction->vehicle->id)) }}" alt=""></a></td>
                             <td>${{ number_format($transaction->amount) }}</td>
                               <td>{{ date('d M Y' , strtotime( $transaction->created_at ))}}</td>
                              <td><a target="blank"  href="{{route('deposite.detail',1)}}"><button class="btn btn-danger btn-sm"> <i style="margin-right:5px" class="fa fa-dollar"></i>Detail </button></a></td>
                            </tr>
                            @empty
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

