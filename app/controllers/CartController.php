<?php
require_once '../config/config.php';
require_once '../app/models/Kit.php';

class CartController {
    public function index() {
        $kits = $_SESSION['cart'] ?? [];
        require '../app/views/cart.php';
    }

    public function add() {
        $kit = (new Kit())->getById($_POST['kit_id']);
        $_SESSION['cart'][$kit['id']] = $kit;
        header('Location: /cart');
    }

    public function remove() {
        unset($_SESSION['cart'][$_POST['kit_id']]);
        header('Location: /cart');
    }
}
