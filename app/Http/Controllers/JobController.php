<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Job;

class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Job::all();
        return view('jobs/index')->with('jobs', $jobs);
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Job::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('jobs.index');
    }

    public function show(Job $job): View
    {
        return view('jobs.show', compact('job'));
    }

    public function edit(string $id): string
    {
        return "Edit job $id";
    }

    public function update(Request $request, string $id): string
    {
        return "Update job $id";
    }

    public function destroy(string $id): string
    {
        return "Delete job $id";
    }
}
