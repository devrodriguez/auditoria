<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditor extends Model
{
    public function role() {
        return $this->belongsTo(Role::class);
    }
}
