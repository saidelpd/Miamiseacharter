@extends('layouts.admin')
@section('content')

    <!-- PRIMARY CONTENT HEADING-->
    <div class="primary-content-heading clearfix">
        <h2 class="dashboard-title">Reservations</h2>
        <ul class="breadcrumb pull-left">
            <li><i class="fa fa-dashboard"></i> <a href="{{URL::route('admin.dashboard')}}">Dashboard</a></li>
            <li class="active"><i class="fa fa-calendar"></i> Reservations</li>
        </ul>
    </div>
    <!-- END PRIMARY CONTENT HEADING -->
    <div class="row">
        <div class="col-sm-10">
            <div class="alert alert-danger payment-errors" role="alert" style="display: none">
            </div>
        </div>
    </div>
    <div class="widget-content">
       <small> <em class="text-danger">* All Fields Are Required</em></small>
        {!!Form::open(['class'=>'form-horizontal','id'=>'billing-form'])!!}
        <div class="row">
            <div class="col-sm-5">
                @include('pages.appointments._admin_reservation')
            </div>
            <div class="col-sm-5">
                @include('pages.appointments._admin_payment')
            </div>
        </div>
        {!!Form::close()!!}
    </div>

@endsection
