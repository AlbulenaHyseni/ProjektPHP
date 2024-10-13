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
    
</body>
</html>
<?php
require 'config.php';
$sqllibrat="SELECT * FROM librat";
$rezultati=mysqli_query($con,$sqllibrat);
 
if(mysqli_num_rows($rezultati)>0){
    echo"<table class='table table-striped ms-5 mt-5 w-75'
    <tr>
    <th>ID</th>
    <th>Titulli</th>
    <th>Autori</th>
    <th>Viti Publikimit</th>
    </tr> ";

    while($row=mysqli_fetch_assoc($rezultati)){
        echo "
        <tr>
        <td>".$row["libriID"]."</td>
        <td>".$row['titulli']."</td>
        <td>".$row['autori']."</td>
        <td>".$row['vitipublikimit']."</td>
        </tr>";
    }
    echo "</table>";
}

else{
echo "NUk ka rezultat";
}
?>
<button class="btn btn-secondary ms-5 mt-3 ">
     <a href="shtolibra.php" class="text-white" style="text-decoration:none">Shto Libra</a></button>
