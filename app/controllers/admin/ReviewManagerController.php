<?php
require_once '../../config/config.php';
require_once '../../app/models/Review.php';
require_admin();

class ReviewManagerController {
    public function index() {
        $reviews = (new Review())->getAllPending();
        require '../../app/views/admin/manage_reviews.php';
    }

    public function approve() {
        (new Review())->approve($_POST['id']);
        header('Location: /admin/reviews');
    }

    public function delete() {
        (new Review())->delete($_POST['id']);
        header('Location: /admin/reviews');
    }
}
