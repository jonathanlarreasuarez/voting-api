<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\Candidate;
use Illuminate\Http\Request;

interface ICandidateController
{

    public function index(Request $request);

    public function store(Candidate $request);

    public function show($id);

    public function update(Request $request, Candidate $candidate);

    public function destroy(Candidate $candidate);
}
