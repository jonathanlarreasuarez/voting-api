<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\OccurrenceVote;
use Illuminate\Http\Request;

interface IOccurrenceVoteController
{

    public function index(Request $request);

    public function store(OccurrenceVote $request);

    public function show($id);

    public function update(Request $request, OccurrenceVote $candidate);

    public function destroy(OccurrenceVote $candidate);
}
