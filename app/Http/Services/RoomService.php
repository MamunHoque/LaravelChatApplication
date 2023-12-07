<?php

namespace App\Http\Services;

use App\Exceptions\ErrorMessageException;
use App\Http\Repositories\RoomRepository;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomService
{
    private $room;

    public function __construct(?RoomRepository $repo = null)
    {
        $this->room = $repo ?: new RoomRepository();
    }

    public function store(Request $request)
    {
        $roomData = $request->only('name', 'description', 'is_public', 'selected_users');
        $roomData['user_id'] = auth()->user()->id;
        $roomData['selected_users'][] = auth()->user()->id;

        DB::beginTransaction();

        try {
            $this->room->store($roomData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw new ErrorMessageException('Rooms create Error: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Room $room)
    {

        $roomData = $request->only('name', 'description', 'is_public', 'status');

        try {
            $this->room->setContext($room)->update(array_filter($roomData));
        } catch (\Exception $e) {
            throw new ErrorMessageException('Room Create Error: ' . $e->getMessage());
        }
    }

    public function delete(Room $rooms)
    {
        $this->room->setContext($rooms)->delete();
    }
}
