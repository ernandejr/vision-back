<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Person extends Model
{
    protected $table = 'people';
    protected $fillable = [
        'name',
        'image',
        'profession',
        'description'
    ];
    protected $casts = [
        'date' => 'Timestamp'
    ];
    public $timestamps = false;
}