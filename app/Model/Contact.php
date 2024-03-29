<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'tel',
        'cel',
        'address',
        'website',
        'mail'
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