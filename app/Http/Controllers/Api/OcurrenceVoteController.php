<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IOcurrenceVoteController;
use App\Http\Controllers\Controller;
use App\Models\OcurrenceVote;
use Illuminate\Http\Request;

class OcurrenceVoteController extends Controller implements  IOcurrenceVoteController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(OcurrenceVote $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, OcurrenceVote $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(OcurrenceVote $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
