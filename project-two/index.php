<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php


function result($str)
{
    $split = str_split($str);
    $count = count($split);
    $num = 0;

    for ($i = 0; $i < $count - 1; $i++) {
        if ($split[$i] == $split[$i + 1]) {
            $num += 1;
        }
    }
    return $num;
}


?>

<body>
    <form action="index.php" method="post">
        <label for="str">string</label>
        <input type="text" name="str" id="str">
        <br />
        <br />
        <input type="submit" value="submit" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {

        $str = @$_POST['str'];

        echo "<h2>";
        echo result($str);
        echo "</h2>";
    }
    ?>
</body>

</html>