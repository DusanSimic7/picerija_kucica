<?php



// for Insert images //

if(isset($_POST['unesi_sliku'])){

$errors =[];

    if($_POST['category'] == ""){
        $errors['category_error'] = '* Niste izabrali kategoriju';
    }

    if(!$_FILES["image"]["size"][0] > 0){
        $errors['image_error'] = "* Niste izabrali sliku";
    }


    $pixels = getimagesize($_FILES['image']['tmp_name'][0]);

    $width = $pixels[0];
    $height = $pixels[1];



    if($width < 1199){
        $errors['image_size_error'] = "* Veličina slike mora biti najmanje 1200 x 600";

    }
    if($height < 599){
        $errors['image_size_error'] = "* Veličina slike mora biti najmanje 1200 x 600";
    }
    $image_size2 = $_FILES['image']['size'][0];
    $image_size = $_FILES['image']['size'];

    if($image_size2 > 850000){
        $errors['image_bytes_error'] = "* Slika ne sme zauzimati vise od 800kB";

    }





    if(count($errors) == 0){

        require "bootstrap.php";
        $images = new Images();

        $image = $_FILES['image']['name'];
        $category_id = $_POST['category'];
        $description = $_POST['description'];


        $image_tmp = $_FILES['image']['tmp_name'];

        for ($i = 0; $i < count($image); $i++){


            if($image_size[$i] > 500){
              if($image_size[$i] < 850000){
                  move_uploaded_file($image_tmp[$i],"galerija_link/".$image[$i]);

                  $file = "galerija_link/".$image[$i];
                  $newfile = "galerija/".$image[$i];
                  copy($file, $newfile);

                  $images->createImage($image[$i], $category_id, $description);
              }else{
                  header("location:index.php?message5=Neka slika vam nije uneta zbog veličine#galeria");
                    exit();
              }


            }
        }

        if($_POST['category'] == 3){
            header("location:index.php?message5=Uspešno ste uneli sliku#galeria");
        }
        if($_POST['category'] == 4){
            header("location:index.php?message6=Uspešno ste uneli sliku#novi_proizvod");
        }

    }else{
        include "create_image.php";
    }

}

// for delete images //

if(isset($_GET['delete_image'])){

    $id = $_GET['delete_image'];

    require "bootstrap.php";
    $images = new Images();

   $image = $images->find($id);



    $deleteImageInFolder = $image->image_name;

    unlink("galerija/$deleteImageInFolder");

    unlink("galerija_link/$deleteImageInFolder");


    $images->deleteImage($id);


    if($image->category_id == 3){
        header("location:index.php?message7=Uspešno ste obrisali sliku#galeria");
    }
    if($image->category_id == 4){
        header("location:index.php?message8=Uspešno ste obrisali sliku#galeria_proizvod");

    }


}

if(isset($_GET['delete_event'])){

    $id = $_GET['delete_event'];

    require "bootstrap.php";

    $images = new Images();

    $image = $images->find($id);



    $deleteImageInFolder = $image->image_name;

    unlink("other_images/$deleteImageInFolder");



    $images->delete($id);


        header("location:index.php?message83=Uspešno ste obrisali dogadjaj#dostava");


}


if(isset($_GET['delete_image2'])){

    $id = $_GET['delete_image2'];

    require "bootstrap.php";
    $images = new Images();

    $image = $images->find($id);



    $deleteImageInFolder = $image->image_name;

    unlink("novo_u_ponudi/$deleteImageInFolder");


    $images->deleteImage($id);

        header("location:index.php?message37=Uspešno ste obrisali sliku#nova_jela");

}





if(isset($_POST['izmeni_sliku'])){

    $errors = [];

    $id_image = $_GET['id_image'];
//    var_dump($_FILES['image']['tmp_name'][0]);
//    die;


    if(!$_FILES["image"]["size"] > 0){
        $errors['image_error'] = "* Niste izabrali sliku";
    }


        if($_FILES["image"]["size"] > 0){
            $pixels = getimagesize($_FILES['image']['tmp_name']);

            $width = $pixels[0];
            $height = $pixels[1];

            if($width < 1199){
                $errors['image_size_error'] = "* Veličina slike mora biti najmanje 1200 x 600";
            }

            if($height < 599){
                $errors['image_size_error'] = "* Veličina slike mora biti najmanje 1200 x 600";
            }
        }

    $image_size = $_FILES['image']['size'];

    if($image_size > 850000){
        $errors['image_bytes_error'] = "* Slika ne sme zauzimati vise od 800kb";

    }


    $image = $_FILES['image']['name'];

    $description = $_POST['description'];

    $image_tmp = $_FILES['image']['tmp_name'];



    if(count($errors) == 0){

        require "bootstrap.php";
        $images = new Images();

        $image_find = $images->find($id_image);

        $deleteImageInFolder = $image_find->image_name;

        unlink("galerija/$deleteImageInFolder");
        unlink("galerija_link/$deleteImageInFolder");


            if($image_size > 500){

                move_uploaded_file($image_tmp,"galerija_link/".$image);

                $file = "galerija_link/".$image;
                $newfile = "galerija/".$image;
                copy($file, $newfile);

                $images->editImage($image, $description, $id_image);
            }

            if($image_find->category_id == 3){
                header("location:index.php?message5=Uspešno ste izmenili sliku#galeria");
            }
            if($image_find->category_id == 4){
                header("location:index.php?message15=Uspešno ste izmenili sliku#galeria_proizvod");

            }

    }else{
        include "edit_image.php";
    }

}

if(isset($_POST['izmeni_cover_sliku'])){

    $errors = [];

    if($_POST['image_name'] == ""){
        $errors['image_name_error'] = '* Niste izabrali sliku koju menjate';
    }

    if(!$_FILES["image"]["size"] > 0){
        $errors['image_error'] = "* Niste izabrali sliku";
    }

    if($_FILES["image"]["size"] > 0){

        $pixels = getimagesize($_FILES['image']['tmp_name']);

        $width = $pixels[0];
        $height = $pixels[1];

        if($width < 1199){
            $errors['image_size_error'] = "* Velicina slike mora biti najmanje 1200 x 600";
        }

        if($height < 599){
            $errors['image_size_error'] = "* Velicina slike mora biti najmanje 1200 x 600";
        }
    }


    $image_size = $_FILES['image']['size'];

    if($image_size > 1300000){
        $errors['image_bytes_error'] = "* Slika ne sme zauzimati vise od 1.3MB";

    }

    $id_image = $_POST['image_name'];

    $image = $_FILES['image']['name'];

    $description = $_POST['description'];

    $image_tmp = $_FILES['image']['tmp_name'];



    if(count($errors) == 0){

        require "bootstrap.php";
        $images = new Images();

        $image_find = $images->find($id_image);

        $deleteImageInFolder = $image_find->image_name;

        unlink("cover_image/$deleteImageInFolder");


        if($image_size > 500){

            move_uploaded_file($image_tmp,"cover_image/".$image);

            $images->editCoverImage($image, $description, $id_image);
        }

            header("location:index.php?message77=Uspešno ste izmenili slider sliku#cover");

    }else{
        include "edit_cover_image.php";
    }
}

if(isset($_POST['izmeni_other_sliku'])){
    $errors = [];

    $image_size = $_FILES['image']['size'];


    if(!$_FILES["image"]["size"] > 0){
        $errors['image_error'] = "* Niste izabrali sliku";
    }

    if($_FILES["image"]["size"] > 0){
        $pixels = getimagesize($_FILES['image']['tmp_name']);

        $width = $pixels[0];
        $height = $pixels[1];

        if($width != 450){
            $errors['image_size_error'] = "* Širina i visina slike mora biti 450px x 613px";
        }

        if($height != 613){
            $errors['image_size_error'] = "* Širina i visina slike mora biti 450px x 613px";
        }
    }


    if($image_size > 850000){
        $errors['image_bytes_error'] = "* Slika ne sme zauzimati vise od 800kb";

    }


    $id_image = $_GET['id_image'];

    $image = $_FILES['image']['name'];

    $image_tmp = $_FILES['image']['tmp_name'];



    if(count($errors) == 0){

        require "bootstrap.php";
        $images = new Images();

        $image_find = $images->find($id_image);

        $deleteImageInFolder = $image_find->image_name;

        unlink("other_images/$deleteImageInFolder");


        if($image_size > 500){

            move_uploaded_file($image_tmp,"other_images/".$image);

            $images->editOtherImage($image, $id_image);
        }

        header("location:index.php?message_other_image=Uspešno ste izmenili  sliku#other_image");

    }else{
        include "edit_other_image.php";
    }
}



if(isset($_POST['izmeni_nova_jela_sliku'])){

    $errors = [];



    if(!$_FILES["image"]["size"] > 0){
        $errors['image_error'] = "* Niste izabrali sliku";
    }

    if($_FILES["image"]["size"] > 0){

        $pixels = getimagesize($_FILES['image']['tmp_name']);

        $width = $pixels[0];
        $height = $pixels[1];

        if($width < 1199){
            $errors['image_size_error'] = "* Velicina slike mora biti najmanje 1200 x 600";
        }

        if($height < 599){
            $errors['image_size_error'] = "* Velicina slike mora biti najmanje 1200 x 600";
        }

    }


    $image_size = $_FILES['image']['size'];

    if($image_size > 850000){
        $errors['image_bytes_error'] = "* Slika ne sme zauzimati vise od 800kb";

    }

    $id_image = $_GET['id_image'];

    $image = $_FILES['image']['name'];

    $description = $_POST['description'];

    $image_tmp = $_FILES['image']['tmp_name'];



    if(count($errors) == 0){

        require "bootstrap.php";
        $images = new Images();

        $image_find = $images->find($id_image);

        $deleteImageInFolder = $image_find->image_name;

        unlink("novo_u_ponudi/$deleteImageInFolder");


        if($image_size > 500){

            move_uploaded_file($image_tmp,"novo_u_ponudi/".$image);

            $images->editImage($image, $description, $id_image);
        }

        header("location:index.php?message71=Uspešno ste izmenili sliku#nova_jela");

    }else{
        include "edit_new_dish_image.php";
    }
}


if(isset($_POST['unesi_nova_jela_sliku'])){

    $errors =[];


    if(!$_FILES["image"]["size"][0] > 0){
        $errors['image_error'] = "* Niste izabrali sliku";
    }

    if($_FILES["image"]["size"][0] > 0){

        $pixels = getimagesize($_FILES['image']['tmp_name'][0]);

        $width = $pixels[0];
        $height = $pixels[1];

        if($width < 1199){
            $errors['image_size_error'] = "* Veličina slike mora biti najmanje 1200 x 600";
        }
        if($height < 599){
            $errors['image_size_error'] = "* Veličina slike mora biti najmanje 1200 x 600";
        }
    }

    $image_size2 = $_FILES['image']['size'][0];
    $image_size = $_FILES['image']['size'];

    if($image_size2 > 850000){
        $errors['image_bytes_error'] = "* Slika ne sme zauzimati vise od 800kB";

    }

    if(count($errors) == 0){

        require "bootstrap.php";
        $images = new Images();

        $image = $_FILES['image']['name'];
        $category_id = 6;
        $description = $_POST['description'];


        $image_tmp = $_FILES['image']['tmp_name'];

        for ($i = 0; $i < count($image); $i++){

            if($image_size[$i] > 500){
                if($image_size[$i] < 850000){
                    move_uploaded_file($image_tmp[$i],"novo_u_ponudi/".$image[$i]);


                    $images->createImage($image[$i], $category_id, $description);
                }else{
                    header("location:index.php?message56=Neka slika vam nije uneta zbog veličine#nova_jela");
                    exit();
                }


            }
        }


            header("location:index.php?message00=Uspešno ste uneli sliku#nova_jela");


    }else{
        include "create_new_dish_image.php";
    }

}

if(isset($_POST['unesi_desavanje'])){

    $errors =[];



    if(!$_FILES["image"]["size"] > 0){
        $errors['image_error'] = "* Niste izabrali sliku";
    }

    if(empty($_POST['heading'])){
        $errors['heading_error'] = "* Niste uneli naslov";

    }

    if(empty($_POST['description'])){
        $errors['description_error'] = "* Niste uneli opis";

    }


    if($_FILES["image"]["size"] > 0){

        $pixels = getimagesize($_FILES['image']['tmp_name']);

        $width = $pixels[0];
        $height = $pixels[1];

        if($width < 699){
            $errors['image_size_error'] = "* Veličina slike mora biti najmanje 700 x 450";
        }
        if($height < 450){
            $errors['image_size_error'] = "* Veličina slike mora biti najmanje 700 x 450";
        }
    }
    $image_size = $_FILES['image']['size'];

    if($image_size > 850000){
        $errors['image_bytes_error'] = "* Slika ne sme zauzimati vise od 800kB";

    }



    if(count($errors) == 0){

        require "bootstrap.php";
        $images = new Images();

        $image = $_FILES['image']['name'];
        $category_id = 5;
        $description = $_POST['description'];
        $heading = $_POST['heading'];
        $image_tmp = $_FILES['image']['tmp_name'];




            if($image_size > 500){
                if($image_size < 850000){
                    move_uploaded_file($image_tmp,"other_images/".$image);


                    $images->createEvent($image, $category_id, $description, $heading);
                }

            }




            header("location:index.php?message84=Uspešno ste uneli dešavanje#dostava");


    }else{
        include "create_event.php";
    }

}


?>



