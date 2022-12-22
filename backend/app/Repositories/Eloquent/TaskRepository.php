<?php

namespace App\Repositories\Eloquent;

use App\Models\Task;
use App\Repositories\Intefaces\ITaskRepository;

class TaskRepository extends BaseRepository implements ITaskRepository
{
    public function model()
    {
        return Task::class;
    }

    /**
     * @return collection
     */
    public function listPaginatedTasks()
    {
        return $this->model->with([
            'user' => fn ($query) => $query->select('id', 'name'),
            'admin' => fn ($query) => $query->select('id', 'name')
        ])->paginate(10);
    }


    /**
     * @param array $data
     * @return mixed
     */
    public function create($data)
    {
        return  $this->model->create($data);
    }
}
