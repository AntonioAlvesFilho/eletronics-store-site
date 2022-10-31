@extends('layouts.main')

@section('title', 'Home')



@section('content')
				<div class="homeMain container-xxl">
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
												<div class="carousel-indicators">
																<button type="button" data-bs-target="#carouselGames" data-bs-slide-to="0" class="active"
																				aria-current="true" aria-label="Slide 1"></button>
																<button type="button" data-bs-target="#carouselGames" data-bs-slide-to="1" aria-label="Slide 2"></button>
																<button type="button" data-bs-target="#carouselGames" data-bs-slide-to="2" aria-label="Slide 3"></button>
																<button type="button" data-bs-target="#carouselGames" data-bs-slide-to="3" aria-label="Slide 4"></button>
												</div>

								</div>


								<div id="carouselRecommended" class="carousel slide recommended-container" data-bs-ride="true">

												<div class="carousel-inner ">

																<div class="carousel-item   carousel-item-mini active">
																				<h2 align="center" class="mt-5 mb-3">Recomendações</h2>
																				<div class="flex-center">
																								<img src="/img/carousel/gran.png" class=" w-12" alt="...">
																								<img src="/img/carousel/spider.png" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/cup.png" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/two.jpg" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/kerbal.jpg" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/cyber.jpg" class=" w-12 ms-4" alt="...">
																				</div>
																</div>

																<div class="carousel-item carousel-item-mini">
																				<h2 align="center" class="mt-5 mb-3">Lançamentos</h2>
																				<div class="flex-center">
																								<img src="/img/carousel/horizon.png" class=" w-12" alt="...">
																								<img src="/img/carousel/kerbal2.jpg" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/ragnarok.jpg" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/overwatch2.jpg" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/bayoneta.jpg" class=" w-12 ms-4" alt="...">
																								<img src="/img/carousel/multiversus.png" class=" w-12 ms-4" alt="...">
																				</div>
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

								<div class="imgDiv" align="center">
												<h2>Lançamento em Destaque</h2>

												<img class="hot" src="/img/dead.jpg" alt="">

												<div class="description">
																<p> O clássico de terror de sobrevivência e ficção científica está de volta, completamente recriado.</p>
												</div>

								</div>
				</div>

@endsection
