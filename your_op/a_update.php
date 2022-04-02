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
    $id = $_POST['id'];
    
    
    $uploadError = '';


    $photo = file_upload($_FILES['picture']);
    if($photo->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");           
        $sql = "UPDATE travel SET date_go = '$dateGo', date_back = '$dateBack' , locationName = '$location', continent = '$continent', country = '$country', price = '$price', description = '$description', longitude = '$longitude', latitude = '$latitude', picture = '$photo->fileName'  WHERE travel_id = {$id}";
    }else{
        $sql = "UPDATE travel SET date_go = '$dateGo', date_back = '$dateBack', locationName = '$location', continent = '$continent', country = '$country', price = '$price', description = '$description', longitude = '$longitude', latitude = '$latitude' WHERE travel_id = {$id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../home.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>

