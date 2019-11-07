<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }
    public function findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }
    public function create($obj)
    {
        $obj->save();
    }
    public function edit($obj)
    {
        $obj->save();
    }
    public function destroy($obj)
    {
        $obj->delete();
    }
}
