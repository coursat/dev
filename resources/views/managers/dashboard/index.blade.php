@extends('managers.container')
@section('links')
<link rel="stylesheet" type="text/css" href="{{asset('custom')}}/dashboard/css/dashboard.css">
@endsection
@section('content')
    <!-- Breadcrumb -->
@include('managers.dashboard.breadcrumb')
      <div class="alice-bg section-padding-bottom">
        <div class="container no-gliters">
          <div class="row no-gliters">
            <div class="col">
              <div class="dashboard-container">
                @include('managers.dashboard.content')
                @include('managers.dashboard.sidebar')
              </div>
            </div>
          </div>
        </div>
      </div>

      @endsection
