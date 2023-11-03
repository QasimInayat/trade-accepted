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
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <small class="d-block mb-1 text-muted">Total Candidate</small>
                </div>
            </div>
            <div div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title mb-1">0</h4>
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
        <!--/ Website Analytics -->

        <!-- Sales Overview -->
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <small class="d-block mb-1 text-muted">Total Employer</small>
                </div>
            </div>
            <div div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title mb-1">0</h4>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <div class="progress w-100" style="height: 8px;">
                    <div class="progress-bar bg-warning" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--/ Sales Overview -->

        <!-- Revenue Generated -->
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <small class="d-block mb-1 text-muted">Total Jobs</small>
                </div>
            </div>
            <div div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title mb-1">0</h4>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <div class="progress w-100" style="height: 8px;">
                    <div class="progress-bar bg-success" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--/ Revenue Generated -->


      </div>
   </div>
</div>
</div>
@endsection
