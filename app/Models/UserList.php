<?php 

namespace App\Models;

use Database\DBConnection;


class UserList extends Model {

    protected $table = 'userlist';

    public function getAnimeList(int $id): string
    {
        return $this->query("
        SELECT * FROM animes
        INNER JOIN userlist ON animes.id = userlist.anime_id
        WHERE userlist.user_id = 6
        ORDER BY animes.title ");
    }

    public function addAnimeToList(int $id): string
    {
        $this->query("INSERT INTO userlist (user_id, anime_id) VALUES (?, ?)", [$id, $_POST['anime_id']]);
    }

    public function deleteAnimeFromList(int $id): string
    {
        $this->query("DELETE FROM userlist WHERE user_id = ? AND anime_id = ?", [$id, $_POST['anime_id']]);
    }

    public function getAnimeListCount(int $id): string
    {
        return $this->query("SELECT COUNT(*) FROM userlist WHERE user_id = ?", [$id], true);
    }

    public function setRatings(int $id): string
    {
        $this->query("UPDATE userlist SET rating = ? WHERE user_id = ? AND anime_id = ?", [$_POST['rating'], $id, $_POST['anime_id']]);
    }


}