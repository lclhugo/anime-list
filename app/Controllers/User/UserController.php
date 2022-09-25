<?php 

namespace App\Controllers\User;

use App\Models\User;
use App\Models\Anime;
use App\Validation\Validator;
use App\Controllers\Controller;

class UserController extends Controller {

    public function login()
    {
        return $this->view('users.auth.login');
    }

    public function loginPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /login');
            exit;
        }

        $user = (new User($this->getDB()))->getByUsername($_POST['username']);

        if (password_verify($_POST['password'], $user->password)) {
            $_SESSION['auth'] = (int) $user->admin;
            return header('Location: /');
        } else {
            return header('Location: /login');
        }
    }

    public function register()
    {
        return $this->view('users.auth.register');
    }

    public function registerPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'password_confirm' => ['required', 'min:6', 'same:password']
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /register');
            exit;
        }

        $user = new User($this->getDB());
        $user->username = $_POST['username'];
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->admin = 0;
        $user->addUserToDB();

        return header('Location: /login');
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /');
    }
}
