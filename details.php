<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

require_once 'components/db_connect.php';

$sql = "SELECT * FROM travel WHERE travel_id = $_GET[travel_id]";
$result = mysqli_query($connect, $sql);

$lat ="";
$lng ="";

$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $lat ="".$row['latitude']."";
        $lng ="".$row['longitude']."";
        
        $tbody .= "
        
        <div class='row text-center justify-content-center'>
            <div class='nsl'></div>
            <div class='col-12 nsl'>
                <h1 class='dit'>
                  ".$row['locationName']."
                </h1>
                <div class='dimgbox'>
                    <img class='ditimg' src='./pictures/".$row['picture']."'>
                </div>
            </div>
            <div class='col-3 nsl'>
                <p class='ditd'>
                    ".$row['description']."
                </p>
            </div>  
            <div class='col-3 nsl'>
                <p class='dit'>
                    Price: ".$row['price']."
                </p>
                <p class='dit'>
                    Date go: ".$row['date_go']."
                </p>
                <p class='dit'>
                    Date back: ".$row['date_back']."
                </p>
            </div>  
            <div class='col-3 nsl'>
                <p class='ditd'>
                    Country: ".$row['country']."
                </p>
                <p class='ditd'>
                    Continent: ".$row['continent']."
                </p>
            </div>  
            <div class='col-12 nsl'>
                <a href='./your_op/update.php?id=".$row['travel_id']."'><button class='button' type='button'>Edit</button></a>
                <a href='delete.php?id=".$row['travel_id']."'><button class='button button2' type='button'>Delete</button></a>

            </div>

            
        </div>
        
        
        
        
        "; 
    };
}else {
    $tbody="
       <tr>
         <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    
    ";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Details</title>
</head>
<body class="bbc">
    
    <?php require_once 'components/navigation.php' ?>

    <div class="container">   
      <?php  
         echo $tbody;
      ?>   
    </div>

    <div id="map"></div>

    <script>
        var map;
        function initMap() {
            var vienna = {
                lat:  <?php echo $lng; ?>,
                lng:   <?php echo $lat; ?>
            };
            map = new google.maps.Map(document.getElementById('map'), {
                center: vienna,
                zoom: 8
            });
            var pinpoint = new google.maps.Marker({
                position: vienna,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>