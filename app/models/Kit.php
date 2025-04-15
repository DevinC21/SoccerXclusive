<?php
class Kit {
    public function getAll() {
        global $pdo;
        return $pdo->query("SELECT * FROM kits ORDER BY created_at DESC")->fetchAll();
    }

    public function getById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM kits WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function save($id, $team, $season, $price, $image = null) {
        global $pdo;

        if ($id) {
            $query = "UPDATE kits SET team = ?, season = ?, price = ?";
            $params = [$team, $season, $price];

            if ($image) {
                $query .= ", image = ?";
                $params[] = $image;
            }

            $query .= " WHERE id = ?";
            $params[] = $id;
            $pdo->prepare($query)->execute($params);
        } else {
            $stmt = $pdo->prepare("INSERT INTO kits (team, season, price, image) VALUES (?, ?, ?, ?)");
            $stmt->execute([$team, $season, $price, $image]);
        }
    }

    public function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM kits WHERE id = ?");
        $stmt->execute([$id]);
    }
}
