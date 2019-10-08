<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = [
        'name',
        'date_start',
        'date_end',
        'description',
    ];
    protected $casts = [
        'date' => 'string'
    ];
    protected $hidden = [
        'id',
        'person_id'
    ];
    public $timestamps = false;
}