<?php
    require "header.php";
?>

<main>
    <div>
        <section>
            <h1>Signup</h1>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p>fill in all fields</p>';
                    }
                }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
    </div>

</main>

<?php
    require "footer.php"
?>