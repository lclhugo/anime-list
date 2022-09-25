<?php 

namespace App\Controllers\Admin;

use App\Models\User;
use App\Models\Anime;
use App\Controllers\Controller;

class AdminUserController extends Controller {

    public function index()
    {
        $users = (new User($this->getDB()))->all();

        return $this->view('admin.users.index', compact('users'));
    }
}