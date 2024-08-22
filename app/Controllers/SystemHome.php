<?php

namespace App\Controllers;

class SystemHome extends BaseController 
{
	public function index() 
	{
		return view('SindexView');
	}
}