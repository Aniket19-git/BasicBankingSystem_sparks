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
    <title>Transactions</title>
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
   
  <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color : black;">
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['sno']; ?></td>
                        <td class="py-2"><?php echo $rows['sender']; ?></td>
                        <td class="py-2"><?php echo $rows['receiver']; ?></td>
                        <td class="py-2"><?php echo $rows['balance']; ?> </td>
                        <td class="py-2"><?php echo $rows['datetime']; ?> </td>

                        <?php
            }

        ?>
                </tbody>
            </table>

        </div>
    </div>

  <footer class="footer">
    <div class="footer-container">
      <div class="social">
       <a href="https://www.linkedin.com/in/aniket-64541b232/" target="_blank"><ion-icon name="logo-linkedin" size = "large"></ion-icon></a>
       <a href="" target="_blank"><ion-icon name="logo-github" size = "large"></ion-icon></a>
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