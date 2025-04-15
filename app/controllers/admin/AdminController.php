<?php
require_once '../../config/config.php';
require_admin(); // Only allow admins

class AdminController {
    public function dashboard() {
        require '../../app/views/admin/dashboard.php';
    }
}
