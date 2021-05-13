
<div class="stconteiner">
<?= $this->render("_side");?>
<div class="stcontent">
<table class="table table-dark table-striped">
<tr>
<td>Id</td>
<td> Имя </td>
<td> Фамилия </td>
<td> Группа </td>
</tr>
<?php if (!empty($student)): ?>
    <?php foreach($student as $items): ?>
<tr>
<td><?=$items["id"]?></td>
<td><?=$items["fname"]?></td>
<td><?=$items["lname"]?></td>
<td><?=$items["group"]?></td>
</tr>
        <?php endforeach; ?>
<?php endif; ?>
</table>
</div>
</div>