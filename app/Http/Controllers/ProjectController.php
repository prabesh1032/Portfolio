<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|string', // Validate icon as string
        ]);

        $data = $request->only(['name', 'description', 'github_link', 'live_link', 'icon']);

        // Handle first image
        if ($request->hasFile('image1')) {
            $path = $request->file('image1')->storeAs('images', $request->file('image1')->getClientOriginalName(), 'public');
            $data['image1'] = $path;
        }
        if ($request->hasFile('image2')) {
            $path = $request->file('image2')->storeAs('images', $request->file('image2')->getClientOriginalName(), 'public');
            $data['image2'] = $path;
        }

        // Create the project with the provided data
        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|string', // Validate icon as string
        ]);

        $project = Project::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->github_link = $request->github_link;
        $project->live_link = $request->live_link;
        $project->icon = $request->icon; // Update icon field

        // Update image1 if a new image is uploaded
        if ($request->hasFile('image1')) {
            $image1Name = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('images'), $image1Name);

            // Delete the old image if it exists
            if ($project->image1) {
                $oldImage1 = public_path('images') . '/' . $project->image1;
                if (file_exists($oldImage1)) {
                    unlink($oldImage1);
                }
            }

            $project->image1 = $image1Name;
        }

        // Update image2 if a new image is uploaded
        if ($request->hasFile('image2')) {
            $image2Name = time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $image2Name);

            // Delete the old image if it exists
            if ($project->image2) {
                $oldImage2 = public_path('images') . '/' . $project->image2;
                if (file_exists($oldImage2)) {
                    unlink($oldImage2);
                }
            }

            $project->image2 = $image2Name;
        }

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }
    public function destroy($id)
    {
        $project = Project::find($id);

        // Delete the first image if it exists
        if ($project->image1) {
            $image1Path = public_path('images') . '/' . $project->image1;
            if (is_file($image1Path)) {
                unlink($image1Path);  // Delete the image file
            }
        }

        // Delete the second image if it exists
        if ($project->image2) {
            $image2Path = public_path('images') . '/' . $project->image2;
            if (is_file($image2Path)) {
                unlink($image2Path);  // Delete the image file
            }
        }

        // Delete the project record
        $project->delete();

        // Redirect to the project index page with a success message
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
