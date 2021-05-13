<div class="side">
<table class="table table-success table-striped">
<tr>
<td>Id</td>
<td> Группа </td>
</tr>
<?php if (!empty($side)): ?>
    <?php foreach($side as $items): ?>
<tr>
<td><?=$items["id"]?></td>
<td><a href="<?=  yii\helpers\Url::to(['studentone/studentone', 'group' => $items["group"]])?>"><?=$items["group"]?></a></td>
</tr>
        <?php endforeach; ?>
<?php endif; ?>
</table>
</div>