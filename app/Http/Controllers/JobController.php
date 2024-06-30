<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the Jobs.
     */
    public function index() {
        $jobs = Job::with('employer')->latest()->paginate(5);
        return view('careers.index', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request -> validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 16
        ]);
        return redirect('/careers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job) {
        return view('careers.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job) {
//        Gate::authorize('edit-job', $job);
        return view('careers.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job) {
        $job->update($request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]));
        return redirect('/careers/' . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job) {
        $job->delete();
        return redirect('/careers');
    }

}
