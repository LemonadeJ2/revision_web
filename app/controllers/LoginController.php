<?php

namespace app\controllers;

use flight\Engine;
use app\model\Users;
use Flight;

class LoginController {

    protected Engine $app;
    private Users $user;

    public function __construct(Engine $app) {
        $this->app = $app;
        $this->user = new Users(Flight::db());
    }

    public function show(): void {
        $error = $this->app->get('login_error') ?? null;
        $old = $this->app->get('login_old') ?? [];
        $this->app->render('login', [ 'error' => $error, 'old' => $old ]);
    }

    public function submit(): void {
        $email = trim($this->app->request()->data['email'] ?? '');
        $password = $this->app->request()->data['password'] ?? '';

        if ($email === '' || $password === '') {
            $this->persistState('Email and password are required.', $email);
            return;
        }

        $user = $this->user->checkLogin($email, $password);

        if ($user === null) {
            $this->persistState('Invalid email or password.', $email);
            return;
        }

        $this->app->set('current_user', $user);
        $this->app->redirect('/');
    }

    private function persistState(string $error, string $email): void {
        $this->app->set('login_error', $error);
        $this->app->set('login_old', [ 'email' => $email ]);
        $this->app->redirect('/login');
    }
}
