<?php
require 'traitement.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<?php 
    foreach ($chien as $key => $value) { ?>
<li>
    <p> <?= $value->nom ?>
        <?= $value->race ?>

    <p> 
 </li>
    <?php } ?>
</ul>

<form method="post">
<label> nom : 
    <input type="text" name="nom">
    </label>
    <label> race : 
    <input type="text" name="race">
    </label>
    <input type="submit" value="créer un chien">
</form>
</body>
</html>
