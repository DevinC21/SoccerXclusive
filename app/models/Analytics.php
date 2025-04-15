<?php
class Analytics {
    public function getSummary() {
        global $pdo;
        return [
            'total_users' => $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn(),
            'total_kits' => $pdo->query("SELECT COUNT(*) FROM kits")->fetchColumn(),
            'total_orders' => $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn(),
            'total_reviews' => $pdo->query("SELECT COUNT(*) FROM reviews")->fetchColumn(),
        ];
    }
}
