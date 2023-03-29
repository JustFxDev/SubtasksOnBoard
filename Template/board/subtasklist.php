<?php
    $subtasks = $this->helper->subtasklistHelper->subtasks($task['id']);
    if (sizeof($subtasks) > 0):
?>
    <table class="table-suboncard">
    <?php foreach ($subtasks as $subtask): ?>
        <tr>
            <td>
                <?= $this->subtask->renderToggleStatus($task, $subtask) ?>
            </td>
            <?= $this->hook->render('template:board:tooltip:subtasks:rows', array('subtask' => $subtask)) ?>
        </tr>
        <?php endforeach ?>
    </table>
<?php endif ?>