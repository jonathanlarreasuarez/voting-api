<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IVoteController;
use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller implements IVoteController
{

    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(Vote $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, Vote $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Vote $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
