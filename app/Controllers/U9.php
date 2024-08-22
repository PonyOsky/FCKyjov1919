<?php

namespace App\Controllers;

class U9 extends BaseController 
{
	public function index() 
	{
		return view('TeamCalendar');
	}

	public function score() {
		return view('TeamScore');
	}

	public function players() {
		return view('TeamList');
	}

	public function info() {
		return view('TeamInfo');
	}
}