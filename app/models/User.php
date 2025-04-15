<?php
class User {
    public function getUserByEmail($email) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function register($name, $email, $password) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, hash('sha256', $password)]);
    }

    public function getAll() {
        global $pdo;
        return $pdo->query("SELECT * FROM users")->fetchAll();
    }

    public function save($id, $name, $email, $role) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE users SET name=?, email=?, role=? WHERE id=?");
        $stmt->execute([$name, $email, $role, $id]);
    }

    public function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM users WHERE id=?");
        $stmt->execute([$id]);
    }

    public function promoteToAdmin($id) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE users SET role='admin' WHERE id=?");
        $stmt->execute([$id]);
    }

    public function toggleBlock($id) {
        global $pdo;
        $user = $this->getById($id);
        $newStatus = $user['is_blocked'] ? 0 : 1;
        $stmt = $pdo->prepare("UPDATE users SET is_blocked=? WHERE id=?");
        $stmt->execute([$newStatus, $id]);
    }

    private function getById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
