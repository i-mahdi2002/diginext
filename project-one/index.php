<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php



function result($str, $n)
{
    $split = str_split($str);
    $c = count($split);

    if ($n <= $c) {
        $num = 0;
        foreach ($split as $val) {
            if ($val == 'a') {
                $num += 1;
            }
        }
        return $num;
    } else {


        $count = intdiv($n, $c);

        for ($j = 0; $j < $count; $j++) {

            for ($i = 0; $i < $c; $i++) {
                $str .= $split[$i];
            }
        }
        $res = str_split($str);


        $int = $n;

        $num = 0;
        for ($q = 0; $q < $int; $q++) {
            if ($res[$q] == 'a') {
                $num += 1;
            }
        }
        return $num;
    }
}

?>

<body>
    <form action="index.php" method="post">
        <label for="str">string</label>
        <input type="text" name="str" id="str">
        <br />
        <br />
        <label for="num">number</label>
        <input type="number" name="int" id="int">
        <br />
        <br />
        <input type="submit" value="submit" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {

        $str = @$_POST['str'];
        $num = @$_POST['int'];

        echo "<h2>";
        echo result($str, $num);
        echo "</h2>";
    }
    ?>
</body>

</html>