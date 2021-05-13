<?
if(!empty($_GET)){
    if(isset($_GET["btn1"])){
        if($_GET["btn1"] === "val"){
            $x1 = $_GET['num'];
for($i = 1;$i<=$x1;$i++){
    echo $i ** $i."<br>";

}
        }
    }
}
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
    <form action="02.php" method="GET">
    <input type="text" name="num">
    <button type="submit" name="btn1" value="val"> отправить</button>
    </form>
</body>
</html>