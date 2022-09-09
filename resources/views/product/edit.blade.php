@extends('layouts.main')

@section('title', 'Editando: ' . $product->title)

@section('content')


				<form class="form" action="/product/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
								@csrf
								@method('PUT')

								<div class="form-group">

												<label for="image">Product's image:</label>
												<input type="file" name="image" class="form-control" id="image" placeholder="Product's image">

								</div>
								<img class="image-edit" src="/img/products/{{ $product->image }}" alt="{{ $product->name }}">


								<div class="form-group">

												<label for="name">Product's Name:</label>
												<input type="text" name="name" class="form-control" id="name" placeholder="Product's Name"
																value="{{ $product->name }}">

								</div>

								<div class="form-group">

												<label for="price">Product's Price:</label>
												<input type="number" class="form-control" name="price" id="price" placeholder="Price"
																value="{{ $product->price }}">

								</div>

								<div class="form-group">

												<label for="avaliable">In Stock</label>
												<select name="avaliable" class="form-control" id="avaliable">
																<option value="0">No</option>
																<option value="1" {{ $product->avaliable == 1 ? "selected='selected'" : '' }}>Yes</option>
												</select>
								</div>

								<div class="form-group">
												<label for="description">Produt's Description:</label>
								</div>
								<textarea class="form-group " name="description" id="description">{{ $product->description }}</textarea>

								<div class="form-group">

												<label for="banner">Product's banner:</label>
												<input type="file" name="banner" class="form-control" id="banner" placeholder="Product's image">

								</div>
								<img class="banner-edit" src="/img/products/{{ $product->banner }}" alt="{{ $product->banner }}">

								<input style="margin-top: 30px;" type="submit" class="create-btn" value="Edit Product">

				</form>

@endsection
