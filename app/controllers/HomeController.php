<?php
require_once '../config/config.php';

class HomeController {
    public function index() {
        require '../app/views/home.php';
    }
}
