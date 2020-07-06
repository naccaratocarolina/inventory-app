<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\softDeletes;

use \App\User;

class Inventory extends Model {
    //use softDeletes;

    protected $guarded = ['id'];

    public function ownedBy() {
      return $this->belongsTo(User::class);
    }
}
