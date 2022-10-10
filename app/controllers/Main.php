<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('Main/index');

		if(isset($_POST['logout'])){
			session_start();
			session_destroy();
			header('location:/User/index');
			}
	}

	public function logout(){
		if(isset($_POST['logout'])){
		session_destroy();
		header('location:/User/index');
		}
	}
}