<?php

namespace App\Http\Controllers;

use App\Job;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;

class JobController extends Controller
{
    /**
     *
     */
    public function index(Request $request)
    {
        $jobs = Job::paginate(8);

        return view('welcome')->with([
            'jobs' => $jobs,
        ]);
    }

    /**
     *
     */
    public function create(Request $request)
    {
        return view('form')->with([
            'skills' => Skill::limit(6)->get(),
        ]);
    }

    /**
     *
     */
    public function store(Request $request)
    {
        $job = Job::create($request->except(['_token']));

        return $job;
    }
}
