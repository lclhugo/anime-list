<?php 

namespace App\Controllers\User;

use App\Models\User;
use App\Validation\Validator;
use App\Controllers\Controller;


class UserController extends Controller {

    // Show the login form if the user is not logged in
    public function login()
    {
        if (isset($_SESSION['user_id'])) {
            return header('Location: /');
        } else  {
            return $this->view('users.auth.login');
        }
    }

    // Log the user in
    public function loginPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if ($errors) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = $errors;
            header('Location: /login');
            exit;
        }

        $user = (new User($this->getDB()))->getByUsername($_POST['username']);

        if (password_verify($_POST['password'], $user->password)) {
            $_SESSION['auth'] = (int) $user->admin;
            $_SESSION['user_id'] = (int) $user->id;
            $_SESSION['username'] = $user->username;
            $_SESSION['errors'] = [];

            //redirect to the home page
            return header('Location: /');
        } else {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['username' => ['Username or password is incorrect']];
            return header('Location: /login');
        }
    }

    // Show the register form if the user is not logged in
    public function register()
    {
        if (isset($_SESSION['auth'])) {
            return header('Location: /');
        } else {
            return $this->view('users.auth.register');
        }
    }

    // Register the user in the database
    public function registerPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required'],
            'email' => ['required', 'mail'],
            'password' => ['required'],
            'password_confirm' => ['required']
        ]);

        if ($errors) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = $errors;
            header('Location: /register');
            exit;
        }

        // Check if username is already taken
        $user = (new User($this->getDB()))->getByUsername($_POST['username']);
        if ($user) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['username' => ['this username is already taken']];
            header('Location: /register');
            exit;
        }

        // Check if the username is only letters and numbers
        if (!ctype_alnum($_POST['username'])) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['username' => ['the username can only contain letters and numbers']];
            header('Location: /register');
            exit;
        }

        // Check if email is already taken
        $user = (new User($this->getDB()))->getByEmail($_POST['email']);
        if ($user) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['email' => ['this email address is already taken']];
            header('Location: /register');
            exit;
        }

        //check if password is strong enough
        $password = $_POST['password'];
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['password' => ['Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.']];
            header('Location: /register');
            exit;
        }

        // check if password and password_confirm match
        if ($_POST['password'] !== $_POST['password_confirm']) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['password_confirm' => ['passwords do not match']];
            header('Location: /register');
            exit;
        }

        //store and sanitize the data
        $user = new User($this->getDB());
        $user->username = strip_tags($_POST['username']);
        $user->email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->admin = 0;
        $user->addUserToDB();

        //empty the session errors
        $_SESSION['errors'] = [];

        //redirect to login
        return header('Location: /login');
    }

    // Log the user out
    public function logout()
    {
        session_destroy();

        return header('Location: /');
    }
}