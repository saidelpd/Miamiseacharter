<div class="widget">
    <div class="widget-header clearfix">
        <h3><i class="icon ion-android-storage"></i>
            <span>CREATE RESERVATION</span>
        </h3>
    </div>
    <div class="widget-content">
        <!-- service Form Input -->
        <div class="form-group {{ $errors->has('service') ? 'has-error':''}}">
            {!! Form::label('service','Service:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-7">
                {!! Form::select('service',$services,null,['class'=>'form-control']) !!}
                {!! $errors->first('service','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Date Form Input -->
        <div class="date_picker_form form-group {{ $errors->has('app_date') ? 'has-error':''}}">
            {!! Form::label('date','Select Date:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-7">
                <div class="input-group date">
                    {!! Form::text('app_date',$date,['class'=>'form-control','id'=>'app_date','readonly']) !!}
                                        <span class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </span>
                </div>
                {!! $errors->first('app_date','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('hours') ? 'has-error':''}}">
            {!! Form::label('hours','Select Hours:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-7">
                {!! Form::select('hours',['Select One'],null,['class'=>'form-control','disabled','id'=>'hours']) !!}
                {!! $errors->first('hours','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('first') ? 'has-error':''}}">
            {!! Form::label('first','First Name:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-7">
                {!! Form::text('first',old('first'),['class'=>'form-control','Placeholder'=>'Customer First Name']) !!}
                {!! $errors->first('first','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- last Form Input -->
        <div class="form-group {{ $errors->has('last') ? 'has-error':''}}">
            {!! Form::label('last','Last Name:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-7">
                {!! Form::text('last',null,['class'=>'form-control','Placeholder'=>'Customer Last Name']) !!}
                {!! $errors->first('last','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- phone Form Input -->
        <div class="form-group {{ $errors->has('phone') ? 'has-error':''}}">
            {!! Form::label('phone','Phone:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-7">
                {!! Form::text('phone',null,['class'=>'form-control','Placeholder'=>'Customer Phone']) !!}
                {!! $errors->first('phone','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- email Form Input -->
        <div class="form-group {{ $errors->has('email') ? 'has-error':''}}">
            {!! Form::label('email','Email:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-7">
                {!! Form::text('email',null,['class'=>'form-control','Placeholder'=>'Email']) !!}
                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- code Form Input -->
        <div class="form-group {{ $errors->has('user_code') ? 'has-error':''}}">
            {!! Form::label('code','Reservation Code:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-4">
                <?php
                $code = null;
                if($user) $code = $user->code;
                ?>
                {!! Form::text('user_code',$code,['class'=>'form-control','Placeholder'=>'Code']) !!}
                {!! $errors->first('user_code','<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
</div>