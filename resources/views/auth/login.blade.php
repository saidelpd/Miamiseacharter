@extends('layouts.blank')
@section('content')
        <div class="content-box-bordered login-box">
            <h1>Log in to your account</h1>
            {!!Form::open(['class'=>'form-horizontal'])!!}
            <!-- email Form Input -->
            <div class="form-group @if($errors->first('email')) has-error @endif">
                <div class="col-sm-12">
                    {!! Form::text('email',old('email'),['class'=>'form-control','Placeholder'=>'Email Address'])!!}
                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <!-- Password Form Input -->
            <div class="form-group @if($errors->first('password')) has-error @endif">
                <div class="col-sm-12">
                    {!! Form::password('password',['class'=>'form-control','Placeholder'=>'Password'])!!}
                    {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-12">
                        <label class="fancy-checkbox">
                            <input type="checkbox">
                            <span>Remember me</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>
                    <div class="col-md-5 text-right">
                        <a href="{{ url('/password/email') }}">
                            <em>forgot password?</em>
                        </a>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn-link btn-login-help"><i class="icon ion-help-circled"></i></button>
        </div>
@endsection
