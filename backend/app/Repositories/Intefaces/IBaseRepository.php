<?php


namespace App\Repositories\Intefaces;


use Illuminate\Database\Eloquent\Model;

interface IBaseRepository
{
    /**
     * @return Model
     */
    public function makeModel();

    function model();

    public function names();
}
