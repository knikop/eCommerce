<?php
namespace app\controllers;

class Profile extends \app\core\Controller {

    public function index() {
        $profile = new \app\models\Profile();
        $profiles = $profile->get($_SESSION['profile_id']);
        $this->view('Profile/index',$profiles);
    }
    
    public function edit(){
		$profile = new \app\models\Profile();

		$profile = $profile->get($_SESSION['profile_id']);
		if(isset($_POST['action'])){
			$profile->first_name = $_POST['first_name'];
            $profile->middle_name = $_POST['middle_name'];
            $profile->last_name = $_POST['last_name'];
			$profile->update();
			header('location:/Profile/index');
		}else{
			$this->view('Profile/edit', $profile);
		}
	
}}