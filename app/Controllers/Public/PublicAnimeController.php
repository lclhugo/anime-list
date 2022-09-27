<?php

namespace App\Controllers\Public;

use App\Models\Anime;
use App\Models\User;
use App\Models\UserList;
use App\Controllers\Controller;


class PublicAnimeController extends Controller {

     public function showAnime(int $id)
    {
        $anime = new Anime($this->getDB());
        $anime = $anime->findByID($id);

        return $this->view('public.animes.anime', compact('anime'));
    }

    public function searchAnime()
    {
        $anime = new Anime($this->getDB());
        $anime = $anime->searchAnime($_POST['search']);

        return $this->view('public.animeSearch', compact('anime'));
    }
}