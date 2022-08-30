<?php 

namespace App\Controllers;

class FrontController extends Controller{

    public function home()
    {
        return $this->view('public.home');
    }
}