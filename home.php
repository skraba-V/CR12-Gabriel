<?php

require_once 'components/db_connect.php';

$sql = "SELECT * FROM travel";
$result = mysqli_query($connect ,$sql);
$tbody= ''; 
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
      $tbody .= "
      <div class='container col-lg-4 col-md-6 col-sm-12 nsl justify-content-center'>
        <div class='boox col-12 justify-content-center '>
              <a class='eddt' href='details.php?travel_id=".$row['travel_id']."'>
                <img class='im-size' src='./pictures/" .$row['picture']."'>
              </a>
        </div>
        <div class='text-center'>
          <a class='eddt' href='details.php?travel_id=".$row['travel_id']."'>
              <hr class='hhr'/>
            <h4>" .$row['locationName']."</h4>
            <h6>" .$row['country']." - " .$row['price']."€</h6> 
          </a>
        </div>
      </div>"
      ;
   };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Jungle</title>
</head>
<body class="bbc">
    
  <?php require_once 'components/navigation.php' ?>
  
  <div class="caption text-center align-items-center">
    <h1 class="wwkin text-center">Welcome to the Jungle</h1>
    <h6 class="powe">power by Mount Everest</h6>

  </div>

    
  <div id="items">

    <div class="row text-center dit justify-content-center">
      <div class="col-12">
        <h3 class="heading text-center">Come with us on an adventure</h3>
      </div>
      
          

      <div class="col-lg-12 row">
         <?php echo $tbody; ?>
      </div>
      
      <div class="col-2 nsl row">
        <a class='eddt  sizes align-items-center' href='./your_op/create.php'> <h3 class=" text-center">CREATE</h3> </a>
      </div>

    </div>

  </div>

<footer>

    <div class="row justify-content-center">
        <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2">
            <img src="https://i0.wp.com/ebsalter.com/wp-content/uploads/revslider/slide-3/lion.png?ssl=1" alt="" width="40" height="40" class="d-inline-block align-text-top">
                 
                <p>Jungle.at</p>

        </div>

       <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2 text-start zoel">
        <h3 class="foot-h">Jungle</h3>
           <a href="./your_op/create.php" class="foot-a">Create</a>
           <a href="./AJAX/showAll.php" class="foot-a">Show All</a>
           <a href="displayAll.php" class="foot-a" key="workflow">Display All</a>
        </div> 

        <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2 text-start zoel">
            <h3 class="foot-h">Kontakt</h3>
            <a class="foot-a" href="#" target="_blank">+123456789</a>
            <a class="foot-a" href="#" target="_blank">gabriel.skraba6@gmail.com</a>

        </div> 

        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center">
           <div class="social text-center">
              <p>Follow us on: </p> 
           <a href="https://www.facebook.com" target="_blank">Fb</a>
           <a href="https://www.instagram.com" target="_blank">In</a>
           <a href="https://www.twitter.com" target="_blank">Tw</a>
           </div>


        </div> 

       <hr class="socket">
       &copy; Jungle - power by Mount Everest 2022


    </div>


</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>