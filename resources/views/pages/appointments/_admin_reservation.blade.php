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
            <div class="col-sm-5">
                {!! Form::select('service',$services,null,['class'=>'form-control']) !!}
                {!! $errors->first('service','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Date Form Input -->
        <div class="form-group {{ $errors->has('app_date') ? 'has-error':''}}">
            {!! Form::label('date','Select Date:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-5">
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
            <div class="col-sm-5">
                {!! Form::select('hours',['Select One'],null,['class'=>'form-control','disabled']) !!}
                {!! $errors->first('hours','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('first') ? 'has-error':''}}">
            {!! Form::label('first','First Name:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('first',null,['class'=>'form-control','Placeholder'=>'Customer First Name']) !!}
                {!! $errors->first('first','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- last Form Input -->
        <div class="form-group {{ $errors->has('last') ? 'has-error':''}}">
            {!! Form::label('last','Last Name:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('last',null,['class'=>'form-control','Placeholder'=>'Customer Last Name']) !!}
                {!! $errors->first('last','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- phone Form Input -->
        <div class="form-group {{ $errors->has('phone') ? 'has-error':''}}">
            {!! Form::label('phone','Phone:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('phone',null,['class'=>'form-control','Placeholder'=>'Customer Phone']) !!}
                {!! $errors->first('phone','<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
</div>