<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    public $timestamps = true;

    public function getClass() : HasOne {
        return $this->hasOne(Kelas::class, 'id', 'class_id');
    }
}
