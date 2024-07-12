<?php

namespace App\UseCases\Common;

use App\Domain\Infrastructure\Common\RepositoryInterface;

class CrudService implements CrudServiceInterface
{
    protected RepositoryInterface $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        $entity = $this->repository->createEntity($data);
        $this->repository->save($entity);
        return $entity;
    }

    public function read($id)
    {
        return $this->repository->findById($id);
    }

    public function update($id, array $data)
    {
        $entity = $this->repository->findById($id);
        if ($entity) {
            $this->repository->updateEntity($entity, $data);
            $this->repository->save($entity);
        }
        return $entity;
    }

    public function delete($id)
    {
        $entity = $this->repository->findById($id);
        if ($entity) {
            $this->repository->delete($entity);
        }
        return $entity;
    }
}
