@extends('layouts.main')

@section('content')
				<div>
								@foreach ($company as $companies)
												<img class="imgs" src="/img/company/{{ $companies->logo }}" alt="logo">
								@endforeach
				</div>

				<form class="form dp-flex" action="/company" method="POST" enctype="multipart/form-data">
								@csrf

								<div class="form-group">

												<label for="name">Company1s Name</label>
												<select name="name" class="form-control" id="name" required>
																<option value=''>Empresa</option>
																<option value="Nintendo">NIntendo</option>
																<option value="Sony">Sony</option>
																<option value="Microsoft">Microsoft</option>
																<option value="Valve">Valve</option>
																<option value="Sega">Sega</option>
												</select>
								</div>

								<div class="form-group">

												<label for="logo">Company's logo:</label>
												<input type="file" name="logo" class="form-control" id="logo" placeholder="Company's logo" required>
								</div>



								<input type="submit" class="create-btn" value="Create Company">

				</form>
@endsection
