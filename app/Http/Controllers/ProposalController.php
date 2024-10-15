<?php

namespace App\Http\Controllers;

use App\Http\Requests\Public\CreateProposalRequest;
use App\Models\Proposal;

class ProposalController extends Controller
{
    public function store(CreateProposalRequest $request) {
        Proposal::create($request->validated());

        return redirect()->back()->with([
            'message' => 'Gửi yêu cầu thành công. Vui lòng chờ phản hồi từ chúng tôi nhé.'
        ]);
    }
}
