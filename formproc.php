<!DOCTYPE html>
<html>
    <head>
        <title>Welcome!</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <h1>Registered</h1>
        </header>
        <div id="main-content">
            <p>You are now one of us!</p>
            <a href="index.html">Go back to Home page</a>
            <?php
                //var_dump($_POST);
            ?>
            <br>
            <strong>Name:</strong> <?php print $_POST['name'] ?><br>
            <strong>E-mail:</strong> <?php print $_POST['email'] ?><br>
            <strong>Password:</strong> <?php print $_POST['password'] ?><br>
            <strong>Gender:</strong> <?php print $_POST['gender'] ?><br>
            <strong>Barangay:</strong> <?php print $_POST['local'] ?><br>
            <strong>Comments:</strong> <?php print $_POST['comments'] ?><br>
            <strong>Agree:</strong> <?php print $_POST['agree'] ?><br>
            <?php
                //Emailing it to me.
                $message = "Name: ".$_POST['name']."\n";
                $message .= "Email: ".$_POST['email']."\n";
                $message .= "Password: ".$_POST['password']."\n";
                $message .= "Gender: ".$_POST['gender']."\n";
                $message .= "Barangay: ".$_POST['local']."\n";
                $message .= "Comments: ".$_POST['comments']."\n";
                $message .= "Agree: ".$_POST['agree']."\n";
                
                mail("hjaeui@gmail.com","Green CDO",$message);
            ?>
        </div>
    </body>
</html>