<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Inventory extends Model {
    use softDeletes;

    protected $guarded = ['id'];
    
    public function ownedBy() {
      return $this->belongsTo(User::class);
    }
}
