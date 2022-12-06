@extends('layouts.main')

@section('content')
				<div style="color: white" class="flex-direction-column">
								<br><br><br>
								<h1 align="center">Recomendações</h1>
								<br>
								<div>
												@foreach ($recomendation as $recomendations)
																<img src="/img/recomendation/{{ $recomendations->image }}" alt="">
												@endforeach
								</div>
								<br><br><br>
								<h1 align="center">Adicionar uma nova Recomendação</h1>

								<form class="form dp-flex" action="/recomendation" method="POST" enctype="multipart/form-data">
												@csrf

												<div class="form-group">

																<label for="company">recomendation's Company</label>
																<select name="company" class="form-control" id="company" required>
																				<option value=''>Selecionar Empresa</option>

																				@foreach ($company as $companies)
																								<option value="{{ $companies->name }}">{{ $companies->name }}</option>
																				@endforeach

																</select>
												</div>


												<div class="form-group">

																<label for="name">recomendation's Name:</label>
																<input type="text" name="name" class="form-control" id="name" placeholder="Game's Name" required>

												</div>

												<div class="form-group">

																<label for="image">recomendation's image:</label>
																<input type="file" name="image" class="form-control" id="image" placeholder="Recomendation's image"
																				required>
												</div>

												<input type="submit" class="create-btn" value="Create Recomendation">

								</form>
				</div>
@endsection
