<?php 

namespace App\Models;

use DateTime;
use App\Models\Model;
use Database\DBConnection;

class Anime extends Model {

    protected $table = 'animes';

    public function getCreatedAt(): string
    {
        $date = new DateTime($this->created_at);
        return $date->format('d/m/Y : H:i:s');
    }

    public function getUpdatedAt(): string
    {
        $date = new DateTime($this->updated_at);
        return $date->format('d/m/Y : H:i:s');
    }

    public function generateAnimeCard()
    {
        return <<<HTML
        <section class="card">
            <a href= "/anime/{$this->id}"><h3>{$this->title}</h3></a>
            <a href="/anime/{$this->id}"<img src="{$this->cover}" alt="{$this->title}"></a>
        </section>
        HTML;
    }

    public function addAnimeToDB()
    {
        $this->query("INSERT INTO {$this->table} (title, cover, synopsis, type, episodes, year, studio) VALUES (?, ?, ?, ?, ?, ?, ?)", [$this->title, $this->cover, $this->synopsis, $this->type, $this->episodes, $this->year, $this->studio]);
    }

    public function updateAnime()
    {
        $this->query("UPDATE {$this->table} SET title = ?, cover = ?, synopsis = ?, type = ?, episodes = ?, year = ?, studio = ? WHERE id = ?", [$this->title, $this->cover, $this->synopsis, $this->type, $this->episodes, $this->year, $this->studio, $this->id]);
    }

    public function deleteAnime()
    {
        $this->query("DELETE FROM {$this->table} WHERE id = ?", [$this->id]);
    }

        public function getAnimesFromAnimeList(int $id): array
    {
        return $this->query("SELECT * FROM {$this->table} INNER JOIN userlist ON animes.id = userlist.anime_id WHERE userlist.user_id = ?", [$id]);
    }

    public function searchAnime(): array
    {
        return $this->query("SELECT * FROM {$this->table} WHERE title LIKE ?", ["%{$_POST['search']}%"]);
    }

    public function getByTitle(string $title)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE title = ?", [$title], true);
    }
}