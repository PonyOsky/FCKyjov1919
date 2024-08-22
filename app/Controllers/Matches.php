<?php

namespace App\Controllers;

class Matches extends BaseController 
{
	public function index() 
	{
		return view('matchesView');
	}
}