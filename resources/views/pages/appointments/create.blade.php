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
    <div class="row padding_25">
        <div class="col-sm-12">
            <!-- BASIC INPUT -->
            <div class="widget">
                <div class="widget-header clearfix">
                    <h3>
                        <span>Add Reservation</span>
                    </h3>
                </div>
                <div class="widget-content">
                    @include('assets._success',['message'=>'Your Profile Was Update Successfully'])
                    {!!Form::model($user,['class'=>'form-horizontal','id'=>'userProfile'])!!}
                    <!-- first Form Input -->
                    <div class="form-group {{ $errors->has('first') ? 'has-error':''}}">
                        {!! Form::label('first','First Name:',['class'=>'control-label col-sm-4']) !!}
                        <div class="col-sm-4">
                            {!! Form::text('first',null,['class'=>'form-control','Placeholder'=>'First']) !!}
                            {!! $errors->first('first','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <!-- last Form Input -->
                    <div class="form-group {{ $errors->has('last') ? 'has-error':''}}">
                        {!! Form::label('last','LastName:',['class'=>'control-label col-sm-4']) !!}
                        <div class="col-sm-4">
                            {!! Form::text('last',null,['class'=>'form-control','Placeholder'=>'Last']) !!}
                            {!! $errors->first('last','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <!-- email Form Input -->
                    <div class="form-group">
                        {!! Form::label('email','Email:',['class'=>'control-label col-sm-4']) !!}
                        <div class="col-sm-4">
                            {!! Form::text('email',null,['class'=>'form-control','Placeholder'=>'Email','readonly']) !!}
                            <span class="help-block"><small>Click <a href="#">here</a> to request an email change</small></span>
                        </div>
                    </div>
                    <!-- phone Form Input -->
                    <div class="form-group {{ $errors->has('phone') ? 'has-error':''}}">
                        {!! Form::label('phone','Phone:',['class'=>'control-label col-sm-4']) !!}
                        <div class="col-sm-4">
                            {!! Form::text('phone',null,['class'=>'form-control','Placeholder'=>'Phone']) !!}
                            {!! $errors->first('phone','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="clearfix">
                        <button class="btn btn-primary pull-right" type="submit"><i class="fa fa-plus-circle"></i> Create</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>

        </div>
    </div>


@endsection
