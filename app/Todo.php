<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Step;

class Todo extends Model
{
    protected $fillable = ['title', 'user_id', 'completed', 'description'];
    
    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }
}
