<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\IBaseRepository;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository implements IBaseRepository
{

    protected $model;

    protected $relations = [];


    /**
     * __construct
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * get all information
     *
     * @param $request
     * @return Collection
     */
    public function all($request): Collection
    {
        $query = $this->model;

        if (!empty($this->relations)) {
            $query = $query->with($this->relations);
        }

        return $query->get();
    }


    /**
     * find information by conditionals
     *
     * @param $id
     * @return model
     */
    public function find($id): Model
    {
        $query = $this->model;

        if (!empty($this->relations)) {
            $query = $query->with($this->relations);
        }

        return $query->findOrFail($id);
    }

    /**
     * find the specified resource.
     *
     * @param array $conditionals
     * @return model
     *
     */
    public function findByConditionals($conditionals) : Model
    {
        $query = $this->model;

        if (!empty($this->relations)) {
            $query = $query->with($this->relations);
        }

        return $query->where($conditionals)->firstOrFail();
    }


    /**
     * get specified resources.
     *
     * @param array $conditionals
     * @return Collection
     */
    public function getByConditionals(array $conditionals): Collection
    {
        $query = $this->model;

        if (!empty($this->relations)) {
            $query = $query->with($this->relations);
        }

        return $query->where($conditionals)->get();
    }


    /**
     * add/set register
     *
     * @param mixed $model
     * @return model
     *
     */
    public function save(Model $model): Model
    {
        $model->save();
        return $model;
    }

    /**
     * delete a information
     *
     * @param Model $model
     * @return model
     */
    public function destroy(Model $model): Model
    {
        $model->delete();
        return $model;
    }
}
