<?php
class Review {
    public function getAllPending() {
        global $pdo;
        return $pdo->query("SELECT * FROM reviews WHERE is_approved = 0")->fetchAll();
    }

    public function approve($id) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE reviews SET is_approved = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM reviews WHERE id = ?");
        $stmt->execute([$id]);
    }
}
