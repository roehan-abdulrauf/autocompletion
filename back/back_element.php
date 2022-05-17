<?php
require_once 'class/Search.php';
$id = $_GET['id'];
// var_dump($id);
$search = New Search();
$searchbyid = $search->AnimesearchById($id);
// var_dump($searchbyid);
foreach($searchbyid as $s){
    $_SESSION['title'] = $s['anime'];
    $_SESSION['img'] = $s['anime_img'];
    $_SESSION['ep'] = $s['episodes'];
    $_SESSION['vote'] = $s['votes'];
    $_SESSION['rate'] = $s['rate'];
    $_SESSION['url'] = $s['anime_url'];
}
?>