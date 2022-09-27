<?php 

namespace App\Models;

use Database\DBConnection;


class UserList extends Model {

    protected $table = 'userlist';

    public function findByUserID(int $id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE user_id = ?", [$id]);
    }

    public function addAnimeToList(int $user_id, int $anime_id)
    {
        return $this->query("INSERT INTO {$this->table} (user_id, anime_id) VALUES (?, ?)", [$user_id, $anime_id]);
    }
    
    public function deleteAnimeFromList(int $user_id, int $anime_id)
    {
        return $this->query("DELETE FROM {$this->table} WHERE user_id = ? AND anime_id = ?", [$user_id, $anime_id]);
    }

}