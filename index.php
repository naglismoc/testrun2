<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1></h1>
<style>
    h1 {
        color: red;
    }
</style>

<body>
    <h1>hi</h1>
    <?php
    echo "<";
    echo "h";
    echo "1";
    echo ">";
    echo "hi";
    echo "<";
    echo "/";
    echo "h";
    echo "1";
    echo ">";
    
    echo "<h1> as PHP! </h1>";
    $number = 12;
    echo "<h1>" . $number . "</h1>";
    $arr = [5, 13, 2];
    for ($i = 0; $i < count($arr); $i++) {
        echo "<h1>" .  $arr[$i] . "</h1>";
    }

    print_r($arr);
    echo "<br>";
    var_dump($arr);
    echo "<hr>";
    echo rand(1, 30);

    ?>

    <h1> va ir veikia</h1>
    <h2> ka jus?</h2>

    <?php

    $txt = "labas";
    strlen($txt);
    strtoupper($txt);
    $txt[1];


   $txt = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
   $txt

?>
</body>

</html>

<script>
    console.log("labas");
</script>