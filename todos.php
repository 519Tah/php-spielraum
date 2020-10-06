<?php include ('header.php');?>

<h3>TODO list:</h3>

<ul>
    <?php foreach ($tasks as $task):?>
        <li>
            <?php if($task->completed) :?>
                <p style="text-decoration: line-through;"> <?= $task->description?></p>
            <?php else: ?>
                <?= $task->description?>
            <?php endif;?>
        </li>
    <?php endforeach;?>
</ul>

<pre>
<?php var_dump($tasks); ?>
</pre>

<?php include ('footer.php')?>