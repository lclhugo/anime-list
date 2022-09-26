<?php 

namespace App\Controllers\Admin;

use App\Models\User;
use App\Models\Anime;
use App\Controllers\Controller;

class AdminController extends Controller {

    public function dashboard()
    {
        $this->isAdmin();
        
        return $this->view('admin.dashboard');
    }
}