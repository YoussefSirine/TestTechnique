<?php

namespace App;
use App\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = ['nomaffichage' , 'addressemail'];

    public function groups()
    {
        return $this->belongsToMany(Group::class);

    }
}
