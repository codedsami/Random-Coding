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
    <h2>All Time Record</h2>
    <?php
// Read player data from the text file
$playersData = file("players.txt", FILE_IGNORE_NEW_LINES);

// Create an empty array to store player statistics
$playerStats = [];

// Loop through each player data
foreach ($playersData as $playerData) {
  // Explode player data into individual elements
  $playerElements = explode(":", $playerData);

  // Create an associative array with player statistics
  $playerStat = [
    'firstName' => $playerElements[0],
    'lastName' => $playerElements[1],
    'firstPlace' => $playerElements[2],
    'secondPlace' => $playerElements[3],
    'thirdPlace' => $playerElements[4],
    'fourthPlace' => $playerElements[5],
    'overallPoints' => $playerElements[6],
    'matchesPlayed' => $playerElements[7],
    'picture' => $playerElements[8]
  ];

  // Add player statistics to the array
  $playerStats[] = $playerStat;
}
?>

<!-- HTML table to display player statistics -->
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: center;
  }

  th {
    background-color: #f2f2f2;
  }
</style>

<table>
  <thead>
    <tr>
      <th>Picture</th>
      <th>Full Name</th>
      <th>1st Place</th>
      <th>2nd Place</th>
      <th>3rd Place</th>
      <th>4th Place</th>
      <th>Overall Points</th>
      <th>Matches Played</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($playerStats as $playerStat) { ?>
      <tr>
        <td><img src="<?php echo $playerStat['picture']; ?>" alt="Player Picture" style="width: 50px; height: 50px;"></td>
        <td><?php echo $playerStat['firstName'] . ' ' . $playerStat['lastName']; ?></td>
        <td><?php echo $playerStat['firstPlace']; ?></td>
        <td><?php echo $playerStat['secondPlace']; ?></td>
        <td><?php echo $playerStat['thirdPlace']; ?></td>
        <td><?php echo $playerStat['fourthPlace']; ?></td>
        <td><?php echo $playerStat['overallPoints']; ?></td>
        <td><?php echo $playerStat['matchesPlayed']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>




  </main>

  <footer style="background-color:antiquewhite">
    <p>THANKS</p>
  </footer>
</body>
</html>
