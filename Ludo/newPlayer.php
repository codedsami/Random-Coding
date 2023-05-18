<!DOCTYPE html>
<html>
<head>
  <title>Website Layout Example</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
  <!-- <div class="left-section">
    <img src="all_time_leader.jpg" alt="All Time Leader">
    <p>All Time Leader</p>
  </div> -->
  <div class="center-section">
    <h1>Welcome to LUDO Tournament!!!</h1>
  </div>
  <!-- <div class="right-section">
    <img src="current_champion.jpg" alt="Current Champion">
    <p>Current Champion</p>
  </div> -->
</header>

  

  <nav>
  <?php include 'navbar.php'; ?>
  </nav>

  <main>
    <h2 style="text-align: center;">Register a new Player</h2>
    <form method="post" style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #dcd0ea;">
  <div style="margin-bottom: 10px;">
    <label for="firstName" style="font-weight: bold;">First Name:</label>
    <input type="text" id="firstName" name="firstName" required style="width: 100%; padding: 10px; font-size: 16px; border: 2px solid #ccc; border-radius: 4px;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="lastName" style="font-weight: bold;">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required style="width: 100%; padding: 10px; font-size: 16px; border: 2px solid #ccc; border-radius: 4px;">
  </div>
  <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Register</button>
</form>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    $file = fopen("players.txt", "a");
    fwrite($file, $firstName.":".$lastName.":"."0".":"."0".":"."0".":"."0".":"."0".":"."0".":"."c.jpg\n");
    fclose($file);

    echo '<script>alert("Player registered!")</script>';
}
  ?>

  </main>

  <footer style="background-color:antiquewhite">
   
    <p>Thank YOU!!!</p>
  </footer>
</body>
</html>
