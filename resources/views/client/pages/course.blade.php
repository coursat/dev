@extends('client.container')
@section('content')
<div class="container">
@include('client.pages.inc.course.head')
</div>
@include("client.pages.inc.course.details-box")

<div class="space-20"></div>
<div class="space-20"></div>
<div class="container">
@include('client.pages.inc.course.content')
</div>

@endsection
