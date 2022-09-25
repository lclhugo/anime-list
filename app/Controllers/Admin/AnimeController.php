<?php 

namespace App\Controllers\Admin;

use App\Models\User;
use App\Models\Anime;
use App\Controllers\Controller;

class AnimeController extends Controller {

    public function index()
    {
        $animes = (new Anime($this->getDB()))->all();

        return $this->view('admin.animes.index', compact('animes'));
    }

    public function addAnime()
    {
        return $this->view('admin.animes.addAnime');
    }

    public function storeAnime()
    {
        $anime = new Anime($this->getDB());
        $anime->title = $_POST['title'];
        $anime->cover = $_POST['cover'];
        $anime->synopsis = $_POST['synopsis'];
        $anime->type = $_POST['type'];
        $anime->ep_count = $_POST['ep_count'];
        $anime->year = $_POST['year'];
        $anime->studio = $_POST['studio'];
        $anime->addAnimeToDB();
        return header('Location: /admin/animes');
    }

    public function editAnime($id)
    {
        $anime = (new Anime($this->getDB()))->findByID($id);

        return $this->view('admin.animes.editAnime', compact('anime'));
    }

    public function updateAnime($id)
    {
        $anime = (new Anime($this->getDB()))->findByID($id);
        $anime->title = $_POST['title'];
        $anime->cover = $_POST['cover'];
        $anime->synopsis = $_POST['synopsis'];
        $anime->type = $_POST['type'];
        $anime->ep_count = $_POST['ep_count'];
        $anime->year = $_POST['year'];
        $anime->studio = $_POST['studio'];
        $anime->updateAnime();

        return header('Location: /admin/animes');
    }

    public function deleteAnime($id)
    {
        $anime = (new Anime($this->getDB()))->findByID($id);
        $anime->deleteAnime();

        return header('Location: /admin/animes');
    }

}