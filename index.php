<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Tracker</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
</head>
<body>
    <div class="header">
        <div class="container">

            <div class="navbar">
                <div class="logo cursor">
                  <a href="index.php"><img src="images/logo.png" width="50px" height="70px"></a>
                </div>
                <nav>
                    <ul class="design" id="Menu">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="view.php">College List</a></li>
                      <li><a href="search.php">Search College</a></li>
                    </ul>
                </nav> 
             <img src="images/menu.png" class="icon" onclick="toggle()" >
            </div>
    

            <div class="row">
                <div class="col">
                  <h1>Welcome to the <br>College Tracker</h1>
                  <p>Find colleges in your state....</p>
                  <a href="search.php" class="btn">Start Tracking &#8594</a>
                </div>
                <div class="col">
                <img src="images/college.png">
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
     <p class="bottom">Copyright &copy;Designed By SARTHAK  RAJPUT</p>
    </div>


    <script src="menu.js"></script>
</body>

</html>