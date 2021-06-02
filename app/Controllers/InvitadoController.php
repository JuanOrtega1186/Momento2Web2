<?php

namespace App\Controllers;

class InvitadoController extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('invitado');
		echo view('layout/footer');
	}



	
}