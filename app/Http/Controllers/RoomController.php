<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Http\Services\RoomService;
use App\Models\Room;

class RoomController extends Controller
{
    private $room;

    public function __construct(RoomService $room)
    {
        $this->room = $room;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $this->room->store($request);

        return response([
            'success' => true,
            'message' => "Room has been created successfully."
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $this->room->update($request, $room);

        return response([
            'success' => true,
            'message' => "Room has been update successfully."
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $this->room->delete($room);

        return response([
            'success' => true,
            'message' => "Room has been deleted."
        ]);
    }
}
