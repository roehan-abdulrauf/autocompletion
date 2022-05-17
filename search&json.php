<?php

require_once('class/Search.php');

// if (isset($_POST["button"])) {
    $con = new Search();
    $searcher = $_POST['searcher'];
    $data = $con->Animesearch($searcher);
    // var_dump($data);
    echo json_encode($data, JSON_INVALID_UTF8_IGNORE);
// }
