<?php

$num = "";
$operator = "";
$result = "";
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

if (isset($_POST['display'])) {
    $num = $_POST['display'];
}else {
    $num = "";
}

if (isset($_POST['submit'])) {
    $num = $_POST['submit'];
}else {
    $num = "";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>PHP Calculator</title>
</head>
<body>

<form action="#" method="post">
<div id="calc">
    <h3>Calculadora</h3>
        <div id="display" name="display" ><?php echo $num; ?></div>
    
    <div id="buttons-container">
        <input value="CE">
        <input value="C">
        <input value="DEL">
        <input value="/">
        <input type="submit" class="number" name="submit" value="7">
        <input type="submit" class="number" name="submit" value="8">
        <input type="submit" class="number" name="submit" value="9">
        <input value="*">
        <input type="submit" class="number" name="submit" value="4">
        <input type="submit" class="number" name="submit" value="5">
        <input type="submit" class="number" name="submit" value="6">
        <input value="-">
        <input type="submit" class="number" name="submit" value="1">
        <input type="submit" class="number" name="submit" value="2">
        <input type="submit" class="number" name="submit" value="3">
        <input value="+">
        <input type="submit" class="number" name="submit" value="0">
        <input type="submit" class="number" name="submit" value=".">
        <input class="#equal-btn" value="=">
    </div>
</div>
</form>
    
</body>
</html>