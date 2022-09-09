@extends('layouts.main')

@section('title', 'Home')



@section('content')
				<div class="homeMain">
								<div id="carouselGames" class="carousel slide game-container" data-bs-ride="true">
												<div class="game-mini-container">
																<div data-bs-target="#carouselGames" data-bs-slide-to="0" class="game-title active" aria-current="true"
																				aria-label="Slide 1">Varios Jogos Disponiveis</div>
																<div data-bs-target="#carouselGames" data-bs-slide-to="1" class="game-title" aria-label="Slide 2">Mario
																				Odyssey
																</div>
																<div data-bs-target="#carouselGames" data-bs-slide-to="2" class="game-title" aria-label="Slide 3">The Last
																				of Us
																</div>
																<div data-bs-target="#carouselGames" data-bs-slide-to="3" class="game-title" aria-label="Slide 4">Legend of
																				Zelda:
																				Breath of the Wild</div>
												</div>
												<div class="carousel-inner">
																<div class="carousel-item carousel-item-main active">
																				<img src="/img/carousel/games.png" class=" w-100" alt="...">
																</div>
																<div class="carousel-item carousel-item-main">
																				<img src="/img/carousel/mario.png" class=" w-100" alt="...">
																</div>
																<div class="carousel-item carousel-item-main">
																				<img src="/img/carousel/last.png" class=" w-100" alt="...">
																</div>
																<div class="carousel-item carousel-item-main">
																				<img src="/img/carousel/zelda.png" class=" w-100" alt="...">
																</div>
												</div>

								</div>
								<h2>Recomendações</h2>

								<div id="carouselRecommended" class="carousel slide recommended-container" data-bs-ride="true">

												<div class="carousel-inner flex-center">

																<div class="carousel-item  carousel-item-mini active">
																				<img src="/img/carousel/gran.png" class=" w-10" alt="...">
																				<img src="/img/carousel/spider.png" class=" w-10" alt="...">
																				<img src="/img/carousel/cup.png" class=" w-10" alt="...">
																</div>

																<div class="carousel-item carousel-item-mini">

																				<img src="/img/carousel/horizon.png" class=" w-10" alt="...">
																				<img src="/img/carousel/mine.png" class=" w-10" alt="...">
																				<img src="/img/carousel/fort.png" class=" w-10" alt="...">

																</div>

																<button class="carousel-control-prev" type="button" data-bs-target="#carouselRecommended"
																				data-bs-slide="prev">
																				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																				<span class="visually-hidden">Previous</span>
																</button>

																<button class="carousel-control-next" type="button" data-bs-target="#carouselRecommended"
																				data-bs-slide="next">
																				<span class="carousel-control-next-icon" aria-hidden="true"></span>
																				<span class="visually-hidden">Next</span>
																</button>

												</div>

								</div>

				@endsection
