<?php 

namespace App\Controllers\Public;

use App\Models\User;
use App\Models\Anime;
use App\Models\UserList;
use App\Controllers\Controller;


class FrontController extends Controller{
    
    // Show the home page
    public function home()
    {
        return $this->view('public.home');
    }

   
}