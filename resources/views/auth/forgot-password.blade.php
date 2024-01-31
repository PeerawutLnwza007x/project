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
	<body class="img js-fullheight" style="background-image: url(authen/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Forgot your password</h2>
				</div>
                <h6>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>
			</div>
			<x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                   <form method="POST" action="{{ route('password.email') }}">
        @csrf


					  <div class="form-group">
		      			<input type="email" name="email" class="form-control" placeholder="Email" required>
                        
		      		</div>
                     
                      <x-input-error :messages="$errors->get('email')" class="mt-2 txet-danger" />

	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Email Password Reset Link</button>
	            </div>
	           
                                <div class="text-right p-t-8 p-b-31">
									<a href="{{ route('login') }}" style="color: #fff">Sign in</a>
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