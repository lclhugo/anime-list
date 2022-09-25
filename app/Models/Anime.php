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

    public function goToAnime(): string
    {
        return <<<HTML
        <a href="/anime/$this->id">$this->title</a>
        HTML;
    }

    public function goToAnimeEdit(): string
    {
        return <<<HTML
        <a href="/anime/$this->id/edit">$this->title</a>
        HTML;
    }

    public function addAnimeToDB()
    {
        $this->query("INSERT INTO animes (title, cover, synopsis, type, ep_count, year, studio) VALUES (?, ?, ?, ?, ?, ?, ?)", [$this->title, $this->cover, $this->synopsis, $this->type, $this->ep_count, $this->year, $this->studio]);
    }

    public function updateAnime()
    {
        $this->query("UPDATE animes SET title = ?, cover = ?, synopsis = ?, type = ?, ep_count = ?, year = ?, studio = ? WHERE id = ?", [$this->title, $this->cover, $this->synopsis, $this->type, $this->ep_count, $this->year, $this->studio, $this->id]);
    }

    public function deleteAnime()
    {
        $this->query("DELETE FROM animes WHERE id = ?", [$this->id]);
    }
}