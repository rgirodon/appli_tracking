<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riddle extends Model
{
    /*
     * Available fields:
     * integer id
     * string name
     * string url
     * string code
     * boolean disabled
     */

    public $timestamps = false;

    protected $casts = [
        'disabled' => 'boolean'
    ];

    public function teams()
    {
        return $this->belongsToMany('App\Team', 'riddles_teams');
    }
}
