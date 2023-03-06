<?php

namespace App\Repository;

interface BaseRepositoryInterface
{
    public function getAll($column = array('*'));
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function find($id, $column = array('*'));
    public function paginate($perPage = 15, $columns = array('*'));
}
