
<?php require "header.php"; ?>
<?php require "bootstrap.php"; ?>

<?php
$image = new Images();


$images = $image->findAll(1);


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

<a class="btn btn-info mt-5 btn btn-info" href="index.php#cover">Vrati se nazad</a>


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
                <h3 class="card-title">Izmeni slider sliku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="ImageController.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <b><p class="ml-2 mb-2 mt-4">Koju sliku menjate</p></b>

                    <select class="form-control w-50 ml-2 mb-2" name="image_name" id="" required>
                        <option value="">-- Izaberite --</option>
                        <?php foreach ($images as $image) : ?>
                            <option value="<?php echo $image->id ?>"><?php echo $image->image_name ?></option>
                        <?php endforeach; ?>

                    </select>
                    <b><span class="text-danger"><?php if(isset($errors['image_name_error'])) echo $errors['image_name_error']; ?></span></b>

                </div>
                <div class="card-body">

                    <div class="form-group">
                        <b><label for="description">Opis slike</label></b>
                        <input type="text" name="description" class="form-control" placeholder="Unesite opis slike, ili naziv jela">
                    </div>


                    <div class="form-group">
                        <b><label for="exampleInputFile">Image file</label></b>
                        <div class="input-group mb-2">

                            <input type="file"  name="image"  >

                        </div>
                        <b><span class="text-danger"><?php if(isset($errors['image_error'])) echo $errors['image_error']; ?></span></b>
                        <b><span class="text-danger"><?php if(isset($errors['image_size_error'])) echo $errors['image_size_error']; ?></span></b>
                        <b><span class="text-danger"><?php if(isset($errors['image_bytes_error'])) echo $errors['image_bytes_error']; ?></span></b>


                    </div>

                </div>


                <div class="card-footer">
                    <button type="submit" name="izmeni_cover_sliku" class="btn btn-primary">Izmeni</button>
                </div>

            </form>
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>

</div>




</body>

</html>