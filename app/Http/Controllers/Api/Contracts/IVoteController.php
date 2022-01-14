<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\Vote;
use Illuminate\Http\Request;

interface IVoteController
{

    public function index(Request $request);

    public function store(Vote $request);

    public function show($id);

    public function update(Request $request, Vote $candidate);

    public function destroy(Vote $candidate);
}
