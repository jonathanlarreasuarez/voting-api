<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\Voter;
use Illuminate\Http\Request;

interface IVoterController
{

    public function index(Request $request);

    public function store(Voter $request);

    public function show($id);

    public function update(Request $request, Voter $candidate);

    public function destroy(Voter $candidate);
}
