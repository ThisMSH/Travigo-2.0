<?php
    $getData = new toursController();
    $Tours = $getData->getTours();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify a destination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/add_modif.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        if(isset($view_data)){
            foreach($view_data as $tour){
    ?>
    <div class="container">
        <form class="row g-3" method="post" action="http://localhost/Travigo2/tours/updateTour/<?= $tour['TourID']?>" enctype="multipart/form-data">
            <div>
                <h1>Modify a destination.</h1>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput01" value="<?= $tour['Destination'] ?>" placeholder="NFT name"  name="name" required>
                <label for="floatingInput01">The name new of the destination</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput03" value="<?= $tour['Price'] ?>" placeholder="NFT price" step=".01" name="price" required>
                <label for="floatingInput03">The new price</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a description here" id="floatingTextarea2" name="description" style="height: 100px"><?= $tour['Description'] ?></textarea>
                <label for="floatingTextarea2">The new description</label>
            </div>
            <div class="">
                <label for="formFile" class="form-label">Upload an image</label>
                <input class="form-control" type="file" id="formFile" name="tourimage">
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <?php
            }
        }
    ?>
</body>
</html>