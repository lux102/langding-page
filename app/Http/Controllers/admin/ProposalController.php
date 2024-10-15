<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $proposals = Proposal::get();

        return view('/admin/proposals')->with([
            'proposals' => $proposals,
        ]);
    }

    public function destroy(Request $request, String $id)
    {
        Proposal::destroy($id);

        return redirect('/admin/proposals');
    }
}
