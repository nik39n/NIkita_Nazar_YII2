<?
if(file_exists('notepad.txt')){
    $text = file_get_contents('notepad.txt');
    //echo $text;
    $arr = explode("#",$text);
/*     print_r($arr);
    echo "<br>";
    foreach($arr as $v){
        $arr1 = explode("#",$v);
        print_r($arr1);
    } */
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td,tr{
        border: 1px solid black;
    }
    img{
        height: 100px;
        width: auto;
    }
    </style>
</head>
<body>
<table>
<tr>
<td>Nr</td>
<td>Название</td>
<td>Автор</td>
<td>Обложка</td>
</tr>
<?foreach($arr as $v):?>
<tr>
<?$arr1 = explode("<>",$v);?>
<?foreach($arr1 as $v):?>

<td><?=$v?></td>
<?endforeach;?>
<td><img src="img/<?=$arr1[0]?>.jpg" alt=""></td>
</tr>
<?endforeach;?>
</table>
</body>
</html>