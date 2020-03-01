@extends('visitor.container')
@section('links')
<link rel="stylesheet" type="text/css" href="{{asset('custom')}}/dashboard/css/dashboard.css">
@endsection
@section('content')

    @include('visitor.pages.inc.academy.profile')
    @include('visitor.inc.call-to-action')

@endsection
