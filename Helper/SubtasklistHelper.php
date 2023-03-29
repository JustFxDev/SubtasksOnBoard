<?php

namespace Kanboard\Plugin\SubtasksOnBoard\Helper;

use Kanboard\Core\Base;
use Kanboard\Model\SubtaskModel;

class SubtasklistHelper extends Base
{
    public function subtasks($task_id)
    {
        return $this->subtaskModel->getAll($task_id);
    }
}

