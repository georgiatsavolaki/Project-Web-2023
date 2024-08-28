<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE user_id = {$_SESSION["user_id"]}";

            $result = $mysqli->query($sql);

            $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Community Assist Hub</h1>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HomePage</title>
<link rel="stylesheet" href="admin.css">
</head>
<body>

<?php if (isset($user))?>
      <p>Hello <?= htmlspecialchars( $user["citizen_name"]) ?></p>



    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="storage.html">Storage</a>
        <a href="statistics.html">Statistics</a>
        <a href="adminmap.html">Add Rescuers</a>
        <a href="announcements.html">Announcements</a>
        <a href="signin.html">Sign In</a>
        <a href="logout.php">Log Out</a>
      </div>

      
      <h1 class="title">Admin HomePage</h1>
    

      
      <img src="images.jpg" alt="Homepage Photo">


      
</body>
</html>

