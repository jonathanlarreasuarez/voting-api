<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

interface ICandidateController
{

    public function index(Request $request);

    public function store(CandidateRequest $request);

    public function show($id);

    public function update(CandidateRequest $request, Candidate $candidate);

    public function destroy(Candidate $candidate);
}
