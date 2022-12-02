@extends('layouts.main')

@section('title')

@section('content')


@section('navbar-color')

				@if (isset($product))
								{{ $product->company }}
				@endif
@endsection

@section('company-logo')

				@foreach ($company as $companies)
								<img class="logo" src="/img/company/{{ $companies->logo }}" alt="logo">
				@endforeach

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
