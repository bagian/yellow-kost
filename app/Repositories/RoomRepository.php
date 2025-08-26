<?php

namespace App\Repositories;

use App\Http\Resources\RoomResource;
use App\Models\Room;
use App\Models\RoomPicture;
use App\Repositories\Interface\RoomRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Support\Str;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{
    protected function getModelClass() {
        return Room::class;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function allWithPictures(): Collection {
        return $this->model::with('pictures')->all();
    }

    public function find($id): Model {
        return $this->model::find($id);
    }

    public function create(array $data): Model {
        return $this->transaction(function() use ($data): Model {
            $model = new $this->model;
            $model = $this->fillModel($model, $data);
            $model->save();

            return $model;
        });
    }

    public function createPicture($id, array $data): Model {
        return $this->transaction(function() use ($id, $data) {
            $model = new RoomPicture();
            $model->id_room = $id;
            $this->fillModel($model, $data);
            $model->save();
            
            return $model;
        });
    }

    public function createWithPictures(array $data, array $pictures = []): Model {
        return $this->transaction(callback: function () use ($data, $pictures) {
            $room = $this->create($data);
    
            if (!empty($pictures)) {
                $folder = Str::slug($room->room_name, '_');
    
                foreach ($pictures as $file) {
                    $filename = $file->getClientOriginalName();
                    $path = $file->storeAs("rooms/{$folder}", $filename, 'public');
    
                    $this->createPicture($room->id, [
                        'name' => $filename,
                        'url' => $path,
                    ]);
                }
    
                $room->load('pictures');
            }
    
            return $room;
        });
    }    

    public function update($id, array $data): Model {
        return $this->transaction(function() use ($data, $id): Model {
            $model = $this->model::find($id);

            if (!$model) {
                throw new Exception("Model not found");
            }
    
            $model = $this->fillModel($model, $data);
            $model->save();

            return $model;
        });
    }

    public function delete($id): Model {
        $model = $this->model::find($id);

        if (!$model) {
            throw new Exception("Model not found");
        }

        $model->delete();

        return $model;
    }

    public function deletePicture($id): Model {
        $model = RoomPicture::find($id);

        if (!$model) {
            throw new Exception("Model not found");
        }

        $model->delete();

        return $model;
    }
}