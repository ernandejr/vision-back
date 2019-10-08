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

    protected $hidden = [
        'id'
    ];
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function experience()
    {
        return $this->hasMany(Experience::class);
    }
}