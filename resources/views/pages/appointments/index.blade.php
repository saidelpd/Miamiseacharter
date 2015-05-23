@extends('layouts.admin')
@section('content')
    <!-- PRIMARY CONTENT HEADING class="primary-content-heading clearfix">-->
        <h2 class="dashboard-title">Reservations</h2>
        <ul class="breadcrumb pull-left">
            <li><i class="fa fa-dashboard"></i> <a href="{{URL::route('admin.dashboard')}}">Dashboard</a></li>
            <li class="active"><i class="fa fa-calendar"></i> Reservations</li>
        </ul>
    </div>
    <!-- END PRIMARY CONTENT HEADING -->


    <div id='calendar'></div>
@endsection
