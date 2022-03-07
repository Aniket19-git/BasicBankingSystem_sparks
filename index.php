<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Sparks Foundation Bank</title>
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
<header class="hero-section">
  <div class="hero-text-container">
    <h1>
      Smart Banking for the <br>
       Good Life :)</h1>
      <p>Take your financial life online. Your easy bank account <br> will be a one-stop shop for spending, saving, <br>investing and much more.</p>
      <button class="btn" onclick="window.location.href= 'customers.php';">View Customers</button>
  </div>
  <div class="hero-img-container">
    <img src="img/piggy-bank-g2b8a51519_1920.png" alt="" />
  </div>
</header>
<div class="container">
  <section class="why-us">
    <h1>Why choose Sparks Foundation Bank ?</h1>
    <p
      >We leverage open banking to turn your bank account into your
      financial hub.<br />Control your finances like never before.</p>
  </section>
  <section class="features-section">
    <div class="feature-item">
      <img src="img/icon-online.png" alt="" />
      <h1>Online Banking</h1>
      <p>Our modern web and mobile<br />
        applications allow you to keep<br />
        track of your finances whereever<br />
        you are in the world.</p>
    </div>
    <div class="feature-item">
      <img src="img/icon-budgeting.png" alt="" />
      <h1>Simple Budgeting</h1>
      <p>See exactly where your money<br />
        goes every month.Recieve<br />
        notifications when you're close to<br />
        hitting your limits.</p>
        </div>

    <div class="feature-item">
      <img src="img/icon-onboarding.png" alt="" />
      <h1>Fast Onboarding</h1>
      <p
        >We don't do branches.Open your<br />
        accound minutes online and start<br />
        taking controll of your finances<br />
        right away.</p
      >
    </div>
    <div class="feature-item">
      <img src="img/icon-api.png" alt="" />
      <h1>Open API</h1>
      <p>Manage your savings, investments,<br />
        pension and much more from one<br />
        account.Tracking your money has<br />
        never been easier.</p>
    </div>
  </section>
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