<?php 

namespace App\Controllers\Public;

use App\Models\User;
use App\Models\Anime;
use App\Models\UserList;
use App\Controllers\Controller;


class FrontController extends Controller{
    
    public function home()
    {
        $anime = new Anime($this->getDB());
        $anime = $anime->all();

        return $this->view('public.home');
    }

   
}