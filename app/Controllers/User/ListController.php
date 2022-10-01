<?php 

namespace App\Controllers\User;

use App\Models\User;
use App\Models\Anime;
use App\Models\UserList;
use App\Controllers\Controller;

class ListController extends Controller {

    // Show the user's list
    public function showUserList(int $id)
    {
        $user = new User($this->getDB());
        $user = $user->findByUserID($id);

        $userlist = new UserList($this->getDB());
        $userlist = $userlist->findByUserID($id);

        $anime = new Anime($this->getDB());
        $anime = $anime->all();

        return $this->view('users.list.AnimeList', compact('user', 'userlist', 'anime'));
    }

    // Add an anime to the user's list
    public function addToList(int $id)
    {
        $this->isLogged();

        $userlist = new UserList($this->getDB());
        $userlist->addAnimeToList($_SESSION['user_id'], $id);

        return header('Location: /list/' . $_SESSION['user_id']);
    }

    // Remove an anime from the user's list
    public function deleteFromList(int $id)
    {
        $this->isLogged();

        $userlist = new UserList($this->getDB());
        $userlist->deleteAnimeFromList($_SESSION['user_id'], $id);

        return header('Location: /list/' . $_SESSION['user_id']);
    }


}