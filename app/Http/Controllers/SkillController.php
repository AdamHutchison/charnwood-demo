<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     *
     */
    public function index(Request $request)
    {
        $skills = Skill::get();

        return $skills;
    }

    /**
     * @return
     */
    public function show(Request $request, Skill $skill)
    {
        return $skill;
    }
}
