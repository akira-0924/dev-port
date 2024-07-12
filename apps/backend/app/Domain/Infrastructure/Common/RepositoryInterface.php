<?php

namespace App\Domain\Infrastructure\Common;

interface RepositoryInterface
{
    public function createEntity(array $data);
    public function findById($id);
    public function save($entity);
    public function updateEntity($entity, array $data);
    public function delete($entity);
}
