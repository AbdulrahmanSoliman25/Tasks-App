<?php

namespace App\Observers;

use App\Jobs\UpdateStatistics;
use App\Models\Task;

class TaskObserver
{
    /**
     * Handle the Task "created" event.
     *
     * @param  \App\Models\Task  $task
     * @return void
     */
    public function created(Task $task)
    {
        dispatch(new UpdateStatistics($task['user_id']));
    }
}
