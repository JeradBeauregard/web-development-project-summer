<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week Two PHP</title>
</head>
<body>
    <?php 
    echo "<h1>I am an Echoed Header</h1>";
    echo "<p>Hello I am an Echo</p>";

    $fname = "Jerad";
    $lname = "Beauregard";

    $myname = [$fname, $lname];

    echo "<p>$myname[0] $myname[1]</p>";
    echo $fname." ".$lname;
    ?>
</body>
</html>