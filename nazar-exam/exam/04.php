<?
if(!empty($_GET)){
    if(isset($_GET["btn1"])){
        if($_GET["btn1"] === "val"){
            $em = $_GET['email'];
            $ps1 = $_GET['password1'];
            $ps2 = $_GET['password2'];
            if(strripos($em, "@")){
                echo "У почты правильная валидация <br>";
            }
            else {
                echo "У почты неправильная валидация <br>";
            }
if(preg_match('/[A-Z]/',$ps1) == false){
    echo "Нет большой буквы <br>";
}
else if(preg_match('/[0-9]/',$ps2) == false){
    echo "Нет большой цифры <br>";
}
else if(($ps1 == $ps2) == false){
    echo "Пароли не совпадают <br>";
}
else{
    echo "Пароль надежный <br>";
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
<form action="04.php" method="GET">
<label for="email">email</label>
    <input type="text" name="email" id="email">
    <label for="password1">password1</label>
    <input type="text" name="password1" id="password1">
    <label for="password2">password2</label>
    <input type="text" name="password2" id="password2">
    <button type="submit" name="btn1" value="val"> отправить</button>
    </form>
</body>
</html>