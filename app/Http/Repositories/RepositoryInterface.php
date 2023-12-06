<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    /**
     * GetAll Information
     *
     * @param array $select
     */
    public function getAll($select = ['*']);

    /**
     * Get Information
     * @param int $id
     * @param array $select
     */
    public function get($id, $select = ['*']);

    /**
     * Store Information
     */
    public function store($data);

    /**
     * Update Information
     */
    public function update($data);

    /**
     * Delete Information
     */
    public function delete();

    /**
     * Set model instance
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     */
    public function setContext(Model $model);
}
