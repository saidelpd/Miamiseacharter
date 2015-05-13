@extends('layouts.blank')

@section('content')


        <div class="content-box-bordered login-box">
            <h1>Log in to your account</h1>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3b" class="control-label sr-only">Email</label>
                    <div class="col-sm-12">
                            <input type="email" class="form-control" id="inputEmail3b" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3b" class="control-label sr-only">Password</label>
                    <div class="col-sm-12">
                            <input type="password" class="form-control" id="inputPassword3b" placeholder="Password">
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
                        <a href="#">
                            <em>forgot password?</em>
                        </a>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn-link btn-login-help"><i class="icon ion-help-circled"></i></button>
        </div>




<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
