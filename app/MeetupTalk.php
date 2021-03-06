<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class MeetupTalk extends Model
{
    public $timestamps = false;

    public $hidden = ['id'];

    public function save(array $options = [])
    {
        // check if this has a uuid, assign it one if it doesn't
        if ($this->uuid == '') {
            $this->uuid = Uuid::uuid4();
        }

        return parent::save($options); // TODO: Change the autogenerated stub
    }
}
