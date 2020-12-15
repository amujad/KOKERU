<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;   
    
    protected $table = 'ruangan';
    protected $primaryKey = 'idruangan';
    protected $fillable = ['nama','cs_id', 'status'];


    // public function user()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    // public function user()
    // {
    //     return $this->hasMany(User::class, 'cs_id', 'id');
    // }

    // eloquent orm --- 
    
    // SELECT Username
    // FROM users
    // INNER JOIN ruangan
    // ON users.id=ruangan.cs_id;
}

