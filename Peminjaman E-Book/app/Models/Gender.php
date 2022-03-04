<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'gender';
    protected $primaryKey = 'gender_id';

    protected $fillable = [
        'gender_id',
        'gender_desc',
    ];

    public function Users()
    {
        $this->hasOne('App\Models\Users', 'gender_id');
    }
}
