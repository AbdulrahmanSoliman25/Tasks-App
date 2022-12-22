<?php


namespace App\Repositories\Eloquent;

use App\Helpers\Constants;
use App\Repositories\Intefaces\IBaseRepository;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements IBaseRepository
{

    /**
     * @var App
     */
    private $app;

    /**
     * @var
     */
    protected $model;

    /**
     * BaseRepository constructor.
     * @param App $app
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract function model();

    /**
     * @return Model
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function makeModel(): Model
    {
        $model = $this->app->make($this->model());
        return $this->model = $model;
    }

    public function names()
    {
        return $this->model->select(['id', 'name'])->get();
    }

    // & any other shared functions among the entities , typically CRUD operations

}
