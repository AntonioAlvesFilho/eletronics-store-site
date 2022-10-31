<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
	public function game()
	{
		
		$game = Game::all();
		return view('game.games', ['game' => $game]);
	}


	public function store(request $request)
	{

		$game = new Game;

		$game->name = $request->name;

		$game->launch = $request->launch;

		$game->company = $request->company;

		if ($request->hasfile('image') && $request->file('image')->isValid()) {


			$requestImage = $request->image;

			$Extension = $requestImage->extension();

			$imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $Extension;


			$requestImage->move(public_path('img/game'), $imageName);

			$game->image = $imageName;
		}
		$game->save();

		return redirect('/game/games')->with('msg', 'Jogo criada com sucesso');
	}
	
}