<?php 

namespace App\Models;

use DateTime;
use App\Models\Model;
use Database\DBConnection;

class Anime extends Model {

    protected $table = 'animes';

    // query for inserting a new anime in the database
    public function addAnimeToDB()
    {
        $this->query("INSERT INTO {$this->table} (title, cover, synopsis, type, episodes, year, studio) VALUES (?, ?, ?, ?, ?, ?, ?)", [$this->title, $this->cover, $this->synopsis, $this->type, $this->episodes, $this->year, $this->studio]);
    }

    // query for updating an anime in the database
    public function updateAnime()
    {
        $this->query("UPDATE {$this->table} SET title = ?, cover = ?, synopsis = ?, type = ?, episodes = ?, year = ?, studio = ? WHERE id = ?", [$this->title, $this->cover, $this->synopsis, $this->type, $this->episodes, $this->year, $this->studio, $this->id]);
    }

    // query for deleting an anime from the database
    public function deleteAnime()
    {
        $this->query("DELETE FROM {$this->table} WHERE id = ?", [$this->id]);
    }

    //query for getting an anime by its title
    public function getByTitle(string $title)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE title = ?", [$title], true);
    }
}