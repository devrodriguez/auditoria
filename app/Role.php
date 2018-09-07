<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function auditors() {
        return $this->hasMany(Auditor::class);
    }
}
