<?php
require_once 'class/Config.php';
class Search extends  Config
{
    public $anime;
    public $anime_url;
    public $anime_img;
    public $episode;
    public $votes;
    public $weight;
    public $rate;

    // public function __construct()
    // {
    // }

    public function Anime()
    {
        $req = $this->bdd->prepare("SELECT * FROM animes ORDER BY id ASC LIMIT 30");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Animesearch($search)
    {
        $req = $this->bdd->prepare("SELECT * FROM animes WHERE anime like ?");
        $req->execute(array(
            "%" . $search . "%"
        ));
        // var_dump($re);
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function AnimesearchById($id)
    {
        $req = $this->bdd->prepare("SELECT * FROM animes WHERE id = ?");
        $req->execute(array(
            $id
        ));
        // var_dump($id);
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
