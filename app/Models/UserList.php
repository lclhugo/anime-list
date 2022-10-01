<?php 

namespace App\Models;

use Database\DBConnection;


class UserList extends Model {

    protected $table = 'userlist';

    // query for finding all the animes in the userlist using the user's ID
    public function findByUserID(int $id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE user_id = ?", [$id]);
    }

    // query for inserting a new anime in the logged user's anime list
    public function addAnimeToList(int $user_id, int $anime_id)
    {
        return $this->query("INSERT INTO {$this->table} (user_id, anime_id) VALUES (?, ?)", [$user_id, $anime_id]);
    }
    
    // query for deleting an anime from the logged user's anime list
    public function deleteAnimeFromList(int $user_id, int $anime_id)
    {
        return $this->query("DELETE FROM {$this->table} WHERE user_id = ? AND anime_id = ?", [$user_id, $anime_id]);
    }

}