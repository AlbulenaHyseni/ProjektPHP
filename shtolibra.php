<?php
require 'config.php';
 
    if(isset($_POST['titulli']) && isset($_POST['autori']) && isset($_POST['viti'])){
        
        $titulli=$_POST['titulli'];
        $autori=$_POST['autori'];
        $vitipublikimit=$_POST['viti'];
    
     $sql="INSERT INTO `librat`(`titulli`,`autori`,`vitipublikimit`) VALUES ('$titulli','$autori','$vitipublikimit')";
        if(mysqli_query($con, $sql)){
            echo"Libri u shtuan me sukses";
        } else{
            echo "Te dhenat nuk u regjistruan";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1 class="text-center mt-3">Librat e Regjistruara</h1>
    <form action="" method="POST" class="w-50 border p-5 ms-5 mt-5 bg-dark text-white rounded">
       
        <label for="titulli" class="form-label">Titulli Librit:</label> 
        <input type="text" id="titulli" name="titulli" class="form-control">
        <label for="autori" class="form-label">Autori:</label>
        <input type="text" id=autori name="autori" class="form-control">
        <label for="viti" class="form-label">VitiPublikimit:</label>
        <input type="text" id="viti" name="viti" class="form-control">
        <input type="submit"  class="btn btn-secondary" value="Shto libra" name="Shto">
    </form>
</body>
</html>