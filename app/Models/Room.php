<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //

    public function Pictures() {
        return $this->hasMany(RoomPicture::class, 'id_room');
    }

    public function Rents() {
        return $this->hasMany(RoomRent::class, 'id_room');
    }
}
