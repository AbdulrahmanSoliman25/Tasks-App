<?php

namespace App\Repositories\Eloquent;

use App\Models\Statistic;
use App\Repositories\Intefaces\IStatisticRepository;

class StatisticRepository extends BaseRepository implements IStatisticRepository
{
    public function model()
    {
        return Statistic::class;
    }

    /**
     * @return collection
     */
    public function topTen()
    {
        return $this->model->orderBy('count', 'desc')->take(10)->with('user')->get();
    }
}
