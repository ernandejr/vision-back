<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Experiencec extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'name',
        'date_start',
        'date_end',
        'description',
    ];
    protected $casts = [
        'date' => 'Timestamp'
    ];
    public $timestamps = false;
}