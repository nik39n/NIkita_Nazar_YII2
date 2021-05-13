<?
if(file_exists('text.txt')){
    $text = file_get_contents('text.txt');
    //echo $text;
    $arr = explode("\n",$text);
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
    </style>
</head>
<body>
<table>
<tr>
<td>Name</td>
<td>Lname</td>
<td>Phone</td>
</tr>
<?foreach($arr as $v):?>
<tr>
<?$arr1 = explode("#",$v);?>
<?foreach($arr1 as $v):?>

<td><?=$v?></td>
<?endforeach;?>
</tr>
<?endforeach;?>
</table>
</body>
</html>