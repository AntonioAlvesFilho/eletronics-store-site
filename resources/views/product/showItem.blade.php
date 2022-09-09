@extends('layouts.main')


@section('title')

@section('content')

@section('test')

				@if (isset($product))
								@if ($product->company == 'Microsoft')
												color4
								@elseif ($product->company == 'Sony')
												color5
								@elseif ($product->company == 'Sega')
												color1
								@elseif ($product->company == 'Nintendo')
												color3
								@elseif ($product->company == 'Valve')
												color2
								@endif
				@else
								bg-dark
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

												@if ($product->company == 'Sega')
																<button class="color1 btn">Saiba Mais</button>
												@elseif ($product->company == 'Valve')
																<button class="color2 btn">Saiba Mais</button>
												@elseif ($product->company == 'Nintendo')
																<button class="color3 btn">Saiba Mais</button>
												@elseif ($product->company == 'Microsoft Xbox Series X')
																<button class="color4 btn">Saiba Mais</button>
												@elseif ($product->company == 'Sony')
																<button class="color5 btn">Saiba Mais</button>
												@endif

								</div>
				</div>

</div>

@endsection
