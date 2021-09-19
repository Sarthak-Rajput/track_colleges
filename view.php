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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

</head>
<body>
    <?php
      include 'connection.php';
      $sql = "SELECT * FROM college_name LIMIT 10";
      $result = mysqli_query($connect,$sql);
    ?>
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
            <hr>
            <hr>
            <br>

            <div class="table new">
                 <h1>Top Colleges in India</h1>
                    <div class="transfer">
                        <div>
                            <table class="first">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>College Name</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                        </div>
          <?php

           while($rows = mysqli_fetch_array($result))
          {
            ?>
                <tr>
                  <td><?php  echo $rows['s.no.']; ?></td>
                  <td><?php echo $rows['college']; ?></td>
                  <td><?php echo $rows['state']; ?></td>
                </tr>
            <?php
              }

            ?>
                                </tbody>
                            </table>
                   
                </div>
            </div>
        </div>
    </div>
      <br>
    <div class="footer">
     <p class="bottom">Copyright &copy;Designed By SARTHAK  RAJPUT</p>
    </div>
    <script src="menu.js"></script>
</body>
</html>
