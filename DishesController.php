<?php


if(isset($_POST['unesi_jelo'])){

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
        $errors['price_error'] = '* Niste izabrali cenu';
    }

    if(count($errors) == 0){
        require "bootstrap.php";

        $dish = new Dishes();

        $dish->createDish($category_id, $name, $ingredients, $price);



        header("location:index.php?message11=Uspešno ste uneli jelo#menu");


    }else{
        include "create_dish.php";
    }


}

if(isset($_GET['delete_dish'])){
    $id = $_GET['delete_dish'];

    require "bootstrap.php";

    $dish = new Dishes();

    $dish->deleteDish($id);

    header("location:index.php?message12=Uspešno ste obrisali jelo#menu");
}

if(isset($_POST['izmeni_jelo'])){

    $id = $_GET['id'];

    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $price = $_POST['price'];

    $errors = [];


    if(empty($name)){
        $errors['name_error'] = '* Niste uneli ime';
    }

    if(empty($price)){
        $errors['price_error'] = '* Niste uneli cenu';
    }

    if(count($errors) == 0){
        require "bootstrap.php";

        $dish = new Dishes();

        $dish->editDishes($name, $ingredients, $price, $id);

        header("location:index.php?message13=Uspešno ste izmenili jelo#menu");


    }else{
        include "edit_dish.php";
    }


}

