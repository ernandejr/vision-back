<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = [
        'name',
        'value'
    ];
    protected $casts = [
        'date' => 'Timestamp'
    ];
    protected $hidden = [
        'id',
        'person_id'
    ];
    public $timestamps = false;
}