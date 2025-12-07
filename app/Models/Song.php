<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'singer_id'];

    public function singer()
    {

        return $this->belongsTo(Singer::class);
    }

    public function quote()
    {

        return $this->hasMany(Quote::class);
    }
}
