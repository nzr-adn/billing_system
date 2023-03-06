<?php

namespace App\Repository;

use App\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    /**
     * @throws RepositoryException
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll($column = array('*'))
    {
        return $this->model->get($column);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->model->where("id", '=', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id, $column = array('*'))
    {
        return $this->model->find($id, $column);
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }
}
