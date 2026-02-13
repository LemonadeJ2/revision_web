<?php

namespace app\model;

class Users
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkLogin(string $email, string $password): ?array
    {
        $sql = "SELECT id, name, email, password FROM users WHERE email = ? AND password = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email, $password]);
        $users = $stmt->fetch();

        if ($users) {
            if ($users['password'] === $password && $users['email'] === $email) {
                unset($users['password']);
                return $users;
            }
        }
        return null;
    }
}
