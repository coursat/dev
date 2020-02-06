@extends('client.container')
@section('links')
<link rel="stylesheet" type="text/css" href="{{asset('custom')}}/dashboard/css/dashboard.css">
@endsection
@section('content')
@include('client.pages.inc.academy.profile')
@include('client.inc.call-to-action')
@endsection
