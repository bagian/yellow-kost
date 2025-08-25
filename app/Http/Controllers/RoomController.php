<?php

namespace App\Http\Controllers;

use App\Repositories\RoomRepositoryInterface;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    protected $roomRepository;

    public function __construct(RoomRepositoryInterface $roomRepository) {
        $this->roomRepository = $roomRepository;
    }

    public function index() {
        $room = $this->roomRepository->all();

        return $room;
    }

    public function store(Request $request) {
        $room = $this->roomRepository->create($request);
    }
    
    public function update(Request $request, $id) {
        $room = $this->roomRepository->update($id, $request);
    }

    public function destroy($id) {
        $room = $this->roomRepository->delete($id);
    }
}
