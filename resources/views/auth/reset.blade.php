@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Reset Password</div>
				<div class="panel-body">


                    {!!Form::open(['class'=>'form-horizontal','id'=>'reset'])!!}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <!-- email Form Input -->
                    <div class="form-group {{ $errors->has('email') ? 'has-error':''}}">
                        {!! Form::label('email','E-Mail Address:',['class'=>'control-label col-sm-4']) !!}
                        <div class="col-sm-4">
                            {!! Form::text('email',old('email'),['class'=>'form-control','Placeholder'=>'Email']) !!}
                            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <!-- password Form Input -->
                    <div class="form-group {{ $errors->has('password') ? 'has-error':''}}">
                        {!! Form::label('password','Password:',['class'=>'control-label col-sm-4']) !!}
                        <div class="col-sm-4">
                            {!! Form::password('password',['class'=>'form-control','Placeholder'=>'Password']) !!}
                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <!-- password Form Input -->
                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error':''}}">
                        {!! Form::label('password_confirmation','Confirm Password:',['class'=>'control-label col-sm-4']) !!}
                        <div class="col-sm-4">
                            {!! Form::password('password_confirmation',['class'=>'form-control','Placeholder'=>'Password Confirmation']) !!}
                            {!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </div>
                    {!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
