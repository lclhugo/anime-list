<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller {

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $user = User::where('email', $_POST['email'])->first();

        if (!$user) {
            return $this->view('auth.login', ['error' => 'Email not found']);
        }

        if (!password_verify($_POST['password'], $user->password)) {
            return $this->view('auth.login', ['error' => 'Wrong password']);
        }

        $_SESSION['user'] = $user->id;

        return $this->redirect('home');
    }

}