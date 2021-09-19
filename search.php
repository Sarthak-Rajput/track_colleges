<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
            <hr>
            <hr>
            <br>

            <div class="new">
                <h1>Search Colleges By Location</h1>
            </div>
        </div>
        
        <form method="post" name="tcredit" class="tabletext"><br>

            <div class="container">
              <br>
              <label for="to" class="para">Select State :-</label>
              <br>
                <select id="to" name="to" class="form" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                    include 'connection.php';
                    // $id = $_REQUEST['c_id'];
                    $sql = "SELECT DISTINCT state FROM college_name";
                    $result = mysqli_query($connect, $sql);
                    if (!$result) {
                        echo "Query is not correct " . $sql . "<br />" . mysqli_error($connect);
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $rows['state']; ?>">

                            <?php echo $rows['state']; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
                <div class="wrapper">
                    <button class="btn mid" name="sub" type="submit"><p class="complete">Search Now</p></button>
                </div>
                <br>
            </div>
            
            <div class="container">
                <div class="table new">
                    <div class="transfer">
                        <div>
                            <table class="first">
                                <thead>
                                    <tr>
                                        <th>College Name</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include 'connection.php';
                                        if (isset($_POST['sub'])) {
                                          $to = $_POST['to'];
                                          $sql2 = "SELECT * FROM college_name WHERE state = '$to'";
                                          $result = mysqli_query($connect,$sql2);
                                           if (!$result) {
                                              echo "Query is not correct " . $sql . "<br />" . mysqli_error($connect);
                                            }                          
                                        
                                           while($rows = mysqli_fetch_array($result))
                                           {
                                    ?>          

                                                <tr>
                                                   <td><?php echo $rows['college']; ?></td>
                                                   <td><?php echo $rows['state']; ?></td>
                                                </tr>
                                    <?php
                                           }
                                        }
                                    ?>    
                                        <?php  
                                             if(isset($_POST['sub'])){
                                             $to = $_POST['to'];
                                             $sql3 = "SELECT state FROM college_name WHERE state = '$to'";
                                             $result = mysqli_query($connect,$sql3);
                                             $shows = mysqli_fetch_array($result)
                                             
                                        ?>
                                           <p class="small">Currently showing collges in: <?php echo $shows['state']; ?></p>
                                        <?php
                                           }
                                        ?>            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    

     <br>
     <br>
    <div class="footer">
     <p class="bottom">Copyright &copy;Designed By SARTHAK  RAJPUT</p>
    </div>
    <script src="menu.js"></script>

</body>
</html>