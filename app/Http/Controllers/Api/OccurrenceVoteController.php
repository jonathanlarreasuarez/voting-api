<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IOccurrenceVoteController;
use App\Http\Controllers\Controller;
use App\Models\OccurrenceVote;
use Illuminate\Http\Request;

class OccurrenceVoteController extends Controller implements  IOccurrenceVoteController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(OccurrenceVote $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, OccurrenceVote $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(OccurrenceVote $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
