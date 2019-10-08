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
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}