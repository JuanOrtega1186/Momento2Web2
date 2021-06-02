<?php

namespace App\Controllers;

class ContactenosController extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('contactenos');
		echo view('layout/footer');
	}



	
}