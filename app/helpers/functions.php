<?php

/**
 * Basic credential check for demo purposes.
 * In production, replace with a real database query using hashed passwords.
 */
function checkLogin(string $email, string $password): ?array {
    $users = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            // Hash for password "password123"
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9lEx/s9jZ1G6oCEK8/.vZa'
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            // Hash for password "welcome123"
            'password' => '$2y$10$5Q0byiOtSWT8gJtIhXCT.e7FYCNWLy7CYIi5v8.cjGTVfwlmNge06'
        ],
    ];

    foreach ($users as $user) {
        if (strcasecmp($user['email'], $email) === 0 && password_verify($password, $user['password']) === true) {
            return [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
            ];
        }
    }

    return null;
}
