<?php
 
require_once '../components/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM travel WHERE travel_id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $dateGo = $data['date_go'];
        $dateBack = $data['date_back'];
        $location = $data['locationName'];
        $continent = $data['continent'];
        $country = $data['country'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $photo = $data['picture']; 
    } else {
        header("location: ../error.php");
    }
    mysqli_close($connect);
} else {
   header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title> 
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
        
    </head>
    <body class="bbc">
    
    <nav class="navbar navbar-expand-lg navbar-light zul" style="padding-inline:4rem;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home.php">
              <img src="https://i0.wp.com/ebsalter.com/wp-content/uploads/revslider/slide-3/lion.png?ssl=1" alt="" width="40" height="40" class="d-inline-block align-text-top">
            
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create.php">Create</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../AJAX/showAll.php">Show All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../displayAll.php">Display All</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
        <div class="container dit">
            <div class="row text-center justify-content-center">
                <div class="nsl"></div> 
                <div class="col-12 nsl">
                    <h3 class="dit">Update request</h3>
                </div>
                <div class="col-6 nsl">
                    <div class="dimgbox">
                        <img class="dimg" src='../pictures/<?php echo $photo ?>' alt="<?php echo $photo ?>">
                    </div>
                </div>

            </div>
        
        


        <fieldset>
            <form action="a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-dark">
                <tr>
                    <th>Location</th>
                    <td><input class='form-control' type="text" name="locationName" placeholder="Location" value="<?php echo $location ?>" /></td>
                </tr>
                <tr>
                    <th>Continet</th>
                    <td>
		 	           <select id="inputState" class="form-control" name="continent"  placeholder="Select Continent" value="<?php echo $continent ?>">
		 		        <option value="Asia">Asia</option>
		 		        <option value="Africa">Africa</option>
		 		        <option value="North America">North America</option> 
		 		        <option value="South America">South America</option> 
		 		        <option value="Europe">Europe</option> 
		 		        <option value="Australia">Australia</option> 
		 	           </select>
                    </td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><input class='form-control' type="text" name="country"  placeholder="Country" value="<?php echo $country ?>" /></td>
                </tr>
                <tr>
                    <th>Date Go</th>
                    <td><input class='form-control' type="date" name="date_go"  placeholder="Date Go" value="<?php echo $dateGo ?>" /></td>
                </tr>
                <tr>
                    <th>Date Back</th>
                    <td><input class='form-control' type="date" name="date_back"  placeholder="Date Back" value="<?php echo $dateBack ?>" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price"  placeholder="Price" value="<?php echo $price ?>" /></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input class='form-control' type="file" name="picture"  placeholder="Photo"/></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="decimal" name="longitude"  placeholder="Longitude" value="<?php echo $longitude ?>" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="decimal" name="latitude"  placeholder="Latitude" value="<?php echo $latitude ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description"  placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>


                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['travel_id'] ?>" /> <!-- ovo je iz sql-->
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "../home.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>



