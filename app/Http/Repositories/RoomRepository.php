<?php

namespace App\Http\Repositories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;


class RoomRepository implements RepositoryInterface
{
    /**
     * Model instance
     * @var \App\Models\Room
     */
    private $room = null;

    public function __construct(?Room $room = null)
    {
        if (empty($room)) {
            $room = new Room();
        }

        $this->setContext($room);
    }

    /**
     * GetAll Information
     * @param array $select
     */
    public function getAll($select = ['*'])
    {
        return $this->room->get($select);
    }

    /**
     * GetAll Information
     * @param array $select
     */
    public function getAllWithUsers($select = ['*'])
    {
        return $this->room->with('users')->get($select);
    }

    /**
     * Get Information
     * @param int $id
     * @param array $select
     * @return \App\Models\Room|null
     */
    public function get($id, $select = ['*'])
    {
        return $this->room->select($select)->find($id);
    }


    /**
     * @param $room
     * @return void
     */
    public function store($data)
    {
        $room = $this->room->create($data);
        $room->users()->attach($data['selected_users']);
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
        $this->room->delete();
    }

    /**
     * Set model instance
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return \App\Models\Room
     */
    public function setContext(Model $model)
    {
        $this->room = $model;

        return $this;
    }
}
