@extends('client.container')
@section('title') Courses List @endsection
@section('content')
@include('client.pages.inc.search.breadcrumb')
<div class="alice-bg section-padding-bottom">
    <div class="container">
      <div class="row no-gutters">
        <div class="col">
          <div class="job-listing-container">

            @include('client.pages.inc.search.result')
            @include('client.pages.inc.search.filter')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
