<?php
require_once '../../config/config.php';
require_once '../../app/models/Analytics.php';
require_admin();

class AnalyticsController {
    public function index() {
        $stats = (new Analytics())->getSummary();
        require '../../app/views/admin/analytics.php';
    }
}
