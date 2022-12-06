<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recomendation;

class RecomendationController extends Controller
{
	public function store(request $request)
	{

		$recomendation = new Recomendation;

		$recomendation->name = $request->name;

		$recomendation->company = $request->company;

		if ($request->hasfile('image') && $request->file('image')->isValid()) {


			$requestImage = $request->image;

			$Extension = $requestImage->extension();

			$imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $Extension;


			$requestImage->move(public_path('img/recomendation'), $imageName);

			$recomendation->image = $imageName;
		}
		$recomendation->save();

		return redirect('/recomendation/recomendations')->with('msg', 'Recomendação criada com sucesso');
	}

	public function recomendation()
	{
		
		$recomendation = \DB::table('recomendation')->get();
		$company = \DB::table('company')
		->select('*')
		->get();
		return view('recomendation.recomendations', ['recomendation' => $recomendation, 'company' => $company]);
	}

}
