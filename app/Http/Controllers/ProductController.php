<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index()
	{

		return view('home');
	}

	public function product()
	{

		return view('product.products');
	}

	public function showItem($id)
	{
		

		return view('product.showItem');
	}

	public function store(request $request)
	{

		$product = new Product;

		$product->name = $request->name;
		$product->price = $request->price;
		$product->avaliable = $request->avaliable;
		$product->description = $request->description;
		$product->company = $request->company;

		if ($request->hasfile('image') && $request->file('image')->isValid()) {


			$requestImage = $request->image;

			$Extension = $requestImage->extension();

			$imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $Extension;


			$requestImage->move(public_path('img/products'), $imageName);

			$product->image = $imageName;
		}

		if ($request->hasfile('banner') && $request->file('banner')->isValid()) {


			$requestBanner = $request->banner;

			$Extension = $requestBanner->extension();

			$bannerName = md5($requestBanner->getClientOriginalName() . strtotime("now")) . "." . $Extension;


			$requestBanner->move(public_path('img/products'), $bannerName);

			$product->banner = $bannerName;
		}

		$product->save();

		return redirect('/product/products')->with('msg', 'Produto criado com sucesso');
	}

	public function destroy($id)
	{
		Product::findOrFail($id)->delete();

		return redirect('/product/products')->with('msg', 'Produto excluido com sucesso!');
	}

	public function edit($id)
	{
		$product = Product::findOrFail($id);
		return view('product.edit', ['product' => $product]);
	}

	public function update(Request $request)
	{


		$data = $request->all();

		if ($request->hasfile('image') && $request->file('image')->isValid()) {


			$requestImage = $request->image;

			$Extension = $requestImage->extension();

			$imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $Extension;


			$requestImage->move(public_path('img/products'), $imageName);

			$data['image'] = $imageName;
		}

		if ($request->hasfile('banner') && $request->file('banner')->isValid()) {


			$requestBanner = $request->banner;

			$Extension = $requestBanner->extension();

			$bannerName = md5($requestBanner->getClientOriginalName() . strtotime("now")) . "." . $Extension;


			$requestBanner->move(public_path('img/products'), $bannerName);

			$data['banner'] = $bannerName;
		}


		Product::findOrFail($request->id)->update($data);

		return redirect('/product/products')->with('msg', 'Product edited sucessfully!');
	}
}
