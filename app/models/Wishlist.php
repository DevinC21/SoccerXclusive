<?php
class Wishlist {
    public function getAll() {
        global $pdo;
        return $pdo->query("SELECT w.id, u.name, k.team FROM wishlist w 
                            JOIN users u ON w.user_id = u.id 
                            JOIN kits k ON w.kit_id = k.id")->fetchAll();
    }

    public function remove($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM wishlist WHERE id = ?");
        $stmt->execute([$id]);
    }
}
