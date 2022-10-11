<?php
namespace app\controllers;

class Profile extends \app\core\Controller {

    public function index($profile_id) {
        $profile = new \app\models\Profile();
        $cp = $profile->get($profile_id);
        $this->view('Main/index', $cp);
    }
    
}