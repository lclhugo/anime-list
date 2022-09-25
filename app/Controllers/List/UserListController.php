<?php 

namespace App\Controllers\List;

use App\Models\User;
use App\Models\Anime;
use App\Models\UserList;
use App\Controllers\Controller;

class UserListController extends Controller {

    public function showUserList(string $username)
    {

    }
    
    public function addAnimeToList($id)
    {
        $user = new User($this->getDB());
        $user = $user->findByID($id);
        $animes = $user->getAnimeList();

        return $this->view('list.addAnimeToList', compact('animes'));
    }

    public function storeAnimeToList($id)
    {
        $user = new User($this->getDB());
        $user = $user->findByID($id);
        $user->addAnimeToList($_POST['anime_id']);

        return header('Location: /list/animeList/' . $id);
    }

}