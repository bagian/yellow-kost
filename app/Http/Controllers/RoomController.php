<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Http\Resources\RoomResource;
use App\Repositories\Interface\RoomRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    //
    protected $roomRepository;

    public function __construct(RoomRepositoryInterface $roomRepository) {
        $this->roomRepository = $roomRepository;
    }

    public function index() {
        $room = $this->roomRepository->allWithPictures();

        return RoomResource::collection($room);
    }

    public function create() {
        return view('backend.room.create');
    }

    public function store(RoomRequest $request) {
        $data = $request->safe()->except('pictures');

        $pictures = $request->file('pictures', []);

        $room = $this->roomRepository->createWithPictures($data, $pictures);

        return new RoomResource($room->load('pictures'));
    }
    
    public function update(RoomRequest $request, $id) {
        $room = $this->roomRepository->update($id, $request);
    }

    public function destroy($id) {
        $room = $this->roomRepository->delete($id);
    }
}
