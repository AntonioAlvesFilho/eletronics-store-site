@extends('layouts.main')

@section('title', 'Cadastrar Produto')


@section('content')


				<img id="mainbanner" src="/img/productsbanner.png" alt="">

				<div id="products">

								<h1 class="h1">Produtos</h1>
								@auth

												<div class='each'>
																<div class="flex-column">
																				@foreach ($products as $product)
																								<div class="dive">

																												<div class="itens">

																																<img class="imgs" src="/img/products/{{ $product->image }}" alt="img">
																																<p>{{ $product->name }}</p>
																																<p>R$ {{ $product->price }}</p>
																																<p>{{ $product->description }}</p>
																																<p style="display: none;">{{ $product->id }}</p>

																												</div>


																												<div class="btns">

																																<!-- Button trigger modal -->
																																<button class="btn btn-danger btn-delete" type="submit" data-bs-toggle="modal"
																																				data-bs-target="#productModal_{{ $product->id }}">Delete</button>

																																<!-- Modal -->
																																<div class="modal fade" id="productModal_{{ $product->id }}" tabindex="-1"
																																				aria-labelledby="productModalLabel" aria-hidden="true">
																																				<div class="modal-dialog">
																																								<div class="modal-content">
																																												<div class="modal-header">
																																																<h5 class="modal-title" id="productModalLabel">Are you sure?</h5>
																																																<button type="button" class="btn-close" data-bs-dismiss="modal"
																																																				aria-label="Close"></button>
																																												</div>
																																												<div style="color: red;" class="modal-body">
																																																Product {{ $product->name }} will be deleted and this cannot be undone
																																												</div>
																																												<div class="modal-footer">
																																																<button type="button" class="btn btn-secondary"
																																																				data-bs-dismiss="modal">Close</button>

																																																<form action="/products/{{ $product->id }}" method="POST">
																																																				@csrf
																																																				@method('DELETE')

																																																				<button type="submit" class="btn btn-primary"
																																																								data-bs-dismiss="modal">Delete</button>
																																																</form>
																																												</div>
																																								</div>
																																				</div>
																																</div>
																																</form>



																																<a href="/product/edit/{{ $product->id }}" class="btn btn-primary">Edit</a>
																												</div>

																								</div>
																				@endforeach
																</div>

																<form class="form dp-flex" action="/products" method="POST" enctype="multipart/form-data">
																				@csrf

																				<div class="form-group">

																								<label for="company">Company Name</label>
																								<select name="company" class="form-control" id="company" required>
																												<option value=''>Empresa</option>
																												<option value="Nintendo">NIntendo</option>
																												<option value="Sony">Sony</option>
																												<option value="Microsoft">Microsoft</option>
																												<option value="Valve">Valve</option>
																												<option value="Sega">Sega</option>
																								</select>
																				</div>


																				<div class="form-group">

																								<label for="name">Product's Name:</label>
																								<input type="text" name="name" class="form-control" id="name" placeholder="Product's Name"
																												required>

																				</div>

																				<div class="form-group">

																								<label for="price">Product's Price:</label>
																								<input type="number" class="form-control" name="price" id="price" placeholder="Price" required>

																				</div>

																				<div class="form-group">

																								<label for="avaliable">In Stock</label>
																								<select name="avaliable" class="form-control" id="avaliable" required>
																												<option value="0">No</option>
																												<option value="1">Yes</option>
																								</select>
																				</div>

																				<div class="form-group">

																								<label for="description">Produt's Description:</label>
																								<textarea class="form-group" cols="40" rows="5" name="description" id="description" required></textarea>

																				</div>

																				<div class="form-group">

																								<label for="image">Product's image:</label>
																								<input type="file" name="image" class="form-control" id="image" placeholder="Product's image"
																												required>
																				</div>

																				<div class="form-group">

																								<label for="banner">Product's banner:</label>
																								<input type="file" name="banner" class="form-control" id="banner" placeholder="Product's image"
																												required>
																				</div>

																				<input type="submit" class="create-btn" value="create product">

																</form>
												</div>

								@endauth

								@guest
												<p>Você precisa fazer Login para ter acesso a esta pagina completa e editar produtos</p>
								@endguest
				</div>

@endsection
