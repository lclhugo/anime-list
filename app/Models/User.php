<?php 

namespace App\Models;

use DateTime;
use App\Models\Model;

class User extends Model {

    protected $table = 'users';


    public function findByUsername(string $username): User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);
    }

    public function findByUserID(int $id): User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function addUserToDB()
    {
        $this->query("INSERT INTO {$this->table} (username, email, password, admin) VALUES (?, ?, ?, ?)", [$this->username = $_POST['username'], $this->email = $_POST['email'], $this->password = password_hash($_POST['password'], PASSWORD_DEFAULT), $this->admin = 0]);
    }
}