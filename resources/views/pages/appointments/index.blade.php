@extends('layouts.admin')
@section('content')
    <!-- PRIMARY CONTENT HEADING -->
    <div class="primary-content-heading clearfix">
    <h2 class="dashboard-title">Reservations</h2>
    <ul class="breadcrumb pull-left">
        <li><i class="fa fa-dashboard"></i> <a href="{{URL::route('admin.dashboard')}}">Dashboard</a></li>
        <li class="active"><i class="fa fa-calendar"></i> Reservations</li>
    </ul>
    </div>
    <!-- END PRIMARY CONTENT HEADING -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <a href="{{URL::route('appointments.create')}}" class="btn btn-primary pull-right"><i
                        class="fa fa-calendar"> Add Reservation</i></a>
        </div>
    </div>
    <div class="row padding_25">
        <div class="col-sm-12">
            <!-- BASIC INPUT -->
            <div class="widget">
                <div class="widget-header clearfix">
                    <h3>
                        <span>Calendar</span>
                    </h3>
                </div>
                <div class="widget-content">
                    <div id='calendar'></div>
                </div>
            </div>

        </div>
    </div>


@endsection
