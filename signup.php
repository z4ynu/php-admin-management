<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Sign Up</h2>


    <section class="signup-form">

        <div class="signup-form-form">

            <form action="includes/signup.inc.php" method="post">

                <input type="text" name="name" placeholder="Full name...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdRepeat" placeholder="Repeat password...">

                <button type="submit" name="submit">Sign Up</button>

            </form>

        </div>

        <?php

        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {

                echo "<p>Fill in all fields!</p>";

            } elseif ($_GET["error"] == "invaliduid") {

                echo "<p>Choose a proper username!</p>";

            } elseif ($_GET["error"] == "invalidemail") {

                echo "<p>Choose a proper email!</p>";

            } elseif ($_GET["error"] == "passwordsdontmatch") {

                echo "<p>Passwords doesn't match!</p>";

            } elseif ($_GET["error"] == "stmtfailed") {

                echo "<p>Something went wrong, try again!</p>";

            } elseif ($_GET["error"] == "usernametaken") {

                echo "<p>Username already taken!</p>";
 
            } elseif ($_GET["error"] == "none") {

                echo "<p>You have signed up!</p>";

            }
        }

    ?>

    </section>



</body>

</html>