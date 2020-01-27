<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert extends Model
{
    protected $fillable =['username','email','password','mobile','games','intrest','gender','date','range','textarea','latitude','longitude','scaned','videodata','fingerprint'];
    public $timestamps = true;
    protected $table = 'inserts';
    protected $primaryKey = 'id';
}
