<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateRecruitmentRequest;
use App\Models\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index()
    {
        $recruitments = Recruitment::get();

        return view('/admin/recruitments')->with([
            'recruitments' => $recruitments,
        ]);
    }

    public function showCreateForm()
    {
        return view('/admin/create-recruitment');
    }

    public function create(CreateRecruitmentRequest $request)
    {
        $validatedData = $request->validated();

        Recruitment::create($validatedData);


        return redirect('/admin/recruitments');
    }

    public function destroy(Request $request, String $id)
    {
        Recruitment::destroy($id);

        return redirect('/admin/recruitments');
    }
}
