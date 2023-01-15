<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $fillable = ['data'];

    public function insertProvince(array $data)
    {
        return $this->create($data);
    }
}
