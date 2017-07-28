<?php

namespace App\Repositories;

use App\Repositories\Criteria\CriteriaInterface;
use App\Repositories\Exceptions\NoEntityDefined;
use App\Repositories\Contracts\RepositoryInterface;

abstract class RepositoryAbstract implements RepositoryInterface, CriteriaInterface
{
    /**
     * @var mixed
     */
    protected $entity;

    /**
     * RepositoryAbstract constructor.
     */
    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->entity->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->entity->find($id);
    }

    /**
     * @param $column
     * @param $id
     * @return mixed
     */
    public function findWhere($column, $id)
    {
        return $this->entity->where($column, $id)->get();
    }

    /**
     * @param $column
     * @param $id
     * @return mixed
     */
    public function findWhereFirst($column, $id)
    {
        return $this->entity->where($column, $id)->first();
    }

    /**
     * @param int $perPage
     * @return mixed
     */
    public function paginate($perPage = 10)
    {
        return $this->entity->paginate($perPage);
    }

    /**
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties)
    {
        return $this->entity->create($properties);
    }

    /**
     * @param $id
     * @param array $properties
     * @return mixed
     */
    public function update($id, array $properties)
    {
        return $this->entity->find($id)->update($properties);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->entity->find($id)->delete();
    }

    /**
     * @param array ...$criteria
     * @return $this
     */
    public function withCriteria(...$criteria)
    {
        $criteria = array_flatten($criteria);

        foreach ($criteria as $criterion)
        {
            $this->entity = $criterion->apply($this->entity);
        }

        return $this;
    }

    /**
     * @return mixed
     * @throws NoEntityDefined
     */
    protected function resolveEntity()
    {
        if(!method_exists($this, 'entity')) {
            throw new NoEntityDefined('No entity defined');
        }

        return app()->make($this->entity());
    }
}