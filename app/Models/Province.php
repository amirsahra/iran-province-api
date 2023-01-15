<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $fillable = ['data'];


    public function insertProvince($data)
    {
        return $this->create([
            'data'=> $data
        ]);
    }
}
