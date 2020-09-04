<?php


if(isset($_POST['objavi_vest'])){
  $errors = [];

    $text= $_POST['text'];

    if(empty($text)){
        $errors['text_error'] = '*Niste uneli vesti';
    }

    if(count($errors) == 0 ){
        require "bootstrap.php";
        $news = new News();

        $news->createNews($text);

        header("location:index.php?message_news=Uspesno ste objavili vesti#desavanja");
    }else{
        include "create_news.php";
    }
}

if(isset($_GET['delete_news'])){

    $id = $_GET['delete_news'];

    require "bootstrap.php";

    $news = new News();

    $news->deleteNews($id);

    header("location:index.php?message_news=Uspešno ste obrisali vesti#desavanja");
}