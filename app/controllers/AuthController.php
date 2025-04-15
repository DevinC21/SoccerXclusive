<?php
require_once '../config/config.php';
require_once '../app/models/User.php';

class AuthController {
    public function login() {
        require '../app/views/login.php';
    }

    public function loginSubmit() {
        $user = new User();
        $result = $user->getUserByEmail($_POST['email']);

        if ($result && hash_equals($result['password'], hash('sha256', $_POST['password']))) {
            $_SESSION['user'] = $result;

            if ($result['role'] === 'admin') {
                header('Location: /admin/dashboard');
            } else {
                header('Location: /');
            }
        } else {
            echo "Invalid credentials.";
        }
    }

    public function register() {
        require '../app/views/register.php';
    }

    public function registerSubmit() {
        $user = new User();
        $user->register($_POST['name'], $_POST['email'], $_POST['password']);
        header('Location: /login');
    }

    public function logout() {
        session_destroy();
        header('Location: /');
    }
}
