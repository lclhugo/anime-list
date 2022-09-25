<?php 

namespace App\Controllers;

use App\Models\Anime;
use App\Models\User;
use App\Models\UserList;

class FrontController extends Controller{

    public function login(){
        return $this->view('public.login');
    }

    public function home()
    {
        $anime = new Anime($this->getDB());
        $animes = $anime->all();

        return $this->view('public.home', compact ('animes'));
    }

    public function showAnime(int $id)
    {
        $anime = new Anime($this->getDB());
        $anime = $anime->findByID($id);

        return $this->view('public.anime', compact('anime'));
    }

    public function showAnimeListByTitle(int $id)
    {
        $userlist = new UserList($this->getDB());
        $animes = $userlist->getAnimeListByTitle($id);

        return $this->view('public.animeList', compact('animes'));
    }

    public function showAnimeListByRating(int $id)
    {
        $userlist = new UserList($this->getDB());
        $animes = $userlist->getAnimeListByRating($id);

        return $this->view('public.animeList', compact('animes'));
    }

    public function showAnimeListByDate(int $id)
    {
        $userlist = new UserList($this->getDB());
        $animes = $userlist->getAnimeListByDate($id);

        return $this->view('public.animeList', compact('animes'));
    }

    public function showAnimeList(int $id)
    {
        $userlist = new UserList($this->getDB());
        $animes = $userlist->getAnimeList($id);

        return $this->view('public.animeList', compact('animes'));
    }

    public function addAnime()
    {
        return $this->view('admin.addAnime');
    }

    public function storeAnime()
    {
        $anime = new Anime($this->getDB());
        $anime->create($_POST);

        return $this->redirect('/home');
    }
}