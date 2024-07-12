<?php

namespace App\UseCases\Common;

interface CrudServiceInterface
{
    public function create(array $data);
    public function read($id);
    public function update($id, array $data);
    public function delete($id);
}
