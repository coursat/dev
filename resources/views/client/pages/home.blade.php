@extends('client.container')
@section('title') Coursat @endsection
@section('content')
@include("client.pages.inc.home.header")
@include("client.pages.inc.home.explore-course")
@include("client.pages.inc.home.recent-courses")
@include("client.pages.inc.home.app-download")
@endsection
