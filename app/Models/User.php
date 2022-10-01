<?php 

namespace App\Models;

use DateTime;
use App\Models\Model;

class User extends Model {

    protected $table = 'users';

    // query for getting the user data using his username
    public function getByUsername(string $username)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);
    }

    // query for getting the user data using his ID
    public function findByUserID(int $id): User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }

    // query for adding a new user to the database
    public function addUserToDB()
    {
        $this->query("INSERT INTO {$this->table} (username, email, password, admin) VALUES (?, ?, ?, ?)", [$this->username = $_POST['username'], $this->email = $_POST['email'], $this->password = password_hash($_POST['password'], PASSWORD_DEFAULT), $this->admin = 0]);
    }

    // query for getting the user data using his email address
    public function getByEmail(string $email)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE email = ?", [$email], true);
    }
}