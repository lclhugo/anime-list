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
        return $this->query("INSERT INTO {$this->table} (user_id, anime_id, rating) VALUES (?, ?, ?)", [$user_id, $anime_id, 0]);
    }
    
    public function deleteAnimeFromList(int $user_id, int $anime_id)
    {
        return $this->query("DELETE FROM {$this->table} WHERE user_id = ? AND anime_id = ?", [$user_id, $anime_id]);
    }

    public function updateRating(int $user_id, int $anime_id, int $rating)
    {
        return $this->query("UPDATE {$this->table} SET rating = ? WHERE user_id = ? AND anime_id = ?", [$rating, $user_id, $anime_id]);
    }
}