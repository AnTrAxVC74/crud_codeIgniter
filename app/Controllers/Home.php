<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('to_products/list_of_products'); 
	}
}
