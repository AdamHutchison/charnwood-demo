<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     *
     */
    public function skill()
    {
        return $this->belongTo(Skill::class);
    }

    /**
     *
     */
    public function employer()
    {
        return $this->belongTo(Employer::class);
    }
}
