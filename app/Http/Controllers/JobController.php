<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(): View
    {
        $title = 'Available Jobs';
        $jobs = [
            'Software Engineer',
            'Web Developer',
            'Data Scientist',
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(Request $request): string
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }

    public function show(string $id): string
    {
        return "Showing job $id";
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
