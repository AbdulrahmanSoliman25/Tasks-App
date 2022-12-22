<?php


namespace App\Repositories\Intefaces;


interface ITaskRepository extends IBaseRepository
{
    public function listPaginatedTasks();

    public function create($data);
}
