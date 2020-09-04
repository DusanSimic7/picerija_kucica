<?php


if(isset($_POST['send_message'])){

 $errors = [];

    $person_name = $_POST['person_name'];
    $text = $_POST['text'];

    if(empty($text)){
       $errors['text_error'] = "* Niste napisali poruku";
    }

    if(count($errors) == 0 ){
        require "bootstrap.php";
        $message = new Message();

        $message->sendMessage($person_name, $text);

        header("location:index.php?message=Uspesno ste poslali utisak, hvala Vam#utisak");
    }else{
        header("location:index.php?message=*Niste uneli poruku#utisak");
    }
}