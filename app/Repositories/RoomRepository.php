<?php

namespace App\Repositories;

use App\Models\Room;
use App\Repositories\Interface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{
    protected function getModelClass() {
        return Room::class;
    }

    public function all(): Collection {
        return $this->model::all();
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
    
    public function update($id, array $data): Model {
        return $this->transaction(function() use ($data, $id): Model {
            $model = $this->model::find($id);
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
}