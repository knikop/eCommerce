<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('User/register');
	}

	public function index1(){
		//default controller method according to the routing
		$this->view('login/index');
	}

}