<?php
require_once '../components/db_connect.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../components/boot.php' ?>
    <title>PHP CRUD | Add Product</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Add Product</legend>
        <form action="a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Location</th>
                    <td><input class='form-control' type="text" name="locationName" placeholder="Location" /></td>
                </tr>
                <tr>
                    <th>Continet</th>
                    <td>
		 	           <select id="inputState" class="form-control" name="continent"  placeholder="Select Continent">
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
                    <td><input class='form-control' type="text" name="country"  placeholder="Country" /></td>
                </tr>
                <tr>
                    <th>Date Go</th>
                    <td><input class='form-control' type="date" name="date_go"  placeholder="Date Go" /></td>
                </tr>
                <tr>
                    <th>Date Back</th>
                    <td><input class='form-control' type="date" name="date_back"  placeholder="Date Back" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price"  placeholder="Price" /></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><input class='form-control' type="file" name="picture"  placeholder="Photo" /></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="decimal" name="longitude"  placeholder="Longitude" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="decimal" name="latitude"  placeholder="Latitude" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description"  placeholder="Description" /></td>
                </tr>
                <tr>
                    <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                    <td><a href="../home.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>


