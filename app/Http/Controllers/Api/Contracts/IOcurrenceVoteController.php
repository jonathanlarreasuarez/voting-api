<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\OcurrenceVote;
use Illuminate\Http\Request;

interface IOcurrenceVoteController
{

    public function index(Request $request);

    public function store(OcurrenceVote $request);

    public function show($id);

    public function update(Request $request, OcurrenceVote $candidate);

    public function destroy(OcurrenceVote $candidate);
}
