<?php 

namespace App\Controllers\Admin;

use App\Models\User;
use App\Models\Anime;
use App\Controllers\Controller;
use App\Validation\Validator;

class AdminAnimeController extends Controller {

    public function index()
    {
        $this->isAdmin();

        $animes = (new Anime($this->getDB()))->all();

        return $this->view('admin.animes.index', compact('animes'));
    }

    public function addAnime()
    {
        $this->isAdmin();

        return $this->view('admin.animes.addAnime');
    }

    public function storeAnime()
    {
        //check if the user is admin
        $this->isAdmin();

        //validate the data
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'title' => ['required'],
            'cover' => ['required'],
            'synopsis' => ['required'],
            'type' => ['required'],
            'episodes' => ['required'],
            'year' => ['required'],
            'studio' => ['required'],
        ]);
        
        //if there are errors, redirect back to the form
        if ($errors) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = $errors;
            return header('Location: /admin/anime/add');
        }

        //Check if the title already exists
        $anime = (new Anime($this->getDB()))->getByTitle($_POST['title']);
        if ($anime) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['title' => ['This anime already exists']];
            return header('Location: /admin/anime/add');
        }
        
        //Check if the year is valid
        if ($_POST['year'] < 1900 || $_POST['year'] > 2050) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['year' => ['This year is not valid']];
            return header('Location: /admin/anime/add');
        }

        //Check if the episodes count is valid
        if ($_POST['episodes'] < 1 || $_POST['episodes'] > 2000) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['episodes' => ['This number of episodes is not valid']];
            return header('Location: /admin/anime/add');
        }

        $anime = new Anime($this->getDB());
        $anime->title = $_POST['title'];
        $anime->cover = $_POST['cover'];
        $anime->synopsis = $_POST['synopsis'];
        $anime->type = $_POST['type'];
        $anime->episodes = $_POST['episodes'];
        $anime->year = $_POST['year'];
        $anime->studio = $_POST['studio'];
        $anime->addAnimeToDB();
        return header('Location: /admin/animes');
    }

    public function editAnime($id)
    {
        $this->isAdmin();

        $anime = (new Anime($this->getDB()))->findByID($id);

        return $this->view('admin.animes.editAnime', compact('anime'));
    }

    public function updateAnime($id)
    {

        //check if the user is admin
        $this->isAdmin();

        //validate the data
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'title' => ['required'],
            'cover' => ['required'],
            'synopsis' => ['required'],
            'type' => ['required'],
            'episodes' => ['required'],
            'year' => ['required'],
            'studio' => ['required'],
        ]);

        //if there are errors, redirect back to the form
        if ($errors) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = $errors;
            return header('Location: /admin/anime/' . $id . '/edit');
        }

        //Check if the year is valid
        if ($_POST['year'] < 1900 || $_POST['year'] > 2050) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['year' => ['This year is not valid']];
            return header('Location: /admin/anime/' . $id . '/edit');
        }

        //Check if the episodes count is valid
        if ($_POST['episodes'] < 1 || $_POST['episodes'] > 2000) {
            $_SESSION['errors'] = [];
            $_SESSION['errors'][] = ['episodes' => ['This number of episodes is not valid']];
            return header('Location: /admin/anime/' . $id . '/edit');
        }

        $anime = (new Anime($this->getDB()))->findByID($id);
        $anime->title = $_POST['title'];
        $anime->cover = $_POST['cover'];
        $anime->synopsis = $_POST['synopsis'];
        $anime->type = $_POST['type'];
        $anime->episodes = $_POST['episodes'];
        $anime->year = $_POST['year'];
        $anime->studio = $_POST['studio'];
        $anime->updateAnime();

        return header('Location: /admin/animes');
    }

    public function deleteAnime($id)
    {
        $this->isAdmin();
        
        $anime = (new Anime($this->getDB()))->findByID($id);
        $anime->deleteAnime();

        return header('Location: /admin/animes');
    }

}