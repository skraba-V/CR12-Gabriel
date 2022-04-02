<?php
require_once '../components/db_connect.php';
require_once '../components/file_upload.php';


if ($_POST) {   
    $dateGo = $_POST['date_go'];
    $dateBack = $_POST['date_back'];
    $location = $_POST['locationName'];
    $continent = $_POST['continent'];
    $country = $_POST['country'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $uploadError = '';
    
  $photo= file_upload($_FILES['picture']);  

  
  $sql = "INSERT INTO travel ( date_go, date_back, locationName, continent, country, price, description, longitude, latitude, picture) 
  VALUES ('$dateGo',' $dateBack', '$location', '$continent', '$country', '$price', '$description', $longitude, $latitude, '$photo->fileName' )";

  if (mysqli_query($connect, $sql) === true) {
      $class = "success";
      $message = " 
        <div class='container text-center justify-content-center'>
            <div class='row text-center justify-content-center'>
                

            </div>
      
          <table class='table text-center'><tr>
          <td> $dateGo </td>
          <td> $dateBack </td>
          <td> $location </td>
          <td> $continent </td>
          <td> $country </td>
          <td> $price </td>
          <td> $description </td>
          <td> $longitude </td>
          <td> $latitude </td>
          </tr></table><hr>
        </div>";
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
      
  } else {
      $class = "danger";
      $message = "Error while creating record. Try again: <br>" . $connect->error;
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
  }
  mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <link rel="stylesheet" href="../css/style.scss">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    </head>
    <body>
            <div class="row text-center justify-content-center">
                <div class="nsl"></div>
                <div class="col-12 nsl">
                    <h3>You are create</h3>
                </div>
                <div class="col-6 nsl">
                    <div class="dimgbox">
                        
                    </div>
                </div>
            </div>
        <div class="container">

            <div class="text-center justify-content-center alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../home.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>