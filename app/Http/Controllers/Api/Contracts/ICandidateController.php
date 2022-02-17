<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

interface ICandidateController
{
    /**
     * @OA\Get(
     *     path="/api/candidates",
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */
    public function index(Request $request);

    public function store(CandidateRequest $request);

    public function show($id);

    public function update(CandidateRequest $request, Candidate $candidate);

    public function destroy(Candidate $candidate);
}
