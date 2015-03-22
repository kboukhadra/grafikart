<?php
include_once '../Model/connect.php';
$repo = new repo();
$articles=$repo->getAll();

foreach ($articles as $article) {
    
    echo' le titre est :'.$article['title'];
    echo'</br>';
    
}

