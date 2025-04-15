<?php
require_once '../../config/config.php';
require_once '../../app/models/Wishlist.php';
require_admin();

class WishlistController {
    public function index() {
        $items = (new Wishlist())->getAll();
        require '../../app/views/admin/manage_wishlist.php';
    }

    public function remove() {
        (new Wishlist())->remove($_POST['id']);
        header('Location: /admin/wishlist');
    }
}
