<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['description'];

    public function auditors() {
        return $this->hasMany(Auditor::class);
    }
}
