<?php
namespace App\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * get model
     * 
     * @return string
     */
    abstract public function model();

    /**
     * Set model
     */
    public function makeModel()
    {
        $this->model = app()->make(
            $this->model()
        );
    }

    
}
