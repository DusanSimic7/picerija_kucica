<?php

if(!isset($_SESSION['email'])){
    header("location:login.php");
}

if(isset($_POST['unesi_pice'])){
    $name = $_POST['name'];
    $category_id = $_POST['category'];
    $ingredients = $_POST['ingredients'];
    $price = $_POST['price'];


$errors = [];

    if($category_id == ""){
        $errors['category_error'] = '* Niste izabrali kategoriju';
    }

    if(empty($name)){
        $errors['name_error'] = '* Niste uneli ime';
    }

    if(empty($price)){
        $errors['price_error'] = '* Niste uneli cenu';
    }

    if(count($errors) == 0){
        require "bootstrap.php";

        $beverage = new Beverage();

        $beverage->createBeverage($category_id, $name, $ingredients, $price);


        header("location:index.php?message9=Uspešno ste dodali piće#beverage");


    }else{
        include "create_beverage.php";
    }


}

if(isset($_GET['delete_beverage'])){

    $id = $_GET['delete_beverage'];

    require "bootstrap.php";

    $beverage = new Beverage();

    $beverage->deleteBeverage($id);

    header("location:index.php?message8=Uspešno ste obrisali piće#beverage");
}

if(isset($_POST['izmeni_pice'])){

    $id = $_GET['id'];

    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $price = $_POST['price'];


    $errors = [];



    if(empty($name)){
        $errors['name_error'] = '* Niste izabrali ime';
    }

    if(empty($price)){
        $errors['price_error'] = '* Niste izabrali cenu';
    }

    if(count($errors) == 0){
        require "bootstrap.php";

        $beverage = new Beverage();

        $beverage->editBeverage($name, $ingredients, $price, $id);

        header("location:index.php?message10=Uspešno ste izmenili piće#beverage");
    }else{
        include "edit_beverage.php";
    }
}
