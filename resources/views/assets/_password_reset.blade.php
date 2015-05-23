<div class="panel panel-default">
    <div class="panel-heading">Reset Password</div>
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            {!!Form::open(['class'=>'form-horizontal','id'=>'form1','route'=>'password.email'])!!}
            <!-- email Form Input -->
            <div class="form-group {{ $errors->has('email') ? 'has-error':''}}">
                {!! Form::label('email','E-Mail Address:',['class'=>'control-label col-sm-4']) !!}
                <div class="col-sm-4">
                    {!! Form::text('email',old('email'),['class'=>'form-control','Placeholder'=>'Email']) !!}
                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                       <i class="fa fa-envelope-o"></i> Send Password Reset Link
                    </button>
                </div>
            </div>
            {!!Form::close()!!}

    </div>
</div>