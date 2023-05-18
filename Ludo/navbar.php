<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navBar</title>
    <!-- <link rel="stylesheet" href="ludo.css"> -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<aside class="left">
			<div class="nav">
            <nav>
    <ul>
    <li><a class="<?php if ($current_page == 'Home.php') {echo "active";} else {echo "noactive";} ?>" href="Home.php">Home</a></li>

    <li><a <?php if ($current_page == 'newPlayer.php') {echo ' class="active"';} ?> href="newPlayer.php">Register New Player</a>  </li>

    <li><a <?php if ($current_page == 'newRecord.php') {echo ' class="active"';} ?> href="newRecord.php">Register New Record</a></li>

    <li ><a <?php if ($current_page == 'allTime.php') {echo ' class="active"';} ?> href="allTime.php">All Time Record</a></li>
   
    </ul>



    </nav>


</div>
		</aside>
    
</body>
</html>