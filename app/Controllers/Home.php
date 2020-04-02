<?php namespace App\Controllers;

class Home extends BaseController
{
	protected $PA;

	public function __construct()
	{
		$this->PA = \Config\Services::assistant();
	}
	public function index()
	{
		//title page 
		$header['title'] = 'Request the best service on bitmoService';
		$header['description'] = 'Request the best service on bitmoService';
		$navbar['active'] = 'h';

		$servieList['list'] = $this->PA->bs_assist_GetServiceList();
		
		echo view('includes/main/header', $header);
		echo view('includes/main/navbar', $navbar);
		echo view('main/index', $servieList);
		echo view('includes/main/home_footer');

		
	}

	//--------------------------------------------------------------------

}
