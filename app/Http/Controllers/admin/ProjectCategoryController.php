<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateProjectCategoryRequest;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $categories = ProjectCategory::get();

        return view('/admin/project-categories')->with([
            'categories' => $categories,
        ]);
    }

    public function create(CreateProjectCategoryRequest $request)
    {
        $validatedData = $request->validated();

        ProjectCategory::create($validatedData);


        return redirect('/admin/project-categories');
    }

    public function destroy(Request $request, String $id)
    {
        ProjectCategory::destroy($id);

        return redirect('/admin/project-categories');
    }
}
