<!DOCTYPE html>
<html>
<head>
  <title>Website Layout Example</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
  <div class="center-section">
    <h1>Welcome to LUDO Tournament!!!</h1>
  </div>
  </header>

  <nav>
  <?php include 'navbar.php'; ?>
  </nav>

  <main>
    <h2 style="text-align: center;">Register New Game</h2>
    <form method="post" style="font-size:x-large;   max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f2e8ce;">
    <div>
      <label for="place1">Place 1:</label>
      <select id="place1" name="place1" required>
        <option value="">Select a player</option>
        <?php
        $players = file("players.txt", FILE_IGNORE_NEW_LINES);
        foreach ($players as $player) {
          $name = explode(":", $player)[0];
          echo "<option value='$name'>$name</option>";
        }
        ?>
      </select>
    </div>
    <div>
      <label for="place2">Place 2:</label>
      <select id="place2" name="place2" required>
        <option value="">Select a player</option>
        <?php
        foreach ($players as $player) {
          $name = explode(":", $player)[0];
          echo "<option value='$name'>$name</option>";
        }
        ?>
      </select>
    </div>
    <div>
      <label for="place3">Place 3:</label>
      <select id="place3" name="place3" required>
        <option value="">Select a player</option>
        <?php
        foreach ($players as $player) {
          $name = explode(":", $player)[0];
          echo "<option value='$name'>$name</option>";
        }
        ?>
      </select>
    </div>
    <div>
      <label for="place4">Place 4:</label>
      <select id="place4" name="place4" required>
        <option value="">Select a player</option>
        <?php
        foreach ($players as $player) {
          $name = explode(":", $player)[0];
          echo "<option value='$name'>$name</option>";
        }
        ?>
      </select>
    </div>
    <input type="submit" value="Register" style="background-color: #e65db1; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-top: 20px;">

  </form>

  <script>
    // Remove selected player from the options of the remaining select elements
    const selects = document.querySelectorAll('select');
    selects.forEach((select, index) => {
      select.addEventListener('change', (event) => {
        const selectedPlayer = event.target.value;
        selects.forEach((s, i) => {
          if (i !== index) {
            const option = s.querySelector(`option[value="${selectedPlayer}"]`);
            if (option) {
              option.disabled = true;
            }
          }
        });
      });
    });
  </script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstPlace = $_POST["place1"];
  $secondPlace = $_POST["place2"];
  $thirdPlace = $_POST["place3"];
  $fourthPlace = $_POST["place4"];

  // Read the players.txt file
  $playersData = file("players.txt", FILE_IGNORE_NEW_LINES);

  // Update the data for each player based on their position
  foreach ($playersData as &$player) {
    $playerData = explode(":", $player);
    $firstName = $playerData[0];
    $lastName = $playerData[1];
    $firstZero = intval($playerData[2]);
    $secondZero = intval($playerData[3]);
    $thirdZero = intval($playerData[4]);
    $fourthZero = intval($playerData[5]);
    $fifthZero = intval($playerData[6]);
    $sixthZero = intval($playerData[7]);
    $seventh = $playerData[8];

    if ($firstName === $firstPlace) {
      $firstZero++;
      $sixthZero++;
      $fifthZero += 4;
    } elseif ($firstName === $secondPlace) {
      $secondZero++;
      $sixthZero++;
      $fifthZero += 3;
    } elseif ($firstName === $thirdPlace) {
      $thirdZero++;
      $sixthZero++;
      $fifthZero += 2;
    } elseif ($firstName === $fourthPlace) {
      $fourthZero++;
      $sixthZero++;
      $fifthZero += 1;
    }

    // Update the player's data
    $player = "$firstName:$lastName:$firstZero:$secondZero:$thirdZero:$fourthZero:$fifthZero:$sixthZero:$seventh";
  }

  // Write the updated data back to the players.txt file
  $updatedData = implode("\n", $playersData);
  file_put_contents("players.txt", $updatedData);

  echo '<script>alert("Record registered!")</script>';
}
?>




  </main>

  <footer style="background-color:antiquewhite">
    <p>Thank You!!!</p>
  </footer>
</body>
</html>
