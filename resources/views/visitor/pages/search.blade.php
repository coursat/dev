@extends('visitor.container')
@section('title') Courses List @endsection
@section('content')
@include('visitor.pages.inc.search.breadcrumb')
<div class="alice-bg section-padding-bottom">
    <div class="container">
      <div class="row no-gutters">
        <div class="col">
          <div class="job-listing-container">

            @include('visitor.pages.inc.search.result')
            @include('visitor.pages.inc.search.filter')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
