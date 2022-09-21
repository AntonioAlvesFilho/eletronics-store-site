<!DOCTYPE html>
<html lang="pt-br">

<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<link rel="stylesheet" href="/css/styles.css">
				<link rel="stylesheet" href=".">
				<script src="/js/scripts.js"></script>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
								integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link
								ref="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
								rel="stylesheet">

				<title> @yield('title') </title>
</head>

<body>
				<header>





								<nav class="@yield('test') navbar navbar-dark bg-dark">


												<div class="container-fluid ">
																<a class="navbar-brand" href="/"><img class="logo" src="/img/logo.png" alt=""></a>
																<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
																				data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
																				aria-label="Toggle navigation">
																				<span class="navbar-toggler-icon"></span>
																</button>
																<div class="collapse navbar-collapse" id="navbarNavDropdown">
																				<ul class="navbar-nav">
																								<li class="nav-item">
																												<a class="nav-link active" aria-current="page" href="/">Home</a>
																								</li>
																								@guest
																												<li class="nav-item">
																																<a class="nav-link active" aria-current="page" href="/login">Login</a>
																												</li>

																												<li class="nav-item">
																																<a class="nav-link active" aria-current="page" href="/register">Register</a>
																												</li>

																								@endguest

																								@auth

																												<li class="nav-item">
																																<form action="/logout" method="POST">
																																				@csrf
																																				<a class="nav-link" href="/logout"
																																								onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
																																</form>
																												</li>

																												<li class="nav-item">
																																<a class="nav-link" href="/product/products">Product Manager</a>
																												</li>

																								@endauth


																								<li class="nav-item dropdown">
																												<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
																																aria-expanded="false">
																																Consoles
																												</a>
																												<ul class="dropdown-menu">
																																<li><a class="dropdown-item" href="/products/12">Sony</a></li>
																																<li><a class="dropdown-item" href="/products/4">Microsoft</a></li>
																																<li><a class="dropdown-item" href="/products/3">Valve</a></li>
																																<li><a class="dropdown-item" href="/products/6">Switch Oled</a></li>
																																<li><a class="dropdown-item" href="/products/5">Sega</a></li>
																												</ul>
																								</li>
																				</ul>
																</div>
												</div>
								</nav>

				</header>

				{{-- /////////////////////////////////////////////////// --}}

				<main>
								<div class="container-fluid">
												<div class="row">
																@if (session('msg'))
																				<p class="msg">{{ session('msg') }}</p>
																@endif
																@yield('content')
												</div>

								</div>
				</main>

				{{-- ///////////////////////////////////// --}}

				<footer class="d-flex
												flex-wrap justify-content-evenly align-items-center py-3 my-4 border-top">
								<p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>


								<ul class="nav col-md-4 justify-content-end">
												<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
												<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
												<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
												<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
												<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
								</ul>
				</footer>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
								integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
				</script>

</body>

</html>
