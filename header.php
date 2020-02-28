<?php
    session_start();
?>
<!doctype html>


<!-- sets the language of the page -->
<html lang="en">
<head>
<!-- enables encoding of all characters not required but good practice -->
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="The HTML5 Herald">
  <!-- browser will render the width of the page at the width of its own screen -->
  <meta name="viewport" content="width=device-width, intial-scale=1">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
<header>
    <nav>
        <a href="#">
            <img src="#" alt="logo">
        </a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Project</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div>
            <?php
            if (isset($_SESSION['userUid'])) {
                echo
                '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>';
                } else {
                    echo '
                        <form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/Email">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit">Login</button>
                        </form>
                    <a href="signup.php">Signup</a>';
                }
            ?>


        </div>
    </nav>
</header>