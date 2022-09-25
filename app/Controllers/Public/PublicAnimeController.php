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

        return $this->view('public.anime', compact('anime'));
    }
}