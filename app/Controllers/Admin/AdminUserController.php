<?php 

namespace App\Controllers\Admin;

use App\Models\User;
use App\Models\Anime;
use App\Controllers\Controller;

class AdminUserController extends Controller {

    // Show all the users in the database in a table for the administrator
    public function index()
    {
        $this->isAdmin();
        
        $users = (new User($this->getDB()))->all();

        return $this->view('admin.users.index', compact('users'));
    }
}