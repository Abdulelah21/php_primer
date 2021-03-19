<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer -Index</title>
</head>
<body>
<!--Basic HTML -->
    <h2>Follow each link to the page example</h2>
    <ul>
    <li><a href="array.php">Simple Array and Printouts</a> </li>
    <li><a href="forloop.php">Simple for loop</a></li>
    <li><a href="dowhileloop.php">Simple do while </a></li>
    <li><a href="whileloop.php">Simple While loop</a></li>
    <li><a href="ifstatement.php">Simple IF statement</a></li>
    <li><a href="switchstatement.php">Simple Switch Statement</a></li>
    </ul>
    <?php
    //Printing to HTML usering echo 
        echo 'Hello PhP!';
        echo '<br/>';
        echo 'Sacand line.';
        echo '<br/>';
    ?>

    <?php 
        $name = 'Abdulelah';
        echo $age=22;
        echo '<h1>My Name Is:'.$name.' </h1>';
        echo '<h1>My Age Is:'.$age.' </h1>';
    ?>

</body>
</html>