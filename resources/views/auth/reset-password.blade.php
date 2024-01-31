<!doctype html>
<html lang="en">
  <head>
  	<title>Banklnwza007x</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="{{asset ('authen/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">

	<link rel="stylesheet" href="{{asset ('authen/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
	
	<link rel="stylesheet" href="{{asset ('authen/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url('{{asset('authen/images/bg.jpg')}}');">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Reset password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
                   <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">


					  <div class="form-group">
		      			<input type="email" name="email" class="form-control" placeholder="Email" value="{{ $request->email }}" required >
                          <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                 
		      		</div>

                      <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
	            </div>

				<div class="form-group">
	              <input id="password-field" name="password_confirmation" type="password" class="form-control" placeholder="Password Confirm" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
	            </div>

	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Reset password</button>
	            </div>
	          
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

	</body>
</html>