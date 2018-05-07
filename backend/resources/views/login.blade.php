<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

	
	
	
</head>
<body>
	<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-default">
  					<div class="panel-heading">
  						<h1 class="panel-title"  style="text-align: center;"><b>Login</b></h1>
  					</div>
	  				<div class=" panel panel-body">	
						<form action="{{url('login')}}" method="POST" role="form">
							<!-- <legend>Login</legend> -->
							@if($errors->has('errorlogin'))
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
									{{$errors->first('errorlogin')}}
								</div>
							@endif
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control" id="email" placeholder="example@gmail.com" name="email" value="{{old('email')}}">
								@if($errors->has('email'))
									<p style="color:red">{{$errors->first('email')}}</p>

								@endif

							</div>

							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" id="password" placeholder="at least 8 character" name="password">
								@if($errors->has('password'))
									<p style="color:red">{{$errors->first('password')}}</p>
								@endif
							</div>
							<!-- <div class="form-group">
		   						<label for="remember">
		        				<input type="checkbox" name="remember" id="remember" value="1">Remember Me
		    					</label>
							</div> -->
						
							
							{!! csrf_field() !!}
							<button type="submit" class="btn btn-primary">submit</button>

						</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>