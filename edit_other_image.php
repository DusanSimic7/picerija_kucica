
<?php require "header.php"; ?>
<?php require "bootstrap.php"; ?>

<?php
$images = new Images();


$id_image = isset($_GET['id_image']) ? $_GET['id_image'] : "" ;


 if(!isset($_SESSION['email'])){
      header("location:login.php");
}

?>
<body style="background-color: lightblue;">

<style>
    .admin_slika{

    }
    @media only screen and (max-width: 767px){
        .admin_slika{
            width:100%;
        }
    }
</style>

<a class="btn btn-info mt-5 btn btn-info" href="index.php#other_image">Vrati se nazad</a>

<div class="row">
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-3">
        <div class="text-center m-auto" style="width: 200px;"><img class="rounded" style="width:100%;" src="admin_image.jpg" alt="">
            <?php if(isset($_SESSION['email'])) : ?>
                <h5 class=" btn btn-success mt-3 disabled"><?php echo auth()->firstname." ".auth()->lastname; ?></h5>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-4">
        <div class=" card card-primary mt-5 ml-5 admin_slika m-auto">
            <div class="card-header">
                <h3 class="card-title">Izmeni sliku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="ImageController.php?id_image=<?php echo $id_image; ?>" method="post" enctype="multipart/form-data">

                <div class="card-body">

                    <div class="form-group">
                        <b><label for="exampleInputFile">Image file</label></b>
                        <div class="input-group mb-2">

                            <input type="file"  name="image"  required>

                        </div>
                        <b><span class="text-danger"><?php if(isset($errors['image_error'])) echo $errors['image_error']; ?></span></b>
                        <b><span class="text-danger"><?php if(isset($errors['image_size_error'])) echo $errors['image_size_error']; ?></span></b>
                        <b><span class="text-danger"><?php if(isset($errors['image_bytes_error'])) echo $errors['image_bytes_error']; ?></span></b>



                    </div>

                </div>


                <div class="card-footer">
                    <button type="submit" name="izmeni_other_sliku" class="btn btn-primary">Izmeni</button>
                </div>

            </form>
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>

</div>




</body>

</html>