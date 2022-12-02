@extends('layouts.main')

@section('content')
				<div style="color: white" class="flex-direction-column">
								<br><br><br>
								<h1 align="center">Jogos Disponíveis</h1>
								<br>
								<div>
												@foreach ($game as $games)
																<img height="200px" width="140px" src="/img/game/{{ $games->image }}" alt="">
												@endforeach
								</div>
								<br><br><br>
								<h1 align="center">Adicionar um novo Jogo</h1>

								<form class="form dp-flex" action="/game" method="POST" enctype="multipart/form-data">
												@csrf

												<div class="form-group">

																<label for="company">Game's Company</label>
																<select name="company" class="form-control" id="company" required>
																				<option value=''>Selecionar Empresa</option>

																				@foreach ($company as $companies)
																								<option value="{{ $companies->name }}">{{ $companies->name }}</option>
																				@endforeach

																</select>
												</div>


												<div class="form-group">

																<label for="name">Games's Name:</label>
																<input type="text" name="name" class="form-control" id="name" placeholder="Game's Name" required>

												</div>

												<div class="form-group">

																<label for="launch">Game's Launch Year:</label>
																<input type="number" maxlength="4" class="form-control" name="launch" id="launch"
																				placeholder="Launch Date" required>

												</div>


												<div class="form-group">

																<label for="image">Game's image:</label>
																<input type="file" name="image" class="form-control" id="image" placeholder="Product's image"
																				required>
												</div>

												<input type="submit" class="create-btn" value="Create Game">

								</form>
				</div>
@endsection
