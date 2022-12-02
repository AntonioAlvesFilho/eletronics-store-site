@extends('layouts.main')

@section('content')
				

				<div align="center">
								@foreach ($company as $companies)
												<img class="logo" style="display: inline" src="/img/company/{{ $companies->logo }}" alt="">
								@endforeach
				</div>

				<br> <br> <br>

				<h1 style="color:white;" align="center">Adicionar nova Empresa</h1>
				<form class="form dp-flex" action="/company" method="POST" enctype="multipart/form-data">
								@csrf

								<div class="form-group">

												<label for="name">Company's Name</label>
												<input name="name" class="form-control" id="name" required placeholder="Type Here">
								</div>

								<div class="form-group">

												<label for="logo">Company's logo:</label>
												<input type="file" name="logo" class="form-control" id="logo" placeholder="Company's logo" required>
								</div>



								<input type="submit" class="create-btn" value="Create Company">

				</form>
@endsection
