<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $fillable = ['cities','province'];

    public function insertProvince($data)
    {
        return $this->create([
            'province' => $data['province'],
            'cities'=> $data['cities']
        ]);
    }
}
