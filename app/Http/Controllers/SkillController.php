<?php

namespace App\Http\Controllers;

use App\Skill;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;

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

    /**
     *
     */
    public function store(SkillRequest $request, Skill $skill)
    {
        $skill->name = $request->input('name');
        $skill->save();

        return response($skill->toArray(), 201);
    }
}
