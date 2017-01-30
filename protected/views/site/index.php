<?php use yii\helpers\Html; ?>

<?php echo Html::a('Create New Task', array('site/create'), array('class' => 'btn btn-primary pull-right')); ?>
<div class="clearfix"></div>
<hr />
<table class="table table-striped table-hover">
    <tr>
        <td>#</td>
        <td>Title</td>
        <td>Created</td>
        <td>Updated</td>
        <td>Options</td>
    </tr>
    <?php foreach ($data as $task): ?>
        <tr>
            <td>
                <?php echo Html::a($task->id, array('site/read', 'id'=>$task->id)); ?>
            </td>
            <td><?php echo Html::a($task->title, array('site/read', 'id'=>$task->id)); ?></td>
            <td><?php echo $task->for_who_title; ?></td>
            <td><?php echo $task->author_title; ?></td>
            <td>
                <?php echo Html::a(NULL, array('site/update', 'id'=>$task->id), array('class'=>'icon icon-edit')); ?>
                <?php echo Html::a(NULL, array('site/delete', 'id'=>$task->id), array('class'=>'icon icon-trash')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>