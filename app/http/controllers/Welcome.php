<?php namespace Code\http\controllers;
defined('BASEPATH') OR exit('No direct script access allowed');

use System\Core\Smarty;
use System\Core\Controller;

class Welcome extends Controller {

	/**
	 * Show Welcome Message to Viewer.
	 *
	 * @return void
	 */
	public function index()
	{
		view('welcome_message');
	}
}
