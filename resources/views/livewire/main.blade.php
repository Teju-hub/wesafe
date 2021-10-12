<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		 <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		@livewireStyles
	</head>
	<body>
		<nav class="navbar navbar-expand-lg bg-primary py-2 text-white">
			<h2>Login Page using Laviwire</h2>
		</nav>
		<div class="container">
			<div class="row mt-5 justify-content-center">
				<div class="mt-4 col-sm-8">
					<div class="card">
						<div class="card-header">
							<h4 style="text-align:center">Welcome...</h4>
						</div>
						<div class="card-body">
						@livewire('loginpage')
						</div>
						<div class="card-footer">
						<p class="text-muted">© All Rights Reserved </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		 <script src="{{ asset('js/bootstrap.min.js')}}"></script>
		@livewireScripts
	</body>
</html>