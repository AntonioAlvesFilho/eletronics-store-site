<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
	public function company()
	{
		
		$company = Company::all();
		return view('company.companies', ['company' => $company]);
	}


	public function store(request $request)
	{

		$company = new Company;

		$company->name = $request->name;

		if ($request->hasfile('logo') && $request->file('logo')->isValid()) {


			$requestLogo = $request->logo;

			$Extension = $requestLogo->extension();

			$logoName = md5($requestLogo->getClientOriginalName() . strtotime("now")) . "." . $Extension;


			$requestLogo->move(public_path('img/company'), $logoName);

			$company->logo = $logoName;
		}
		$company->save();

		return redirect('/company/companies')->with('msg', 'Empresa criada com sucesso');
	}
	
}
