<?php
require_once '../config/config.php';
require_once '../app/models/Kit.php';

class KitsController {
    public function index() {
        $model = new Kit();
        $kits = $model->getAll();
        require '../app/views/kits.php';
    }
}
