<?php
require_once '../../config/config.php';
require_once '../../app/models/Order.php';
require_admin();

class OrderManagerController {
    public function index() {
        $orders = (new Order())->getAll();
        require '../../app/views/admin/manage_orders.php';
    }

    public function updateStatus() {
        (new Order())->updateStatus($_POST['id'], $_POST['status']);
        header('Location: /admin/orders');
    }
}
