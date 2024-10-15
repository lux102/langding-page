<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateProjectRequest;
use App\Models\Media;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    private $categories = [];

    public function __construct()
    {
        $this->categories = ProjectCategory::withCount('projects')->get();
    }

    public function index()
    {
        $projects = Project::with(['category', 'media'])->get();

        return view('/admin/projects')->with([
            'projects' => $projects,
            'categories' => $this->categories,
        ]);
    }

    public function showCreateForm()
    {
        return view('/admin/create-project')->with([
            'categories' => $this->categories,
        ]);
    }

    public function create(CreateProjectRequest $request)
    {
        $validatedData = $request->validated();
        $media = [];

        foreach ($request->file('files') as $key => $file) {
            $extension = $file->extension();
            $mime = $file->getClientMimeType();
            $fileName = $key . time() . '.' . $extension;
            $file->move(public_path('uploads'), $fileName);

            array_push($media, new Media([
                "name" => $fileName,
                "extension" => $extension,
                "mime" => $mime,
                "path" => "/uploads/$fileName",
            ]));
        }

        $newProject = Project::create($validatedData);
        $newProject->media()->saveMany($media);

        return redirect('/admin/projects');
    }

    public function destroy(Request $request, String $id)
    {
        Project::destroy($id);

        return redirect('/admin/projects');
    }
}
