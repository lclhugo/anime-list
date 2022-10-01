<?php

namespace App\Controllers\Public;

use App\Models\Anime;
use App\Models\User;
use App\Models\UserList;
use App\Controllers\Controller;


class PublicAnimeController extends Controller {

    // show the selected anime page with all the information
     public function showAnime(int $id)
    {
        $anime = new Anime($this->getDB());
        $anime = $anime->findByID($id);

        return $this->view('public.animes.anime', compact('anime'));
    }


    // show all the animes in the database 
    public function showAllAnimes()
    {
        $anime = new Anime($this->getDB());
        $anime = $anime->all();

        return $this->view('public.animes.animes', compact('anime'));
    }
}