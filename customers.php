<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/tables.css">
    </style>
    <title>Customers</title>
</head>
<body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <nav class="nav-bar">
    <img src="img/nocrop-1.png" alt="" />
    <div class="nav-items">
      <a href="http://localhost/BASIC%20BANKING%20SYSTEM/">Home</a>
      <a href="https://www.thesparksfoundationsingapore.org/" target="_blank">About</a>
      <a href="customers.php">Transfer Money</a>
    </div>
    <button class="btn" onclick="window.location.href= 'transactions.php';">Transaction History</button>
  </nav>

  <?php
    include 'config.php';
    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);
?>




    <div class="container">
        <h2 class="text-center pt-4" style="color : black;"> Customers</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered"
                        style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Account no.</th>
                                <th scope="col" class="text-center py-2">Account holder name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                            <tr style="color : black ;">
                                <td class="py-2"><?php echo $rows['id'] ?></td>
                                <td class="py-2"><?php echo $rows['name']?></td>
                                <td class="py-2"><?php echo $rows['email']?></td>
                                <td class="py-2"><?php echo $rows['balance']?></td>
                                <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button
                                            type="button" class="btn" style="background-color : rgb(20, 192, 86); padding: 10px; border-radius: 15px;">Transfer
                                            money</button></a></td>
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

  <footer class="footer">
    <div class="footer-container">
      <div class="social">
       <a href="https://www.linkedin.com/in/aniket-64541b232/" target="_blank"><ion-icon name="logo-linkedin" size = "large"></ion-icon></a>
       <a href="https://github.com/Aniket19-git/BasicBankingSystem_sparks" target="_blank"><ion-icon name="logo-github" size = "large"></ion-icon></a>
      </div>
      <div class="menu">
        <a href="https://www.thesparksfoundationsingapore.org/" target="_blank">About</a>
        <a href="#">Support</a>
        <a href="#">Privacy Policy</a>
      </div>
      <button class="btn" onclick="window.location.href= 'customers.php';">View Customers</button>
    </div>
    <div class="copyright">Developed by <b>Aniket</b> &copy; 2022</div>
  </footer>
</body>
</html>