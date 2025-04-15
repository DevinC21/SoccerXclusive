<?php
require_once '../../config/config.php';
require_once '../../app/models/Kit.php';
require_admin();

class KitManagerController {
    public function index() {
        $kits = (new Kit())->getAll();
        require '../../app/views/admin/manage_kits.php';
    }

    public function save() {
        $imagePath = null;
        if (!empty($_FILES['image']['name'])) {
            $target = '../../public/images/kits/';
            if (!is_dir($target)) mkdir($target, 0777, true);
            $imagePath = 'images/kits/' . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], '../../public/' . $imagePath);
        }

        (new Kit())->save($_POST['id'], $_POST['team'], $_POST['season'], $_POST['price'], $imagePath);
        header('Location: /admin/kits');
    }

    public function delete() {
        (new Kit())->delete($_POST['id']);
        header('Location: /admin/kits');
    }
}
