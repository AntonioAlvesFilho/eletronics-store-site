@extends('layouts.main')

@section('title')

@section('content')

@section('test')

				@if (isset($product))
								{{ $product->company }}
				@endif
@endsection

<img class="banner" src="/img/products/{{ $product->banner }}" alt="banner">

<div class="showItem-container">
				<div class="showItem-top">
								<img class="item-img" src="/img/products/{{ $product->image }}" alt="console">
								<div class="showItem-imgText">

												<h2>
																{{ $product->name }}
												</h2>

												<p>{{ $product->description }}</p>

												@if (isset($product))
																<button class="{{ $product->company }} btn">Saiba Mais</button>
												@endif

								</div>
				</div>
</div>

@endsection
