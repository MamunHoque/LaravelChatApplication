<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class UserRepository implements RepositoryInterface
{
    /**
     * Model instance
     * @var \App\Models\User
     */
    private $user = null;

    public function __construct(?User $user = null)
    {
        if (empty($user)) {
            $user = new User();
        }

        $this->setContext($user);
    }

    /**
     * GetAll Information
     * @param array $select
     */
    public function getAll($select = ['*'])
    {
        return $this->user->get($select);
    }

    /**
     * Get Information
     * @param int $id
     * @param array $select
     * @return \App\Models\User|null
     */
    public function get($id, $select = ['*'])
    {
        return $this->user->select($select)->find($id);
    }


    /**
     * @param $user
     * @return void
     */
    public function store($user)
    {
        $user = $this->user->create($user);
        return $user;
    }

    /**
     * Update Information
     */
    public function update($data)
    {

    }

    /**
     * Delete Information
     */
    public function delete()
    {
        $this->user->delete();
    }

    public function attachUsers($data)
    {
    }

    /**
     * Set model instance
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return \App\Models\User
     */
    public function setContext(Model $model)
    {
        $this->user = $model;

        return $this;
    }
}
