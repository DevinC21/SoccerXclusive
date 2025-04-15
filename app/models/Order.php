<?php
class Order {
    public function save($email, $summary, $total) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO orders (user_email, order_summary, total) VALUES (?, ?, ?)");
        $stmt->execute([$email, $summary, $total]);
    }

    public function getAll() {
        global $pdo;
        return $pdo->query("SELECT * FROM orders ORDER BY created_at DESC")->fetchAll();
    }

    public function updateStatus($id, $status) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE orders SET status=? WHERE id=?");
        $stmt->execute([$status, $id]);
    }
}
