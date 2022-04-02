<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All</title>
    <link rel="stylesheet" href="../css/style.css">
  <?php require_once '../components/boot.php' ?>
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
                <a class="nav-link" href="../your_op/create.php">Create</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="showAll.php">Show All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../displayAll.php">Display All</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <main class="container text-center" id="content">
        <button class="btn btn-primary" onclick="getTravel()">
            <h1>All Travels </h1>
        </button>
    </main>
    
    <script src="script.js"></script>
</body>


</html>