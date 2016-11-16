<?php

require_once 'assets/lib/random.php';

class HomeController {

    public function index() {
        $api_token = Home::random_str(32);
        require_once('views/home/index.php');
    }

    public function error() {
        require_once('views/home/error.php');
    }

}
