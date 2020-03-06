<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'description',
        'salary',
        'skill_id',
        'title',
        'contract_type',
        'employer_id',
    ];

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
