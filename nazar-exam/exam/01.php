<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    td,tr{
        border: 1px solid black;
    }
    </style>
    <title>Document</title>
</head>
<body>
<table>
<?for($i=1;$i<=10;$i++):?>
    <tr>
        <?for($j=1;$j<=10;$j++):?>
            <td><?=$i*$j?></td>
        <?endfor;?>
        </tr>
<?endfor;?>
</table>
</body>
</html>