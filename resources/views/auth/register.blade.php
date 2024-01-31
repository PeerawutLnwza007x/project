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
					<h2 class="heading-section">sign up</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
                   <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
		      			<input type="name" name="name" class="form-control" placeholder="Name" required>
                         
		      		</div>

					  <div class="form-group">
		      			<input type="username" name="username" class="form-control" placeholder="Username" required>
                         
		      		</div>

					  <div class="form-group">
		      			<input type="phone" name="phone" class="form-control" placeholder="Phone" required>
                         
		      		</div>

					  <div class="form-group">
		      			<input type="email" name="email" class="form-control" placeholder="Email" required>
                         
		      		</div>

                      <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                 
	            </div>

				<div class="form-group">
	              <input id="password-field" name="password_confirmation" type="password" class="form-control" placeholder="Password Confirm" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                 
	            </div>

	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
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