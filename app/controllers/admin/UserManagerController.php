<?php
require_once '../../config/config.php';
require_once '../../app/models/User.php';
require_admin();

class UserManagerController {
    public function index() {
        $users = (new User())->getAll();
        require '../../app/views/admin/manage_users.php';
    }

    public function save() {
        (new User())->save($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role']);
        header('Location: /admin/users');
    }

    public function delete() {
        (new User())->delete($_POST['id']);
        header('Location: /admin/users');
    }

    public function promote() {
        (new User())->promoteToAdmin($_POST['id']);
        header('Location: /admin/users');
    }

    public function toggleBlock() {
        (new User())->toggleBlock($_POST['id']);
        header('Location: /admin/users');
    }
}
