<?php
class Admin {
    public function isAdmin($user) {
        return isset($user['role']) && $user['role'] === 'admin';
    }
}
